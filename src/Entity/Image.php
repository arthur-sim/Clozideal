<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ImageRepository")
 */
class Image {

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Url;

    /**
     * @ORM\ManyToOne(targetEntity="Shoe")
     * @ORM\JoinColumn(nullable=false)
     */
    private $shoe;

    public function getId(): ?int {
        return $this->id;
    }

    public function getUrl(): ?string {
        return $this->Url;
    }

    public function setUrl(string $Url): self {
        $this->Url = $Url;

        return $this;
    }

}
