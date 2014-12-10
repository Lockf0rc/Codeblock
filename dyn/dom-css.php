<!doctype html  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://ww.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<!-- comment -->
<head>
<title>document</title>
<meta http-equv="Content-Type" content="text/html";charset=utf-8"/>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script><!-- JQUARY REF -->
<style>
*{
 background-color:
margin:0px;
	}
	
#Body{
	background-color:<?php $N=(isset($_GET["color"])? $_GET["color"] : '#778866'); ECHO $N;?>;
	margin:0px;
	display:block;
padding:200px;
	}	
 #Body >form > *{
 background-color:#fff;
 width:10%;
 margin:10px;
 padding: 5px 4px ;
	}
	
#Body >form >input[type=checkbox] {
background-color: yellow;
 width:10px;

 padding:0px;
 margin:0px;
}	
.cblock{

width:70px;height:75px;
}

</style>
<link rel="" href="">

</head>
 <body>
	<div id="Body">
	<h1>Scriptreference CSS Background-colors</h1>
		<form action="dom-css.php">
			<lable>Background-color: </lable><input id="color" type="input" name="color" placeholder="<?php $N=(isset($_GET["color"])? $_GET["color"] : '#778866'); ECHO $N;?>"  />
		
				<input type="Submit"/><input id="colorK"type="Button" style="width='50px; padding:3px"value="Add Color"/>
			
			
		</form>
	</div>
	<div >
		<form>
			<lable>Size: </lable><input type="input" name="width" placeholder="Width" /></lable><input type="input" name="height" placeholder="height" />
			<div style="display:block;">
			<input type="Submit"/>
			
			</div>
			<lable style="Display:block;">Check</lable><input  type="checkbox" name="" value="vodo"></input>
		</form>	
	</div>
	<div class="Colors">
			<div class="cblock">
		
			</div>
	</div>	
 <script type="text/javascript">
var lsColor=[{name:"black",value:"#000"},
	{name:"navy",value:"#000080"},
	{name:"darkblue",value:"#00008b"},
	{name:"mediumblue",value:"#0000cd"},
	{name:"blue",value:"#0000ff"}];
$(document).ready(function(){
	$('.cblock').css({"background-color":"black","width":"70px","height":"75px"});
	$('#colorK').click(function(){
	
		
	 $('.Colors').append( "<div class='cblock' style='background-color:<?php $N=(isset($_GET["color"])? $_GET["color"] : '#778866'); ECHO $N;?>;width:70px;height:75px;'></div>");
			
	});

});
	

 </script>
 
</body>
</html>