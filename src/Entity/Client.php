<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClientRepository::class)]
class Client
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column(length: 50)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 70)]
    private ?string $mdp = null;

    #[ORM\Column(length: 10)]
    private ?string $numTelephone = null;

    #[ORM\Column(length: 20)]
    private ?string $adresse_numero = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse_rue = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $adresse_complement = null;

    #[ORM\Column(length: 5)]
    private ?string $adresse_cp = null;

    #[ORM\Column(length: 60)]
    private ?string $adresse_ville = null;

    /**
     * @var Collection<int, Commande>
     */
    #[ORM\OneToMany(targetEntity: Commande::class, mappedBy: 'client')]
    private Collection $commandes;

    public function __construct()
    {
        $this->commandes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): static
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getNumTelephone(): ?string
    {
        return $this->numTelephone;
    }

    public function setNumTelephone(string $numTelephone): static
    {
        $this->numTelephone = $numTelephone;

        return $this;
    }

    public function getAdresseNumero(): ?string
    {
        return $this->adresse_numero;
    }

    public function setAdresseNumero(string $adresse_numero): static
    {
        $this->adresse_numero = $adresse_numero;

        return $this;
    }

    public function getAdresseRue(): ?string
    {
        return $this->adresse_rue;
    }

    public function setAdresseRue(string $adresse_rue): static
    {
        $this->adresse_rue = $adresse_rue;

        return $this;
    }

    public function getAdresseComplement(): ?string
    {
        return $this->adresse_complement;
    }

    public function setAdresseComplement(?string $adresse_complement): static
    {
        $this->adresse_complement = $adresse_complement;

        return $this;
    }

    public function getAdresseCp(): ?string
    {
        return $this->adresse_cp;
    }

    public function setAdresseCp(string $adresse_cp): static
    {
        $this->adresse_cp = $adresse_cp;

        return $this;
    }

    public function getAdresseVille(): ?string
    {
        return $this->adresse_ville;
    }

    public function setAdresseVille(string $adresse_ville): static
    {
        $this->adresse_ville = $adresse_ville;

        return $this;
    }

    /**
     * @return Collection<int, Commande>
     */
    public function getCommandes(): Collection
    {
        return $this->commandes;
    }

    public function addCommande(Commande $commande): static
    {
        if (!$this->commandes->contains($commande)) {
            $this->commandes->add($commande);
            $commande->setClient($this);
        }

        return $this;
    }

    public function removeCommande(Commande $commande): static
    {
        if ($this->commandes->removeElement($commande)) {
            // set the owning side to null (unless already changed)
            if ($commande->getClient() === $this) {
                $commande->setClient(null);
            }
        }

        return $this;
    }
}
