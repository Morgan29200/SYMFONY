<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\MappedSuperclass;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BaseRepository")
 */
class Base
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
    private $created_at;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $deleted_at;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_active;

	public function __construct()
	{
	$this->created_at = new \Doctrine;
	$this->enabled = 0;
	}
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreatedAt(): ?string
    {
        return $this->created_at;
    }

    public function setCreatedAt(string $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getDeletedAt(): ?string
    {
        return $this->deleted_at;
    }

    public function setDeletedAt(string $deleted_at): self
    {
        $this->deleted_at = $deleted_at;

        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->is_active;
    }

    public function setIsActive(bool $is_active): self
    {
        $this->is_active = $is_active;

        return $this;
    }
}
