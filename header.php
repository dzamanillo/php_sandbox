<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="css/tbd.css" rel="stylesheet">
<title>TBD</title>
<link rel="icon" href="img/favicon.png" type="image/png">
</head>
<body>
<nav class="navbar m-0 p-0 fixed-top">
  <div class="container container-small"> <a class="navbar-brand" href="/"><img src="img/logo.svg"></a>
    <div class="d-flex align-items-center">
      <div class="search mx-4 d-flex align-item-center border-0 width-0"> <img src="img/search.svg" class="searchbtn"> <span >
        <input type="text"  class="form-control " id="searchbox" placeholder="product search">
        </span> </div>
      <a href="#contact-section" class="btn mx-4">Contact</a>
      <button class="navbar-toggler collapsed mx-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="bar"></span> <span class="bar"></span> </button>
    </div>
  </div>
</nav>
<!-- sliding menu -->
<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <div class="container container-small">
    <div class="row">
      <div class="col-md-6">
        <div class="links contact"> <a href="https://345545-5lb.espwebsite.com/" class="btn btn-primary btn-transparent" id="search-promo"><span>SEARCH PROMO PRODUCTS</span> <img src="img/arrow-small.svg"></a>
          <div class="search-inner mx-0 d-none align-item-center"> <img src="img/search-B.svg" class=""> <span>
            <input type="text" class="form-control promo"  placeholder="search promo products">
            </span> </div>
          <a href="http://tbdinventory.com/" class="btn btn-primary btn-transparent"><span>INVENTORY LOG IN</span> <img src="img/arrow-small.svg"></a>
          <div class="contact-details">
            <address>
            <div class="add-text"> <span><img src="img/phone-icon.svg"></span> <span class="ms-4">toll free: (855) 645-6343<br>
              local: (818) 839-5316 </span> </div>
            <div class="add-text"> <span><img src="img/email-icon.svg"></span> <span class="ms-4">sales@totalbranddelivery.com </span> </div>
            <div class="add-text"> <span><img src="img/map-icon.svg"></span> <span class="ms-4">912 Pancho Road<br>
              Camarillo, CA 93012 </span> </div>
            </address>
          </div>
          <ul class="social-icons list-inline list-unstyled">
            <li><a href="https://www.instagram.com/totalbranddelivery/" target="_blank"><img src="img/insta.svg"></a></li>
            <li><a href="https://www.linkedin.com/company/total-brand-delivery/"  target="_blank"><img src="img/in.svg"></a></li>
            <li><a href="https://www.facebook.com/TotalBrandDelivery"  target="_blank"><img src="img/facebook.svg"></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-6">
        <div class="navigation ">
          <div class="navigation-wrapper d-flex justify-content-between flex-column float-right">
            <!--01-->
            <div class="menu-centent text-right">
              <h3 class="h2 nav-title d-flex align-items-center"> <span>products</span>
                <div class="expand-icons">
                  <div class="icon"></div>
                  <div class="icon"></div>
                </div>
              </h3>
              <ul class="list-unstyled nav-items text-right fz-medium">
                <li><a href="#">Promotional Products </a></li>
                <li><a href="#">Branded Apparel</a></li>
                <li><a href="#">Packaging</a></li>
                <li><a href="#">Print</a></li>
                <li><a href="#">Retail,  Event Displays, & Signage</a></li>
              </ul>
            </div>

            <?php           
           
            $page_active = $_GET['id'];
            
            ?>
            <!--02-->
            <div class="menu-centent text-right">
              <h3 class="h2 nav-title d-flex align-items-center"> <span>services</span>
                <div class="expand-icons">
                  <div class="icon"></div>
                  <div class="icon"></div>
                </div>
              </h3>
              <ul class="list-unstyled nav-items text-right fz-medium">
                <li><a href="#">Kitting & Product Fulfillment </a></li>
              </ul>
            </div>
            <!--03-->
            <div class="menu-centent text-right">
              <h3 class="h2 nav-title d-flex align-items-center"> <a href="our-work.php?id=03" <?php if($page_active == 03){ echo "class='active'";} ?>><span>our work</span></a>
                <div class="expand-icons"> </div>
              </h3>
            </div>
            <!--04-->
            <div class="menu-centent text-right">
              <h3 class="h2 nav-title d-flex align-items-center"><a href="about.php?id=04"  <?php if($page_active == 04){ echo "class='active'";} ?>> <span>about</span> </a>
                <div class="expand-icons"> </div>
              </h3>
            </div>
            <!--05-->
            <div class="menu-centent text-right">
              <h3 class="h2 nav-title d-flex align-items-center"> <a href="contact.php?id=05"  <?php if($page_active == 05){ echo "class='active'";} ?> ><span>contact</span></a>
                <div class="expand-icons"> </div>
              </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>