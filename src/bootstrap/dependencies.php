<?php
/** @noinspection PhpUndefinedVariableInspection */
declare(strict_types=1);

use Slim\Views\Twig;
use Twig\Loader\FilesystemLoader;

$container->set('twig', function () use ($settings): Twig {
    return new Twig(new FilesystemLoader($settings['settings']['templatesPath']), ['cache' => false]);
});