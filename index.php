<?php
	$tag = 'surf,bali';
  $por_pagina = '6';
	$url = 'https://api.flickr.com/services/feeds/photos_public.gne?format=php_serial&tags='.$tag;
	$data = unserialize(file_get_contents( $url ));
  $data_items = $data['items'];
  $photos = array_slice($data_items, 0, 6);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Teste Juan</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    .img-wrap{
      width: 100%;
    }
    .img-wrap img{
      max-width: 100%;
      height: auto;
    }
    .title-row h1{
      margin-bottom: 30px;
    }
    .photo-wrap{
      margin-bottom: 30px;
    }
  </style>
</head>
<body>
  <div class="container">
    <header>
      <div class="row title-row">
        <h1 class="text-center">Fotos de Surf</h1>
      </div>
    </header>
  	<div class="row">
  		<?php foreach ($photos as $photo):
        $image_url = $photo['l_url'];?>
        <div class="photo-wrap col-md-6 text-center">
          <div class="img-wrap">
            <img src="<?php echo $image_url?>" alt="">
          </div>
          <h4 class="photo-title"> <?php echo $photo['title']; ?></h4>
        </div>
      <?php endforeach; ?>
  	</div>
  </div>
  <script src="scripts.js"></script>
</body>
</html>