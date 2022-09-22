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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="home.php"><img src="images/lol.png" alt="" id="lol"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Nigeria</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="" method="Post">
      <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="check">Search</button>
    </form>
  </div>
</nav>
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
