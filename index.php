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

$movieOne = new Movie('Back to the Future','Robert Zemeckis','https://www.themoviedb.org/t/p/w500/fNOH9f1aA7XRTzl1sAOx9iF553Q.jpg');

$movieTwo = new Movie('Interstella 5555','Kazuhisa Takenouchi','https://m.media-amazon.com/images/I/81ZrcwqeAbL._AC_SY445_.jpg');
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
    <h1>
        Movies
    </h1>

    <ul>
        <li>
            <?php echo $movieOne->getTitle() ?>
        </li>
        <li>
            <?php echo $movieOne->getDirector() ?>
        </li>
         <img src=" <?php echo $movieOne->getImage() ?>" alt="">
    </ul>
    <ul>
        <li>
            <?php echo $movieTwo->getTitle() ?>
        </li>
        <li>
            <?php echo $movieTwo->getDirector() ?>
        </li>
         <img src=" <?php echo $movieTwo->getImage() ?>" alt="">
    </ul>
</body>
</html>