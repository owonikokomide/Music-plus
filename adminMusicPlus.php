<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="music.css">
  <link rel="icon" href="img/pics.jpeg"> 
  <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/fontawesome.css"> 
  <link rel="stylesheet" href="fontawesome-free-6.2.1-web/js/fontawesome.min.js">
  <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/solid.css">
  <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/brands.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin MusicPlus</title>
</head>
<body>
  <div class="container">
    <div class="musicplus">
      <div class="sidebar">
        <div class="musiclogo">
          <div class="pics">
            <img src="img/picss.png" alt="picss">
          </div>
          <div class="title">
            <a href="#"><h2>Music<span class="span">Plus</span></h2></a>
          </div>
        </div>
        <div class="search">
          <input type="search" class="srh" placeholder="search">
        </div>
        <div class="three">
          <div class="first">
            <i class="fa-solid fa-play icon"></i>
           <a class="listen" href="#"><p>Listen now</p></a>
          </div>
          <div class="second">
            <i class="fa-solid fa-bars icon"></i>
           <a class="listen" href="#"><p>Browse</p></a>
          </div>
          <div class="third">
            <i class="fa-solid fa-radio icon"></i>
           <a class="listen" href="#"><p>Radio</p></a>
          </div>
        </div>
        <div class="openmusic">
          <i class="fa-solid fa-music music_icon"></i>
          <a class="listen" href="#"><p>Open Music</p></a>
        </div>
      </div>
      <div class="main_music">
        <div class="play_up">
          <div class="first_up">
            <i class="fa-solid fa-repeat up_icon"></i>
            <i class="fa-solid fa-backward up_icon"></i>
            <i class="fa-solid fa-play up_icon"></i>
            <i class="fa-solid fa-forward up_icon"></i>
            <i class="fa-solid fa-shuffle up_icon"></i>
          </div>
          <div class="second_up">
            <audio controls class="audio" id="myaudio" autoplay>
              <source src="../html media/audio/tiwa.mp3">
              </audio>
          </div>
          <div class="third_up">
          <button class="but"><a href="login.php">
              <i class="fa-solid fa-user"></i> Logout</a>
            </button>
          </div>
        </div>
        <div class="play_down">
          <div class="browse">
            <h1 class="browseit">Browse</h1>
          </div>
          <div class="boxes">
            <div class="firstbox">
              <h5 class="up">UPDATED PLAYLIST</h6>
              <h4 class="dance">danceXL</h4>
              <h4 class="up">Apple Music Dance</h4>
              <img class="firstimg" src="img/image1.webp" alt="image1">
            </div>
            <div class="secondbox">
              <h5 class="up">SPATIAL AUDIO</h6>
                <h4 class="dance">Speak Now</h4>
                <h4 class="up">Apple Music R&B</h4>
                <img class="firstimg" src="img/r&b" alt="apple">
            </div>
            <div class="thirdbox">
              <h5 class="up">MADE FOR SUMMER</h6>
                <h4 class="dance">Sound track your next beach trip with these</h4>
                <h4 class="up">playlist</h4>
                <img class="firstimg" src="img/image3.webp" alt="apple">
            </div>
          </div>
          <div class="playlist">
            <h4 class="pulse">Playlist on the pulse</h4>
          </div>
          <div class="allimage">
            <img class="images" src="img/second" alt="">
            <img class="images" src="img/third" alt="">
            <img class="images" src="img/myfirst" alt="">
            <img class="images" src="img/forth" alt="">
            <img class="images" src="img/fifth" alt="">
            <img class="images" src="img/sixth" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
