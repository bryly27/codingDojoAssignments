<?php  
  foreach ($note as $key) 
  { ?>
    <div class='post'>
        <h3><?= $key['title'] ?></h3>
        <form class='submitText' action='/notes/addtext' method='post'>
          <p><a href="/notes/deleteNote/<?= $key['id'] ?>">delete</a></p>
          <textarea class='textarea' name='description'><?= $key['description'] ?></textarea>
          <input id='hidden' name='hiddenId'type='hidden' value='<?= $key['id'] ?>'>
          <input type='submit' value='edit'>
        </form>
    </div>
<?php
  }
?>