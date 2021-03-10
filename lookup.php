<?php
if (isset($_GET['tickers'])) {
    $tickers = $_GET['tickers'];

    $tickerarr = explode(
        "\n",
        str_replace(["\r\n", "\n\r", "\r", " "], "\n", $tickers)
    );

    foreach ($tickers as $fields) {
    }
} ?>


<!DOCTYPE html>
<html>
<head>
<style>
.tickerlinks {margin-bottom: 2em;}
.tickerlinks h2 {margin-bottom: 0;}
</style>
</head>
<body>
<?php foreach ($tickerarr as $value) {
    $value = strtoupper(trim($value));
    if ($value != '') {
        echo "<div class='tickerlinks'><h2>$value</h2><a href='https://finance.yahoo.com/quote/$value'>yahoo- $value</a><br>\n";
        echo "<a href='https://ycharts.com/companies/$value'>ycharts- $value</a><br>\n";
        echo "<a href='https://my.kiplinger.com/tfn/ticker.html?ticker=$value'>kiplinger- $value</a><br>\n";
        echo "<a href='https://www.tradingview.com/symbols/$value'>tradingview- $value</a></div>\n";
    }
} ?>
<form action='' name='frm' method='get'>
<textarea rows="30" name="tickers"><?php echo $tickers; ?></textarea>
<br>
<input type="submit" value="Get Links" >
</form>
</body>
</html>
