<html>
<body>
<p>Hello world!</p>
<p>Today is : <?=date("m.d.y")?></p>
<!--
<a href="readfile.php">Read File</a>
<br>
<a href="https://ozprv3z0gg.execute-api.eu-west-3.amazonaws.com/myFunction">Get Api</a>
-->
<form action="create.php" method="post">

<div class="form-group row">
	<label class="form-label">Comienzo del ciclo</label>
	<input type='date' name='start' class="form-control">
</div>
	<div class="form-group row">
				<div class="col-sm-12 mt-3">
					<button type="submit" name="submit" class="btn btn-primary btn-block">Aceptar</button>
				</div>
			</div>
</form>
</body>
</html>


