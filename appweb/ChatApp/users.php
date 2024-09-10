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
    background-color: #f1f1f1 ;
    margin: 0;
    padding: 0;
  }
 
  .wrapper {
    background-color:#9926F0;
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    animation: fade-in 0.5s ease;
  }

  @keyframes fade-in {
    0% { opacity: 0; }
    100% { opacity: 1; }
  }

  .users {
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    animation: slide-up 0.5s ease;
  }

  @keyframes slide-up {
    0% {
      transform: translateY(20px);
      opacity: 0;
    }
    100% {
      transform: translateY(0);
      opacity: 1;
    }
  }

  .users header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 15px 20px;
    border-bottom: 1px solid #e0e0e0;
  }

  .users header .content {
    display: flex;
    align-items: center;
  }

  .users header .content img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover;
    margin-right: 10px;
    animation: zoom-in 0.5s ease;
  }

  @keyframes zoom-in {
    0% {
      transform: scale(0);
    }
    100% {
      transform: scale(1);
    }
  }

  .users header .content .details {
    display: flex;
    flex-direction: column;
  }

  .users header .content .details span {
    font-weight: bold;
    font-size: 16px;
    animation: slide-left 0.5s ease;
  }

  .users header .content .details p {
    color: #888;
    font-size: 14px;
    animation: slide-left 0.5s ease;
  }

  @keyframes slide-left {
    0% {
      transform: translateX(-10px);
      opacity: 0;
    }
    100% {
      transform: translateX(0);
      opacity: 1;
    }
  }

  .users header .logout {
    color: #f44336;
    font-weight: bold;
    text-decoration: none;
    transition: color 0.3s ease;
    animation: fade-in 0.5s ease;
  }

  .users header .logout:hover {
    color: #d32f2f;
  }

  .users .search {
    padding: 15px 20px;
    border-bottom: 1px solid #e0e0e0;
    display: flex;
    align-items: center;
    animation: fade-in 0.5s ease;
  }

  .users .search .text {
    flex-grow: 1;
    font-weight: bold;
    font-size: 14px;
    color: #888;
  }

  .users .search input[type="text"] {
    width: 200px;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 4px;
    margin-right: 10px;
    font-size: 14px;
  }

  .users .search .btn {
    background-color: #4caf50;
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 8px 12px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .users .search .btn:hover {
    background-color: #45a049;
  }

  .users .users-list {
    padding: 15px 20px;
    animation: fade-in 0.5s ease;
  }
</style>

<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="php/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout" style="background-color: #9926F0; color: white;">Logout</a>
      </header>
      <div class="search">
        <span class="text"><a href="../../TeamSpace Bot/TeamSpaceBot.html" style="color:#9926F0;">TeamSpace BOT</a></span>
        <span class="text"><a href="../../WebRTC/chatmessage/index.html" style="color:#9926F0;">TeamSpace Groupe</a></span>

        <input type="text" placeholder="Enter name to search..." class="form-control">
        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>
</body>
</html>
