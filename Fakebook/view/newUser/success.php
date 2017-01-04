<form action="index.php" method="POST">
	<div class="form-group">
		<div class="input-group">
			<div class="input-group-addon">Pseudo:</div>
			<input type="text" name="id" class="form-control" placeholder="Pseudo" required="required">
		</div>
		<div class="input-group">
			<div class="input-group-addon">Mot de passe:</div>
			<input type="password" name="pw" class="form-control" placeholder="******" required="required">
		</div>
		<div class="input-group">
			<div class="input-group-addon">Nom:</div>
			<input type="text" name="name" class="form-control" placeholder="Nom">
		</div>
		<div class="input-group">
			<div class="input-group-addon">Prénom:</div>
			<input type="text" name="fname" class="form-control" placeholder="Prénom">
		</div>		
		<div class="input-group">
			<div class="input-group-addon">Date de naissance:</div>
			<input type="text" name="bd" pattern="[0-9]{2}/[0[1-9]]|[1[0-2]]/[0-9]{4}" class="form-control" placeholder="jj/mm/aaaa">
		</div>
	</div>
</form>
