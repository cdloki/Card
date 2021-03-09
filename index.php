<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php 
	echo "Chào bạn".$_POST["name"],"email của bạn là".$_POST["email"];
	?>
</head>
<body>
<form  type="post">
<label>Nhập họ tên:</label>
<input name="name" type="text"></input>
<label>Nhập Địa chỉ email:</label>
<input name="email" type="text"></input>
<button type="submit"> GỬi </button>
</form>
</body>
</html>