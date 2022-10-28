<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="main.css">
	<link href = "fonts/roboto/stylesheet.css" rel = "stylesheet" type = "text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<header>
		<style>
		    a:hover {
                color: rgb(37 99 235);
                text-decoration: none;
            }
		    a {
                  text-decoration: none;
                  margin: 10px;
                  display: inline-block;
                  color: #000 ;
                }
                
                a::before,
                a::after {
                  content: "";
                  height: 2px;
                  background: #000;
                  display: block;
                  transition: width 0.3s ease-in-out;
                  margin: 0 auto;
                }
                
                a::before { width: 100%; }
                a::after { width: 0; }
                
                a:hover::before { width: 0; }
                a:hover::after { width: 100%; }
		</style>
	</header>
	<link rel="stylesheet" href="util.css">
</head>
<body>
    <?php
    	$connect = mysqli_connect('localhost', 'u1798572_test1', 'hT8fS2jR9k', 'u1798572_test');
    	
    	if (!$connect) {
    	    die('Error connect');
    	}
    ?>
    
    <div class="w-10/12 mx-auto h-40 bg-white flex">
			<div class="flex h-16 mr-auto my-auto">
				<img class="h-14" src="Group1571.png">
				<a href="index.php" class="md:text-xl text-xs lg:text-4xl ml-8 font-bold my-auto center">AccelPay</a>
			</div>
			<div class="my-auto ml-auto flex h-16">
				<a href="#" class="md:text-base text-xs lg:text-xl my-auto gi">Торговля</a>
				<a href="regg.php" class="md:text-base text-xs lg:text-xl ml-8 my-auto center">Экономика</a>
				<a href="Auc.php" class="md:text-base text-xs lg:text-xl ml-8 my-auto center">Аукцион</a>
				<div class="my-auto flex">
				    <a href="table.php" class="md:text-base text-xs lg:text-xl ml-8 my-auto center">Баланс</a>
				    <?php
				        $connect = mysqli_connect('localhost', 'u1798572_test1', 'hT8fS2jR9k', 'u1798572_test');
                            
                        if (!$connect) {
                            die('Error connect');
                        }
                            
                            
                            
                            
                            
                    ?>
				    <div class="font-semibold my-auto md:text-base text-xs lg:text-xl text-blue-600">
            			<?php
            			    $user_id = $_SESSION['user']['id'];
                            
                            $res = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = ".$user_id);
                            $users = mysqli_fetch_all($res);
                            
                            echo json_encode($users[0][1]);
            			?>	
            		</div>
				    
				</div>
				<img class="h-5 my-auto ml-2" src="Group1577.png">
				<a href="pro.php" class="gi md:text-base text-xs lg:text-xl ml-8 my-auto center">Профиль</a>
				<i class="fas fa-home text-3xl mr-4 text-left my-auto mt-3"></i>
			</div>
	</div>
	
    <div class="w-64 mx-auto mt-20">
        
    	<div class="w-64 flex">
    		<div class="w-32 h-20 bg-blue-400 border-4 border-black text-center text-2xl">ID</div>
    		<div class="w-32 h-20 bg-blue-400 border-4 border-black text-center text-2xl">Accel</div>
    	</div>
    	    <?php
                $number = mysqli_query($connect, "SELECT * FROM users");
                $number = mysqli_fetch_all($number);
            foreach ($number as $number) {
                    ?>
                        <div class="w-64 flex">
                            <div class=" border-2 w-32 border-black text-center text-2xl bg-blue-200">
                                <td><?= $number[0] ?></td>
                            </div>
                            <div class=" border-2 w-32 border-black text-center text-2xl bg-blue-200">
                                <td><?= $number[1] ?></td>
                            </div>
                        </div>
    
                    <?php
                }
            ?>
    	
    	<div class="w-64 flex">
    	    <form action= 'php.php?id=<?= $number[0] ?>' method="post" action= 'table.php'>
    		    <button type="submit"  class="w-32 h-20 bg-blue-400 border-4 border-black text-center text-2xl">+100 A</button>
    		</form>
    		
    		<form action= 'php1.php' method="post" action= 'table.php'>
    		    <button type="submit"  class="w-32 h-20 bg-blue-400 border-4 border-black text-center text-2xl">-100 A</button>
    		</form>
    		
    	</div>
    	<div>
    	    <form action="index.php">
                <button type="submit" class="w-64 bg-blue-400 h-20 border-4 border-black text-2xl">AcellPay</button>
            </form>
    	</div>
	</div>
	
	
</body>

</html>