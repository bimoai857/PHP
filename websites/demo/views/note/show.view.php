<?php

view('partials/app.php',['heading'=>$heading]);

foreach($noteDetails as $index=> $noteDetail):
?>
<ul>
   <li><?php echo htmlspecialchars($noteDetail['description'])  ?></li>
</ul>
<?php endforeach; ?>
 