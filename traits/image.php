<?php
    trait Image {
        public $img_url;

        public function getImage(){
            return 'https://www.petdetective.it/wp-content/uploads/2016/04/gatto-toilette.jpg';
        }

        public function setImage($imageUrl) {
            $this-> img_url = $imageUrl;
        }
    }
?>