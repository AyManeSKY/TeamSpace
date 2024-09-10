<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>

<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f1f1f1;
    margin: 0;
    padding: 0;
  }

  .wrapper {
    background-color:#9926F0;
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
  }

  .chat-area {
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    animation: slide-in 0.3s ease;
  }

  @keyframes slide-in {
    0% {
      transform: translateY(-100%);
    }
    100% {
      transform: translateY(0);
    }
  }

  .chat-area header {
    display: flex;
    align-items: center;
    padding: 15px 20px;
    border-bottom: 1px solid #e0e0e0;
  }

  .chat-area header .back-icon {
    color: #888;
    font-size: 20px;
    margin-right: 10px;
    text-decoration: none;
    transition: color 0.3s ease;
  }

  .chat-area header .back-icon:hover {
    color: #555;
  }

  .chat-area header img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover;
    margin-right: 10px;
    animation: fade-in 0.3s ease;
  }

  @keyframes fade-in {
    0% {
      opacity: 0;
    }
    100% {
      opacity: 1;
    }
  }

  .chat-area header .details {
    display: flex;
    flex-direction: column;
    animation: slide-in-left 0.3s ease;
  }

  @keyframes slide-in-left {
    0% {
      transform: translateX(-100%);
    }
    100% {
      transform: translateX(0);
    }
  }

  .chat-area header .details span {
    font-weight: bold;
    font-size: 16px;
  }

  .chat-area header .details p {
    color: #888;
    font-size: 14px;
  }

  .chat-area .chat-box {
    padding: 20px;
    overflow-y: scroll;
    height: 300px;
    animation: fade-in 0.3s ease;
  }

  .chat-area .typing-area {
    padding: 15px;
    display: flex;
    align-items: center;
    background-color: #f5f5f5;
    animation: slide-up 0.3s ease;
  }

  @keyframes slide-up {
    0% {
      transform: translateY(100%);
    }
    100% {
      transform: translateY(0);
    }
  }

  .chat-area .typing-area input[type="text"] {
    flex-grow: 1;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 4px;
    margin-right: 10px;
    font-size: 14px;
  }

  .chat-area .typing-area button {
    background-color: #4caf50;
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 8px 12px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .chat-area .typing-area button:hover {
    background-color: #45a049;
  }
</style>

<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: users.php");
          }
        ?>
        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="php/images/<?php echo $row['img']; ?>" alt="">
        <div class="details">
          <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
          <p><?php echo $row['status']; ?></p>
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="javascript/chat.js"></script>

</body>
</html>
