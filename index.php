<?php
if(isset($_POST['submit'])){

  $Name = $_POST['name']."\t";
  $q1 = $_POST['q1']."\n";

$file=fopen("data.xls", "a");
fwrite($file, $Name);
fwrite($file, $q1);
fclose($file);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>UXD poll</title>
</head>
<body class="blogdesire-body">
  <div class="blogdesire-wrapper">
    <div class="blogdesire-heading">
      UXD poll
    </div>
    <form class="blogdesire-form" method="post">
      <input type="text" name="name" placeholder="Name" required autocomplete="off"> <br>
      <input type="text" name="q1" placeholder="Question 1" required autocomplete="off"> <br>
      <input type="submit" name="submit" value="SAVE" class="blogdesire-submit">
    </form>
  </div>
</body>
</html>