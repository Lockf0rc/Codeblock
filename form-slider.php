<!doctype html>
<!-- Server: http://www.scriptreference.com/test/Codeblock/form-slider.php 

Use an input tag
-->
<head>
<style></style>
<title></title>
<link rel="" href="">
<script>
function sliderChange(val){

$slider=document.getElementById('sliderStatus');
$slider.innerHTML=val;

}
</script>
</head>
<body>

<form>
	<input type="range" min="0" max="100" value="50" step="10" onChange="sliderChange(this.value)"/><br>
	Slider Value= <span id="sliderStatus">50</span>
	</form>

</body>
</html>