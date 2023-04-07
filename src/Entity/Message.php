<?php

namespace App\Entity;

use App\Repository\MessageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MessageRepository::class)]
class Message
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'messages')]
    private Collection $senderid;

    #[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'messages')]
    private Collection $receiverId;

    #[ORM\Column(length: 255)]
    private ?string $content = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $timestamp = null;

    public function __construct()
    {
        $this->senderid = new ArrayCollection();
        $this->receiverId = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, User>
     */
    public function getSenderid(): Collection
    {
        return $this->senderid;
    }

    public function addSenderid(User $senderid): self
    {
        if (!$this->senderid->contains($senderid)) {
            $this->senderid->add($senderid);
        }

        return $this;
    }

    public function removeSenderid(User $senderid): self
    {
        $this->senderid->removeElement($senderid);

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getReceiverId(): Collection
    {
        return $this->receiverId;
    }

    public function addReceiverId(User $receiverId): self
    {
        if (!$this->receiverId->contains($receiverId)) {
            $this->receiverId->add($receiverId);
        }

        return $this;
    }

    public function removeReceiverId(User $receiverId): self
    {
        $this->receiverId->removeElement($receiverId);

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getTimestamp(): ?\DateTimeInterface
    {
        return $this->timestamp;
    }

    public function setTimestamp(\DateTimeInterface $timestamp): self
    {
        $this->timestamp = $timestamp;

        return $this;
    }
}
