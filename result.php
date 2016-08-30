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
<!-- 	<link rel="stylesheet/less" type="text/css" href="styles.less">
 -->

	<!-- Less -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>


	<!-- Jquery --> 
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

    <!-- Materialize JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

	<script>
		$(document).ready(function() {
			$('.collapsible').collapsible({
				accordion: true
			});
		});
	</script>
</head>
<body>
	<h2>Submitted Information </h2>
	<ul class="collapsible" data-collapsible="accordion">
		<?php 
			function makePresentable($str) {
				$str = str_replace("_", " ", $str);
				$str = ucwords($str);
				return $str;
			}


			foreach($_POST as $key => $value) {
				echo "<li>".
					 "<div class='collapsible-header'>".makePresentable($key)."</div>".
					 "<div class='collapsible-body'>".$value."</div>".
					 "</li>";
			}
		?>
	</ul>
	
</body>
</html>
