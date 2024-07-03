<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="create.css">
  <link rel="icon" href="img/pics.jpeg">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>create account</title>
</head> 
<body>
  <div class="container"> 
    <div class="musiclogo">
      <div class="pics">  
        <img src="img/picss.png" alt="picss">
      </div>
      <div class="title">
        <a href="index.php"><h2>Music<span class="span">Plus</span></h2></a>
      </div>
    </div>
    <h1 class="create">Create An Account Here</h1>
    <div class="allform">
      <div class="form">
        <form method="post">
          <input type="email" class="input" name="email" placeholder="Email" required><br><br>
          <input type="password" class="input" name="password" placeholder="Password" required><br><br>
          <input type="submit" class="inputs" name="submit">
        </form>
        <p>Don't have an account!<a href="create.php">Create an account</a></p>
      </div>
    </div>
  </div>
</body>
</html>

<?php
if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  $select = "SELECT * FROM mymusic WHERE email='$email' AND password='$password' ";
  $select_query = mysqli_query($connection, $select);
  
  if($select_query){
   if(mysqli_num_rows($select_query)==1){
    $row = mysqli_fetch_array($select_query);
   $status= $row['status'];
   if($status == 'admin'){
    header('location:adminMusicPlus.php');

   }else{
    header('location:musicplus.php');

   }
// $_SESSION['status'] = $status;
   } else{
    echo "<center><h3 style=color:red margin-top:2rem;>incorrect email or password</h3></center>";
   }
}
}
?>
