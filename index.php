<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ใบงานที่ 3</title>
    <style>
        td { 
			width: 50%;
			vertical-align: top;
			padding: 10px;
		   }
        h3 { 
			font-size: 18px;
			margin-bottom: 20px;
		}
    </style>
</head>
<body>

<table>
    <tr>
        <td>
            <h3>ผลลัพธ์</h3>
            <?php
                $a = 3;
                $b = 4;
                $sum = $a + $b;

                echo "ค่าของ \$a คือ " . $a . "<br>";
                echo "ค่าของ \$b คือ " . $b . "<br>";
                echo "ผลรวมของ \$a และ \$b คือ " . $sum . "<br>";
            ?>
        </td>

        <td>
            <h3>ผลลัพธ์</h3>
            <?php
                $A = "B";
                $$A = 20.5;

                echo "\$A=" . $A . "<br>";
                echo "\$\$A=" . $$A . "<br>";
                echo "\$B=" . $B . "<br>";
            ?>
        </td>
    </tr>
</table>

</body>
</html>
