<html>
<head>
  <title></title>
</head>

<style type="text/css">
  p{
    display: inline-block;
  }
  .tasks {
    display: inline-block;
  }
  .createTask {
    display: inline-block;
    vertical-align: top;
    margin-left: 200px;
  }
</style>

<body>
  <div class='header'>
    <h1>List of Tasks:</h1>
  </div>
  <div class='tasks'>
<?php  
    foreach ($task as $key ) 
        { ?>
          <form action='/task/edit' post='method'>
            <input type='submit' value='Edit'>
            <input type='checkbox'>
            <p name='taskInfo'><?= $key['task'] ?></p>
            <a href="/task/delete/<?= $key['id'] ?>">delete</a>
          </form>
<?php   } ?>  
  </div>
  <div class='createTask'>
    <form action='/task/create' method='post'>
      <h5>Create a New Task:</h5>
      <input name='taskInfo' type='text'>
      <input type='submit' value='Add Task'>
    </form> 
  </div>
</body>
</html>