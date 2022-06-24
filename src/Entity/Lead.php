<?php

namespace App\Entity;

use App\Repository\LeadRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LeadRepository::class)]
class Lead
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 20)]
    private $Nom;

    #[ORM\Column(type: 'string', length: 20)]
    private $Prenom;

    #[ORM\Column(type: 'integer')]
    private $id_statut;

    #[ORM\Column(type: 'string', length: 255)]
    private $adresse;

    #[ORM\Column(type: 'string', length: 255)]
    private $cp;

    #[ORM\Column(type: 'string', length: 255)]
    private $ville;

    #[ORM\Column(type: 'string', length: 255)]
    private $tel;

    #[ORM\Column(type: 'string', length: 255)]
    private $email;

    #[ORM\Column(type: 'date')]
    private $date;

    #[ORM\Column(type: 'string', length: 255)]
    private $situation_pro;

    #[ORM\Column(type: 'string', length: 255)]
    private $revenu_foyer;

    #[ORM\Column(type: 'string', length: 255)]
    private $commentaire;

    #[ORM\Column(type: 'string', length: 255)]
    private $restant_payer;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getIdStatut(): ?int
    {
        return $this->id_statut;
    }

    public function setIdStatut(int $id_statut): self
    {
        $this->id_statut = $id_statut;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCp(): ?string
    {
        return $this->cp;
    }

    public function setCp(string $cp): self
    {
        $this->cp = $cp;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getSituationPro(): ?string
    {
        return $this->situation_pro;
    }

    public function setSituationPro(string $situation_pro): self
    {
        $this->situation_pro = $situation_pro;

        return $this;
    }

    public function getRevenuFoyer(): ?string
    {
        return $this->revenu_foyer;
    }

    public function setRevenuFoyer(string $revenu_foyer): self
    {
        $this->revenu_foyer = $revenu_foyer;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getRestantPayer(): ?string
    {
        return $this->restant_payer;
    }

    public function setRestantPayer(string $restant_payer): self
    {
        $this->restant_payer = $restant_payer;

        return $this;
    }
}
