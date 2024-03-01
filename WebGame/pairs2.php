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
        #end{
            
            background-color:grey;
            width: 600px;
			height: 500px;
            display: flex;
            justify-content: center;
            position:fixed;
            align-items: center;
            top: 50%;
            left: 48%;
            transform: translate(-50%, -50%);
            border:2px solid black;
            border-radius: 50px;
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
        .game-container img {
			width: 100px;
			
			margin-bottom: 20px;
            display:block;
     
		}

        .top {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            width: 70%;
            margin-bottom: -300px;
            margin-right:-950px;
			position: relative;
            perspective: 1000px;
			
           
        }
        
        .bottom {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            
            width: 70%;
            margin-bottom: 300px;
			margin-left:99px;
            position: relative;
            perspective: 1000px;
			
        }
        .top img{
            box-shadow:5px 12px 15px purple, -2px -2px 12px black;
            transition: transform 0.8s ease; /* add transition to transform property */
        }
        .bottom img{
            box-shadow:5px 12px 15px purple, -2px -2px 12px black;
            transition: transform 0.8s ease; /* add transition to transform property */
        }
        .newImage {
          
        }
        .flipped {
            transform: rotateY(180deg); /* flip image */
        }
        
        
        a:hover {
            background-color:#8000ff;
        }
        a:link{
            background-color:blue;
            padding:10px 15px;
            align-items:center;
            text-decoration:none; 
            border: 1px solid black;
            outline-style: outset;
            outline-color: grey;
            font-family: Verdana;
            font-size: 12px;
            font-weight: bold;
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
        <div class="top">
            <img src="./emoji-assets/card.png" id="1" alt="Image 1" onclick="flipImage(this)">
            <img src="./emoji-assets/card.png" id="2" alt="Image 2" onclick="flipImage(this)">
            <img src="./emoji-assets/card.png" id="3" alt="Image 3" onclick="flipImage(this)">
        </div>
        <div class ="bottom" >
            <img src="./emoji-assets/card.png" id="4" alt="Image 4" onclick="flipImage(this)">
            <img src="./emoji-assets/card.png" id="5" alt="Image 5" onclick="flipImage(this)">
            <img src="./emoji-assets/card.png" id="6" alt="Image 6" onclick="flipImage(this)">
        </div>
        
    </div>
    
    <div id="end" style="display: none;">
        
    </div>
    <div id ='linkz'>
        <a href = "leaderboard.php">save score</a>
        <a href = "pairs2.php">play again</a>
    </div>
    <script>
        var newImages = ["./emoji-assets/gameemo/glass.png","./emoji-assets/gameemo/smile.png","./emoji-assets/gameemo/open.png"];
        var flippedImgs = [];
        var counter = 0;
        var score = 0;
        //shuffles the array
        function shuffle(arr) {
            arr.sort((a, b) => Math.random() - 0.5);
            return arr;
        }
        shuffle(newImages);
        newImages = newImages.concat(newImages);
        shuffle(newImages);
        // flips the image that is being clicked on by using event.target and adds a counter and keeps track of score.
        function flipImage() {
            
            
            var image = event.target;
            image.classList.add("flipped");
    
            if (event.target.id === "1") {
                image.src = newImages[0];
                flippedImgs = flippedImgs.concat(newImages[0]);
                if(flippedImgs.length==2){
                    if(flippedImgs[0] !== flippedImgs[1]){
                        flippedImgs = [];
                        setTimeout(function() {
                            if(counter==0){
                                alert("game over, press ok to try again");
                                location.reload();

                            }
                        }, 1000);
                        setTimeout(function() {
                            if(counter==1){
                            
                            var end1 = document.getElementById('end');
                            var link1 = document.getElementById('linkz');
                            link1.style.display = 'flex';
                            link1.style.textAlign = "center";
                            end1.style.display = 'flex';
                            end1.style.fontsize = '35px';
                            end1.style.right = '30px';
                            end1.innerHTML = "your score: " + 5000;
                            document.cookie = "score=" + 5000;
                            }
                        }, 1000);
                            
                        
                        
                    }
                    else if(flippedImgs[0] == flippedImgs[1]){
                        counter++;
                        flippedImgs = [];
                        if(counter==3){
                            setTimeout(function() {
                                var end2 = document.getElementById('end');
                                var link2 = document.getElementById('linkz');
                                link2.style.display = 'flex';
                                link2.style.textAlign = "center";
                                end2.style.display = 'flex';
                                end2.style.fontsize = '35px';
                                end2.style.right = '30px';
                                end2.innerHTML = "your score: " + 9999;
                                document.cookie = "score=" + 9999;
                            }, 1000);
                        }
                        
                    }
                }
            }
    
            else if (event.target.id === "2") {
                image.src = newImages[1];
                flippedImgs = flippedImgs.concat(newImages[1]);
                if(flippedImgs.length==2){
                    if(flippedImgs[0] !== flippedImgs[1]){
                        flippedImgs = [];
                        setTimeout(function() {
                            if(counter==0){
                                alert("game over, press ok to try again");
                                location.reload();
                            }
                        }, 1000);
                        setTimeout(function() {
                            if(counter==1){
                                var end3 = document.getElementById('end');
                                var link3 = document.getElementById('linkz');
                                link3.style.display = 'flex';
                                link3.style.textAlign = "center";
                                end3.style.display = 'flex';
                                end3.style.fontsize = '35px';
                                end3.style.right = '30px';
                                end3.innerHTML = "your score: " + 5000;
                                document.cookie = "score=" + 5000;
                            }
                        }, 1000);
                        
                    }
                    else if(flippedImgs[0] == flippedImgs[1]){
                        counter++;
                        flippedImgs = [];
                        if(counter==3){
                            setTimeout(function() {
                                var end4 = document.getElementById('end');
                                var link4 = document.getElementById('linkz');
                                link4.style.display = 'flex';
                                link4.style.textAlign = "center";
                                end4.style.display = 'flex';
                                end4.style.fontsize = '35px';
                                end4.style.right = '30px';
                                
                                end.innerHTML = "your score: " + 9999;
                                document.cookie = "score=" + 9999;
                            }, 1000);
                        }
                        
                        
                    }
                }
                
            }
            else if (event.target.id === "3") {
                image.src = newImages[2];
                flippedImgs = flippedImgs.concat(newImages[2]);
                if(flippedImgs.length==2){
                    if(flippedImgs[0] !== flippedImgs[1]){
                        flippedImgs = [];
                        setTimeout(function() {
                            if(counter==0){
                                alert("game over, press ok to try again");
                                location.reload();
                            }
                        }, 1000);
                        setTimeout(function() {
                            if(counter==1){
                            
                                var end5 = document.getElementById('end');
                                var link5 = document.getElementById('linkz');
                                link5.style.display = 'flex';
                                link5.style.textAlign = "center";
                                end5.style.display = 'flex';
                                end5.style.fontsize = '35px';
                                end5.style.right = '30px';
                                end5.innerHTML = "your score: " + 5000;
                                document.cookie = "score=" + 5000;
                            
                            }
                        }, 1000);
                    }
                    else if(flippedImgs[0] == flippedImgs[1]){
                        counter++;
                        flippedImgs = [];
                        if(counter==3){
                            setTimeout(function() {
                                var end6 = document.getElementById('end');
                                var link6 = document.getElementById('linkz');
                                link6.style.display = 'flex';
                                link6.style.textAlign = "center";
                                end6.style.display = 'flex';
                                end6.style.fontsize = '35px';
                                end6.style.right = '30px';

                                end6.innerHTML = "your score: " + 9999;
                                document.cookie = "score=" + 9999;
                            }, 1000);
                        }
                        
                    }
                }
            }
            
            else if (event.target.id === "4") {
                image.src = newImages[3];
                flippedImgs = flippedImgs.concat(newImages[3]);
                if(flippedImgs.length==2){
                    if(flippedImgs[0] !== flippedImgs[1]){
                        flippedImgs = [];
                        setTimeout(function() {
                            if(counter==0){
                                alert("game over, press ok to try again");
                                location.reload();
                            }
                        }, 1000);
                        setTimeout(function() {
                            if(counter==1){
                                
                                var end7 = document.getElementById('end');
                                var link7 = document.getElementById('linkz');
                                link7.style.display = 'flex';
                                link7.style.textAlign = "center";
                                end7.style.display = 'flex';
                                end7.style.fontsize = '35px';
                                end7.style.right = '30px';
                                end7.innerHTML = "your score: " + 5000;
                                document.cookie = "score=" + 5000;
                            }
                        }, 1000);
                    }
                    else if(flippedImgs[0] == flippedImgs[1]){
                        counter++;
                        flippedImgs = [];
                        if(counter==3){
                            var end8 = document.getElementById('end');
                            var link8 = document.getElementById('linkz');
                            link8.style.display = 'flex';
                            link8.style.textAlign = "center";
                            end8.style.display = 'flex';
                            end8.style.fontsize = '35px';
                            end8.style.right = '30px';
                            end8.innerHTML = "your score: " + 9999;
                            document.cookie = "score=" + 9999;
                        }
                        
                    }
                }
            }
                
            
            else if (event.target.id === "5") {
                image.src = newImages[4];
                flippedImgs = flippedImgs.concat(newImages[4]);
                if(flippedImgs.length==2){
                    if(flippedImgs[0] !== flippedImgs[1]){
                        flippedImgs = [];
                        setTimeout(function() {
                            if(counter==0){
                                alert("game over, press ok to try again");
                                location.reload();
                            }
                        }, 1000);
                        setTimeout(function() {
                            if(counter==1){
                            
                                var end9 = document.getElementById('end');
                                var link9 = document.getElementById('linkz');
                                link9.style.display = 'flex';
                                link9.style.textAlign = "center";
                                end9.style.display = 'flex';
                                end9.style.fontsize = '35px';
                                end9.style.right = '30px';
                                end9.innerHTML = "your score: " + 5000;
                                document.cookie = "score=" + 5000;
                            }
                        }, 1000);
                        
                    }
                    else if(flippedImgs[0] == flippedImgs[1]){
                        counter++;
                        flippedImgs = [];
                        if(counter==3){
                            setTimeout(function() {
                                var end10 = document.getElementById('end');
                                var link10 = document.getElementById('linkz');
                                link10.style.display = 'flex';
                                link10.style.textAlign = "center";
                                end10.style.display = 'flex';
                                end10.style.fontsize = '35px';
                                end10.style.right = '30px';
                                end10.innerHTML = "your score: " + 9999;
                                document.cookie = "score=" + 9999;
                            }, 1000);
                        }
                        
                    }
                }
                
            }
            else if (event.target.id === "6") {
                image.src = newImages[5]; 
                flippedImgs = flippedImgs.concat(newImages[5]);
                if(flippedImgs.length==2){
                    if(flippedImgs[0] !== flippedImgs[1]){
                        flippedImgs = [];
                        setTimeout(function() {
                            if(counter==0){
                                alert("game over, press ok to try again");
                                location.reload();
                            }
                        }, 1000);
                        setTimeout(function() {
                            if(counter==1){
                            
                                var end11 = document.getElementById('end');
                                var link11 = document.getElementById('linkz');
                                link11.style.display = 'flex';
                                link11.style.textAlign = "center";
                                end11.style.display = 'flex';
                                end11.style.fontsize = '35px';
                                end11.style.right = '30px';
                                end11.innerHTML = "your score: " + 5000;
                                document.cookie = "score=" + 5000;
                            }
                        }, 1000);
                    }
                    else if(flippedImgs[0] == flippedImgs[1]){
                        counter++;
                        flippedImgs = [];
                        if(counter==3){
                            setTimeout(function() {
                                var end12 = document.getElementById('end');
                                var link12 = document.getElementById('linkz');
                                link12.style.display = 'flex';
                                link12.style.textAlign = "center";
                                end12.style.display = 'flex';
                                end12.style.fontsize = '72px';
                                end12.style.right = '30px';
                               
                                end12.innerHTML = "your score: " + 9999;
                                document.cookie = "score=" + 9999;
                            }, 1000);
                        }
                        
                        
                    }
                }     
            }
        }
                       
        
        
    </script>
</body>
</html>