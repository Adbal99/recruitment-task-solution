<?php

use PragmaGoTech\Interview\Model\FeeCalculator;
use PragmaGoTech\Interview\Model\LoanProposal;

require_once "vendor/autoload.php";
if (!empty($_GET['amount']) && !empty($_GET['term'])) {
    $feeCalculator = null;
    try {
        $loanProposal = new LoanProposal((int)$_GET['term'], (float)$_GET['amount']);
        $feeCalculator = new FeeCalculator();
    } catch (\InvalidArgumentException $e) {
        echo $e->getMessage();
    }

    echo "<h1>{$feeCalculator->calculate($loanProposal)}</h1>";
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Made to check if calculates correctly</p>
<form action="App.php" method="get">
    <input type="number" placeholder="Loan value" name="amount" id="amount" step=".01"
           value="<?= empty($_GET['amount']) ? 1000 : $_GET['amount'] ?>">
    <select name="term" id="term">
        <option <?= $_GET['term'] === '12' ? "selected" : "" ?> value="12">12</option>
        <option <?= $_GET['term'] === '24' ? "selected" : "" ?> value="24">24</option>
    </select>
    <input type="submit" name="submit" value="calculate" id="amount">
</form>
</body>
</html>

