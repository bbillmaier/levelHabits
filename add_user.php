<?php
	include 'header.php';
?>

<main>

	<div class="user_form_wrapper">
		<form action="add_user_to_db.php" method="post">
			<div class="input-field col s6">
				<input type="text" name="habiticaUID"> 
				<label for="habiticaUID">Habitica User ID</label>
			</div>
			<div class="input-field col s6">
				<input type="text" name="habiticaToken"> 
				<label for="habiticaToken">Habitica API Token</label>
			</div>
			<div class="input-field col s6">
				<input type="text" name="asanaUID"> 
				<label for="asanaUID">Asana User ID</label>
			</div>	

			<button class="btn waves-effect waves-light user_form_button" type="submit">Submit</button>

		</form>
	</div>

</main>

<?php
	include 'footer.php';
?>