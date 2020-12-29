<?php
declare(strict_types=1);

namespace App\Models;

use stdClass;

/**
 * Class Image
 * @package App\Models
 */
final class Image
{

    /**
     * @var int|null
     */
    protected ?int $id;

    /**
     * @var string|null
     */
    protected ?string $url;

    /**
     * @var string|null
     */
    protected ?string $description;

    /**
     * @var int|null
     */
    protected ?int $position;

    /**
     * Image constructor.
     * @param stdClass $data
     */
    public function __construct(stdClass $data)
    {
        $this->id = isset($data->id) ? intval($data->id) : null;
        $this->url = isset($data->url) ? $data->url : null;
        $this->description = isset($data->description->de_DE) ? $data->description->de_DE : null;
        $this->position = isset($data->position) ? $data->position : null;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
}