<?php
declare(strict_types=1);

namespace App\Models;

/**
 * Class Engine
 * @package App\Models
 */
final class Engine
{

    /**
     * @var int
     */
    protected int $horsepower;

    /**
     * @var int
     */
    protected int $cubicCapacity;

    /**
     * @var string
     */
    protected string $manufacturerCode;

    /**
     * @var string
     */
    protected string $steering;

    /**
     * @var int
     */
    protected int $cylinder;

    /**
     * @var string
     */
    protected string $gearbox;

    /**
     * @var int
     */
    protected int $gears;
}