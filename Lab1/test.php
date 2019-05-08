<pre>
<?php
 print_r($_POST);
?>
</pre>
<pre>
<?php
 print_r($_FILES);
 $data = $_FILES['filetoUpload'];
 print_r($data);
//  print $_FILES["filetoUpload"]['name'];
?>
</pre>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="fname" id="">
        <input type="file" name="filetoUpload" id="">
        <input type="submit">
    </form>
    
</body>
</html>