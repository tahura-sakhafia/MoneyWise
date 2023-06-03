<?php

include 'config.php';

session_start();

$email = $_SESSION['email'];

if(!isset($email)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
<?php include 'header.php'; ?>
    <title>Stock Market Page</title>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
</head>
<body>
    <h1>Stock Market Page</h1>
    
    <h2>Links</h2>
    <ul>
        <li><a href="sreliancebse.php">Reliance BSE, India</a></li>
        <li><a href="sibmusa.php">IBM, USA</a></li>
        <li><a href="sgpvcanada.php">Green Power Motor, Canada</a></li>
        <li><a href="sshz.php">Shopify, USA</a></li>
        <li><a href="stscouk.php">Tesco PLC, UK</a></li>
        
    </ul>

    <h2>Stock 1: Graph</h2>
    <div id="stock-graph"></div>

    <script>
        // JavaScript code to fetch and display stock data in a graph
        // Replace this code with your own logic to fetch and process data
        
        // Sample data for demonstration purposes
        const stock1Data = {
            dates: ['2023-05-01', '2023-05-02', '2023-05-03', '2023-05-04', '2023-05-05'],
            prices: [100, 105, 110, 108, 115]
        };
        
        // Creating the stock graph using Plotly
        const graphData = [{
            x: stock1Data.dates,
            y: stock1Data.prices,
            type: 'scatter',
            mode: 'lines+markers',
            marker: {
                color: 'blue'
            }
        }];

        const layout = {
            title: 'Stock 1 Price',
            xaxis: {
                title: 'Date'
            },
            yaxis: {
                title: 'Price'
            }
        };

        Plotly.newPlot('stock-graph', graphData, layout);
    </script>
</body>
</html>
<style>
/* CSS code for stock market web page */

/* Set body font and background */
body {
    font-family: Arial, sans-serif;
    background-color: #f1f1f1;
    margin: 0;
    padding: 20px;
}

/* Style page headings */
h1 {
    color: #333;
    text-align: center;
}

h2 {
    color: #555;
}

/* Style stock links */
ul {
    list-style-type: none;
    padding: 0;
}

li {
    margin-bottom: 10px;
}

a {
    color: #0066cc;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

/* Style stock graph */
#stock-graph {
    width: 100%;
    height: 400px;
    margin-top: 20px;
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
</style>