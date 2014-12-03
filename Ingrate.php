<!doctype html>
<!-- 
Server:

Task: integrate Clone template with dropdown menu
 -->
<head>
<style>
body{
	margin:0px;
	}
#leftMenu{
	width:15%;
	min-width:150px;
	}
#leftMenu>details{

	}
#leftMenu>details>summary{
	cursor:pointer;
	background:#DFEFFF;
	Margin:6px;
	Padding:8px;
	}
#leftMenu>details>summary:hover{
	background:#EFEFEF;
	}
#leftMenu>details>a{
	display:block;
	text-decoration:none;
	color:#000;
	font-size:14px;
	margin:3px 6px 3px 18px;
	padding:4px;
	background:#efefef;
	}
#leftMenu>details>a:hover{
	background:#DFEFFF;
	font-weight:bold;
	}
</style>
<title></title>
<link rel="" href="">
<script>

</script>
</head>
<body>
<template id="temp">
	<div id="leftMenu">
		<details>
		<summary></summary>
		<a href="#"></a>
		<a href="#"></a>
		</details>
		
	</div>
</template>
 <script>
 //DATA JASON
 var arg=
 [
	{summary:"Template",a:"template",href:"http://www.scriptreference.com/test/Codeblock/elementtut.php"},
	{summary:"Dropdown Menu",a:"subCatagory 2",href:"http://www.scriptreference.com/test/Codeblock/dropdown.php"},
	{summary:"Slider",a:"input-element",href:"http://www.scriptreference.com/test/Codeblock/form-slider.php"},
	{summary:"Catagory 4",a:"subCatagory 4",href:""},
	{summary:"Catagory 5",a:"subCatagory 5",href:""},
 ];
 /* var voodo=
 [
	{summary:"First",a:"template",href:"#"},
	{summary:"Second",a:"subCatagory 2",href:"#"},
	{summary:"Panck",a:"vodo",href:"#"},
	{summary:"Forth",a:"subCatagory 4",href:"#"},
	{summary:"Fith",a:"subCatagory 5",href:"#"},
 ];
 */
 var  template=document.querySelector('#temp');
  
  //FUNCTION DECLARATION 
   var Itt = function($templ,$arr){
	 for(var i=0;i<$arr.length;i++){
	 var row=$arr[i];
	 var clone= $templ.content.cloneNode(true);
	 var summary= clone.querySelectorAll('div#leftMenu > details >summary');
		summary[0].innerHTML=row.summary;
	 var a= clone.querySelectorAll("div#leftMenu > details >a");
		a[0].innerHTML=row.a;
		a[0].href=row.href;
		
	 $templ.parentNode.appendChild(clone);
	

	 }
	 document.write("<hr>");
 
 }

 Itt(template,arg);
 
 Itt(template,voodo);
  
  
 </script>

</body>
</html>