<form>
	<input type="text" name="nome">
	<input type="date" name="nascimento">
	<input type="submit" name="ok">
</form>
<?php 
if (isset($_GET)){
	foreach ($_GET as $key => $value) {
		if ($key != "ok"){
		echo "Nome do campo: " . $key . "<br>";
		echo "Valor: ".$value;
		echo "<hr>";
		}
	}
}
 ?>