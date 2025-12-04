<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
        function calculateArea($length, $width) {
            return $length * $width;
        }

        $length = 10;
        $width = 5;
        $area = calculateArea($length, $width);

        echo "<h2>Rectangle Area Calculator</h2>";
        echo "Length: $length <br>";
        echo "Width: $width <br>";
        echo "Area: $area";
    ?>
</body>
</html>
