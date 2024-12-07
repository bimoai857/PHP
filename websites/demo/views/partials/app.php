<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<?php
if($current=='/about.php'){
  $bg_color='red';
}
else{
  $bg_color='yellow';
}
?>

<body>
    <div>!!!_________Navbar__________!!!</div>
    <a href="/about.php">About</a>
    <a href="/">Home</a>
    <br/>
    <div>
      <div style="background-color: <?php echo $bg_color; ?>;">This is <?php echo $heading; ?> Page!!!</div>
    </div>
</body>

</html>