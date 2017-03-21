<?php
include 'index.php';
include 'connection.php';

$conn = connectToCinemasDb();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && (isset($_POST['payment_date']) 
        || isset($_POST['payment_after']) || isset($_POST['payment_before']))) {

    if (isset($_POST['payment_date'])) {
        $safeDate = $conn->real_escape_string($_POST['payment_date']);
        $sql = "SELECT * FROM payment WHERE payment_date = '$safeDate'";
    }

    if (isset($_POST['payment_after'])) {
        $safeDate = $conn->real_escape_string($_POST['payment_after']);
        $sql = "SELECT * FROM payment WHERE payment_date > '$safeDate'";
    }


    if (isset($_POST['payment_before'])) {
        $safeDate = $conn->real_escape_string($_POST['payment_before']);
        $sql = "SELECT * FROM payment WHERE payment_date < '$safeDate'";
    }

    $result = $conn->query($sql);

    foreach ($result as $row) {
        echo ("Data: " . $row['payment_date'] . "<br/>");
        echo ("Typ: " . $row['payment_type'] . "<br/>");
        echo ("ID: " . $row['id'] . "<br/><br/>");
    }
}

$conn->close();
$conn = null;
?>

<h3>wyszukaj płatność wg. daty</h3>
<form method="POST" action="">
    <input type="date" name="payment_date" placeholder="RRRR-MM-DD"/>
    <input type="submit" value="szukaj"/>
</form>
<br/><br/>

<h3>wyszukaj płatność po dacie</h3>
<form method="POST" action="">
    <input type="date" name="payment_after" placeholder="RRRR-MM-DD"/>
    <input type="submit" value="szukaj"/>
</form>
<br/><br/>

<h3>wyszukaj płatność przed datą</h3>
<form method="POST" action="">
    <input type="date" name="payment_before" placeholder="RRRR-MM-DD"/>
    <input type="submit" value="szukaj"/>
</form>
<br/><br/>

