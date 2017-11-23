<?
	setcookie("myTime", date("h:i:s"));
	if (empty($_COOKIE["here"])) {
		setcookie("here",1);
		echo "Привіт";
	}
	else{
		$_COOKIE["here"]++;
		setcookie("here",$_COOKIE["here"]);
		echo "Привіт<br>";
		echo "Ви тут ".$_COOKIE["here"]."раз<br>";
		echo "Останній раз ви були о: " . $_COOKIE["myTime"];	
	}
?>