<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Simple Slide Panel</title>

<script type='text/javascript' src='jquery.js'></script>

<script type="text/javascript">
$(document).ready(function(){

	$("#qqq").click(function(){
		$("#panel").slideToggle("slow");
	});
	
	 
});
</script>

<style type="text/css">
body {
	margin: 0 auto;
	padding: 0;
	width: 570px;
	font: 75%/120% Arial, Helvetica, sans-serif;
}
a:focus {
	outline: none;
}
#panel {
	background: #754c24;
	height: 2000px;
	display: none;
}
.slide {
	margin: 0;
	padding: 0;
	border-top: solid 4px #422410;
	background: url(images/btn-slide.gif) no-repeat center top;
}
.btn-slide {
	background: url(images/white-arrow.gif) no-repeat right -50px;
	text-align: center;
	width: 144px;
	height: 31px;
	padding: 10px 10px 0 0;
	margin: 0 auto;
	display: block;
	font: bold 120%/100% Arial, Helvetica, sans-serif;
	color: #fff;
	text-decoration: none;
}
.active {
	background-position: right 12px;
}
</style>
</head>

<body>
sdlkjglasjga;lkjsdgl;asg<br>
<br>
<br>
<br>
sadjgal;ksgalskdjgl;asd
<div id="panel">
	sdhgjklaskgksbg<br>
sdhgashdgkjalskdjg<br>
shadfklhslkdfj
</div>

<p class="slide"><button id="qqq">Slide Panel</button></p>
</body>
</html>

