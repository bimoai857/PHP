<?php

require 'partials/app.php';

foreach($notes as $index=> $note):
?>
<ul>
    <a href="/notes?id=<?php echo $note['id']; ?>"><li><?php echo $note['title']; ?></li></a>
</ul>
<?php endforeach; ?>
<div class="w-full max-w-xs">
<?php
        if(isset($errors['title'])){
          echo "<div class='text-red-500'>".$errors['title']."</div>";
        }
        if(isset($errors['description'])){
          echo "<div class='text-red-500'>".$errors['description']."</div>";
        }
      ?>
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"  method="POST" action="/note/create">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Notes
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="note" type="text" placeholder="Enter a note title" name="title"
      value="<?php echo isset($_POST['title'])? $_POST['title']:
      ""
      ?>">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Description
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" type="text" placeholder="Enter a note description" name="description"
      value="<?php echo isset($_POST['description'])? $_POST['description']:
      ""
      ?>"
      >
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Create
      </button>
      
    </div>   

  </form>
  <p class="text-center text-gray-500 text-xs">
    &copy;2020 Acme Corp. All rights reserved.
  </p>
</div>
