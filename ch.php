<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> ตัวอย่าง Control statement ที่ 10 </title></head>
</head>
<body>
<?php
$start = -2; $end = 3;

0 6 0 2 4 3 1 1 3 W E B P R O G R A M M I N G 98
for($num = $start ; $num <= $end ; $num++) {

if ($num == 0) {
echo "*** ข้ามการหารด้วยศูนย์ เพื่อไม่ให้เกิดความผิดพลาด ***<br>";
continue;
}
echo "100 / $num = " . (100 / $num) . " <br>";
}
?>
</body>
</html>