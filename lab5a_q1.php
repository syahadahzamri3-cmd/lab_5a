<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
    <style>
        table, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <?php 
        $name = "Noor Syahadah Zamri";
        $matric_number = "AI230037";
        $course = "Bachelor of Computer Science";
        $year_of_study = "3rd Year";
        $address = "Terengganu, Malaysia";
    ?>

    <h2>My Details</h2>
    <table>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td> 
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matric_number; ?></td> 
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td> 
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $year_of_study; ?></td> 
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td> 
        </tr>
    </table>
</body>
</html>
