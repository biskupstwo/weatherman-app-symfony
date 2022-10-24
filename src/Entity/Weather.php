<?php

namespace App\Entity;

use App\Repository\WeatherRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WeatherRepository::class)]
class Weather
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Location $location = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 3, scale: '0')]
    public ?string $temp_c = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 3, scale: '0')]
    private ?string $perc_temp_c = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 3, scale: '0')]
    private ?string $visibility = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 3, scale: '0')]
    private ?string $wind_speed = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 3, scale: '0')]
    private ?string $rain_probability = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 4, scale: '0')]
    private ?string $pressure = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 2, scale: '0')]
    private ?string $uv_index = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLocation(): ?Location
    {
        return $this->location;
    }

    public function setLocation(?Location $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTempC(): ?string
    {
        return $this->temp_c;
    }

    public function setTempC(string $temp_c): self
    {
        $this->temp_c = $temp_c;

        return $this;
    }

    public function getPercTempC(): ?string
    {
        return $this->perc_temp_c;
    }

    public function setPercTempC(string $perc_temp_c): self
    {
        $this->perc_temp_c = $perc_temp_c;

        return $this;
    }

    public function getVisibility(): ?string
    {
        return $this->visibility;
    }

    public function setVisibility(string $visibility): self
    {
        $this->visibility = $visibility;

        return $this;
    }

    public function getWindSpeed(): ?string
    {
        return $this->wind_speed;
    }

    public function setWindSpeed(string $wind_speed): self
    {
        $this->wind_speed = $wind_speed;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getRainProbability(): ?string
    {
        return $this->rain_probability;
    }

    public function setRainProbability(string $rain_probability): self
    {
        $this->rain_probability = $rain_probability;

        return $this;
    }

    public function getPressure(): ?string
    {
        return $this->pressure;
    }

    public function setPressure(string $pressure): self
    {
        $this->pressure = $pressure;

        return $this;
    }

    public function getUvIndex(): ?string
    {
        return $this->uv_index;
    }

    public function setUvIndex(string $uv_index): self
    {
        $this->uv_index = $uv_index;

        return $this;
    }
}
