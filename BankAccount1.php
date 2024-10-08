<?php

$inicial_balance = 400.0;
$actividadBanco1 = true;
$overdraftBanco1 = false;
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

