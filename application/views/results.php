<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Skill Test</title>
	<link rel="icon" href="../favicon/favicon.ico" type="icon">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<h1>Quiz results!</h1>
	
	<?php $score =0; ?>
	
		<?php $array1= array(); ?>
		<?php $array2= array(); ?>
		<?php $array3= array(); ?>
		<?php $array4= array(); ?>
		<?php $array5= array(); ?>
		<?php $array6= array(); ?>
		<?php $array7= array(); ?>
		<?php $array8= array(); ?>

		<?php foreach($checks as $checkans) { ?>
			<?php array_push($array1, $checkans); } ?>
	
		<?php foreach($results as $res) { ?>
			<?php array_push($array2, $res->answer);
				  array_push($array3, $res->quizID);
				  array_push($array4, $res->questions);
				  array_push($array5, $res->choice1);
				  array_push($array6, $res->choice2);
				  array_push($array7, $res->choice3);
				  array_push($array8, $res->answer);
			} ?> 
			
	<?php for ($x=0; $x < 10; $x++) { ?>
	<form method="post" action="startnow">

	<p><?=$array3[$x]?>.<?=$array4[$x]?></p>

		<?php if ($array2[$x]!=$array1[$x]) { ?>

			<p><img src="../images/x.png" style="width:10px;height:10px;"><?=$array1[$x]?></p>
			<p><img src="../images/check.jpg" style="width:10px;height:10px;"><?=$array2[$x]?></p>

		<?php } else { ?>

			<p><img src="../images/check.jpg" style="width:10px;height:10px;"><?=$array1[$x]?></p>

		<?php $score = $score + 1; ?>

	<?php } }?><br />
	<h2>Your Score:</h2>
	<h1><?=$score ?></h1>
	<input type="submit" value="Take Again" class="btn btn-primary">
</form>
</div>
	<br />
</body>
</html>