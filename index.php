<?php
	$in = '';
	
	if (isset($_POST['in']) && !empty($_POST['in']))
	{
		$in = trim($_POST['in']);
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		
		<title>
			Spoon-Knife
		</title>
		
		<link href="styles.css" rel="stylesheet" type="text/css" />
		
		<script type="text/javascript">
			function closeMe()
			{
				document.getElementById('modal').style.display = 'none';
				document.getElementById('overlay').style.display = 'none';
			};
		</script>
	</head>
	
	<body>
		<div class="container">
<?php

	

?>
			<div
				class="modal effect-5"
				id="modal"
<?php
	if ($in != '')
	{
		echo 'style="display: block;"';
	}
	else
	{
		echo 'style="display: none;"';
	}
?>
			>
				<div class="content">
					<h3>
						Modal Dialog
					</h3>
					
					<div>
						<p id="msg">
							Fork me?! F<?php echo $in; ?>k you, @octocat!
						</p>
						
						<button class="button" onclick="closeMe();">
							Close
						</button>
					</div>
				</div>
			</div>
			
			<div
				class="overlay"
				id="overlay"
<?php
	if ($in != '')
	{
		echo 'style="display: block;"';
	}
	else
	{
		echo 'style="display: none;"';
	}
?>
			>
			</div>
			
			<form method="post" action="index.php">
				<label for="in">
					Type the 2 missing letters of the phrase...
				</label>
				
				<p id="msg">
					Fork me?! F<input type="text" class="nameIn" id="in" name="in" />k you, @octocat!
					<input type="submit" class="button" value="Go!" />
				</p>
			</form>
		</div>
	</body>
</html>
