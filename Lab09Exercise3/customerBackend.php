<?php 
echo '<link rel = "stylesheet" type= "text/css" href = "myStyle.css">';

$prod1 = $_POST['product1'];
$prod2 = $_POST['product2'];
$prod3 = $_POST['product3'];

$numbers1 = $_POST['amount1'];
$numbers2= $_POST['amount2'];
$numbers3 = $_POST['amount3'];
$userName = $_POST['username'];
$passWord = $_POST['password'];
$shippingCost = $_POST['shipping'];
$itemCost = 0;

if($prod1 == "59.99")
{
    $item1Cost=$numbers1*59.99;
    $itemCost=$itemCost+$item1Cost;
}

if($prod2 == "219.99")
{
    $item2Cost=$numbers2*219.99;
    $itemCost=$itemCost+$item2Cost;
}

if($prod3 == "5.99")
{
    $item3Cost=$numbers3*5.99;
    $itemCost=$itemCost+$item3Cost;
}



$shippingtotalCost = 0;

if($shippingCost == "Free")
{
    $shippingtotalCost+=0;
}
if($shippingCost == "3 Days")
{
    $shippingtotalCost+=5.00;
}
if($shippingCost == "Overnight")
{
    $shippingtotalCost+=50.00;
}

$totalCost = $itemCost + $shippingtotalCost;

echo 'Welcome back ' . $userName .'!' .' Your password is:' . $passWord .'<br>';
echo "Your purchase went through! Below is your receipt for your items.";

echo "<table>";
echo "<tr>";
echo "<th></th>";
echo "<th>Quantity</th>";
echo "<th>Cost Per Item</th>";
echo "<th>Sub Total</th>";
echo "</tr>";
echo "<tr>";
echo "<th>Final Fantasy 7 Remake</th>";
echo "<td>" . $numbers1 . "</td>";
echo "<td>$59.99</td>";
echo "<td>$".$item1Cost."</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Fat Cat Plush</th>";
echo "<td>" . $numbers2 . "</td>";
echo "<td>$219.99</td>";
echo "<td>$".$item2Cost."</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Head Massager</th>";
echo "<td>" . $numbers3 . "</td>";
echo "<td>$5.99</td>";
echo "<td>$".$item3Cost."</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Shipping</th>";
echo "<td colspan='2'>".$shippingCost."</td>";
echo "<td>$".$shippingtotalCost."</td>";
echo "</tr>";
echo "<tr>";
echo "<th colspan='3'>Total Cost</th>";
echo "<th>$".$totalCost."</th>";
echo "</tr>";
echo "</table>";
?>