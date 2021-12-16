<?php

$config = require dirname(__DIR__) . "/config/example_config.php";

echo 100 * $config['base_price_multiplier'] * 3;