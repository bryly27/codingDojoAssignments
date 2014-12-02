<html>
  <head>
  	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  	<style type="text/css">
  		input {
  			margin: 50px 0 0 400px;
  		}

  		#messages {
  			margin: 50px 0 0 100px;
  		}
  	</style>
	<script>
	  $(document).ready(function(){
	   $('#mainForm').submit(function(){
	    $.post( 
	      $('#mainForm').attr('action'),
	      $('#mainForm').serialize(),
	      function(output){
	        $('#messages').append("name: "+output.name+ " age: "+output.age+ "<br />");
	      }, "json"
	    );
	    return false;
	   });
	  });
</script>
  </head>

  <body>
    <form id='mainForm' action="/users/random" method="post">
      <input type="submit" value="Get a random user info" />
    </form>
    <div id="messages"></div>
  </body>  
</html>