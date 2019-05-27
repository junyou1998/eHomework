<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="style/index.css">
</head>

<body>
  <h1>home</h1>
  <h3 id="time"></h3>
  <?php
  //header("Location: login.php", 3000);
  header("refresh: 10; url=login.php");
  ?>
  <script>
    var time = 10
    console.log(time)
    function count(){
      time=time-1
      console.log(time)
    }
    setInterval(count(), 1000);
  </script>
</body>

</html>