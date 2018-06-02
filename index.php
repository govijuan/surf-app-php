<?php
	//Key = f358b2ee7c38c1b3c9c7414b4a681a8c
	//Secret = f02920323395b945
	$tag = 'surf,bali';
  $por_pagina = '6';
	$url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=36d9a50635386bedf4f5c45e3cf6f5bf&tags='.$tag.'&per_page='.$por_pagina.'&format=json&nojsoncallback=1';
	$data = json_decode(file_get_contents( $url ));

  $photos = $data->photos->photo;
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
  </style>
</head>
<body>
  <div class="container">
    <header>
      <div class="row">
        <h1 class="text-center">Fotos de Surf</h1>
      </div>
    </header>
  	<div class="row">
  		<?php foreach ($photos as $photo):
        $image_url = 'http://farm'.$photo->farm.'.staticflickr.com/'.$photo->server.'/'.$photo->id.'_'.$photo->secret.'.jpg';?>
        <div class="photo-wrap col-md-6 text-center">
          <h3 class="photo-title"> <?php echo $photo->title; ?></h3>
          <div class="img-wrap">
            <img src="<?php echo $image_url?>" alt="">
          </div>
        </div>
      <?php endforeach; ?>
  	</div>
  </div>
</body>
</html>