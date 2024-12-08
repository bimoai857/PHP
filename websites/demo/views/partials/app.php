<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>

<?php
require_once '/Users/bimochanshrestha/projects/php/websites/demo/Constants.php';

if ($_SERVER['REQUEST_URI'] == '/about.php') {
  $bg_color = 'red';
} else {
  $bg_color = 'yellow';
}
?>

<body>
  <div>!!!_________Navbar__________!!!</div>
  <a href="/about">About</a>
  <a href="/">Home</a>
  <a href="/notes">Notes</a>
  <br />
  <div>
    <div style="background-color: <?php echo $bg_color; ?>;">This is <?php echo $heading; ?> Page!!!</div>
  </div>
</body>

</html>