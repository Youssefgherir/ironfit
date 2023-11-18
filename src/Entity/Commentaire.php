<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $descm = null;

    #[ORM\ManyToOne(inversedBy: 'commentaires')]
    private ?Publication $pubc = null;

    #[ORM\ManyToOne(inversedBy: 'commentaires')]
    private ?Utilisateur $userc = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescm(): ?string
    {
        return $this->descm;
    }

    public function setDescm(?string $descm): static
    {
        $this->descm = $descm;

        return $this;
    }

    public function getPubc(): ?Publication
    {
        return $this->pubc;
    }

    public function setPubc(?Publication $pubc): static
    {
        $this->pubc = $pubc;

        return $this;
    }

    public function getUserc(): ?Utilisateur
    {
        return $this->userc;
    }

    public function setUserc(?Utilisateur $userc): static
    {
        $this->userc = $userc;

        return $this;
    }
}
