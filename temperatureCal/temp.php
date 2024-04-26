<?php 

if (isset($_POST['submit'])) {
    $temp = $_POST['temp'];
    $units = $_POST['units'];

    if ($units == "C") {
        $result = $temp * 9 / 5+ 32;
    }
    else {
        $result = ($temp - 32) * 5 / 9;
    }

    echo "<div>";

    echo "The converted result is : " . $result;

    echo "</div>";
}

?>