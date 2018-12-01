<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
    private $yearBegin;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
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
     * @ORM\Column(type="string", length=255)
     */
    private $size;

    /**
     * @ORM\Column(type="text", length=255)
     */
    private $material;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $labeling;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $source;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $collection;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $location;

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

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\MyliusLink", mappedBy="myliusart", orphanRemoval=true)
     */
    private $myliusLinks;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\MyliusLink", mappedBy="relation")
     */
    private $myliusLinks2;

    public function __construct()
    {
        $this->myliusLinks = new ArrayCollection();
        $this->myliusLinks2 = new ArrayCollection();
    }

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

    public function getYearBegin(): ?string
    {
        return $this->yearBegin;
    }

    public function setYearBegin(string $yearBegin): self
    {
        $this->yearBegin = $yearBegin;

        return $this;
    }

    public function getYearEnd(): ?string
    {
        return $this->yearEnd;
    }

    public function setYearEnd(string $yearEnd): self
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

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     * @return MyliusArt
     */
    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * @param mixed $material
     * @return MyliusArt
     */
    public function setMaterial($material)
    {
        $this->material = $material;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLabeling()
    {
        return $this->labeling;
    }

    /**
     * @param mixed $labeling
     * @return MyliusArt
     */
    public function setLabeling($labeling)
    {
        $this->labeling = $labeling;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param mixed $source
     * @return MyliusArt
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * @param mixed $collection
     * @return MyliusArt
     */
    public function setCollection($collection)
    {
        $this->collection = $collection;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     * @return MyliusArt
     */
    public function setLocation($location)
    {
        $this->location = $location;
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

    /**
     * @return Collection|MyliusLink[]
     */
    public function getMyliusLinks(): Collection
    {
        return $this->myliusLinks;
    }

    public function addMyliusLink(MyliusLink $myliusLink): self
    {
        if (!$this->myliusLinks->contains($myliusLink)) {
            $this->myliusLinks[] = $myliusLink;
            $myliusLink->setMyliusart($this);
        }

        return $this;
    }

    public function removeMyliusLink(MyliusLink $myliusLink): self
    {
        if ($this->myliusLinks->contains($myliusLink)) {
            $this->myliusLinks->removeElement($myliusLink);
            // set the owning side to null (unless already changed)
            if ($myliusLink->getMyliusart() === $this) {
                $myliusLink->setMyliusart(null);
            }
        }

        return $this;
    }
}
