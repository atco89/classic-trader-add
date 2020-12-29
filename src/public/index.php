<?php
declare(strict_types=1);

use DI\Container;
use Slim\Factory\AppFactory;

require_once __DIR__ . '/../vendor/autoload.php';
$settings = require_once __DIR__ . '/../config/app.php';

$container = new Container();
AppFactory::setContainer($container);

$app = AppFactory::create();

require_once __DIR__ . '/../bootstrap/dependencies.php';
require_once __DIR__ . '/../routes/web.php';
require_once __DIR__ . '/../routes/api.php';

$app->run();