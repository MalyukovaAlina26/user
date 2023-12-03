<?php 
 
include('include/db_connect.php'); 
   
$_SESSION['id'] = $_GET["id"];
$iduser = $_SESSION['id'];  
$sql="SELECT * FROM `users` WHERE `id` = '$iduser'";
		$res = $mysqli -> query($sql);
		
		if ($res -> num_rows === 1) {
			
			$resPost = $res -> fetch_assoc()
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Happy Party</title>
		
		
		<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
		
		
		
			
		<link href="../css/reset.css" rel="stylesheet"/>
		<link href="../css/main.css" rel="stylesheet"/>
		<link href="../css/setka.css" rel="stylesheet"/>
		<link href="../css/adaptive.css" rel="stylesheet"/>
		<link href="../css/fonts.css" rel="stylesheet"/>
		<link rel="icon" href="../img/icon.svg" type="image/x-icon">
		
	</head>
	<body>
	 
		 
		 
		 
		 <?php include('include/nav.php') ?> 
			
			
			  <div class="padding"></div>
			  
			  
		  
			  
			   
			   <div class="bread container row">
			   	<a class="bread__txt" href="index.php">Happy Party</a>	<p class="bread__txt">&nbsp;&nbsp;>&nbsp;&nbsp;</p> <a class="bread__txt">Аккаунт</a> 
			   	
			   </div>
			   
			  <div class="account"><div class="container row">
			  
			  
			  	<div class="account__block"><a><img class="account__img" src="../img/account/<?= $resPost['img']?>"/></a></div>
			  	<div class="account__block-2"><h3 class="account__name"><?= $resPost['name']?></h3><?php 
	}
			   
		?>	   
			  	   <div class="row"><a class="account__info">Адрес: г. Воронеж, ул. Молодогвардейцев, 11А, Воронеж, 394065<img class="account__icon-edit" src="../img/account/pen.svg"/></a></div>
			  	   <div class="row"><a href="account-edit.php?id=<?= $resPost['id']?>" class="account__info">Настройки</a></div>
			  	    
			  	
			  	
			  	</div>
			  	</div>  
			  </div> 
			   
			  
			  <div class="goods">
			  <div class="container">
			   
			  <div class="row justify__content__center">
			  <div class="goods__list">
			  	<div class="row justify__content__between"><h2 class="good__goods-title">Доставка</h2><a href="../user/delivery.php" class="good__goods-title">Открыть</a></div>
			  <div class="goods__part"><div class="row">
			  
			   <a><div class="goods__cards-1">
			  <img class="goods__img" src="../img/goods/1.svg"/>
			 <div class="goods__description"><h3 class="goods__name">Хэллоуин Роскошный мужской Средневековый Косплей Вампира из искусственной кожи Фантазия Маскарадный костюм</h3>     
			  <p class="goods__price">3 503, 45 РУБ.</p></div>
			  </div></a>
			  
			  <a><div class="goods__cards-1">
			  <img class="goods__img" src="../img/goods/3.svg"/>
			 <div class="goods__description"><h3 class="goods__name">Хэллоуин Роскошный мужской Средневековый Косплей Вампира из искусственной кожи Фантазия Маскарадный костюм</h3>     
			  <p class="goods__price">3 503, 45 РУБ.</p></div>
			  </div></a>
			  
			  <a><div class="goods__cards-1">
			  <img class="goods__img" src="../img/goods/6.svg"/>
			 <div class="goods__description"><h3 class="goods__name">Хэллоуин Роскошный мужской Средневековый Косплей Вампира из искусственной кожи Фантазия Маскарадный костюм</h3>     
			  <p class="goods__price">3 503, 45 РУБ.</p></div>
			  </div></a>
			  
			  <a><div class="goods__cards-1">
			  <img class="goods__img" src="../img/goods/14.svg"/>
			 <div class="goods__description"><h3 class="goods__name">Хэллоуин Роскошный мужской Средневековый Косплей Вампира из искусственной кожи Фантазия Маскарадный костюм</h3>     
			  <p class="goods__price">3 503, 45 РУБ.</p></div>
			  </div></a>
			  
			  <a><div class="goods__cards-1">
			  <img class="goods__img" src="../img/goods/19.svg"/>
			 <div class="goods__description"><h3 class="goods__name">Хэллоуин Роскошный мужской Средневековый Косплей Вампира из искусственной кожи Фантазия Маскарадный костюм</h3>     
			  <p class="goods__price">3 503, 45 РУБ.</p></div>
			  </div></a>
			  
			  </div> </div>	
			  </div></div></div></div>
			  
			  
			  
			  <div class="goods">
			  <div class="container">
			  <div class="row justify__content__center">
			  <div class="goods__list">
			  	<div class="row justify__content__between"><h2 class="good__goods-title">Отложенные</h2><a href="../user/favorites.php" class="good__goods-title">Открыть</a></div>
			 <div class="goods__part"> <div class="row">
			  
			    <a><div class="goods__cards-1">
			  <img class="goods__img" src="../img/goods/12.svg"/>
			 <div class="goods__description"><h3 class="goods__name">Хэллоуин Роскошный мужской Средневековый Косплей Вампира из искусственной кожи Фантазия Маскарадный костюм</h3>     
			  <p class="goods__price">3 503, 45 РУБ.</p></div>
			  </div></a>
			  
			  <a><div class="goods__cards-1">
			  <img class="goods__img" src="../img/goods/12.svg"/>
			 <div class="goods__description"><h3 class="goods__name">Хэллоуин Роскошный мужской Средневековый Косплей Вампира из искусственной кожи Фантазия Маскарадный костюм</h3>     
			  <p class="goods__price">3 503, 45 РУБ.</p></div>
			  </div></a>
			  
			  <a><div class="goods__cards-1">
			  <img class="goods__img" src="../img/goods/12.svg"/>
			 <div class="goods__description"><h3 class="goods__name">Хэллоуин Роскошный мужской Средневековый Косплей Вампира из искусственной кожи Фантазия Маскарадный костюм</h3>     
			  <p class="goods__price">3 503, 45 РУБ.</p></div>
			  </div></a>
			   
			  <a><div class="goods__cards-1">
			  <img class="goods__img" src="../img/goods/12.svg"/>
			 <div class="goods__description"><h3 class="goods__name">Хэллоуин Роскошный мужской Средневековый Косплей Вампира из искусственной кожи Фантазия Маскарадный костюм</h3>     
			  <p class="goods__price">3 503, 45 РУБ.</p></div>
			  </div></a>
			   
			   
			  
			  </div>	
			  </div></div></div></div></div>
			  
			  
			  
			  
			  
			  
			  <?php include('include/footer.php') ?> 
 
	</body>
</html>