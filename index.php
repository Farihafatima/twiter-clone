<?php
$conn = mysqli_connect('localhost','root','',twitter);
  if (isset($_POST['btn'])) {
  	$message = null;

  	if(isset($_POST['message']) && !empty($_POST['message'])) {
  		else {
  			$message_error = 'this field is required';
  		}
  	}
  	$insert_sql = "INSERT INTO tweet(message) VALUES('$message')";
  	mysqli_query($conn,$insert_sql);
  	  }
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>twiter</title>
 	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

 </head>
 <body style="background-color:white;">
 <form method="post">
 	<div class="container my-3">
 		<center>
 		   <br><br> <h2 class="text-primary">Welcome to twitter clone</h2><br>
 		   <div>
 		   	<label class="text-primary"><h3>Text</h3></label><br>
 		   	<textarea name="message" rows="5" cols="30" placeholder="Comment text
 		   	<?php if(isset($message_error)) echo 'invalid'; ?>">">
 		   		<?php if(isset($message_error)): ?>
 		   	</textarea>
 		   	<br><br>
 		   	<span class="helper-text" data-error="<?= $message_error ?>"></span>
          	<?php endif; ?>
 		   </div>
 		    <button type="button" name="btn" class="btn btn-outline-primary">Tweets</button>
 		</center>
 	</div>
 </form>
 	    
 </body>
 </html>