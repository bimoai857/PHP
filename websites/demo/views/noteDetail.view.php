<?php

require 'partials/app.php';

foreach($noteDetails as $index=> $noteDetail):
?>
<ul>
   <li><?php echo $noteDetail['description']; ?></li>
</ul>
<?php endforeach; ?>
