<?php
require('../classes/post.php');

function create ($title,$body){
  // create an instance
  $post = new Post;

  //run query
  $post->create($title,$body);
}

 ?>
