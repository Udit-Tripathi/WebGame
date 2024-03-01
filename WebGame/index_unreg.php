<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing page</title>
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <style>
        body {
            background-image: url("https://images.unsplash.com/photo-1511512578047-dfb367046420?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80");
            background-size: cover;
        }
        
        

      h1{
        
        margin-top:80px;
        text-align:center;
        color:white;
        text-decoration:underline;
        text-shadow: 5px 2px 5px purple, -2px 8px 5px black;
        font-size: 70px;
      }
      h2{ 
        text-align:center;
        margin-top:120px;
        color:white;
        text-shadow: 5px 2px 5px purple, -2px 8px 5px black;
        font-size: 40px;
      }
      h2 a {
        
        display:block;
        text-shadow: 5px 2px 5px purple, -2px -2px 5px black;
        font-size: 30px;
        text-align:center;
        color:white;
        text-decoration:none;
        
      }
      h2 a:hover {
        background-color:purple; 
      }
      h2 a:link{
        border: 1px solid black;
        outline-style: outset;
        outline-color: grey;
        width:30%;
        margin-left:532px;
        margin-top:30px;
        
        
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
    <h1>Welcome to pairs</h1>
    <h2>You’re not using a registered session?<a href="registration.php"> Register now</a></h2>
    
    
    
</body>
</html>