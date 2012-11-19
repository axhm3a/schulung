<?php

$validEmail = 'foo@bar.de';
$inValidEmail = 'nothing@local';

var_dump(filter_var($validEmail, FILTER_VALIDATE_EMAIL));
var_dump(filter_var($inValidEmail, FILTER_VALIDATE_EMAIL));
