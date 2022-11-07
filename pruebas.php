<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
    <label for="textarea">textarea label</label>
    <textarea name="test"  rows="10" cols="50">Write something here</textarea>
    <input type="submit">
</form>    
</body>
</html>

<?php 
$test = $_POST['test'];
$test = str_replace(array("\r\n", "\n\r", "\r", "\n"), "<br><br>", $test);
echo $test

?>