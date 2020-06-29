<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<style>
body{
	background: #3636dea6;
    color: #ffffff;
    font-size: 36px;
}
.con{
	display: flex;
    align-items: center;
    flex-flow: column;
	height: 95vh;
    justify-content: center;
}
.con p{
	padding:0;
	margin:10px;
}
</style>
</head>
<body>

<div class="con">
<p>Hello Sumanta</p>
<p><?php echo gethostname(); ?></p>

</div>

</body>
</html>