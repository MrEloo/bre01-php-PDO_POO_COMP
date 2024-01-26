<?php

class Category
{


    private ?int $id = null;
    private string $categorie;

    public function __construct(string $categorie)
    {
        $this->categorie = $categorie;
    }

    public function getCategory(): string
    {
        return $this->categorie;
    }

    public function setCategory(string $categorie): void
    {
        $this->categorie = $categorie;
    }

    public function hydrate($postData): void
    {
        if (isset($postData['category'])) {
            $this->categorie = (string) $postData['category'];
        }
    }
}
