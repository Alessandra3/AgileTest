<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
	<title>Question2</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/css/main.css">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/css/ie8.css">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/css/font-awesome.min.css">
	
	</head>
	<body class="homepage">
		<!-- Header -->
		<div id="header">
			<div class="inner"> 
				
				<P>
				<?php echo $question_item[0]['text']; ?><BR>
<!-- val -->	<?php echo validation_errors(); ?>
				<?php echo form_open('send_answer');?>
					<?php foreach ($question_item as $answer): ?>
						<input type="radio" name="question_ans" checked="checked" value="<?php echo $answer['count'] ?>"><?php echo $answer['definition'] ?><BR>
					<?php endforeach; ?>
					<input type="hidden" name="practice_num" value="<?php echo $_SESSION['practice_num'] ?>">
					<input type="hidden" name="question_num" value="<?php echo $question_item[0]['id_question'] ?>">
					<?php if($answer['id_question'] != 1) : ?>
						<a href="<?php echo 'question2/'.($answer['id_question']-1) ?>" class="button circled scrolly">&#8249;</a> 
					<?php endif; ?>
					<input type="submit" class="button circled scrolly" value="&#8250;">

				</form>
				</p>
				<br>
				<br>
				<br>
				<!-- <input type="submit" value="Send Form">
				<input type="reset" value="Clear Form">
				</form> -->
				 
			</div>

			<nav id="nav">
				<ul>
				<li><a href="index.html">Planning Game</a></li>
				</ul>
			</nav>
		</div>
	</body>
</html>