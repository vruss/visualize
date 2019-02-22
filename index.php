<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
	<?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

	<?php include("includes/design-top.php"); ?>
	<!-- <?php include("includes/navigation.php"); ?> -->

	<div class="container" id="main-content">
		<h2>Stack</h2>
		<p>En stack fungerar engligt LIFO (Last in First out) principen.
			Det betyder att det senaste elementet som läggs till
			på stacken är det första som tas bort.</p>
		<ul class="list-unstyled">
			<li class="media">
				<img src="images/stackpush.gif" class="mr-3" alt="Stack push">
				<div class="media-body">
					<h4 class="mt-0 mb-1">Push</h4>
					<p>Push operationen lägger ett element först i stacken</p>
               <p>Exempel av Push operationen i olika språk:</p>
               <ul>
                  <li>Python: <code>stack.append(item)</code></li>
                  <li>Java: <code>stack.addElement(item);</code></li>
                  <li>C++: <code>stack.push(item);</code></li>
               </ul>
				</div>
			</li>
			<li class="media my-4">
				<img src="images/stackpop.gif" class="mr-3" alt="Stack pop">
				<div class="media-body">
					<h4 class="mt-0 mb-1">Pop</h4>
               <p>Pop operationen tar bort det översta elementet ur stacken</p>
               <p>Exempel av Push operationen i några olika språk:</p>
               <ul>
                  <li>Python: <code>stack.pop()</code></li>
                  <li>Java: <code>stack.pop();</code></li>
                  <li>C++: <code>stack.pop();</code></li>
               </ul>
				</div>
			</li>
			<li class="media">
				<img src="images/stackpeek.gif" class="mr-3" alt="Stack peek">
				<div class="media-body">
					<h4 class="mt-0 mb-1">Peek</h4>
               <p>Tittar på det översta elementet i stacken utan att ta bort det</p>
               <p>Exempel av Push operationen i olika språk:</p>
               <ul>
                  <li>Python: <code>stack[index]</code></li>
                  <li>Java: <code>stack.peek();</code></li>
                  <li>C++: <code>stack.top();</code></li>
               </ul>
				</div>
			</li>
		</ul>
	</div>

	<?php include("includes/footer.php"); ?>

</body>

</html>