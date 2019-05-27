<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="style/index.css">
</head>

<body>
  <h1>e-Homework</h1>
  <img src="icon.png">
  <h3 id=loading>頁面即將跳轉......</h3>
  <p id="time"></p>
  <?php
  //header("Location: login.php", 3000);
  header("refresh: 5; url=login.php");
  ?>
  <script>
    var loading = "頁面即將跳轉"
    setInterval(function() {
      loading+="."
      document.getElementById("loading").innerHTML = loading
    }, 1000)
  </script>
</body>

</html>