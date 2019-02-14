<?php

$temp_path=$_FILES['uploadedfile']['tmp_name'];
echo ("temp path:".$_FILES['uploadedfile']['tmp_name']);
echo ("target path:".$_FILES['uploadedfile']['name']);
$target_name=$_FILES['uploadedfile']['name'];


if(move_uploaded_file($temp_path, $target_name))
{
	echo "File uploaded successfully";
}

else {
	echo "File can't be uploaded";
}

?>