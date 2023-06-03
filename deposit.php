<?php
include 'config.php';
// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the amount from the form
    $amount = $_POST["amount"];

    // Validate the amount
    if (empty($amount)) {
        $message = "Please enter an amount.";
    } else if ($amount <= 0) {
        $message = "Amount must be greater than zero.";
    } else {
        // Perform the deposit action
        // Replace this with your own logic to handle the deposit

        // Example: Update the account balance
        $balance = 1000; // Initial balance
        $balance += $amount; // Deposit the amount

        // Update the account balance in the database
        $sql = "UPDATE accounts SET balance = balance + $amount WHERE id = 1"; // Assuming the account is identified by id 1
        if ($conn->query($sql) === TRUE) {
            $message = "Deposit of $amount successful. New balance: $balance";
        } else {
            $message = "Error updating balance: " . $conn->error;
        }
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
<?include 'header.php';
?>
</head>
<body>

    <h1>Deposit</h1>

    <form id="depositForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" step="100" required>

        <button type="submit">Deposit</button>
    </form>

    <script src="script.js"></script>
</body>
</html>
<style> body {
  font-family: Arial, sans-serif;
  background-color: #f1f1f1;
  padding: 20px;
}

h1 {
  text-align: center;
  margin-bottom: 20px;
}

form {
  max-width: 400px;
  margin: 0 auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
}

input[type="number"] {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}

button[type="submit"] {
  display: block;
  width: 100%;
  padding: 10px;
  margin-top: 20px;
  font-size: 16px;
  color: #fff;
  background-color: #4caf50;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}
</style>