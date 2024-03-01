<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <script>
  if (document.cookie.indexOf("input1") >= 0) {
  // myCookieName cookie exists, so load page1.html
  window.location.href = "index_reg.php";
  } else {
  // myCookieName cookie does not exist, so load page2.html
  window.location.href = "index_unreg.php";
  }
  </script>
</body>
</html>