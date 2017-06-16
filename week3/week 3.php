<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Retake class</title>

	</head>
<body>
	<?php if( !(isset($_POST['student_id']) && isset($_POST['name']))) { ?>
	<body background = "a.jpg">

	<header>
				<h1>Register your data</h1>
			</header>
			<div class="container">
				<form action="" method="POST">
					<div class="title required autofocus">Please entre your student ID</div>
					<input type="text" name="student_id" required/>
					<div class="title required">Please entre your name</div>
					<input type="text" name="name" required/>
					<div class="title">Comment</div>
					<input type="text" name="opition">
					<div><input type="submit" value="submit"></div>
				</form>
			</div>
			<footer>

			</footer>
		</div>
		<?php }else{?>
		<div class="wrapper bounceInDown animated">
			<header>
				<h1>Retake Class</h1>
			</header>
			<div class="container">
				Thanks you for your comment. Make sure your data：
				<ul>
					<li><span class="title">Name：</span><?php echo isset($_POST['name']) ? $_POST['name'] : "-please re-enter-" ?></li>
					<li><span class="title">Student ID：</span><?php echo isset($_POST['student_id']) ? $_POST['student_id'] : "-please re-enter-" ?></li>
					<li><span class="title">Comment：</span><?php echo isset($_POST['opition']) ? $_POST['opition'] : "-please re-enter-" ?></li>
					<?php
						if(isset($_SESSION['student_id'])){
							if($_SESSION['student_id'] == $_POST['student_id']){
								$_SESSION['times']++;
								if($_SESSION['times'] > 1){?>
					<li>Your data has been registered<?php echo $_SESSION['times']?>年</li>
								<?php }
							}else{
								$_SESSION['times'] = 1;
							}
						}
						$_SESSION['student_id'] = $_POST['student_id'];
					?>
				</ul>
				<div><input type="submit" value="BACK TO MAIN PAGE" onclick="javascript: history.back();" /></div>
			</div>
			<footer>

			</footer>
		</div>
		<?php }?>
</body>
</html>