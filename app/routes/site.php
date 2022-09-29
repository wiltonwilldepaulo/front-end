<?php

use app\controllers\Home;

$app->get('/home', Home::class . ":home");