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
    
<div class="w-10/12 mx-auto">
    <h1 class="text-3xl font-bold">Таблица Экономики</h1>
</div>
<div class="text-2xl mt-20">
<?php
    $conn = mysqli_connect('localhost', 'u1798572_test1', 'hT8fS2jR9k', 'u1798572_test');
    $sql = "SELECT * FROM `users` WHERE `id`<5";
    if($result = $conn->query($sql)){
      $rowsCount = $result->num_rows;
      echo "<table border='2' align='center' cellpadding='13' width>
                  <tr>
                      <th>Number</th>
                      <th>Каоманда</th>
                      <th>Стоимость</th>
                      <th>Кредиты</th>
                      <th>Баланс</th>
                      <th>Ранг</th>
                      <th>Фонд</th>
                  </tr>";
      foreach($result as $row){

          echo "<tr class='rowId' >";
              echo "<td>" . $row["id"] . "</td>";
              echo "<td>" . $row["name"] . "</td>";
              echo "<td>" . $row["number"] . "</td>";
              echo "<td>" . $row["credit"] . "</td>";
              echo "<td>" . $row["balance"] . "</td>";
              echo "<td>" . $row["rang"] . "</td>";
              echo "<td>" . $row["fonde"] . "</td>";
              button($row);
          echo "</tr>";

          echo '<tr class="editId" style="display: none;">';
              echo "<td>" . $row["id"] . "</td>";
              echo "<td>" . $row["login"] . "</td>";
              edit_form($row);
          echo "</tr>";
      }
      echo "</table>";
      $result->free();
  } else{
      echo "Ошибка: " . $conn->error;

  }
  $conn->close();


 ?>
</div>


</body>
</html>

<script type="text/javascript">
             let btnUpdate = document.querySelectorAll(".updateBtn");
            
             let editId = document.querySelectorAll(".editId");
             let rowId = document.querySelectorAll(".rowId");
            
             for(let i = 0; i < btnUpdate.length; i++) {
              btnUpdate[i].onclick = function() {
               editId[i].style.display = "table-row";
               rowId[i].style.display = "none";
              }
            
             }
            </script>
            
            <?php
             function button($row) {  
            ?>
             
            <td>
                <button style="height: 25px; width: 25px; margin-top: 30px;" class="border-1 rounded-lg border-black">
                    <h1 class="text-lg btn updateBtn">Изменить</h1>
                </button>
            </td>
             
            <?php
             }
            ?>
            
            <?php
             function edit_form($row) { 
            
            ?>
             
              
              <form method="GET" action="wer.php" class="text-center">
               <td style="display: none;">
                <input style="width: 100px;" type="text" name="id" placeholder="id" class="form-control mt-2" value="<?php echo $row['id']; ?>" style="display: none;">
               </td>
               <td>
                <input style="width: 100px;" type="number" name="number" placeholder="number" class="form-control mt-2" value="<?php echo $row['number']; ?>">
               </td>
               <td>
                <input style="width: 100px;" type="number" name="credit" placeholder="credit" class="form-control mt-2" value="<?php echo $row['credit']; ?>">
               </td>
               <td>
                <input style="width: 100px;" type="number" name="balance" placeholder="balance" class="form-control mt-2" value="<?php echo $row['balance']; ?>">
               </td>
               <td>
                <input style="width: 100px;" type="text" name="rang" placeholder="rang" class="form-control mt-2" value="<?php echo $row['rang']; ?>">
               </td>
               <td>
                <input style="width: 100px;" type="text" name="fonde" placeholder="fonde" class="form-control mt-2" value="<?php echo $row['fonde']; ?>">
               </td>
               <td>
                <button class="btn btn-success mt-2">Сохранить изменения</button>
               </td> 
              </form>
              
             
            <?php
             }
            ?>
    
    
</body>
</html>