<?php

class Category {
    public $name;
    public $icon;

    function __construct(string $name, string $icon) {
        $this->name = $name;
        $this->icon = $icon;
    }
}

class Product {
    public $title;
    public $price;
    public $image;
    public $category;

    function __construct(
        string $title,
        float $price,
        string $image,
        Category $category = null) {
        $this->title = $title;
        $this->price = $price;
        $this->image = $image;
        $this->setCategory($category);
    }
    
    public function getCategory() {
        return $this->category;
    }
    
    public function setCategory(Category|null $category) {
        $this->category = $category;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP OOP 2</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        
        <header class="py-4 mb-4">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1>
                            PHP OOP 2
                        </h1>
                    </div>
                </div>
            </div>
        </header>
    </body>
</html>