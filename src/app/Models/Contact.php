<?php
declare(strict_types=1);

namespace App\Models;

use stdClass;

/**
 * Class Contact
 * @package App\Models
 */
final class Contact
{

    /**
     * @var string|null
     */
    protected ?string $firstName;

    /**
     * @var string|null
     */
    protected ?string $lastName;

    /**
     * @var string|null
     */
    protected ?string $phone;

    /**
     * @var string|null
     */
    protected ?string $salutation;

    /**
     * @var string|null
     */
    protected ?string $companyName;

    /**
     * @var string|null
     */
    protected ?string $email;

    /**
     * Contact constructor.
     * @param stdClass $data
     */
    public function __construct(stdClass $data)
    {
        $this->firstName = isset($data->firstName) ? $data->firstName : null;
        $this->lastName = isset($data->lastName) ? $data->lastName : null;
        $this->phone = isset($data->phone) ? $data->phone : null;
        $this->salutation = isset($data->salutation) ? $data->salutation : null;
        $this->companyName = isset($data->companyName) ? $data->companyName : null;
        $this->email = isset($data->email) ? $data->email : null;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @return string|null
     */
    public function getSalutation(): ?string
    {
        return $this->salutation;
    }

    /**
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
}