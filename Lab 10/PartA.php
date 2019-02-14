<?php
$lines=file_get_contents("text.txt");
echo "Words=".$lines."<br>";
echo str_word_count($lines)."<br>";
$arrwords=explode($lines, "text.txt");
echo count($arrwords)."<br>";
if (file_exists("text.txt")){
	copy("text.txt", "text.pdf");
	echo "Converted Successfully"."<br>";
}
$handle = fopen("text.txt" ,'a');
$data = '16SW65';
fwrite($handle, $data);
echo "Hello 16SW65";


?>