<?php
require 'vendor/autoload.php';

use Codes50\PasswordGenerator;

$password_generator = new PasswordGenerator();

echo $password_generator::Basic();
echo "\n";
echo $password_generator::Medium();
echo "\n";
echo $password_generator::Complex();
echo "\n";
echo $password_generator::Create(PasswordGenerator::MODE_BASIC);
echo "\n";
echo $password_generator::Create(PasswordGenerator::MODE_MEDIUM);
echo "\n";
echo $password_generator::Create(PasswordGenerator::MODE_COMPLEX);
echo "\n";
echo $password_generator::Medium(10);
echo "\n";
echo $password_generator::Complex(20);
