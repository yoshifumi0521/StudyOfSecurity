<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>formでクロスドメイン処理を行う。</title>
</head>
<body>

   <h1>IPアドレスをいれると、国名や都市の位置がでてくる。</h1>

   <form method="GET" action="http://api.hostip.info/get_html.php">
      <input type="text" name="ip" value="12.34.56.78">
      <input type="hidden" name="position" value="true">
      <input type="submit" value="送信">
   </form>






</body>
</html>











