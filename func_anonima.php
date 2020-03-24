<?php 
function teste($callback){
	// processo lento

	$callback();
}

teste(function(){
	//envio de email 
	echo "terminou processo<br>";

});
// outro exemplo

$fn = function($a){
	var_dump($a);
};

$fn(42);

 ?>