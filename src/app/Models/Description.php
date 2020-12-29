<?php
declare(strict_types=1);

namespace App\Models;

/**
 * Class Description
 * @package App\Models
 */
final class Description
{

    /**
     * @var string
     */
    protected string $description;

    /**
     * Description constructor.
     * @param string $description
     */
    public function __construct(string $description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
}