<html>
<head>
	<title></title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<script type="text/javascript">
	$(document).ready(function(){	
		$("#email").on('keyup', function(){
			$.post(
				$("#submit").attr('action'),
				$("#submit").serialize(),
				function(output){
					// alert('hi');
					// console.log(output);
				// $.each(output, function(index, val) {
    //         $('<td>' + index + '</td>').appendTo($('#table'));
    //     });
					$('#display').html(output);
					// for(var i=0; i<output.length; i++)
					// {
					// 	$('#table').html('<tr><td>' + output[i]['email'] + '</td><td>' + output[i]['first_name'] + '</td><td>'+ output[i]['last_name'] + '</td></tr>');
					// }

				}
			);
			return false;
		});
	});
</script>
<style type="text/css">

table {
	border: 1px solid black;
	border-collapse: collapse;
}

td, th {
	border: 1px solid black;
}

</style>
<body>
	<form id='submit' action='/email/process' method='post'>
		<p>Email: <input id='email' type='text' name='email'></p>
		<!-- <input type='submit' name='submit'> -->
		<!-- <input type='hidden' name='action' value='submit'> -->
	</form>
	<div id='display'>
	</div>
</body>
</html>