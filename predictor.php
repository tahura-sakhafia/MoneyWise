<?php
use Phpml\Classification\RandomForest;
use Phpml\CrossValidation\StratifiedRandomSplit;
use Phpml\Dataset\ArrayDataset;
use Phpml\Metric\Accuracy;

require_once __DIR__ . '/vendor/autoload.php';

// Fetch stock data from Alpha Vantage API
$key = "WIZV5CWN0SFH53QG";
$url = "https://www.alphavantage.co/query?function=TIME_SERIES_DAILY_ADJUSTED&symbol=RELIANCE.BSE&outputsize=full&apikey=demo" . $key;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
$result = json_decode($result, true);

// Extract relevant data for training
$data = [];
$target = [];
if (isset($result['Time Series (Daily)'])) {
    foreach ($result['Time Series (Daily)'] as $key => $val) {
        $data[] = [$val['1. open'], $val['2. high'], $val['3. low']];
        $target[] = $val['4. close'] > $val['1. open'] ? 1 : 0; // Tomorrow's Close > Today's Open
    }
}

// Train and test split
$split = new StratifiedRandomSplit(new ArrayDataset($data, $target), 0.8);
$trainDataset = $split->getTrainSamples();
$trainLabels = $split->getTrainLabels();
$testDataset = $split->getTestSamples();
$testLabels = $split->getTestLabels();

// Train the model
$estimators = 100;
$minSamplesSplit = 100;
$randomState = 1;
$model = new RandomForest($estimators, $minSamplesSplit, $randomState);
$model->train($trainDataset, $trainLabels);

// Make predictions
$predictions = $model->predict($testDataset);

// Evaluate the model
$accuracy = Accuracy::score($testLabels, $predictions);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Stock Prediction</title>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        #customers tr:hover {
            background-color: #ddd;
        }
        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Stock Prediction</h1>
    <h3>Accuracy: <?php echo $accuracy; ?></h3>

    <table id="customers">
        <tr>
            <th>Date</th>
            <th>Open</th>
            <th>High</th>
            <th>Low</th>
        </tr>
        <?php foreach ($result['Time Series (Daily)'] as $key => $val) { ?>
        <tr>
            <td><?php echo $key; ?></td>
            <td><?php echo $val['1. open']; ?></td>
            <td><?php echo $val['2. high']; ?></td>
            <td><?php echo $val['3. low']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
