<?php 

class Post 
{
    public $title;
    
    public $author;

    public $published;

    public function __construct($title, $author, $published)
    {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }
}

$posts = [
    new Post('My First Post', 'AU', true),
    new Post('My Second Post', 'AU', true),
    new Post('My Third Post', 'JR', true),
    new Post('My Fourth Post', 'AB', false)
];

// $unpublishedPosts = array_filter($posts, function ($post) {
//     return ! $post->published;
// });

// $publishedPosts = array_filter($posts, function ($post) {
//     return $post->published;
// });

// var_dump($publishedPosts);



// $modified = array_map(function ($post) {
//     return ['title' => $post->title];
    
// }, $posts);

// var_dump($modified);



// $authors = array_column($posts, 'author');

// var_dump($authors);


// $authors = array_column($posts, 'author', 'title');

// var_dump($authors);