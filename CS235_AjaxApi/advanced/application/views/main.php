<html>
<head>
  <title></title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>

<!--               css                  -->
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

  .checked {
    color: red;
  }

</style>

<!--               jquery               -->

<script type="text/javascript">
  $(document).ready(function(){

    $.post(
      "/task/load",function(output){
        $('#tasks').html(output);
      });
//============ create note ===============


    $("#create").on('submit', function(){
      var form = $(this);
      console.log(form);
      $.post(
        form.attr('action'),
        form.serialize(),
        function(output){
          $('#tasks').html(output);
        }
      );
      return false;
    });

//==============check box==================

    $(document).on('click', '.checkbox', function(){
      $(this).siblings('textarea').toggleClass("checked");
    });

//===============edit========================
    $(document).on('submit', '.form', function(){
        var form = $(this);
      $.post(
          form.attr('action'),
          form.serialize(),
        function(output){
          $('#tasks').html(output);
        }
      );
      return false;
    });

//==================delete===================
    $(document).on('click', '#delete', function(){
      event.preventDefault();
        var form = $(this);
      $.post(
          form.attr('href'),
          form.serialize(),
        function(output){
          $('#tasks').html(output);
        }
      );
    });



  });
</script>

<body>
  <div class='header'>
    <h1>List of Tasks:</h1>
  </div>


  <div id='tasks'>

  </div>



  <div class='createTask'>
    <form id='create' action='/task/create' method='post'>
      <h5>Create a New Task:</h5>
      <input name='taskInfo' type='text'>
      <input type='submit' value='Add Task'>
    </form> 
  </div>
</body>
</html>