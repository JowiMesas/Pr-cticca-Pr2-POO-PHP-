<?php

$inicial_balance = 400.0;
$actividadBanco1 = true;
$overdraftBanco1 = false;
echo"<h3> Bank Account 1 </h3>";
echo"My balance : ".number_format($inicial_balance, 1)." <br>";

$actividadBanco1 = false;
echo "My account is now ";
echo $actividadBanco1 ?"reopened <br>":"closed <br>";
$actividadBanco1 = true;
echo "My account is now ";
echo $actividadBanco1 ?"reopened <br>":"closed <br>";
echo"Doing transaction deposit (+150) with current balance ".number_format($inicial_balance,1)." <br>";

$inicial_balance += 150;
echo "My new balance after deposit (+150) : ".number_format($inicial_balance,1). "<br>";
echo"Doing transaction deposit (-25) with current balance ".number_format($inicial_balance,1)." <br>";
$inicial_balance -= 25;
echo "My new balance after deposit (-25) : ".number_format($inicial_balance,1). "<br>";
echo"Doing transaction deposit (-600) with current balance ".number_format($inicial_balance,1)." <br>";
if($inicial_balance - 600 <= 0) {
    echo "Error transaction: Insufficient balance to complete  the withdrawal. <br>";
    echo "My balance after failed last transaction " . number_format($inicial_balance) ."<br>";
}
$actividadBanco1 = false;
echo "My account is now ";
echo $actividadBanco1 ?"reopened <br>":"closed <br>";
 
echo "<br> <br> <br>";
echo "<h3> Bank Account 2 </h3>";
$inicial_balance2 = 200.0;
$actividadBanco2 = true;
$overdraftBanco2 = true;
$limitOverdraft = 100;
echo"My balance : ".number_format($inicial_balance2, 1)." <br>";
echo"Doing transaction deposit (+100) with current balance ".number_format($inicial_balance2,1)." <br>";
$inicial_balance2 += 100;
echo "My new balance after deposit (+100) : ".number_format($inicial_balance2,1). "<br>";
echo"Doing transaction withdrawal (-300) with current balance ".number_format($inicial_balance2,1)." <br>";
$inicial_balance2 -= 300;
echo "My new balance after withdrawal (-300) : ".number_format($inicial_balance2,1). "<br>";
echo"Doing transaction withdrawal (-50) with current balance ".number_format($inicial_balance2,1)." <br>";
if($limitOverdraft - 50 <= 0) {
echo "Error transaction: withdrawal exceeds overdraft limit <br>";
echo "My balance after failed last transaction : " .number_format($inicial_balance2,1)."<br>";
} else {
    $inicial_balance2 -= 50;
}
echo "My new balance after withdrawal (-50) : ".number_format($inicial_balance2,1). "<br>";
echo"Doing transaction withdrawal (-120) with current balance ".number_format($inicial_balance2,1)." <br>";

if($limitOverdraft - 120 <= 0) {
    echo "Error transaction: withdrawal exceeds overdraft limit <br>";
    echo "My balance after failed last transaction : " .number_format($inicial_balance2,1)."<br>";
} else {
    $inicial_balance2 -= 120;
}
echo"Doing transaction withdrawal (-20) with current balance ".number_format($inicial_balance2,1)." <br>";
if($limitOverdraft - 70 <= 0) {
    echo "Error transaction: withdrawal exceeds overdraft limit <br>";
    echo "My balance after failed last transaction : " .number_format($inicial_balance2,1)."<br>";
} else {
    $inicial_balance2 -= 20;
}
echo "My new balance after withdrawal (-20) with funds : ".number_format($inicial_balance2,1). "<br>";
$actividadBanco2 = false;
echo "My account is now ";
echo $actividadBanco2 ?"reopened <br>":"closed <br>";
echo "Error: Account is already closed.";
