# PHP Password Generator

[![Latest Version](https://img.shields.io/packagist/v/codes50/password-generator.svg?style=flat-square)](https://packagist.org/packages/codes50/password-generator)
[![Packagist](https://img.shields.io/packagist/dm/codes50/password-generator.svg)](https://packagist.org/packages/codes50/password-generator)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)


## Requires
* php: >=7.1

## Install

Install latest version using [composer](https://getcomposer.org/).

``` bash
$ composer require codes50/password-generator
```

## Usage

* Multiple Usage

``` php
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
```
**print:**
```
470036
74NZ4RLN
jbzKaYS41eZ8
S4YQSBNG
i5t8bZ8mg7Pr
236632
KQA4HZ9ZCN
kZjuwQro8Hkkkn5PtuoB
```
