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
				<a href="#" class="md:text-xl text-xs lg:text-4xl ml-8 font-bold my-auto center">AccelPay</a>
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
	
	<div style="height: 750px; position:relative;" class=" w-10/12 mx-auto flex">
		
		<div class="" style="margin-top: -70px; height: 600px; width: 680px; margin-left: -160px; background-image: url(Ellipse153.png); background-size: cover; position: absolute;">
			
		</div>

		<div style="position: absolute;" class=" mt-24 font-bold">
			<p class="text-5xl text-left text-white">Почувствуй</p>
			<p class="text-5xl text-left text-white">всю силу</p>
			<p class="text-5xl text-left text-white">Акселькоинов</p>
			<h1 class="text-3xl text-left mt-10 text-white">С новой платформой </h1>
			<h1 class="text-3xl text-left text-white">для торговли и передачи</h1>
			<h1 class="text-3xl text-left text-white">акселей</h1>
		</div>

		
		<div class="ml-auto">
			<img src="Group1604.png">
		</div>
		
	</div>


	<div class="w-10/12 h-80 mx-auto flex">
		<div class="w-3/12 h-72 ">
			<div class="flex w-12/12">
				<img class="h-10 mt-1 ml-auto" src="Group1577.png">
				<p class="text-5xl ml-2 mr-auto font-semibold">2 млн.</p>
			</div>
			<div class="w-7/12 text-2xl mx-auto mt-6">
				<h1>Объем торгов на бирже AccelPay за 24 часа</h1>
			</div>
		</div>
		<div class="w-3/12 h-72">
			<div class="flex w-7/12 mx-auto">
				<p class="text-5xl ml-1 font-semibold">50+</p>
			</div>
			<div class="w-7/12 text-2xl mx-auto mt-6">
				<h1>Сделок за PEST</h1>
			</div>
		</div>
		<div class="w-3/12 h-72">
			<div class="flex w-7/12 mx-auto">
				<h1 class="text-5xl ml-1 font-semibold">60 тыс.</h1>
			</div>
			<div class="w-7/12 text-2xl mx-auto mt-6">
				<h1>Зарегистрированных пользователей, которые пользуются AccelPay</h1>
			</div>
		</div>
		<div class="w-3/12 h-72">
			<div class="flex w-7/12 mx-auto">
				<p class="text-5xl ml-1 font-semibold">0%</p>
			</div>
			<div class="w-7/12 text-2xl mx-auto mt-6">
				<h1>Коммисия за транзакции</h1>
			</div>
		</div>
	</div>




	<div class="w-10/12 mx-auto " style="height: 500px;">
		<div class="h-11 ">
			<h1 class="text-4xl">Новые лоты</h1>
		</div>


		<div class="flex" style="height: 456px;">
			<div class="h-84 md:h-96 lg:h-96 2xl:h-full mr-auto w-2/12 bg-white border-2 rounded-3xl border-black">
				<div class="rr5 w-10/12 mx-auto">
					<img class="pt-10 mx-auto" src="image37.png">
				</div>
				<div class="rr4 w-10/12 mx-auto">
					<div class="h-3/6">
						<h1 class="text-xs md:text-sm lg:text-base xl:text-lg 2xl:text-2xl">Пуфик на котором лежал сам мичил</h1>
					</div>
					
					<h1 class="text-base mt-1">Мин. цена</h1>
					<div class="text-xs md:text-lg lg:text-xl xl:text-2xl 2xl:text-4xl flex mt-1">
						<h1>20000</h1>
						<img class="h-6 ml-3 mt-2  mr-auto" src="Group1577.png">
					</div>
				</div>
			</div>
			

			<div class="h-84 md:h-96 lg:h-96 2xl:h-full mx-auto w-2/12 bg-white border-2 rounded-3xl border-black">
				<div class="rr5 w-10/12 mx-auto">
					<img class="pt-10 mx-auto" src="image38.png">
				</div>
				<div class="rr4 w-10/12 mx-auto">
					<div class="h-3/6">
						<h1 class="text-xs md:text-sm lg:text-base xl:text-lg 2xl:text-2xl">Ноутбук MSI GeForce RTX 3060</h1>
					</div>
					
					<h1 class="text-base mt-1">Мин. цена</h1>
					<div class="text-xs md:text-lg lg:text-xl xl:text-2xl 2xl:text-4xl flex mt-1">
						<h1>50000</h1>
						<img class="h-6 ml-3 mt-2  mr-auto" src="Group1577.png">
					</div>
				</div>
			</div>


			<div class="h-84 md:h-96 lg:h-96 2xl:h-full mx-auto w-2/12 bg-white border-2 rounded-3xl border-black">
				<div class="rr5 w-10/12 mx-auto">
					<img class="pt-10 mx-auto" src="image39.png">
				</div>
				<div class="rr4 w-10/12 mx-auto">
					<div class="h-3/6">
						<h1 class="text-xs md:text-sm lg:text-base xl:text-lg 2xl:text-2xl">Консультация с экспертом </h1>
					</div>
					
					<h1 class="text-base mt-1">Мин. цена</h1>
					<div class="text-xs md:text-lg lg:text-xl xl:text-2xl 2xl:text-4xl flex mt-1">
						<h1>30000</h1>
						<img class="h-6 ml-3 mt-2  mr-auto" src="Group1577.png">
					</div>
				</div>
			</div>

			<div class="h-84 md:h-96 lg:h-96 2xl:h-full mx-auto w-2/12 bg-white border-2 rounded-3xl border-black">
				<div class="rr5 w-10/12 mx-auto">
					<img class="pt-10 mx-auto" src="image40.png">
				</div>
				<div class="rr4 w-10/12 mx-auto">
					<div class="h-3/6">
						<h1 class="text-xs md:text-sm lg:text-base xl:text-lg 2xl:text-2xl">Пачка сникерса + тайный бонус</h1>
					</div>
					
					<h1 class="text-base mt-1">Мин. цена</h1>
					<div class="text-xs md:text-lg lg:text-xl xl:text-2xl 2xl:text-4xl flex mt-1">
						<h1>10000</h1>
						<img class="h-6 ml-3 mt-2  mr-auto" src="Group1577.png">
					</div>
				</div>
			</div>

			<div class="h-84 md:h-96 lg:h-96 2xl:h-full ml-auto w-2/12 bg-white border-2 rounded-3xl border-black">
				<div class="rr5 w-10/12 mx-auto">
					<img class="py-14 mx-auto" src="Group1605.png">
				</div>
				<div class="rr4 w-10/12 mx-auto">
					<div class="h-3/6">
						<h1 class="text-xs md:text-sm lg:text-base xl:text-lg 2xl:text-2xl">Обед с unique</h1>
					</div>
					
					<h1 class="text-base mt-1">Мин. цена</h1>
					<div class="text-xs md:text-lg lg:text-xl xl:text-2xl 2xl:text-4xl flex mt-1">
						<h1>30000</h1>
						<img class="h-6 ml-3 mt-2  mr-auto" src="Group1577.png">
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="w-10/12 mx-auto mt-16 flex" style="height: 500px;">
		<div class="mr-auto wwrr bg-white border-2 rounded-3xl border-black">
			
		</div>
		<div class="ml-auto w-5/12 bg-white border-2 rounded-3xl border-black">
			
		</div>
	</div>
	
</body>
</html>