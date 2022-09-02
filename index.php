<?php
class Movie{
    private $title;
    private $director;
    private $image;

    /**
     * Movie Constructor
     * @param $title
     * @param $director
     * @param $image
     */

     function __construct($_title,$_director,$_image){
        
        $this->title = $_title;
        $this->director = $_director;
        $this->image = $_image;

     }

    public function getTitle(){
        return $this->title;
    } 

    public function getDirector(){
        return $this->director;
    }

    public function getImage(){
        return $this->image;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>