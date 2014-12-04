<html>
<head>
  <title>Ajax Notes</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<style type="text/css">

  body {

  }

  /*.post textarea {
    width: 200px;
    height: 200px;
    display: block;
  }*/

  .post p {
   
  }

  .title {
    margin-top: 20px;
  }
</style>

<script type="text/javascript">
  $(document).ready(function(){ 

    $.post(
      "/notes/load",function(output){
        $('#box').html(output);
      });

    $("#text").on('submit', function(){
      var form = $(this);
      console.log(form);
      $.post(
        form.attr('action'),
        form.serialize(),
        function(output){
          $('#box').html(output);
        }
      );
      return false;
    });

     $(document).on('focusout', '.textarea', function(){
        var form = $(this).parent();
      $.post(
          form.attr('action'),
          form.serialize(),
        function(output){
          $('#box').html(output);
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
  </div>

  <div class='title'>
    <form id='text' action='/notes/addNote' method='post'>
      <input type='text' name='title'>
      <input type='submit' value='Add Note'>
    </form>
  </div>
</body>
</html>