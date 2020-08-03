<?php

namespace App\Entity;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="post")
 */
class Post
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
    private $chat_link;

    /**
     * @ORM\Column(type="text")
     */
    private $text;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="array")
     */
    private $reply;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getChatLink(): ?string
    {
        return $this->chat_link;
    }

    public function setChatLink(string $chat_link): self
    {
        $this->chat_link = $chat_link;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getDate(): ?DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getReply(): array
    {
        return $this->reply;
    }

    public function setReply(array $reply): self
    {
        $this->reply = $reply;

        return $this;
    }
}
