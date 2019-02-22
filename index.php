<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
	<?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

	<?php include("includes/design-top.php"); ?>
	<?php include("includes/navigation.php"); ?>

	<div class="container" id="main-content">
		<h2>Stack</h2>
		<p>En stack fungerar engligt LIFO (Last in First out) principen.
			Det betyder att det senaste elementet som läggs till 
			på stacken är det första som tas bort.</p>
		<ul class="list-unstyled">
			<li class="media">
				<img src="images/stackpush.gif" class="mr-3" alt="Stack pop">
				<div class="media-body">
					<h5 class="mt-0 mb-1">Push</h5>
					<p>Push operationen lägger ett element först i stacken</p>
				</div>
			</li>
			<li class="media my-4">
				<img src="images/stackpop.gif" class="mr-3" alt="...">
				<div class="media-body">
					<h5 class="mt-0 mb-1">Pop</h5>
					<p>Pop operationen tar bort det översta elementet ur stacken</p>
				</div>
			</li>
			<li class="media">
				<img src="images/stackpeek.gif" class="mr-3" alt="...">
				<div class="media-body">
					<h5 class="mt-0 mb-1">Peek</h5>
					<p>Tittar på det översta elementet i stacken utan att ta bort det</p>
				</div>
			</li>
		</ul>
	</div>

	<?php include("includes/footer.php"); ?>

</body>

</html>