<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
.info{
	width: 500px;
	height: 200px;
	margin:0 auto;
	color:#fff;
	background: blue;
	position: relative;
	font-size: 40px;


}


	</style>
</head>
<body style="background:#000">
	<div class="info">
	<? php 
	echo date('Y-m-d i:s'); 
    $array=("a","b","c","d");
    echo "<ul>";
    foreach ($array as $k => $v) {
    	echo "<li>{$v}</li>";
    }
       echo"</ul>";
	?>
	</div>
</body>
</html>