<?php

include 'timesession.php'; ?>
<html>
<head>
<?php
echo $_SESSION['time'];
$format = 10;
$format = $_SESSION['time'];
echo "$format";
// in this example
// $now = a unix timestamp of this very second
// $start is the date that you want the counter to start from sent over //as a unix timestamp
// $carbonsaving is the calculation that you want to perform to get //your base figure
// i.e. total saving = ((date now - start date)* growth rate) + base rate
// this gives us the starting saving all that needs to be done is increment it with javascript
?>

<script type="text/javascript">
var car = <?php print($format); ?>;
var rou
function incs()
{
car = car - 1;
rou = Math.round(car*100)/100
document.getElementById("carb").innerHTML=rou;
if (rou == 0) {
window.location.href="result.php";
}
}
</script>
</head>
<body onload="setInterval('incs()', 1000)">
<span id="carb"></span>
</body>
</html>
