<html>
<head>
	<title></title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
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
	});
</script>
<style type="text/css">

  #note {
    height: 200px;
    width: 200px;
    border: 1px solid black;
    display: inline-block;
    vertical-align: top;
  }



</style>
<body>
	<h2>My Posts:</h2>

<div id='box'>
<?php  
    
    foreach ($info as $key) 
            { ?>
                <div id='note'>
                    <?= $key['description'] ?>
                </div>
<?php   } ?>

</div>

  <h5>Add a note:</h5>
  <form id='text' action='posts/create' method='post'>
    <textarea name='text'></textarea>
    <input id="submit_button" type='submit' value='Post It!'>
  </form> 
 

</body>
</html>