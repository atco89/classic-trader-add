<?php
declare(strict_types=1);

namespace App\Models;

use stdClass;

/**
 * Class Location
 * @package App\Models
 */
final class Location
{

    /**
     * @var string|null
     */
    protected ?string $postalCode;

    /**
     * @var string|null
     */
    protected ?string $city;

    /**
     * @var string|null
     */
    protected ?string $state;

    /**
     * @var string|null
     */
    protected ?string $street;

    /**
     * @var string|null
     */
    protected ?string $countryCode;

    /**
     * Location constructor.
     * @param stdClass $data
     */
    public function __construct(stdClass $data)
    {
        $this->postalCode = isset($data->postalCode) ? $data->postalCode : null;
        $this->city = isset($data->city) ? $data->city : null;
        $this->state = isset($data->state) ? $data->state : null;
        $this->street = isset($data->street) ? $data->street : null;
        $this->countryCode = isset($data->countryCode) ? $data->countryCode : null;
    }

    /**
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
}
