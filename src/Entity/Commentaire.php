<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommentaireRepository::class)
 */
class Commentaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contenu;

    /**
     *
     * @ORM\ManyToOne (targetEntity=Publication::class) ?>
     * @ORM\JoinColumn(name="id_user", referencedColumnName="id")?
     */
    private $idUser;

    /**
     * @ORM\ManyToOne (targetEntity=Publication::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="id_pub", referencedColumnName="id")
     */
    private $idPub;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getIdUser(): ?string
    {
        return $this->idUser;
    }

    public function setIdUser(string $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getIdPub(): ?int
    {
        return $this->idPub;
    }

    public function setIdPub(int $idPub): self
    {
        $this->idPub = $idPub;

        return $this;
    }
}
