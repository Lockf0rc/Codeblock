<!doctype html>
<!-- 
SERVER:http://www.scriptreference.com/test/Codeblock/elementtut.php
HTML5 template Element Tutorial JavaScript Programming -->
<!-- 
New consepts 
<template></template>
	
Data Storage
	Jason Object
	store data in arrays	

JavaScript
	document.querySelector('identifier') : Sets the reference of the Dom tree of the querySelector.
	.content.cloneNode(true) : Clone object or objects method
	.querySelectorAll('identifier'): brings the query to be the reference object in the selection
	.parentNode.appendchiled(obj): Selects the parentNode from whitch the object is called and it appends the object passthru
-->
<head>
<style></style>
<title></title>
<link rel="" href="">
<script></script>
</head>
<body>
	<template id="tmplt">
		<h2></h2>
		<p></p>
		<hr/>
	</template>	
<script>
	var arr=[
	{name:'Susan',country:'USA',age:27},
	{name:'John',country:'Canada',age:34},
	{name:'Kalaus',country:'Germany',age:23},
	{name:'Susan',country:'USA',age:27},
		];
	var template=document.querySelector('#tmplt');
	
	for (var i=0;i<arr.length;i++){
		var user= arr[i];
		var clone=template.content.cloneNode(true);<?/*use menthod content.cloneNode*/ ?>
		var h2= clone.querySelectorAll('h2');
		h2[0].innerHTML=user.name;<?/*Sets the first h2 tag in the template to jason object*/ ?>
		var p=clone.querySelectorAll('p');
		p[0].innerHTML="Conutry:"+user.country+"<br>Age: "+user.age;
		template.parentNode.appendChild(clone);
	}
	
</script>	
</body>
</html>