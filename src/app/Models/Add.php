<?php
declare(strict_types=1);

namespace App\Models;

/**
 * Class Add
 * @package App\Models
 */
final class Add
{

    /**
     * @var int
     */
    protected int $id;

    /**
     * @var string|null
     */
    protected ?string $description;

    /**
     * @var Car
     */
    protected Car $car;

    /**
     * @var Contact
     */
    protected Contact $contact;

    /**
     * @var Location
     */
    protected Location $location;

    /**
     * @var Image[]
     */
    protected array $images;

    /**
     * Add constructor.
     * @param int $id
     * @param string|null $description
     * @param Car $car
     * @param Contact $contact
     * @param Location $location
     * @param Image[] $images
     */
    public function __construct(int $id, ?string $description, Car $car, Contact $contact, Location $location, array $images)
    {
        $this->id = $id;
        $this->description = $description;
        $this->car = $car;
        $this->contact = $contact;
        $this->location = $location;
        $this->images = $images;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return Car
     */
    public function getCar(): Car
    {
        return $this->car;
    }

    /**
     * @return Contact
     */
    public function getContact(): Contact
    {
        return $this->contact;
    }

    /**
     * @return Location
     */
    public function getLocation(): Location
    {
        return $this->location;
    }

    /**
     * @return Image[]
     */
    public function getImages(): array
    {
        return $this->images;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode(get_object_vars($this));
    }
}
