<?php
    $sales  =[
        "Iphone" => [
            "price" => 180000, "cat" => "Phone"
        ],
        "Hp" => [
            "price" => 270000, "cat" => "Laptop"
        ],
        "Samsung" => [
            "price" => 320000, "cat" => "TV"
        ],
        "Dell" => [
            "price" => 430000, "cat" => "Laptop"
        ],
        "Hissence" => [
            "price" => 250000, "cat" => "TV"
        ],
        "LG" => [
            "price" => 218000, "cat" => "Phone"
        ],
        "Lexus" => [
            "price" => 8000000, "cat" => "Car"
        ],
        "Tecno" => [
            "price" => 50000, "cat" => "Phone"
        ],
    ];
    ?>   
<header>
  	<nav>
  		<ul>
  			<li><a href="home.php">Home</a></li>
  			<li><a href="about.php">Nigeria</a></li>
            <li>
  			<form action="" method="Post">
                <input type="search" name="search" placeholder="Search Something" id="work">
                <input type="submit" name="check" value="Search" class="ok">
            </form>
            </li>
            <li><a href="#">Login</a></li>
  			<button id="start">Start Selling</button>
  		</ul>
  	</nav>
  </header>  
  <table>
    <?php
                    if(isset($_POST['check'])){
                        $search = $_POST['search'];
                        // outer loop
                    foreach($sales as $product => $items){ 
                        if($items["cat"] == $search){
                        ?> 
                        <tr>
                            <td><?php echo "$product \n"; ?></td>
                            <?php
                            foreach($items as $key => $value){
                            ?>
                            <td><?php echo "$value \n"; ?></td>
                            <?php
                            }
                            ?>
                        </tr>
                        <?php
                  
                    }
                }
                    
                    }
                    
                    
                    ?>
</table>
