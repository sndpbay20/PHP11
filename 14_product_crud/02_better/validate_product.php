<?php


  // echo $_SERVER['REQUEST_METHOD' 

    $title = $_POST['title']; //test
    $description = $_POST['description'];
    $price = $_POST['price'];
    $imagepath = '';


    if (!$title) {
      $errors[] = 'product title is required';
    }
    if (!$price) {
      $errors[] = 'product price is required';
    }

    if(!is_dir('images')){
    mkdir('images');
    }

    if (empty($errors)) {
      $image = $_FILES['image'] ?? null;
      $imagepath =$product['image'];

      // echo '<pre>';
      // var_dump($image);
      // echo '</pre>';
      // exit;
      if ($image && $image['tmp_name']) {

        if($product['image'])
        {
            unlink($product['image']);
        }


      $imagepath = 'images/' .randomString(9). '/' .$image['name'];
      mkdir(dirname($imagepath));
      
      // echo '<pre>';
      // var_dump($imagepath);
      // echo '</pre>';
      // exit;   

        move_uploaded_file($image['tmp_name'], $imagepath);
      }}
    