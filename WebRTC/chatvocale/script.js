let localStream;
let remoteStream;
let localVideo = document.getElementById("localVideo");
let remoteVideo = document.getElementById("remoteVideo");
let startCallButton = document.getElementById("startCallButton");
let stopCallButton = document.getElementById("stopCallButton");
let shareScreenButton = document.getElementById("shareScreenButton");
let inviteButton = document.getElementById("inviteButton");
let messageContainer = document.getElementById("messageContainer");
let messageInput = document.getElementById("messageInput");
let sendMessageButton = document.getElementById("sendMessageButton");
let isScreenSharing = false;
let peerConnection;
let dataChannel;
let mediaRecorder;
let recordedChunks = [];

// Obtenir l'accès à la caméra et au micro
navigator.mediaDevices.getUserMedia({ video: true, audio: true })
  .then(function(stream) {
    localStream = stream;
    localVideo.srcObject = localStream;
  })
  .catch(function(error) {
    console.log("Erreur lors de l'obtention de l'accès à la caméra et au micro: ", error);
  });

// Démarrer l'appel
startCallButton.addEventListener("click", function() {
  startCallButton.disabled = true;
  stopCallButton.disabled = false;
  
  // Créer une connexion peer-to-peer
  peerConnection = new RTCPeerConnection();
  
  // Ajouter la piste du flux local à la connexion
  localStream.getTracks().forEach(function(track) {
    peerConnection.addTrack(track, localStream);
  });
  
  // Recevoir le flux distant et l'afficher dans la vidéo distante
  peerConnection.ontrack = function(event) {
    remoteStream = event.streams[0];
    remoteVideo.srcObject = remoteStream;
  };
  
  // Créer une offre SDP et l'échanger avec l'autre pair
  peerConnection.createOffer()
    .then(function(offer) {
      return peerConnection.setLocalDescription(offer);
    })
    .then(function() {
      // L'offre SDP est prête, l'envoyer à l'autre pair
      console.log("Offre SDP créée et prête à être envoyée : ", peerConnection.localDescription);
    })
    .catch(function(error) {
      console.log("Erreur lors de la création de l'offre SDP : ", error);
    });
});

// Arrêter l'appel
stopCallButton.addEventListener("click", function() {
  startCallButton.disabled = false;
  stopCallButton.disabled = true;
  
  // Arrêter les flux locaux et distants
  localStream.getTracks().forEach(function(track) {
    track.stop();
  });
  remoteStream.getTracks().forEach(function(track) {
    track.stop();
  });
  
  // Vider les vidéos
  localVideo.srcObject = null;
  remoteVideo.srcObject = null;
  
  // Fermer la connexion
  if (peerConnection) {
    peerConnection.close();
  }
});

// Partager l'écran
shareScreenButton.addEventListener("click", function() {
  if (!isScreenSharing) {
    navigator.mediaDevices.getDisplayMedia({ video: true })
      .then(function(stream) {
        let sender = peerConnection.getSenders().find(function(sender) {
          return sender.track.kind === "video";
        });
        
        sender.replaceTrack(stream.getTracks()[0])
          .then(function() {
            isScreenSharing = true;
            shareScreenButton.textContent = "Arrêter le partage d'écran";
            localVideo.srcObject = stream;
          })
          .catch(function(error) {
            console.log("Erreur lors du remplacement de la piste vidéo : ", error);
          });
      })
      .catch(function(error) {
        console.log("Erreur lors de l'obtention de l'accès à l'écran : ", error);
      });
  } else {
    let sender = peerConnection.getSenders().find(function(sender) {
      return sender.track.kind === "video";
    });
    
    sender.replaceTrack(localStream.getTracks()[1])
      .then(function() {
        isScreenSharing = false;
        shareScreenButton.textContent = "Partager l'écran";
        localVideo.srcObject = localStream;
      })
      .catch(function(error) {
        console.log("Erreur lors du remplacement de la piste vidéo : ", error);
      });
  }
});

// Inviter des membres
inviteButton.addEventListener("click", function() {
  let roomURL = window.location.href;
  let roomName = roomURL.substring(roomURL.lastIndexOf("/") + 1);
  
  if (navigator.share) {
    navigator.share({
      title: "Rejoignez l'appel vidéo",
      text: "Cliquez sur le lien pour rejoindre l'appel vidéo",
      url: roomURL
    })
      .then(function() {
        console.log("Invitation partagée avec succès");
      })
      .catch(function(error) {
        console.log("Erreur lors du partage de l'invitation : ", error);
      });
  } else {
    console.log("Partage non pris en charge sur ce navigateur");
  }
});

// Envoyer un message vocal
sendMessageButton.addEventListener("click", function() {
  if (mediaRecorder && mediaRecorder.state === "recording") {
    mediaRecorder.stop();
    sendMessageButton.textContent = "Enregistrer le message vocal";
  } else {
    startRecording();
    sendMessageButton.textContent = "Arrêter l'enregistrement";
  }
});

// Enregistrer le message vocal
function startRecording() {
  recordedChunks = [];
  
  let options = { mimeType: "audio/webm" };
  mediaRecorder = new MediaRecorder(localStream, options);
  
  mediaRecorder.addEventListener("dataavailable", function(event) {
    if (event.data.size > 0) {
      recordedChunks.push(event.data);
    }
  });
  
  mediaRecorder.addEventListener("stop", function() {
    let recordedBlob = new Blob(recordedChunks, { type: "audio/webm" });
    let audioUrl = URL.createObjectURL(recordedBlob);
    
    let audio = document.createElement("audio");
    audio.controls = true;
    audio.src = audioUrl;
    messageContainer.appendChild(audio);
    
    // Envoyer le fichier audio à l'autre pair
    if (dataChannel) {
      let reader = new window.FileReader();
      reader.onloadend = function() {
        dataChannel.send(reader.result);
      };
      reader.readAsArrayBuffer(recordedBlob);
    }
  });
  
  mediaRecorder.start();
}

// Afficher un message
function displayMessage(sender, message) {
  let p = document.createElement("p");
  p.textContent = sender + ": " + message;
  messageContainer.appendChild(p);
}

// Configuration de la connexion de données
function configureDataChannel() {
  let dataChannelOptions = {
    ordered: false,
    maxRetransmits: 0
  };
  
  dataChannel = peerConnection.createDataChannel("chatChannel", dataChannelOptions);
  
  dataChannel.onopen = function() {
    console.log("Canal de données ouvert");
  };
  
  dataChannel.onmessage = function(event) {
    let message = event.data;
    
    if (typeof message === "string") {
      displayMessage("Autre membre", message);
    } else if (message instanceof ArrayBuffer) {
      let audioBlob = new Blob([message], { type: "audio/webm" });
      let audioUrl = URL.createObjectURL(audioBlob);
      
      let audio = document.createElement("audio");
      audio.controls = true;
      audio.src = audioUrl;
      messageContainer.appendChild(audio);
    }
  };
}

// Établir une connexion peer-to-peer lorsque l'offre SDP est reçue
function handleOffer(offer) {
  peerConnection = new RTCPeerConnection();
  
  // Ajouter la piste du flux local à la connexion
  localStream.getTracks().forEach(function(track) {
    peerConnection.addTrack(track, localStream);
  });
  
  // Recevoir le flux distant et l'afficher dans la vidéo distante
  peerConnection.ontrack = function(event) {
    remoteStream = event.streams[0];
    remoteVideo.srcObject = remoteStream;
  };
  
  // Configurer le canal de données
  configureDataChannel();
  
  // Définir l'offre SDP reçue comme description distante
  peerConnection.setRemoteDescription(offer)
    .then(function() {
      // Créer une réponse SDP et l'échanger avec l'autre pair
      return peerConnection.createAnswer();
    })
    .then(function(answer) {
      return peerConnection.setLocalDescription(answer);
    })
    .then(function() {
      // La réponse SDP est prête, l'envoyer à l'autre pair
      console.log("Réponse SDP créée et prête à être envoyée : ", peerConnection.localDescription);
    })
    .catch(function(error) {
      console.log("Erreur lors du traitement de l'offre SDP : ", error);
    });
}

// Établir une connexion peer-to-peer lorsque la réponse SDP est reçue
function handleAnswer(answer) {
  peerConnection.setRemoteDescription(answer)
    .catch(function(error) {
      console.log("Erreur lors du traitement de la réponse SDP : ", error);
    });
}

// Établir une connexion peer-to-peer lorsque le candidat ICE est reçu
function handleCandidate(candidate) {
  let iceCandidate = new RTCIceCandidate(candidate);
  peerConnection.addIceCandidate(iceCandidate)
    .catch(function(error) {
      console.log("Erreur lors du traitement du candidat ICE : ", error);
    });
}

// Écouter les événements de messages provenant du parent
window.addEventListener("message", function(event) {
  let message = event.data;
  
  if (message.type === "offer") {
    handleOffer(message.offer);
  } else if (message.type === "answer") {
    handleAnswer(message.answer);
  } else if (message.type === "candidate") {
    handleCandidate(message.candidate);
  }
});
