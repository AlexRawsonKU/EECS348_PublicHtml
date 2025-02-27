<?php
// set a default row count
$rowCount = 10;
if (isset($_GET["count"]))
{
    $rowCount = $_GET["count"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <link rel='stylesheet' type='text/css' media='screen' href='profile.css'>
</head>
<body>
    <main>
        <h1>Dynamically Generated Multiplication Table</h1>
        <form method="get">
            <label for="nextRowCount">Number of Rows to Include</label>
            <input type="number" id="nextRowCount" name="count" />
            <input type="submit" />
        </form>
        <h2>Table</h2>
        <p>Printing a <?php echo $rowCount; ?> &times; <?php echo $rowCount; ?> table</p>
        <table>
        <?php 
        // print the top row
        echo '<tr>';
        for ($i=0; $i <= $rowCount; $i++) { 
            echo '<th scope="col">' . $i . "</th>";
        };
        echo '</tr>';
        // print the other rows
        for ($y=1; $y <= $rowCount; $y++) { 
            // start the row
            echo '<tr>';
            // add the header to the row
            echo '<th scope="row">' . $y . "</th>";
            // fill in the row
            for ($x=1; $x <= $rowCount; $x++) {
                echo "<td>" . $x * $y . "</td>";
            }
            // end the row
            echo '</tr>';
        };
        ?>
        </table>
    </main>
</body>
</html>