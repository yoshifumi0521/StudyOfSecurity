<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>XMLHttpRequest level2でクロスドメイン処理を行う。</title>
</head>
<body>


   
   
   
   
   
   
   
   
   
   <script>
      
      var xhr = new  XMLHttpRequest();
      var url = "http://api.hostip.info/get_html.php?ip=";
      //XMLHttpRequestの設定をする。
      xhr.open("GET",url+"12.34.56.78",false);
      //非同期通信を開始する。
      xhr.send(null);
      //レスポンスがしっかりかえってきたらする処理。
      if (xhr.status == 200 )
      {
         console.log(xhr.responseText);
      }


   </script>







</body>
</html>











