<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="style/index.css">
</head>

<body>
  <h1>e-Homework</h1>
  <div class="wrapper">
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 184.98 184.98" style="enable-background:new 0 0 184.98 184.98;" xml:space="preserve">
      <style type="text/css">
        .st1 {
          fill: #fff;
          stroke: #FCB528;
          stroke-width: 5;
          stroke-miterlimit: 10;
        }

        .st2 {
          fill: #fff;
          stroke: #FCB528;
          stroke-width: 5;
          stroke-miterlimit: 10;
        }

        /*H*/
        .st3 {
          fill: blue;
          stroke: #FCB528;
          stroke-width: 5;
          stroke-miterlimit: 10;
        }

        /*E*/
      </style>
      <g id="Rectangle_55_1_">
        <path class="st1" d="M27.49,2.99h130c13.53,0,24.5,10.97,24.5,24.5v130c0,13.53-10.97,24.5-24.5,24.5h-130
		c-13.53,0-24.5-10.97-24.5-24.5v-130C2.99,13.96,13.96,2.99,27.49,2.99z" />
      </g>
      <g id="Union_1_1_" transform="translate(582 2190)">
        <path class="st2" d="M-424.51-2137.01v78c0,5.8-4.7,10.5-10.5,10.5s-10.5-4.7-10.5-10.5v-28.5h-33v28.5c0,5.8-4.7,10.5-10.5,10.5
		s-10.5-4.7-10.5-10.5v-78c0-5.8,4.7-10.5,10.5-10.5s10.5,4.7,10.5,10.5v28.5h33v-28.5c0-5.8,4.7-10.5,10.5-10.5
		S-424.51-2142.81-424.51-2137.01z" />
      </g>
      <path class="st3" d="M102.49,126.53c0.64,1.35,1,2.86,1,4.46c0,2.9-1.18,5.52-3.08,7.42c-1.9,1.9-4.52,3.08-7.42,3.08h-54
	c-2.9,0-5.52-1.18-7.42-3.08c-1.9-1.9-3.08-4.52-3.08-7.42v-78c0-5.8,4.7-10.5,10.5-10.5h54c5.8,0,10.5,4.7,10.5,10.5
	c0,1.6-0.36,3.11-1,4.46c-0.28,0.6-0.61,1.16-1,1.69c-0.32,0.45-0.69,0.88-1.08,1.27c-1.9,1.9-4.52,3.08-7.42,3.08h-43.5v18h33v21
	h-33v18h43.5c3.5,0,6.6,1.71,8.5,4.35C101.88,125.37,102.21,125.93,102.49,126.53z" />
    </svg>
  </div>
  <h3 id=loading>頁面即將跳轉</h3>
  <p id="time"></p>
  <?php
  //header("Location: login.php", 3000);
  header("refresh: 3; url=login.php");
  ?>
  <script>
    var loading = "頁面即將跳轉"
    setInterval(function() {
      loading += "."
      document.getElementById("loading").innerHTML = loading
    }, 1000)
  </script>
</body>

</html>