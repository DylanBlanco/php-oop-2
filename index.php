<?php
include_once __DIR__ . "/traits/image.php";

// CLASS CATEGORY
class Category {
    public $name;
    public $icon;

    function __construct(string $name, string $icon) {
        $this->name = $name;
        $this->icon = $icon;
    }
}

// CLASS PRODUCT
class Product {
    private $title;
    private $price;
    private $image;
    private $category;

    function __construct(
        string $title,
        float $price,
        string $image,
        Category|null $category = null) {
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

// class food product
class Food extends Product {
    public $ingredients;

    use Image;

    function __construct(
        string $title,
        float $price,
        string $image,
        Category $category = null,
        string $ingredients = null,
        ) {
        parent::__construct($title, $price, $image, $category);
        $this->ingredients = $ingredients;
    }
}

// class toys product
class Toys extends Product {
    public $material;

    function __construct(
        string $title,
        float $price,
        string $image,
        Category $category = null,
        string $material = null,
        ) {
        parent::__construct($title, $price, $image, $category);
        $this->material = $material;
    }
}

// class petbed product
class Petbed extends Product {
    public $composition;

    function __construct(
        string $title,
        float $price,
        string $image,
        Category $category = null,
        string $composition = null,
        ) {
        parent::__construct($title, $price, $image, $category);
        $this->composition = $composition;
    }
}

// stampa category
$cani = new Category('Cani', '🐶');
$gatti = new Category('Gatti', '🐱');
var_dump($cani);
var_dump($gatti);

// stampa product
$prodGatti = new Product(
    'prodotto genrico per gatti',
    15.99,
    'https://images.pexels.com/photos/2071882/pexels-photo-2071882.jpeg?cs=srgb&dl=pexels-wojciech-kumpicki-1084687-2071882.jpg&fm=jpg',
    $gatti
);
var_dump($prodGatti);

// stampa cibo per gatti
$foodCat = new Food (
    'cibo per gatti',
    9.99,
    'https://images.pexels.com/photos/2071882/pexels-photo-2071882.jpeg?cs=srgb&dl=pexels-wojciech-kumpicki-1084687-2071882.jpg&fm=jpg',
    $gatti,
    'ingredienti cibo'
);
var_dump($foodCat);

// stampa cibo per cani
$foodDog = new Food (
    'cibo per cani',
    11.99,
    'https://images.pexels.com/photos/2071882/pexels-photo-2071882.jpeg?cs=srgb&dl=pexels-wojciech-kumpicki-1084687-2071882.jpg&fm=jpg',
    $cani,
    'ingredienti cibo'
);
var_dump($foodDog);

// stampa giochi per gatti
$toysCat = new Toys (
    'Giochi per gatti',
    14.99,
    'https://images.pexels.com/photos/2071882/pexels-photo-2071882.jpeg?cs=srgb&dl=pexels-wojciech-kumpicki-1084687-2071882.jpg&fm=jpg',
    $gatti,
    'gioco del gatto'
);
var_dump($toysCat);

// stampa giochi per cani
$toysDog = new Toys (
    'Giochi per cani',
    11.99,
    'https://images.pexels.com/photos/2071882/pexels-photo-2071882.jpeg?cs=srgb&dl=pexels-wojciech-kumpicki-1084687-2071882.jpg&fm=jpg',
    $gatti,
    'gioco del gatto'
);
var_dump($toysDog);

// stampa lettini per gatti
$petbedCats = new Petbed (
    'lettino per gatti',
    24.99,
    'https://images.pexels.com/photos/2071882/pexels-photo-2071882.jpeg?cs=srgb&dl=pexels-wojciech-kumpicki-1084687-2071882.jpg&fm=jpg',
    $gatti,
    'gioco del gatto'
);
var_dump($petbedCats);

// stampa lettini per cani
$petbedDogs = new Petbed (
    'lettino per cani',
    24.99,
    'https://images.pexels.com/photos/2071882/pexels-photo-2071882.jpeg?cs=srgb&dl=pexels-wojciech-kumpicki-1084687-2071882.jpg&fm=jpg',
    $cani,
    'gioco del gatto'
);
var_dump($petbedDogs);

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
        <main>
            <div class="container">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <img src="<?= $food->getImage() ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>