<?php
  if (isset($_COOKIE['namez'])) {
    $namez = $_COOKIE['namez'];}
  if (isset($_COOKIE['eyes'])) {
    $eyes = $_COOKIE['eyes'];}
  if (isset($_COOKIE['mouth'])) {
    $mouth = $_COOKIE['mouth'];}
  if (isset($_COOKIE['skin'])) {
    $skin = $_COOKIE['skin'];}
  if (isset($_COOKIE['score'])) {
    $score = $_COOKIE['score'];}
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
    <title>leaderboard</title>
    <style>
        body {
            background-image: url("https://images.unsplash.com/photo-1511512578047-dfb367046420?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80");
            background-size: cover;
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
        .tableArea{
            box-shadow:5px;
            background-color:grey;
            width:900px;
            height:670px;
            display: flex;
            justify-content: center;
            position:fixed;
            align-items: center;
            top: 50%;
            left: 48%;
            transform: translate(-50%, -50%);
        }
        th {
            background-color: blue;
            color: white;
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
    
    <div class="tableArea">
    <?php
    $filen = "data.txt";
    $data = array_reverse(file($filen));
    $maxScores = 10; // max number of scores
    $data = array_slice($data, 0, $maxScores);
    ?>
        <table>
            <thead>
                <tr>
                    <th>UserName</th>
                    <th>Score</th>
                </tr>
            </thead>
        <tbody>
        <?php foreach ($data as $line): ?>
            <tr>
                <?php $columns = explode(',', $line); ?>
                <?php foreach ($columns as $column): ?>
                    <td><?php echo $column; ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
        
        </tbody>
    </table>
        </div>
    <?php
        if (isset($_COOKIE["namez"]) && isset($_COOKIE["score"])) {
            // Retrieving cookie data
            $namez = $_COOKIE['namez'];
            $score = $_COOKIE['score'];
            
            // Opening file 
            $file = fopen('data.txt', 'a');

            // overWriting 
            $data = "$namez\n , $score\n";
            file_put_contents("data.txt", $data, FILE_APPEND);
        }

        
        ?>
</body>
</html>