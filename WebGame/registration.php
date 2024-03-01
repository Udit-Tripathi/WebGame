<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <style>
        body {
            background-image: url("https://images.unsplash.com/photo-1511512578047-dfb367046420?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80");
            background-size: cover;
        }
        h1{
            color:white;
            text-shadow: 5px 2px 5px purple, -2px 8px 5px black;
            text-align:center;
            font-size:60px;
            margin-top:-70px;
        }
        h2{
            color:white;
            text-shadow: 5px 2px 5px purple, -2px 8px 5px black;
            text-align:center;
            margin-left:50px;

        }
        label{
            color:white;
            text-shadow: 5px 2px 5px purple, -2px 8px 5px black;
            font-size:26px;
            text-decoration:underline;
        }
        p{
            color:white;
            text-shadow: 5px 2px 5px purple, -2px 8px 5px black;
            font-size:26px;
            text-decoration:underline;
        }
        .avatar p {
            color:white;
            text-shadow:  5px 2px 5px black, -2px 8px 5px purple;
            font-size:26px;
            text-decoration:none;
            text-align: center;
            margin-top:-350px;
            margin-left: 55px;

        }
       
        .avSpace{
            
            background-color:purple;
            width:450px;
            height:500px;
            
        }
       
        .distance:{
           margin-top:5px;
        }
       
        input{
            margin-left:10px;
            color:purple;
        }
        button{
            color:white;
            background-color:purple;
            
        }

        #eyes img {
            
            align-items:right; 
            height:60px;
            vertical-align: middle;
            
        }

        #mouth img {
            
            align-items:right; 
            height:60px;
            vertical-align: middle;
            
        }

        #skin img {
            
            align-items:right; 
            height:60px;
            vertical-align: middle;
           
        }
        
        
        
    </style>
</head>
<body>
    
    <nav>
      <div class="left">
            <a href="index.php" class="navbar-link">Home</a>
        </div>
        <div class="right">
            <a href="pairs.php">Play pairs</a>
            <a href="registration.php">register</a>
        </div>
        
        
    </nav>
    <canvas id="SaveAvatar" width="60"></canvas>
    
    <h1>Registration</h1>
    <label for="input_1">enter your name:</label>
    <input type="text" id="input_1"><button onclick="reg()">Submit</button></h3>
    <h2 id="error"></h2>
    <div class="avSpace">
    <div class="features" id="eyes">
        <p class="distance" >Avatar Selector:<br><br>Eyes</p>
        <image src=".\emoji-assets\eyes\closed.png" alt="error loading your image" onclick="eyes('./emoji-assets/eyes/closed.png');pathfinder('./emoji-assets/eyes/closed.png')">
        <image src=".\emoji-assets\eyes\laughing.png" alt="error loading your image" onclick="eyes('./emoji-assets/eyes/laughing.png');pathfinder('./emoji-assets/eyes/laughing.png')">
        <image src=".\emoji-assets\eyes\long.png" alt="error loading your image" onclick="eyes('./emoji-assets/eyes/long.png');pathfinder('./emoji-assets/eyes/long.png')">
        <image src=".\emoji-assets\eyes\normal.png" alt="error loading your image" onclick="eyes('./emoji-assets/eyes/normal.png');pathfinder('./emoji-assets/eyes/normal.png')">
        <image src=".\emoji-assets\eyes\rolling.png" alt="error loading your image" onclick="eyes('./emoji-assets/eyes/rolling.png');pathfinder('./emoji-assets/eyes/rolling.png')">
        <image src=".\emoji-assets\eyes\winking.png" alt="error loading your image" onclick="eyes('./emoji-assets/eyes/winking.png');pathfinder('./emoji-assets/eyes/winking.png')">
    </div>
    <div class="features" id="mouth">
        <p class="distance">mouth</p>
        <image src=".\emoji-assets\mouth\open.png" alt="error loading your image" onclick="mouth('./emoji-assets/mouth/open.png');pathfinder2('./emoji-assets/mouth/open.png')">
        <image src=".\emoji-assets\mouth\sad.png" alt="error loading your image" onclick="mouth('./emoji-assets/mouth/sad.png');pathfinder2('./emoji-assets/mouth/sad.png')">
        <image src=".\emoji-assets\mouth\smiling.png" alt="error loading your image" onclick="mouth('./emoji-assets/mouth/smiling.png');pathfinder2('./emoji-assets/mouth/smiling.png')">
        <image src=".\emoji-assets\mouth\straight.png" alt="error loading your image" onclick="mouth('./emoji-assets/mouth/straight.png');pathfinder2('./emoji-assets/mouth/straight.png')">
        <image src=".\emoji-assets\mouth\surprise.png" alt="error loading your image" onclick="mouth('./emoji-assets/mouth/surprise.png');pathfinder2('./emoji-assets/mouth/surprise.png')">
        <image src=".\emoji-assets\mouth\teeth.png" alt="error loading your image" onclick="mouth('./emoji-assets/mouth/teeth.png');pathfinder2('./emoji-assets/mouth/teeth.png')">
    </div>
    <div class="features" id="skin">
        <p class="distance">Skin</p>
        <image src=".\emoji-assets\skin\green.png" alt="error loading your image" onclick="skin('./emoji-assets/skin/green.png');pathfinder3('./emoji-assets/skin/green.png')">
        <image src=".\emoji-assets\skin\red.png" alt="error loading your image" onclick="skin('./emoji-assets/skin/red.png');pathfinder3('./emoji-assets/skin/red.png')">
        <image src=".\emoji-assets\skin\yellow.png" alt="error loading your image" onclick="skin('./emoji-assets/skin/yellow.png');pathfinder3('./emoji-assets/skin/yellow.png')">
    </div>
    </div>
    <div class="avatar"><p>your avatar</p></div>
    
    
    <script>
        //sets SelectedImage1 as null;
        var SelectedImage1 = null;
        //a function that give you eyes emoji if you click on on a type of eye emoji from the list, this is done by hyperlinking the image.
        function eyes(imagePath) {
            functionUsed = true;
            
            let Image1 = document.createElement("img");
            Image1.src = imagePath;
            Image1.width = 60;
            Image1.style.zIndex=document.getElementById("eyes").style.zIndex = "3";
            Image1.style.position = "absolute";
            Image1.style.left = "50%";
            Image1.style.top = "40%";
            
            if (SelectedImage1) {
                SelectedImage1.parentNode.replaceChild(Image1, SelectedImage1);
            } else {
                // Add the new image element to the page
                
                document.body.appendChild(Image1);
            }

            // Update the current image
            SelectedImage1 = Image1;
            return imagePath;
            
        }
        var SelectedImage2 = null;
        //a function that give you mouth emoji if you click on on a type of eye emoji from the list, this is done by hyperlinking the image.
        function mouth(imagePath) {
            
            
            let Image2 = document.createElement("img");
            Image2.src = imagePath;
            Image2.style.zIndex=document.getElementById("mouth").style.zIndex = "2";
            Image2.width = 60;
            Image2.style.position = "absolute";
            Image2.style.left = "50%";
            Image2.style.top = "40%";
            
            if (SelectedImage2) {
                SelectedImage2.parentNode.replaceChild(Image2, SelectedImage2);
            } else {
                // Add the new image element to the page
                
                document.body.appendChild(Image2);
            }

            // Update the current image
            SelectedImage2 = Image2;
            return imagePath;
        }
        var SelectedImage3 = null;
        //a function that give you eyeskin emoji if you click on on a type of eye emoji from the list, this is done by hyperlinking the image.
        function skin(imagePath) {
            
            let Image3 = document.createElement("img");
            Image3.src = imagePath;
            Image3.style.zIndex=document.getElementById("skin").style.zIndex = "1";
            Image3.width = 60;
            Image3.style.position = "absolute";
            Image3.style.left = "50%";
            Image3.style.top = "40%";
            
            if (SelectedImage3) {
                SelectedImage3.parentNode.replaceChild(Image3, SelectedImage3);
            } else {
                // Add the new image element to the page
                
                document.body.appendChild(Image3);
            }

            // Update the current image
            SelectedImage3 = Image3;
            return imagePath;
        }
      
        //returns the updated path
        function pathfinder(imagePath){
            document.cookie = "eyes="+imagePath;
        }
        //returns the updated path
        function pathfinder2(imagePath){
            document.cookie = "mouth="+imagePath;
        }
        //returns the updated path
        function pathfinder3(imagePath){
            document.cookie = "skin="+imagePath;
        }   
        //this function saves the userinput and user profile in the form of cookies. it also does not let you do does not let you use speacial characters in your username.
        function reg() {
            
            
            var special = /["/!@#%&*()+=^{}[\]—;:"'<>?]/;
            if(special.test(input1)){
                errorMsg.innerHTML="special characters are not allowed, try again.";
            }
        
            
            else{
                var input1 = document.getElementById("input_1").value;
                document.cookie="namez=" + input1;
                window.location.href = "index_reg.php";
                
            }
        }
    </script>
    
</body>
</html>