<?php
class Website{
    public $title;
    function __construct($data){
        $this->title=$data;
        echo "Hello user";
    }
    public function head(){
        return "<h1>{$this->title}</h1>";
    }
}
class Blog extends Website {
    public $title;

    function __construct($data){
        $this->title=$data;
        echo "Hello Blog User";
    }
    public function page(){
        return "<h1>Welcome to  Page :: {$this->title}</h1>";
    }
}

// $team1=new Website("Collage");
// echo $team1->head();

// $team2=new Blog("Tech Blog");
// echo $team2->page();
//  advance extend
$app=new Blog("Tech Blog");
echo $app->head();
echo $app->page();
?>
