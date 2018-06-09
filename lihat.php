<?php
echo "
<head>
    <title>My Guest Book</title>
</head>";
$fp = fopen("guestbook.txt","r");
echo "<table border=0>";
while ($isi = fgets($fp,80))
{
$pisah = explode("|",$isi);
echo "
<tr>
    <td>Nama </td>
    <td>: $pisah[0]</td>
</tr>";
echo "
<tr>
    <td>telepon </td>
    <td>: $pisah[1]</td>
</tr>";
echo "
<tr>
    <td>kartu </td>
    <td>: $pisah[2]</td>
</tr>";  
echo "
<tr>
    <td>email </td>
    <td>: $pisah[3]</td>
</tr>
<tr>
    <td>&nbsp;<hr>
    </td>
    <td>&nbsp;<hr>
    </td>
</tr>";
}
echo "</table>";
echo "<a href=tampilan.html> Klik Disini </a>Isi NO TELEPON";
?>