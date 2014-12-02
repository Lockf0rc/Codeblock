<!doctype html>
<!-- SERVER:http://scriptreference.com/test/Codeblock/ann/animation.php
CSS:https://www.youtube.com/watch?v=Pu764cj2m4g
-->
<head>
<style>
#me{
	background:url(http://payload23.cargocollective.com/1/6/200359/2773164/player.png);
	width:95px;
	height:130px;
	-webkit-animation:walk-east 1s steps(7) infinite;
	animation:walk-east 1s steps(7) infinite;
	}
@-webkit-keyframes walk-east{
	from{background-position:0px;}
	to{background-position:-670px;}
@keyframes walk-east{
	from{background-position:0px;}
	to{background-position:-670px;}
	}/*add other prefixes to support other browsers*/
</style>
<title></title>
<link rel="" href="">
<script></script>
</head>
<body>
<h1>TEST</h1>
<div id="me"></div>

</body>
</html>