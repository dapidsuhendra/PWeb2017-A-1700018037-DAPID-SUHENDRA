<?php
echo "<head><title>My Guest Book</head></title>";
$fp = fopen("guestbook.txt","a+");
fputs($fp,"$_POST[nama]|$_POST[telepon]|$_POST[status]|$_POST[email]\n");
fclose($fp);
echo "NO SUDAH TERSIMPAN DAN AMAN<br>";
echo "<a href=tampilan.html> Isi Buku TELEPON </a><br>";
echo "<a href=lihat.php> Lihat Buku TELEPON </a><br>";
?>