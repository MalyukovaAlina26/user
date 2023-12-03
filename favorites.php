<?php 

include('include/db_connect.php');
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
			   	<a class="bread__txt" href="index.php">Happy Party</a>	<p class="bread__txt">&nbsp;&nbsp;>&nbsp;&nbsp;</p> <a class="bread__txt">Аккаунт</a> <p class="bread__txt">&nbsp;&nbsp;>&nbsp;&nbsp;</p> <a class="bread__txt">Отложенные</a> 
			   	
			   </div>
			   
			   <div class="container">
			   <h2 class="good__goods-title">Отложенные</h2>
			   </div>
			 
			  
			  
			  
			  
			  
			   <div class="goods">
			  <div class="container">
			<div class="row justify__content__center">
			  <div class="goods__list row">
			  
			      <div class="goods__cards-1"> 
			  <div class="goods__favorite-width row justify__content__end"><a><img class="goods__favorite" src="../img/favorite/delete.svg" /></a></div>
			    <a href="artical.php"><div class="goods__cards">
			  <img class="goods__img" src="../img/goods/1.svg"/>
			 <div class="goods__description"><h3 class="goods__name">Хэллоуин Роскошный мужской Средневековый Косплей Вампира из искусственной кожи Фантазия Маскарадный костюм</h3>     
			  <p class="goods__price">3 503, 45 РУБ.</p></div></div></a>
			    <div class="goods__button-fon"><a class="goods__cart"><div class="goods__button row justify__content__center"><p>В КОРЗИНУ</p></div></a></div>
			    
			    </div>
			    
			     <div class="goods__cards-1"> 
			  <div class="goods__favorite-width row justify__content__end"><a><img class="goods__favorite" src="../img/favorite/delete.svg" /></a></div>
			    <a href="artical.php"><div class="goods__cards">
			  <img class="goods__img" src="../img/goods/41.svg"/>
			 <div class="goods__description"><h3 class="goods__name">Хэллоуин Роскошный мужской Средневековый Косплей Вампира из искусственной кожи Фантазия Маскарадный костюм</h3>     
			  <p class="goods__price">3 503, 45 РУБ.</p></div></div></a>
			    <div class="goods__button-fon"><a class="goods__cart"><div class="goods__button row justify__content__center"><p>В КОРЗИНУ</p></div></a></div>
			    
			    </div>
			   
			  
			  </div></div>	
			  </div></div>
			  
			  
			  
			  
			  
			  <?php include('include/footer.php') ?> 
 
	</body>
</html>