<?php
require_once 'config.php';

if (isset($_GET['id'])) {
    $id_chart = $_GET['id'];

    // Delete data from chart_data table
    $queryData = "DELETE FROM chart_data WHERE id_chartdata = '$id_chart'";
    $resultData = mysqli_query($conn, $queryData);

    // Delete data from chart table
    $queryChart = "DELETE FROM chart WHERE id_chart = '$id_chart'";
    $resultChart = mysqli_query($conn, $queryChart);

    if ($resultData && $resultChart) {
        // Redirect to the shopping cart page after deleting
        header("Location: chart.php");
        exit();
    } else {
        echo "Failed to delete the item from the shopping cart.";
    }
}
?>
