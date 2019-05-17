<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="{{ route('upload') }}" method="POST" enctype="multipart/formdata">
		@csrf
		<input type="file" name="file" id="">
		<input type="submit" value="Submit">
	</form>
</body>
</html>