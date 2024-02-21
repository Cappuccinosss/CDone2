<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>

<!------ Google Fonts ------>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500&family=Karla:wght@200;300;400;500&family=Montserrat+Alternates:ital,wght@0,300;0,400;1,300;1,400&family=Montserrat:wght@300;400;500&family=Open+Sans:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet">

<!-- Bootstrap CSS-->	
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<!--External JS-->
<script src="script.js" async></script>
<style>
  


</style>

</head>

<!----External CSS----->
<link rel="stylesheet" type="text/css" href="style.css">

<!-----FontAwsome------>
<script src="https://kit.fontawesome.com/9d9796826b.js" crossorigin="anonymous"></script>

<body>
<?php
    require "nav.php";
   
    ?>
<!---- Bootstrap Script---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<!--Heading-->
<div>



 

<!----------------------------------------------------------------------------------->

 
 
<!----------------------------------------------------------------------------------->
<!--Filter Button-->
<div class = "filter-btns">
  <a href="home.php"><button type="button" class="filter-btn" id="refresh"><i class="fa-solid fa-rotate" ></i> Refresh</button></a>
   
 
</div>



<!--Product Cards-->
<section id="product-cards">
  <div class="container-fluid">
    <div class="row row-cols-2 row-cols-md-4 g-4">
      <div class=" col filter-item all new ">
        <div class="card h-100">
          <img src="img/13157697_21516296_600.jpg" class="card-img-top shop-item-image" alt="..." height="500px" width="500px">
          <div class="card-body">
            <h5 class="card-title shop-item-title">Nike Air Jordan 1 OG High Chicago </h5>
            <p class="card-text shop-item-price"> 32000.00THB</p>
            <button type="button" style="width: 100%;" class="btn btn-primary mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>

      <div class=" col filter-item all new">
        <div class="card h-100">
          <img src="img/Air.jpg" class="card-img-top shop-item-image" alt="..."height="500px" width="500px">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title shop-item-title">Jordan 1 Spider-Man </h5>
            <p class="card-text shop-item-price"> 6380.00THB</p>
            <button type="button" style="width: 100%;" class="btn btn-primary mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>

      <div class=" col filter-item all new">
        <div class="card h-100">
          <img src="img/LADY-WHITE-T.SHIRT-COMBOTWO-PACK-BLACKOLIVE2.jpg" class="card-img-top shop-item-image" alt="..."height="500px" width="500px">
          <div class="card-body">
            <h5 class="card-title shop-item-title">Black Shirt </h5>
            <p class="card-text shop-item-price"> 1000.00THB</p>
            <button type="button" style="width: 100%;" class="btn btn-primary mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>

      <div class=" col filter-item all new">
        <div class="card h-100">
          <img src="img/18902887_41044310_600.jpg" class="card-img-top shop-item-image " alt="..."height="500px" width="500px">
          <div class="card-body">
            <h5 class="card-title shop-item-title">Jordan 1 Mid White Black

              </h5>
            <p class="card-text shop-item-price"> 2890.00THB</p>
            <button type="button" style="width: 100%;" class="btn btn-primary mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>

      <div class=" col filter-item all office-wear ">
        <div class="card h-100">
          <img src="img/เสื้อมีฮู้ดซิปยาวผู้-sportswear-tech-fleece-windrunner-hXT8wQ.jpg" class="card-img-top shop-item-image" alt="..."height="500px" width="500px">
          <div class="card-body">
            <h5 class="card-title shop-item-title">Man Nike tech</h5>
            <p class="card-text shop-item-price">5990.00THB</p>
            <button type="button" style="width: 100%;" class="btn btn-primary mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>

      <div class=" col filter-item all office-wear">
        <div class="card h-100">
          <img src="img/41f7Yjl3h3L._AC_SY1000_.jpg" class="card-img-top shop-item-image" alt="..."height="500px" width="500px">
          <div class="card-body">
            <h5 class="card-title shop-item-title">Real Madrid jersey</h5>
            <p class="card-text shop-item-price">3290.00THB</p>
            <button type="button" style="width: 100%;" class="btn btn-primary mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>
      
      <div class=" col filter-item all office-wear">
        <div class="card h-100">
          <img src="img/fc-barcelona-2022-23-stadium-home-dri-fit-football-shirt-Hn9LCv.jpg" class="card-img-top shop-item-image" alt="..."height="500px" width="500px">
          <div class="card-body">
            <h5 class="card-title shop-item-title">Barcelona jersy</h5>
            <p class="card-text shop-item-price">3290.00THB</p>
            <button type="button" style="width: 100%;" class="btn btn-primary mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>

      <div class=" col filter-item all office-wear">
        <div class="card h-100">
          <img src="img/atlético-madrid-2023-24-stadium-home-mens-dri-fit-soccer-jersey-rQZ39d.png" class="card-img-top shop-item-image" alt="..."height="500px" width="500px">
          <div class="card-body">
            <h5 class="card-title shop-item-title">Atletico Madrid jersey</h5>
            <p class="card-text shop-item-price">3690.00THB</p>
            <button type="button" style="width: 100%;" class="btn btn-primary mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>

      <div class=" col filter-item all t-shirts">
        <div class="card h-100">
          <img src="img/lvjersey.jpg" class="card-img-top shop-item-image" alt="..."height="500px" width="500px">
          <div class="card-body">
            <h5 class="card-title shop-item-title">Liverpool jersey</h5>
            <p class="card-text shop-item-price">3450.00THB</p>
            <button type="button" style="width: 100%;" class="btn btn-primary mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>

      <div class=" col filter-item all t-shirts">
        <div class="card h-100">
          <img src="img/mujersey.jpg" class="card-img-top shop-item-image" alt="..."height="500px" width="500px">
          <div class="card-body">
            <h5 class="card-title shop-item-title">Manchester United jersey</h5>
            <p class="card-text shop-item-price">3690.00THB</p>
            <button type="button" style="width: 100%;" class="btn btn-primary mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>

      <div class=" col filter-item all t-shirts">
        <div class="card h-100">
          <img src="img/mcjersey.jpg" class="card-img-top shop-item-image" alt="..."height="500px" width="500px">
          <div class="card-body">
            <h5 class="card-title shop-item-title">Manchester city jersey</h5>
            <p class="card-text shop-item-price">3690.00THB</p>
            <button type="button" style="width: 100%;" class="btn btn-primary mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>

      <div class=" col filter-item all t-shirts">
        <div class="card h-100">
          <img src="img/asjersey.jpg" class="card-img-top shop-item-image" alt="..."height="500px" width="500px">
          <div class="card-body">
            <h5 class="card-title shop-item-title">Arsenal jersey</h5>
            <p class="card-text shop-item-price">3690.00THB</p>
            <button type="button" style="width: 100%;" class="btn btn-primary mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>
      
      

      <div class=" col filter-item all offers">
        <div class="card h-100">
          <img src="img/nike-pro.jpg" class="card-img-top shop-item-image" alt="..."height="500px" width="500px">
          <div class="card-body">
            <h5 class="card-title shop-item-title">Nike pro</h5>
            <p class="card-text shop-item-price">690.00THB</p>
            <button type="button" style="width: 100%;" class="btn btn-primary mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping  " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>

      <div class=" col filter-item all offers">
        <div class="card h-100">
          <img src="img/png-transparent-jeans-denim-slim-fit-pants-bell-bottoms-jeans-blue-fashion-boy-thumbnail.png" class="card-img-top shop-item-image" alt="..."height="500px" width="500px">
          <div class="card-body">
            <h5 class="card-title shop-item-title">Jeans</h5>
            <p class="card-text shop-item-price">300.00THB</p>
            <button type="button" style="width: 100%;" class="btn btn-primary mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>

      <div class=" col filter-item all offers">
        <div class="card h-100">
          <img src="img/mens-therma-fit-basketball-cargo-pants-ds9fdM.png" class="card-img-top shop-item-image" alt="..."height="500px" width="500px">
          <div class="card-body">
            <h5 class="card-title shop-item-title">Adiddas Short</h5>
            <p class="card-text shop-item-price">690.00THB</p>
            <button type="button" style="width: 100%;" class="btn btn-primary mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>
      
      
      

    </div>
  </div>
  
</section>

<!--Shopping Cart-->
<section class="container content-section" id="shopping-cart">
  
  <h3 style="text-decoration: underline;text-align: center; margin-bottom: 7%;">Shopping Cart</h3>
 
 <table class="table table-hover table-cart">
  <thead>
    <tr>
      <th>Item</th>
      <th>Price</th>
      <th>Quantity</th>
    </tr>
  </thead>
  <tbody class="cart-items">
    
     
  </tbody>
</table>

    <div class="cart-total"> 
      <strong class="cart-total-title">Total</strong>
      <span  class="cart-total-price" style="text-align: right;">$0</span>
    </div>
 

    <div class="btn-purchase" style="margin-top: 10%;">
      <button type="button"  class="btn btn-dark btn-purchase "><i class="fa-solid fa-cart-shopping " style="margin-right: 6%;"></i>PURCHASE</button>
    </div>

</section>
 
<!--Footer-->
<section id="footer">
  <div class="card text-center">
   
    <div class="card-body">
    
      <p>Thank You , Come Again !!!</p>
    </div>
    <div class="card-footer text-muted">
       <p></p>
       <p></p>
    </div>
  </div>
</section>



 

<!--External JS-->
<script src="script.js"></script>

</body>
</html>
