<?php  
    foreach ($task as $key ) 
        { ?>
          <form class='form' action='/task/edit' post='method'>
            <input type='submit' value='Edit'>
            <input class='checkbox' name='checkbox' type='checkbox'>
            <textarea id='checkbox' name='taskInfo'><?= $key['task'] ?></textarea>
            <input type='hidden' name='hiddenId' value='<?= $key['id'] ?>'>
            <a id='delete' href="/task/delete/<?= $key['id'] ?>">delete</a>
          </form>
<?php   } ?>  