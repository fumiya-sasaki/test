<!DOCTYPE html>
 <html lang="ja">
     <head>
         <meta charset="UTF-8">
         <title>投稿</title>
         <link rel="stylesheet" href="css/profile.css">
     </head>
     <body>
         <form method ="POST" action ="<?php print($_SERVER['PHP_SELF']) ?>">
          <input type="text" name="personal_name"><br><br>
          <textarea name="contents" rows="8" cols="40">
          </textarea><br><br>
          <input type="submit" name="btnl" value="投稿する">
         </form>
          
         <?php 
         $personal_name = $_POST['personal_name'];
         $contents = $_POST['contents'];
         
         print ('<p>投稿者:'.$personal_name.'</p>');
         print ('<p>内容:</p>');
         print ('<p>'.$contents.'</p>');
         
         ?>
     </body>
  
 </html>