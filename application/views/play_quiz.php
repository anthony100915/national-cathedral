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
	<h1>Play a quiz!</h1>
	<form method="post" action="results">
		
		<?php foreach($questionaire as $quiz) { ?>
	
		<?php $ans_array = array($quiz->answer, $quiz->choice1, $quiz->choice2, $quiz->choice3);
		shuffle($ans_array); ?>
		
		<br />
		<p><?=$quiz->quizID?>.<?=$quiz->questions?></p>

		<input type="radio" name="quizid<?=$quiz->quizID?>" value="<?=$ans_array[0]?>"><?=$ans_array[0]?><br />
		<input type="radio" name="quizid<?=$quiz->quizID?>" value="<?=$ans_array[1]?>"><?=$ans_array[1]?><br />
		<input type="radio" name="quizid<?=$quiz->quizID?>" value="<?=$ans_array[2]?>"><?=$ans_array[2]?><br />
		<input type="radio" name="quizid<?=$quiz->quizID?>" value="<?=$ans_array[3]?>"><?=$ans_array[3]?><br />
		
		<?php } ?><br />
	
		<input type="submit" value="Submit" class="btn btn-success">
	
	</form>
<br />
</div>
</body>
</html>