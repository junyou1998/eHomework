<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>登錄</title>
  <link rel="stylesheet" href="style/login.css">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC:300,400,500,700,900&display=swap&subset=chinese-traditional" rel="stylesheet">
</head>

<body>
  <h1>e-Homework</h1>
  <h3>哈囉,</h3>
  <p>
    這是一個能夠發派作業以及繳交作業的e化平台
    ，幫助學生與教師之間作業建立起橋梁
  </p>
  <div id="loginpage">
    <div class="identity">
      <a class="member" id="student" href="">學生端</a>
      <a class="member" id="teacher" href="">教師端</a>
    </div>
    <form action="">
      <input type="text" placeholder="使用者名稱">
      <br>
      <input type="text" placeholder="密碼">
      <br>
      <input type="text" id="verification" placeholder="驗證碼">
      <span id="verification2">AB123</span>
      <br>
      <div id="notmember">
        <span>還不是會員? <a href="">點我註冊</a></span>
      </div>

      <br>
      <input id="loginBtn" type="button" value="登陸">
    </form>
  </div>
</body>

</html>