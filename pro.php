<?php
$connect = mysqli_connect('localhost', 'u1798572_test1', 'hT8fS2jR9k', 'u1798572_test');
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
	<link rel="stylesheet" href="uniqueregetereteeregeye.css">
	<link href = "fonts/roboto/stylesheet.css" rel = "stylesheet" type = "text/css" />
	<header>
		<style>
		    .y123{
            	font-size: 8rem;
                line-height: 1;
            }
            .y1234{
            	font-size: 4.5rem;
            	line-height: 1;
            }
            
            
            .y12345{
            	font-size: 6rem;
            	line-height: 1;
            }
            .obx{
            	align-items: center;
            }
            .m-22{
            	margin-top: 4rem;
            }
            .y11{
            	font-size: 2.25rem;
            	line-height: 2.5rem;
            }
            .h1{
            	height: 960px;
            }
            .rr5{
            	height: 55.5%;
            }
            .wwrr{
            	width: 54%;
            }
            .rr4{
            	height: 44.5%;
            }
            .h2{
            	 height: 550px;
            }
            .m3{
            	margin-top: 0.75rem;
            }
            .m36{
            	margin-top: 9rem;
            }
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
            .roogo{
            	display: flex;
            }
            .imgeno{
            	background-image: url(Group40.png);
            	height: 317px;
            	width: 58px;
            }
            .imgeno2{
            	background-image: url(Group41.png);
            	height: 314px;
            	width: 58px;
            }
            .m209{
            	margin-top: 6rem;
            }
            
		</style>
	</header>
	<link rel="stylesheet" href="util.css">
<body>	
	<div class="w-10/12 mx-auto h-40 bg-white flex">
			<div class="flex h-16 mr-auto my-auto">
				<img class="h-14" src="Group1571.png">
				<a href="profile.php" class="md:text-xl text-xs lg:text-4xl ml-8 font-bold my-auto center">AccelPay</a>
			</div>
			<div class="my-auto ml-auto flex h-16">
				<a href="#" class="md:text-base text-xs lg:text-xl my-auto">Торговля</a>
				<a href="regg.php" class="md:text-base text-xs lg:text-xl ml-8 my-auto center">Экономика</a>
				<a href="#" class="md:text-base text-xs lg:text-xl ml-8 my-auto center">Кредит</a>
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
				<a href="pro.php" class="md:text-base text-xs lg:text-xl ml-8 my-auto center">Профиль</a>
				<i class="fas fa-home text-3xl mr-4 text-left my-auto"></i>
			</div>
	</div>
	<div class="h-0.5 md:h-0.5 lg:h-0.5 xl-h-0.5 2xl:h-0.5 bg-black"></div>
	<div class=" w-10/12 mx-auto mt-20 flex">
		<div class="w-10/12 h-20 flex mx-auto">
			<div>
				<img class="h-20 w-20" src="Ellipse171.png">
			</div>
			<div class="my-auto ml-5">
			    <div class="my-auto ml-5 flex">
			        <h1 class="text-2xl ml-5"><?php echo json_encode($users[0][5]); ?></h1>
			    </div>
			    <div class="flex">
			        <h1 class="text-lg ml-5"><?php echo json_encode($users[0][7]); ?></h1>
			        <h1 class="text-lg ml-5"><?php echo json_encode($users[0][4]); ?></h1>
			    </div>
			</div>
			
		</div>
        <div class="ml-auto">
            <form action="logout.php" method="post">
			    <button type="submit" class="w-24 my-auto ml-16 text-xl duration-200 transition ease-in-out delay-150 hover:ease-in hover:scale-110 hover:bg-indigo-500 bg-indigo-300 rounded-full">Выйти</button>
			</form>
        </div>
	</div>


	<div class="w-10/12 h-20 mx-auto flex">

		    <form action="up.php" method="post">
		        <button type="submit" class="w-32 my-auto ml-16 text-xl duration-200 transition ease-in-out delay-150 
		        hover:ease-in hover:scale-110 hover:bg-indigo-500 bg-indigo-300 rounded-full">Изменить Название</button>
		    </form>

		<form action="up1.php" method="post">
		        <button type="submit" class="w-32 my-auto ml-16 text-xl duration-200 transition ease-in-out delay-150 
		        hover:ease-in hover:scale-110 hover:bg-indigo-500 bg-indigo-300 rounded-full">Изменить Адресс</button>
		</form>
		<form action="up2.php" method="post">
		        <button type="submit" class="w-32 my-auto ml-16 text-xl duration-200 transition ease-in-out delay-150 
		        hover:ease-in hover:scale-110 hover:bg-indigo-500 bg-indigo-300 rounded-full">Изменить Номер</button>
		</form>
	</div>
	
</body>

</html>