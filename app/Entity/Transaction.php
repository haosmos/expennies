<?php
  
  namespace App\Entity;

  use Doctrine\Common\Collections\Collection;
  use Doctrine\DBAL\Types\Types;
  use Doctrine\ORM\Mapping\Column;
  use Doctrine\ORM\Mapping\Entity;
  use Doctrine\ORM\Mapping\GeneratedValue;
  use Doctrine\ORM\Mapping\Id;
  use Doctrine\ORM\Mapping\ManyToOne;
  use Doctrine\ORM\Mapping\OneToMany;
  use Doctrine\ORM\Mapping\Table;
  
  #[Entity, Table('transactions')]
  class Transaction {
    #[Id, Column(options: ['unsigned' => true]), GeneratedValue]
    private int $id;
    
    #[Column]
    private string $description;
    
    #[Column]
    private \DateTime $date;
    
    #[Column(name: 'amount', type: Types::DECIMAL, precision: 13, scale: 3)]
    private string $amount;
    
    #[Column(name: 'created_at')]
    private \DateTime $created_at;
    
    #[Column(name: 'updated_at')]
    private \DateTime $updated_at;
    
    #[ManyToOne(inversedBy: 'transactions')]
    private Category $category;
    
    #[ManyToOne(inversedBy: 'transactions')]
    private User $user;
    
    #[OneToMany(mappedBy: 'transaction', targetEntity: Receipt::class)]
    private Collection $receipts;
    
    public function __construct() {
      $this->receipts = new ArrayCollection();
    }
    
    public function getId(): int {
      return $this->id;
    }
    
    public function getDescription(): string {
      return $this->description;
    }
    
    public function setDescription(string $description): Transaction {
      $this->description = $description;
      return $this;
    }
    
    public function getDate(): \DateTime {
      return $this->date;
    }
    
    public function setDate(\DateTime $date): Transaction {
      $this->date = $date;
      return $this;
    }
    
    public function getAmount(): string {
      return $this->amount;
    }
    
    public function setAmount(string $amount): Transaction {
      $this->amount = $amount;
      return $this;
    }
    
    public function getCreatedAt(): \DateTime {
      return $this->created_at;
    }
    
    public function setCreatedAt(\DateTime $created_at): Transaction {
      $this->created_at = $created_at;
      return $this;
    }
    
    public function getUpdatedAt(): \DateTime {
      return $this->updated_at;
    }
    
    public function setUpdatedAt(\DateTime $updated_at): Transaction {
      $this->updated_at = $updated_at;
      return $this;
    }
    
    public function getCategory(): Category {
      return $this->category;
    }
    
    public function setCategory(Category $category): Transaction {
      $category->addTransaction($this);
      $this->category = $category;
      return $this;
    }
    
    public function getUser(): User {
      return $this->user;
    }
    
    public function setUser(User $user): Transaction {
      $user->addTransaction($this);
      $this->user = $user;
      return $this;
    }
    
    public function getReceipts(): Collection {
      return $this->receipts;
    }
    
    public function addReceipts(Receipt $receipt): Transaction {
      $this->receipts->add($receipt);
      return $this;
    }
    
    
  }
