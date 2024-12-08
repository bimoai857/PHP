<?php

require 'partials/app.php';

foreach($notes as $index=> $note):
?>
<ul>
    <a href="/notes?id=<?php echo $note['id']; ?>"><li><?php echo $note['title']; ?></li></a>
</ul>
<?php endforeach; ?>
