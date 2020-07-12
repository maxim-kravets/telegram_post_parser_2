<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Price
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $buy;

    /**
     * @ORM\Column(type="float")
     */
    private $sell;

    public function getId(): ?float
    {
        return $this->id;
    }

    public function getBuy(): ?float
    {
        return $this->buy;
    }

    public function setBuy(float $buy): self
    {
        $this->buy = $buy;

        return $this;
    }

    public function getSell(): ?float
    {
        return $this->sell;
    }

    public function setSell(float $sell): self
    {
        $this->sell = $sell;

        return $this;
    }
}
