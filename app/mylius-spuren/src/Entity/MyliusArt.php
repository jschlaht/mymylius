<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MyliusArtRepository")
 */
class MyliusArt
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $author;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $objectType;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $inventarNumber;

    /**
     * @ORM\Column(type="boolean")
     */
    private $newImage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $newImageName;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $yearBegin;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $yearEnd;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cityReference;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageType;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titleCollection;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titleImage;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $comments;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $latitude;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $longitude;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $latlngComment;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $newImageAuthorName;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getObjectType(): ?string
    {
        return $this->objectType;
    }

    public function setObjectType(string $objectType): self
    {
        $this->objectType = $objectType;

        return $this;
    }

    public function getInventarNumber(): ?string
    {
        return $this->inventarNumber;
    }

    public function setInventarNumber(string $inventarNumber): self
    {
        $this->inventarNumber = $inventarNumber;

        return $this;
    }

    public function getNewImage(): ?bool
    {
        return $this->newImage;
    }

    public function setNewImage(bool $newImage): self
    {
        $this->newImage = $newImage;

        return $this;
    }

    public function getNewImageName(): ?string
    {
        return $this->newImageName;
    }

    public function setNewImageName(?string $newImageName): self
    {
        $this->newImageName = $newImageName;

        return $this;
    }

    public function getYearBegin(): ?\DateTimeInterface
    {
        return $this->yearBegin;
    }

    public function setYearBegin(\DateTimeInterface $yearBegin): self
    {
        $this->yearBegin = $yearBegin;

        return $this;
    }

    public function getYearEnd(): ?\DateTimeInterface
    {
        return $this->yearEnd;
    }

    public function setYearEnd(\DateTimeInterface $yearEnd): self
    {
        $this->yearEnd = $yearEnd;

        return $this;
    }

    public function getImageDate(): ?string
    {
        return $this->imageDate;
    }

    public function setImageDate(string $imageDate): self
    {
        $this->imageDate = $imageDate;

        return $this;
    }

    public function getCityReference(): ?string
    {
        return $this->cityReference;
    }

    public function setCityReference(string $cityReference): self
    {
        $this->cityReference = $cityReference;

        return $this;
    }

    public function getImageType(): ?string
    {
        return $this->imageType;
    }

    public function setImageType(string $imageType): self
    {
        $this->imageType = $imageType;

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

    public function getTitleCollection(): ?string
    {
        return $this->titleCollection;
    }

    public function setTitleCollection(string $titleCollection): self
    {
        $this->titleCollection = $titleCollection;

        return $this;
    }

    public function getTitleImage(): ?string
    {
        return $this->titleImage;
    }

    public function setTitleImage(?string $titleImage): self
    {
        $this->titleImage = $titleImage;

        return $this;
    }

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function setComments(?string $comments): self
    {
        $this->comments = $comments;

        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(?float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(?float $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getLatlngComment(): ?string
    {
        return $this->latlngComment;
    }

    public function setLatlngComment(?string $latlngComment): self
    {
        $this->latlngComment = $latlngComment;

        return $this;
    }

    public function getNewImageAuthorName(): ?string
    {
        return $this->newImageAuthorName;
    }

    public function setNewImageAuthorName(?string $newImageAuthorName): self
    {
        $this->newImageAuthorName = $newImageAuthorName;

        return $this;
    }
}
