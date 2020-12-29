<?php
/** @noinspection PhpUndefinedVariableInspection */
declare(strict_types=1);

use App\Http\Controllers\AddController;

$app->get('/test', AddController::class);