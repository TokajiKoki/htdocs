<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="./hello-world.js"></script>


 <title>美容師のブログサイト</title>
</head>
<body>

   
    <!-- ヘッダ -->
 <div class="PcHeader">
    <div class="PcHeader_Inner clearfix">
        <a href="index.html"> <img src="../img/デザイン2.png"id="LOGO"></a>
        <a class="header-title" href="index.html">Hair View.com</a>
    <nav class="PcHeader_Nav">
        <ul class="PcHeader_Nav_Wrap clearfix">
        <li class="PcHeader_Nav_List"></li>
            <a class="TapContent -botton Tap_Transparent" href="index.html">トップ</a>
        <li class="PcHeader_Nav_List"></li>
            <a class="TapContent -botton Tap_Transparent" href="tokusyuu.html">特集</a>
        <li class="PcHeader_Nav_List"></li>
            <a class="TapContent -botton Tap_Transparent" href="osusume.html">編集部おすすめ</a>
        <li class="PcHeader_Nav_List"></li>
            <a class="TapContent -botton Tap_Transparent" href="ninnki.html">人気のブログ</a>
        <li class="PcHeader_Nav_List"></li>
            <a class="TapContent -botton Tap_Transparent" href="signup_form.php">アカウント</a>
        <li class="PcHeader_Nav_List -Category"></li>


        </ul>
    </nav>
    </div>
    <div class="search">
        <form action="" method="post">
	<input type="search" name="q" value="" placeholder="キーワード"><input type="submit" name="btn_search" value="検索">
        </form>
    </div>
    

 </div>
    

 








<div class = "top-wrapper">
    <h2>ユーザ登録フォーム</h2>
</div>
<div class="form">
    <form action="register.php"methot="POST">
    <p>
        <label for="username">ユーザ名：</label>
        <input type="text" name="username">
    </p>
    <p>
        <label for="email">メールアドレス：</label>
        <input type="email" name="email">
    </p>
    <p>
        <label for="password">パスワード：</label>
        <input type="password" name="password">
    </p>
    <p>
        <label for="password_conf">パスワード確認：</label>
        <input type="password" name="password_conf">
    </p>

    <div class = "touroku-btn">
    <p>
        <input type="submit" value="新規登録">
        <input type="submit" value="ログイン">
    </p>
    
        
    
    </div>
    </form>
</div>
<!--snsロゴ-->
<div class="fabs">

    <a href="file:///Applications/MAMP/htdocs/public/index.html" target="_blank" class="fab red" tooltip="HOME">
    <i class="sec zmdi zmdi-google-plus animated">
    </i>
  </a>

  <a href="https://line.me/ja/" target="_blank" class="fab green" tooltip="LINE">
    <i class="sec zmdi zmdi-codepen animated">
    </i>
  </a>

  <a href="https://twitter.com" target="_blank" class="fab light-blue" tooltip="Twitter">
    <i class="sec zmdi zmdi-twitter animated">
    </i>
  </a>

  <a href="https://facebook.com" target="_blank" class="fab indigo" tooltip="Facebook">
    <i class="sec zmdi zmdi-facebook animated">
    </i>
  </a>

  <a target="_blank" class="fab red" tooltip="Share">
    <i class="prime zmdi animated rotateIn zmdi-plus">
    </i>
  </a>
</div>


    <style type="text/css">
        .top-wrapper{
            margin-top:50px;
            margin-bottom:50px;
        }
        .touroku-btn p{
            margin-top:50px;
            
        }
        p{
            margin:15px auto;
        }
        .form{
            text-align:center;
        }
    </style>



</body>
</html>