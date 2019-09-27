<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
  <title>4 eachblog掲示板</title>
<link rel="stylesheet" type=text/css href="style.css">
</head>
  
<img src="4eachblog_logo.jpg" class="logo">
 
  <header>
    <ul>
      <li>トップ</li>
      <li>プロフィール</li>
      <li>4eachについて</li>
      <li>登録フォーム</li>
      <li>問い合わせ</li>
      <li>その他</li>
    </ul>   
  </header>
  
  <body>
      
      <?php
      mb_internal_encoding("UTF8");
      $pdo=new PDO("mysql:dbname=4each_keijiban;host=localhost;","root","mysql");
      $stmt=$pdo->query("select *from 4each_keijiban");
      
     ?>
      <ul>  <h4>人気の記事</h4>
    <li>PHPオススメ本</li>
    <li>PHP MyAdminの使い方</li>
    <li>いま人気のエディタTop5</li>
    <li>HTMLの基礎</li>
  </ul>
      <ul><h4>オススメリンク</h4>
    <li>インターノウス株式会社</li>
    <li>Xamppのダウンロード</li>
    <li>Eclipseのダウンロード</li>
    <li>Braketsのダウンロード</li>
  
  </ul>
      
      <ul><h4>カテゴリ</h4>
    <li>HTML</li>
    <li>PHP</li>
    <li>MySQL</li>
    <li>JavaScript</li>
  </ul>
      
    <h1>プログラミングに役立つ掲示板
    </h1>
    
    <form method="post" action="insert.php">
    
      <div><label><h3>入力フォーム</h3>
      </label>
      </div>
        <div>
          <label>ハンドルネーム</label>
          <br><input type="text" class="text" name="handlename" cols="50">
        </div>   
            <div>
              <label>タイトル</label>
              <br><input type="text" class="text" name="title">
            </div>
              <div>
                <label>コメント</label>
                <br>
                  <textarea name="comments" class="text" rows="10" cols="70">
                  </textarea>

              </div>
    
    <div>
     <input type="submit" class="submit" size="35" value="投稿する">
      </div>
    
    </form>
   
    <?php
          while($row=$stmt->fetch()){
              
              
      echo" <form class='form2'>";
    echo  "<div>
      <label><p>".$row['title']."</p></label>";
echo $row['comments'];
           echo"<h5>posted by".$row['handlename']."</h5>";
    echo"</div>";
    echo"</form>";
          }
  
?>
<footer>
    copyright internous | 4each blod is the one which provides A to Z about programing.
      </footer>
        


</body>
</html>