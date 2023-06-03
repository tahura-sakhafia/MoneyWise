<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $amount = $_POST['amount'];
    $pin = $_POST['pin'];

    // Perform withdrawal logic here
//change this
    // Example withdrawal logic:
    if ($amount > 0 && $pin === '1234') {
        $message = 'Withdrawal successful!';
    } else {
        $message = 'Withdrawal failed. Please check the amount and PIN.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Withdrawal</h1>

    <form method="post" action="">
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" step="0.01" required>

        <label for="pin">PIN:</label>
        <input type="password" id="pin" name="pin" required>

        <button type="submit">Withdraw</button>
    </form>

    <div id="message">
        <?php if(isset($message)) echo $message; ?>
    </div>

    <script src="script.js"></script>
</body>
</html>