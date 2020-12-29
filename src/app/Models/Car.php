<?php
declare(strict_types=1);

namespace App\Models;

use stdClass;

/**
 * Class Car
 * @package App\Models
 */
final class Car
{

    /**
     * @var string|null
     */
    protected ?string $make;

    /**
     * @var string|null
     */
    protected ?string $model;

    /**
     * @var string|null
     */
    protected ?string $specification;

    /**
     * @var string|null
     */
    protected ?string $body;

    /**
     * @var string|null
     */
    protected ?string $bodyDetailed;

    /**
     * @var int|null
     */
    protected ?int $yearOfProduction;

    /**
     * Car constructor.
     * @param stdClass $car
     * @param int $yearOfProduction
     */
    public function __construct(stdClass $car, int $yearOfProduction)
    {
        $this->make = isset($car->make) ? $car->make : null;
        $this->model = isset($car->model) ? $car->model : null;
        $this->specification = isset($car->specification) ? $car->specification : null;
        $this->body = isset($car->body) ? $car->body : null;
        $this->bodyDetailed = isset($car->bodyDetailed) ? $car->bodyDetailed : null;
        $this->yearOfProduction = $yearOfProduction;
    }

    /**
     * @return string|null
     */
    public function getMake(): ?string
    {
        return $this->make;
    }

    /**
     * @return string|null
     */
    public function getModel(): ?string
    {
        return $this->model;
    }

    /**
     * @return string|null
     */
    public function getSpecification(): ?string
    {
        return $this->specification;
    }

    /**
     * @return string|null
     */
    public function getBody(): ?string
    {
        return $this->body;
    }

    /**
     * @return string|null
     */
    public function getBodyDetailed(): ?string
    {
        return $this->bodyDetailed;
    }

    /**
     * @return int|null
     */
    public function getYearOfProduction(): ?int
    {
        return $this->yearOfProduction;
    }
}
