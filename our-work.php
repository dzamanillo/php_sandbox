<?php include 'header.php'; 

$id = $_GET['id'];

?>
<main>
  <header class="page-header d-flex align-items-center justify-content-center zIndex-0 position-relative">
    <div class="text-center">
      <div class="heading">
        <div class="tag">WHAT WE’VE DONE</div>
        <h1 class="h1 lh-90">our work</h1>
      </div>
    </div>
    <div class="bg"></div>
  </header>
  <section class="product-appeal zIndex-1 position-relative">
    <div class="container ">
      <div class="d-flex justify-content-center">
        <ul class="nav brand-navigation ">
          <li class="nav-item"> <a class="nav-link active" aria-current="page" href="#"> Promotional Products </a> </li>
          <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Branded Apparel</a>
            <ul class="dropdown-menu bg-transparent">
              <li><a class="dropdown-item" href="#">IBM</a></li>
              <li><a class="dropdown-item" href="#">LEVI'S</a></li>
              <li><a class="dropdown-item" href="#">CARHARTT</a></li>
            </ul>
          </li>
          <li class="nav-item"> <a class="nav-link" href="#">Packaging</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Print</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Retail & Event Displays & Signage</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#"> Kitting & Product Fulfillment</a> </li>
        </ul>
      </div>
    </div>
    <div class="container container-small mt-139">
      <div class="row">
        <div class="col-sm-5 offset-md-1 pb-5">
          <div class="product-slider">
            <div class="position-relative photo-with-shade shade-v-2 " > <img src="img/toyota.png" class="img-fluid"> </div>
            <div class="position-relative photo-with-shade shade-v-2 " > <img src="img/toyota.png" class="img-fluid"> </div>
            <div class="position-relative photo-with-shade shade-v-2 " > <img src="img/toyota.png" class="img-fluid"> </div>
          </div>
        </div>
        <div class="col-sm-5 offset-md-1">
          <div class="productcontents">
            <h2 class="h3">Auto Company</h2>
            <!-- variations-->
            <div class="product-variants">
              <div class="variants-title">PRODUCTS</div>
              <div class="variants-description"> <span>Jerseys <em>•</em></span> <span>Polos <em>•</em></span> <span>Hats <em>•</em></span> <span>Visors <em>•</em></span> <span>Socks <em>•</em></span> </div>
            </div>
            <!-- variations-->
            <div class="product-variants">
              <div class="variants-title">USE CASE</div>
              <div class="variants-description"> <span>Branded Apparel <em>•</em></span> </div>
            </div>
            <!-- variations-->
            <div class="product-variants">
              <div class="variants-title">SOLUTION</div>
              <div class="variants-description"> <span>Design <em>•</em></span> <span>Fulfillment <em>•</em></span> <span>Distribution <em>•</em></span> </div>
            </div>
            <!-- variations-->
            <div class="product-variants">
              <div class="variants-title">DELIVERY TIME</div>
              <div class="variants-description"> <span>10 Days <em>•</em></span> </div>
            </div>
            <div class="more-btn fw-medium">SEE MORE <span>+</span></div>
            <div id="more">
              <!-- variations-->
              <p> Congue eget etiam risus non elit adipiscing porta aliquam netus. Ornare euismod hendrerit volutpat amet facilisis in facilisis. Neque duis id ipsum, lectus egestas cursus id purus, vel. Suspendisse cursus risus ultrices fames augue elit.
                
                Congue eget etiam risus non elit adipiscing porta aliquam netus. Ornare euismod hendrerit volutpat amet facilisis in facilisis. </p>
            </div>
          </div>
          <a href="#" class="btn btn-primary mx-left line-height-auto"><span>LEARN MORE ABOUT <br>
          BRANDED APPAREL</span> <img src="img/arrow-right.svg"></a> </div>
      </div>
    </div>
  </section>

</main>

<?php include 'footer.php'; ?>