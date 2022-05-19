<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
class Project
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 128)]
    private $name;

    #[ORM\Column(type: 'date', nullable: true)]
    private $achievementDate;

    #[ORM\Column(type: 'string', length: 255)]
    private $clientName;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $websiteUrl;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $imagePath;

    #[ORM\Column(type: 'boolean')]
    private $devStatus;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAchievementDate(): ?\DateTimeInterface
    {
        return $this->achievementDate;
    }

    public function setAchievementDate(?\DateTimeInterface $achievementDate): self
    {
        $this->achievementDate = $achievementDate;

        return $this;
    }

    public function getClientName(): ?string
    {
        return $this->clientName;
    }

    public function setClientName(string $clientName): self
    {
        $this->clientName = $clientName;

        return $this;
    }

    public function getWebsiteUrl(): ?string
    {
        return $this->websiteUrl;
    }

    public function setWebsiteUrl(?string $websiteUrl): self
    {
        $this->websiteUrl = $websiteUrl;

        return $this;
    }

    public function getImagePath(): ?string
    {
        return $this->imagePath;
    }

    public function setImagePath(?string $imagePath): self
    {
        $this->imagePath = $imagePath;

        return $this;
    }

    public function getDevStatus(): ?bool
    {
        return $this->devStatus;
    }

    public function setDevStatus(bool $devStatus): self
    {
        $this->devStatus = $devStatus;

        return $this;
    }
}
