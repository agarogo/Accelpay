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
	<link rel="stylesheet" href="uniqueregetereteeregeye.css">
	<link href = "fonts/roboto/stylesheet.css" rel = "stylesheet" type = "text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
				<a href="index.php" class="md:text-xl text-xs lg:text-4xl ml-8 font-bold my-auto center">AccelPay</a>
			</div>
			<div class="my-auto ml-auto flex h-16">
				<a href="#" class="md:text-base text-xs lg:text-xl my-auto">Торговля</a>
				<a href="for.php" class="md:text-base text-xs lg:text-xl ml-8 my-auto center">Экономика</a>
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
	<div class="w-10/12 mx-auto" style="height: 700px;">
        <div class="w-1/2 h-1/4 mr-auto">
            <div>
                <h1 class="text-xl text-current">Товар недели</h1>
            </div>
            <div>
                <h1 class="text-4xl font-semibold mt-5">Пуфик Мичила</h1>
                <h1 class="text-2xl text-current">Red (2022 Restock)</h1>
            </div>
        </div>
        <div class="h-3/4 flex">
            <div class="w-1/2">
                <img class="h-3/5 mx-auto" src="image37.png">
            </div>
            
            <div class="h-3/4 w-1/2">
                <div class="h-3/4 w-10/12 mx-auto">
                    <div class="h-1/5 rounded-lg border-2 mx-auto border-black">
                        <h1 class="text-2xl text-center mt-2 font-semibold">15 Продаж за последние 3 дня!</h1>
                    </div>
                    <div class="w-10/12 h-10 rounded-lg border-2 mx-auto border-black flex mt-5">
                        <h1 class="text-xl text-center mt-1">Размер:</h1>
                        <select class="appearance-none">
                          <option>Все</option>
                        </select>
                    </div>
                    
                    <div class="w-10/12 h-10 mx-auto flex mt-5">
                        <div class=" w-5/12 rounded-lg border-2 mr-auto border-black">
                            <h1 class="text-xl text-center mt-1">Предложить</h1>
                        </div>
                        <div class=" w-6/12 rounded-lg border-2 ml-auto border-black bg-blue-500">
                            <h1 class="text-xl text-center mt-1">Купить</h1>
                        </div>
                    </div>
                    
                    <div class="h-10/12 mx-auto text-center">
                        <a href="#" class="text-2xl mt-10">Продать за 20 000 или Больше</a>
                    </div>
                    
                    
                </div>
                <div class="h-1/4 w-10/12 flex mx-auto mt-10">
                    <div class="w-2/6">
                        <h1 class="xl">Последняя цена:</h1>
                        <div class="flex">
                            <h1 class="text-2xl">20000</h1>
                            <img class="h-5 my-auto ml-2" src="Group1577.png">
                        </div>
                    </div>
                    <div class="w-1/6 h-1/3 rounded-lg border-2 mr-auto border-black"></div>
                    <div class="w-1/6 h-1/3 rounded-lg border-2 mx-auto border-black"></div>
                    <div class="w-1/6 h-1/3 rounded-lg border-2 ml-auto border-black"></div>
                </div>
            </div>
        </div>   
    </div>
    
    <div class="h-0.5 w-10/12 bg-black mb-32 mx-auto"></div>
	
	
</body>
</html>