<?php include('config.php'); ?>
<?php
if(isset($_POST['submit'])){
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $select = "SELECT * FROM mymusic WHERE email = '$email' ";
  $select_query = mysqli_query($connection, $select);
  $num = mysqli_num_rows($select_query);
  if($num > 0){
    echo "<script>
    alert('Email already exist')
    location.href='create.php'
    </script>";
  }
  else{
    $insert = "INSERT INTO mymusic(firstname, lastname, email, password)
    VALUES('$firstname', '$lastname', '$email', '$password')";
    $insert_query = mysqli_query($connection,$insert);
    header('location:login.php');
  }
}


?>