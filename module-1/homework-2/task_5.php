<?php

$a = '';

var_dump(isset($a) !== true); // false

$a = null;

var_dump(is_null($a) !== false); // true


