<?php

declare(strict_types=1);

require_once '../tools/dd.php';

dump(file_get_contents('php://input'));

dd($_POST);