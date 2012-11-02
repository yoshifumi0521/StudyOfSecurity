<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>クロスサイトスクリプティングについて</title>
</head>
<body>
	
   <h1>htmlspecialcharsの第二引数にENT_QUOTESが無い場合。</h1>
   <p>シングルコーテーション''がエスケープされないので、攻撃の対象
   になる。</p>


   <p>パターン①　---'onmouseover=alert(document.cookie)'</p>
   <p>パターン②　---'onfocus=alert(documet.cookie) autofocus'</p>

   <form method="GET" action="?">キーワード
      <input type="text" name="key" value='<?php echo (htmlspecialchars($_GET["key"]))?>'>
      <input type="submit" value="検索">
   </form>

	
	
	<script>
	
		
		
		
		


	</script>

</body>
</html>











