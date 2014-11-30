<? $upload_file='upload_file.php'; ?>

<form action="$uploadF" method="post"enctype="multipart/form-data">
<lable for="file">Filename:</lable>
<input type="file" name="file" id="file"/>
<br/>
<input type="submit" name="submit" value="Submit"/> 
</form>

<? //handeler 
if($_FILES["file"]["error"]>0){
	echo "Error: ".$_FILES["file"]["error"]."<br/>";
	
}else{
	echo "Upload: ".$_FILES["file"]["name"]."<br/>";
	echo "Type: " .($_FILES["file"]["size"]/1024)."kb<br/>";
	echo "Stored in: ".$_FILES["file"]["tmp_name"];
}

?>