<?php

require 'Category.class.php';

class Posts
{


    private ?int $id = null;
    private string $titre;
    private string $description;
    private Category $category;

    public function __construct(string $titre, string $description)
    {
        $this->titre = $titre;
        $this->description = $description;
        $this->category = new Category('');
    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getCategory(): Category
    {
        return $this->category;
    }

    public function setCategory(string $category): void
    {
        $this->category = $category;
    }

    public function getID()
    {
        return $this->id;
    }

    public function setID(int $id)
    {
        return $this->id = $id;
    }

    public function hydrate(array $postsData): void
    {
        if (isset($postsData['post'])) {
            $this->titre = (string) $postsData['post'];
        }

        if (isset($postsData['description'])) {
            $this->description = (string) $postsData['description'];
        }

        if (isset($postsData['id'])) {
            $this->id = $postsData['id'];
        }

        if (isset($postsData['category'])) {
            $this->category->hydrate($postsData);
        }
    }
}
