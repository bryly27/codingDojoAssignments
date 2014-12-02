<?php  
  foreach ($note as $key) 
  { ?>
    <div class='post'>
        <h3><?= $key['title'] ?></h3>
        <form id='addtext' action='/notes/addtext' method='post'>
          <p><a href="/notes/deleteNote/<?= $key['id'] ?>">delete</a></p>
          <textarea id='textarea'><?= $key['description'] ?></textarea>
        </form>
      </div>
<?php
  }
?>