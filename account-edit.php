<?php 
session_start();

include('include/db_connect.php'); 

$id = $_GET["id"];
if (isset($_GET["action"]))
{
   switch ($_GET["action"]) {

	    case 'delete':
        
         if (file_exists("../img/".isset($_GET["img"])))
        {
            if(isset($_GET["img"])) {
               unlink("../img/".$_GET["img"]);   
            }
          
          $query="UPDATE users SET img = NULL WHERE id = $id";
          $result = mysqli_query($mysqli, $query) or die("Ошибка " . mysqli_error($mysqli)); 
        }
	    break;

	} 
}



if (isset($_POST["submit_add"]))
{

  $error = array();
   
  if (count($error))
   {           
        $_SESSION['message'] = "<p id='form-error'>".implode('<br />',$error)."</p>";
        
   }else
   {
     $name = $_POST['name']; 
$tel = $_POST['tel'];
$pass = $_POST['pass']; 
 
$querynew = "name='$name', tel='$tel', pass='$pass'";

$update ="UPDATE users SET $querynew WHERE id='$id' ";

$result = mysqli_query($mysqli, $update) or die("Ошибка " . mysqli_error($mysqli));

//Если запрос пройдет успешно то в переменную result вернется true
if ($result == 'true') {
    $_SESSION['message'] = "<p id='form-success'>Данные успешно добавлены!</p>";

}
else {$_SESSION['message'] = "<p id='form-success'>Данные не добавлены!</p>";}

  if (empty($_POST["upload_image"]))
  {        
  include("actions/users_image.php");
  unset($_POST["upload_image"]);           
  }  
} }   


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Party</title>

   <link href="../css/reset.css" rel="stylesheet"/>
		<link href="../css/main.css" rel="stylesheet"/>
		<link href="../css/setka.css" rel="stylesheet"/>
		<link href="../css/adaptive.css" rel="stylesheet"/>
		<link href="../css/fonts.css" rel="stylesheet"/>
		<link href="../css/todo.css" rel="stylesheet"/>
		<link href="../css/admin.css" rel="stylesheet"/>
		<link href="../css/jquery.ui.min.css" rel="stylesheet"/>
		<link rel="icon" href="../img/icon.svg" type="image/x-icon">


    <script type="text/javascript" src="./ckeditor/ckeditor.js"></script>

</head>
<body>
   
<?php include('include/nav.php') ?>

     <div class="bread container row">
			   	<a class="bread__txt" href="index.php">Happy Party</a>	<p class="bread__txt">&nbsp;&nbsp;>&nbsp;&nbsp;</p> 
			   	<a class="bread__txt" href="account.php">Аккаунт</a><p class="bread__txt">&nbsp;&nbsp;>&nbsp;&nbsp;</p> 
			   	<a class="bread__txt">Редактирование аккаунта</a>  
			   	
			   </div>


    <section class="block">
        <div class="container">
            <div class="row">
                <h2 class="block__headline">Редактирование аккаунта</h2>
            </div>
             <?php
    $id = $_GET["id"];
	
    $sql = "SELECT * FROM `users` WHERE `id` = '$id'";
    $res = $mysqli -> query($sql);

    if ($res -> num_rows === 1) {
        $resPost = $res -> fetch_assoc()

            ?>	
             <a class="block__delete" href="delete/users.php?id=<?= $resPost['id']?>">Удалить аккаунт</a>
             <?php
}

            ?>	
            <div class="row">
                <p class="col-12"> <?php echo $_SESSION['message']; ?> </p>
                <br><br>
            </div>
            <div class="row">
                <div class="col-8 block__item">
                    <form class="form" enctype="multipart/form-data" method="post">
                    <?php
    $id = $_GET["id"];
	
    $sql = "SELECT * FROM `users` WHERE `id` = '$id'";
    $res = $mysqli -> query($sql);

    if ($res -> num_rows === 1) {
        $resPost = $res -> fetch_assoc()

            ?>	
                        <div class="col-12 form__block">
                            <label for="" class="form-label">Название пользователя</label>
                            <input type="text" class="form-control" value="<?= $resPost['name'] ?>" name="name" id="" >
                        </div> 
                        
                        <div class="col-12 form__block">
                            <label for="" class="form-label">Телефон</label>
                            <input type="text" class="form-control" value="<?= $resPost['tel'] ?>" name="tel" id="" >
                        </div>
                        
                        <div class="col-12 form__block">
                            <label for="" class="form-label">Пароль</label>
                            <input type="password" class="form-control" value="<?= $resPost['pass'] ?>" name="pass" id="" >
                        </div>

                         
                        
                        <?php 


if  (	(strlen($resPost["img"]) > 0) && (file_exists("../img/".$resPost["img"]))	)
{
	$img_pathh = '../img/account/'.$resPost["img"];
echo '
    <div class="col-12 form__block">
        <label class="stylelabel" >Картинка</label>
        <img src="'.$img_pathh.'" /> <br>
        <a class="btn" href="good-edit.php?id='.$resPost["id"].'&image='.$resPost["img"].'&action=delete" >Удалить</a>
    </div>    ';
}else {  
echo '
    <div class="col-12 form__block">
        <label class="stylelabel" >Добавить файл</label>
        <input class="form-control" type="hidden" name="MAX_FILE_SIZE" value="5000000"/>
        <input class="form-control" type="file" name="upload_image" />
    </div> <br>
'; } 

}
?>

                        
                        <input class="form-btn" type="submit" id="submit_form" name="submit_add" value="Добавить"/>    	
            
                    </form>
                </div>
            </div>
        </div>
    </section>


    <?php include('include/footer.php') ?>

     
 
    
    

</body>
</html>