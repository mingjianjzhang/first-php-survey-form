<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title></title>
	<!-- Google Icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Jquery Theme -->
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/hot-sneaks/jquery-ui.css">
	<!-- Materialize CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
	<!-- Personal CSS -->
	<link rel="stylesheet" href="style.css">


	<!-- Less -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>


	<!-- Jquery --> 
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

    <!-- Materialize JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
	<script>
		$(document).ready(function(){
			$('select').material_select();
		});
	</script>
	
	<style>
	*{
		padding: 0;
		margin: 0;
	}
	body {
		padding-top: 40px;
	}
	form {
		margin-top: 40px;
		width: 50%;
		margin: 0 auto;
		border: 1px solid black;
		padding: 20px 30px;
	}
	</style>
</head>
<body>

	<form action="result.php" method="post">
		<div class="input-field">
			<i class="material-icons prefix">account_circle</i>
			<input id="name" type="text" name="name" class="validate">
			<label for="name"> Your Name </label>
		</div>
		<div class="input-field">
			<i class="material-icons prefix">location_on</i>
			<input id="location" type="text" name="location" class="validate">
			<label for="location"> Dojo Location </label>
		</div>
		<div class="input-field row">
			<select name="favorite_language">
				<option value="javascript" selected>Javascript</option>
				<option value="php">PHP</option>
				<option value="ruby">Ruby</option>
				<option value="Python">Python</option>
			</select>
			<label> Favorite Coding Language </label>
		</div>
		<div class="input-field">
			<textarea id="comments" class="materialize-textarea" name="comments"></textarea>
			<label for="comments"> Comments (optional): </label>
		</div>
		<div class="center-align">
			<button class="btn waves-effect waves-light center-align" type="submit"> Submit
				<i class="material-icons right">send</i>
			</button>
		</div>


	</form>

		
</body>
</html>