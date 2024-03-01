<?php
  if (isset($_COOKIE['namez'])) {
    $namez = $_COOKIE['namez'];}
  if (isset($_COOKIE['eyes'])) {
    $eyes = $_COOKIE['eyes'];}
  if (isset($_COOKIE['mouth'])) {
    $mouth = $_COOKIE['mouth'];}
  if (isset($_COOKIE['skin'])) {
    $skin = $_COOKIE['skin'];}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>play pairs</title>
    <style>
        body {
            background-image: url("https://images.unsplash.com/photo-1511512578047-dfb367046420?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80");
            background-size: cover;
        }
        .game-container {
          background-color: #d9deda;
          width: 850px;
          height: 600px;
          border:2px solid black;
                margin-top:100px;
          margin-left:330px;
                border-radius: 200px;
          box-sizing: border-box;
                display: flex;
          box-shadow:5px 12px 15px purple, -8px -7px 2px blue;
          align-items: center;
          justify-content: space-around;
        }
        a:link{
        
        background-color:white;
        padding:90px 150px;
        align-items:center;
        text-decoration:none; 
        border: 1px solid black;
        outline-style: outset;
        outline-color: grey;
        font-family: Verdana;
        font-size: 12px;
        font-weight: bold;
        
        
      }
      .point {
        height:50px;
        margin-top:-337px;
        margin-left:727px;
      }
      p{
        color:black;
        text-shadow: 5px 2px 5px white, -2px -2px 5px purple;
        position:absolute;
        font-size:15px;
        margin-top:-150px;
        margin-left:420px;
      }

      a:visited{
        color:black;  
        
      }

       a:hover {
        background-color:#8000ff;
  
      }
      .namez{
        display:flex;
        margin-left:100px;
        color:white;
        text-shadow: 5px 2px 5px purple, -2px -2px 5px black;
      }
      .emo img{
        position: absolute;
        height:40px;
        margin-top:-20px;
      }
        
    </style>
</head>

<body>
  <nav>
      <div class="left">
        <a href="index.php" class="navbar-link">Home</a>
      </div>
      <div class="namez"><?php echo isset($namez) ? $namez : ' ';?></div>
      <div class ="emo">
        <img src= <?php echo isset($skin) ? $skin: ' ';?>>
        <img src= <?php echo isset($eyes) ? $eyes: ' ';?>>
        <img src= <?php echo isset($mouth) ? $mouth: ' ';?>>
      </div>      
      <div class="right">
        <a href="leaderboard.php">leaderboard</a>
        <a href="pairs.php">play pairs</a>
      </div>      
    </nav>

    <div class="game-container">
        <a href = "pairs2.php">START GAME</a>
    </div>
    <img src = "./emoji-assets/point.png" class="point">

  <p>This game requires patience, click above at your own risk, the rules are simple, try to match the images</p>
  
</body>
</html>