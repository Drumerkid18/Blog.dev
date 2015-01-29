<html>
<head>
	<title>Random Num</title>
</head>
<body>
	<p> <?= $randomNum; ?> </p>
	<?php if($randomNum == $guess): ?>
		<p> Your guess matches! </p>
	<? endif;?>
		<p> <?= $guess ?> </p>
</body>
</html>