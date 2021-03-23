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
<script>
function openElink(elink) {
	window.open(elink, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=200,width=700,height=600");
}
</script>
<script src="https://d3js.org/d3.v6.js"></script>
<script src="drawchart.js"></script>
</head>
<body>
<?php 
foreach ($tickerarr as $value) {
	$value=strtoupper(trim($value));
	if ($value !='') {
	echo "<div class='tickerlinks'><h2>$value</h2><a onclick=\"openElink('https://finance.yahoo.com/quote/$value'); return false;\" href='https://finance.yahoo.com/quote/$value'>yahoo- $value</a><br>\n";
   echo "<a onclick=\"openElink('https://ycharts.com/companies/$value'); return false;\"  href='https://ycharts.com/companies/$value'>ycharts- $value</a><br>\n";
   echo "<a onclick=\"openElink('https://my.kiplinger.com/tfn/ticker.html?ticker=$value'); return false;\" href='https://my.kiplinger.com/tfn/ticker.html?ticker=$value'>kiplinger- $value</a><br>\n";
   echo "<a onclick=\"openElink('https://investorplace.com/stock-quotes/$value-stock-quote/'); return false;\" href='https://investorplace.com/stock-quotes/$value-stock-quote/'>Investorplace- $value</a><br>\n";
   echo "<a onclick=\"openElink('https://www.tradingview.com/symbols/$value'); return false;\" href='https://www.tradingview.com/symbols/$value'>tradingview- $value</a></div>\n";
   }
} 
?>
<form action='' name='frm' method='get'>
<textarea rows="30" name="tickers"><?php echo $tickers; ?></textarea>
<br>
<input type="submit" value="Get Links" >
</form>
</body>
</html>
