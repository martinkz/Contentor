<?php

$json_str = file_get_contents('php://input');

$json_obj = json_decode($json_str);

print_r($json_obj);
