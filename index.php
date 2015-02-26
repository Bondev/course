<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		$move = file_get_contents('movies.json');
		$sod =  json_decode($move,true);
			foreach ($sod['movies'] as $key => $value){
				echo $value["title"]."<br />" ;
				echo '<li> year: '.$value["year"].'</li>';
				echo '<li> year: '.$value["genre"].'</li>';
				echo '<li> year: '.$value["director"].'</li>';
			};
	?>

</body>
</html>
