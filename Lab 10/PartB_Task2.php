<?php
$lines=fopen("New Text Document.txt", "w+");
echo($lines);

$result=fwrite($lines, "HELLO");
if ($result) {
	echo("Written Successfully");

}
else{
	echo ("Failure");
}
$lines=file("New Text Document.txt");
echo (implode($lines));
if (file_exists("text.txt")) {
	copy("text.txt", "16SW65.docx");
	echo "File Copied";
	rename("16SW65.docx", "document.docx");
	echo "File Renamed";
	unlink("document.docx");
	echo "File Deleted";
}
?>