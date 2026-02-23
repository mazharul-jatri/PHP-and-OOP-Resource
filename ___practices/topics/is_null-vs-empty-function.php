<?php

$emptyString = '';

echo (is_null($emptyString) ? 'yes' : 'no') . PHP_EOL; // Output: no
echo (empty($emptyString) ? 'yes' : 'no') . PHP_EOL; // Output: yes


$nullvalue = null;
echo (is_null($nullvalue) ? 'yes' : 'no') . PHP_EOL; // Output: yes
echo (empty($nullvalue) ? 'yes' : 'no') . PHP_EOL; // Output: yes

$emptyArray = [];
echo (is_null($emptyArray) ? 'yes' : 'no') . PHP_EOL; // Output: no
echo (empty($emptyArray) ? 'yes' : 'no') . PHP_EOL; // Output: yes

$truthyAndFalsyValue = 0;
echo (is_null($truthyAndFalsyValue) ? 'yes' : 'no') . PHP_EOL; // Output: no
echo (empty($truthyAndFalsyValue) ? 'yes' : 'no') . PHP_EOL; // Output: yes
