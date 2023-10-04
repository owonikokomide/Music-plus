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
        <form action="validate.php" method="post">
          <input type="text" class="input" name="firstname" placeholder="First name" required><br><br>
          <input type="text" class="input" name="lastname" placeholder="Last name" required><br><br>
          <input type="email" class="input" name="email" placeholder="Email" required><br><br>
          <input type="password" class="input" name="password" placeholder="Password" required><br><br>
          <input type="submit" class="inputs" name="submit">
        </form>
        <p>Already have an account! <a href="login.php">Login here</a></p>
      </div>
    </div>
  </div>
</body>
</html>