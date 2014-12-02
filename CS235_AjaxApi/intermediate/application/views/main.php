<html>
<head>
  <title>Ajax Notes</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<style type="text/css">

  body {

  }

  .post textarea {
    width: 200px;
    height: 200px;
    display: block;
  }

  .post p {
   
  }

  .title {
    margin-top: 20px;
  }
</style>
<script type="text/javascript">
  $(document).ready(function(){ 
    // $('#submit_button').click();
    $("#text").on('submit', function(){
      $.post(
        $("#text").attr('action'),
        $("#text").serialize(),
        function(output){
            $('#box').html(output);
        }
      );
      return false;
    });

      $("#addtext").on('click', function(){
      $.post(
        $("#addtext").attr('action'),
        $("#addtext").serialize(),
        function(text){
          $('#textarea').html(text);
        }
      );
      return false;
    });
  });
</script>
<body>
  <div class='header'>
    <h4>Notes</h4>
  </div>

  <div id="box">
  <?php  
    foreach ($note as $key) 
    { ?>
      <div class='post'>
        <h3><?= $key['title'] ?></h3>
        <form id='addtext' action='/notes/addtext' method='post'>
          <p><a href="/notes/deleteNote/<?= $key['id'] ?>">delete</a></p>
          <textarea id='textarea'><?= $key['description'] ?></textarea>
          <input id='submit' type = 'submit'>
        </form>
      </div>
  <?php
      $this->session->set_userdata('id', $key['id']);
    }
  ?>
  </div>

  <div class='title'>
    <form id='text' action='/notes/addNote' method='post'>
      <input type='text' name='title'>
      <input type='submit' value='Add Note'>
    </form>
  </div>
</body>
</html>