In Framework - Size
====================

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/kpicaza/size/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/kpicaza/size/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/kpicaza/size/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/kpicaza/size/?branch=master)
[![Build Status](https://travis-ci.org/kpicaza/size.svg?branch=master)](https://travis-ci.org/kpicaza/size)

Size is a value object used as a dependency in various packages at "In Framework".
 
It can be very useful for
different tasks like validations or as part of more complex objects.


## Installation

````
composer require infw/size
````

## Usage

````php
<?php

use InFw\Size\BaseSizeFactory as SizeFactory;

$min = 0;
$max = 100;
$value = 55;

$factory = new SizeFactory($min, $max);

/** @var InFw\Size\SizeInterface $size */
$size = $factory->make($value);

$size->get();

/** @var \InFw\Range\RangeInterface $range */
$range = $size->getRange();

````
