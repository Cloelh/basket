<?php get_header(); ?>



<form method="POST" action="">
	<select name="journee">
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
		<option>11</option>
	</select>
	<input type="submit" name="jouneechoisit">
</form>

<?php
	if (isset($_POST['jouneechoisit'])) {
		$journeechoisit=$_POST['journee'];
		calendrierchoisit($journeechoisit);
	}
	else {
		
		calendrier();
	}
?>




<h2>Classement</h2>
<?php classement(); ?>




<?php get_footer(); ?>