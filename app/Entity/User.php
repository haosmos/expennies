<?php
  
  declare(strict_types = 1);
  
  namespace App\Entity;
  
  use Doctrine\Common\Collections\Collection;
  use Doctrine\ORM\Mapping\Column;
  use Doctrine\ORM\Mapping\Entity;
  use Doctrine\ORM\Mapping\GeneratedValue;
  use Doctrine\ORM\Mapping\Id;
  use Doctrine\ORM\Mapping\OneToMany;
  use Doctrine\ORM\Mapping\Table;
  
  #[Entity, Table('users')]
  class User {
    #[Id, Column(options: ['unsigned' => true]), GeneratedValue]
    private int $id;
    
    #[Column]
    private string $name;
    
    #[Column]
    private string $email;
    
    #[Column]
    private string $password;
    
    #[Column(name: 'created_at')]
    private \DateTime $created_at;
    
    #[Column(name: 'updated_at')]
    private \DateTime $updated_at;
    
    #[OneToMany(mappedBy: 'user', targetEntity: Category::class)]
    private Collection $categories;
    
    #[OneToMany(mappedBy: 'user', targetEntity: Transaction::class)]
    private Collection $transactions;
    
    public function __construct() {
      $this->categories = new ArrayCollection();
      $this->transactions = new ArrayCollection();
    }
    
    public function getId(): int {
      return $this->id;
    }
    
    public function getEmail(): string {
      return $this->email;
    }
    
    public function setEmail(string $email): User {
      $this->email = $email;
      return $this;
    }
    
    public function getName(): string {
      return $this->name;
    }
    
    public function setName(string $name): User {
      $this->name = $name;
      return $this;
    }
    
    public function getPassword(): string {
      return $this->password;
    }
    
    public function setPassword(string $password): User {
      $this->password = $password;
      return $this;
    }
    
    public function getCreatedAt(): \DateTime {
      return $this->created_at;
    }
    
    public function setCreatedAt(\DateTime $created_at): User {
      $this->created_at = $created_at;
      return $this;
    }
    
    public function getUpdatedAt(): \DateTime {
      return $this->updated_at;
    }
    
    public function setUpdatedAt(\DateTime $updated_at): User {
      $this->updated_at = $updated_at;
      return $this;
    }
    
    public function getCategories(): Collection {
      return $this->categories;
    }
    
    public function addCategory(Category $category): User {
      $this->categories->add($category);
      return $this;
    }
    
    public function getTransactions(): Collection {
      return $this->transactions;
    }
    
    public function addTransactions(Transaction $transaction): User {
      $this->transactions->add($transaction);
      return $this;
    }
    
    
  }
