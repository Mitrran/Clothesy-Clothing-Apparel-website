<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:400,500&display=swap">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <title>Clothesy</title>

</head>
<body>

<!----------------------------------------SIDE NAV----------------------------------------> 
    <nav class="sidebar close">
        <header>
          <div class="image-text">
            <span class="image">
              <img src="images/hanger.jpg" alt="" >
            </span>
            <div class="text logo-text">
              <span class="name">Clothesy</span>
              <span class="profession">👋 Hello</span>
            </div>
          </div>
          <i class='bx bx-chevron-right toggle'></i>
        </header>
        <div class="menu-bar">
          <div class="menu">
            
            <li class="search-box">
              <i class='bx bx-search icon'></i>
              <input type="text" placeholder="Search...">
            </li>

            <ul class="menu-links">
              <li class="nav-link">
                <a href="">
                  <i class='bx bx-home-alt icon' onclick="myFunction()"></i>
                  <span class="text nav-text" onclick="myFunction()" >Home</span>
                </a>
              </li>

              <li class="nav-link">
                <a href="">
                  <i class='bx bx-male icon'onclick="myFunction()"></i> 
                  <span class="text nav-text"onclick="myFunction()">Men</span>
                </a>
              </li>

              <li class="nav-link">
                <a href="">
                  <i class='bx bx-female icon'onclick="myFunction()"></i>
                  <span class="text nav-text"onclick="myFunction()">Women</span>
                </a>
              </li>

              <li class="nav-link">
                <a href="">
                  <i class='bx bx-child icon'onclick="myFunction()"></i>
                  <span class="text nav-text"onclick="myFunction()">Kids</span>
                </a>
              </li>

            </ul>
          </div>

          <div class="bottom-content">
            <li class="">
              <a href="registration.php">
                <i class='bx bx-registered icon'></i>
                <span class="text nav-text">Register</span>
              </a>
            </li>

            <div class="bottom-content">
                <li class="">
                  <a href="login.php">
                    <i class='bx bx-log-out icon'></i>
                    <span class="text nav-text">Login</span>
                  </a>
                </li>

            <li class="mode">
              <div class="sun-moon">
                <i class='bx bx-moon icon moon'></i>
                <i class='bx bx-sun icon sun'></i>
              </div>
              <span class="mode-text text">Dark mode</span>
              <div class="toggle-switch">
                <span class="switch"></span>
              </div>
            </li>

          </div>
        </div>
      </nav>
<!----------------------------------------/SIDE NAV----------------------------------------> 


<!----------------------------------------TOP NAV----------------------------------------> 
      <nav class="navi">
        <ul class="navi-list">
            <li class="centered-logo">
              <a href="homepage.php"><div class="logo"><img src="images/clothesy_logo.png" alt="" width="150px" height="80px"></div></a>
            </li>
              <ul class="menu">
                <li><a href="#New-arrival">New arrivals</a></li>
                <li><a href="#Best-selling">Best Sellings Products</a></li>
            </ul>
        </nav>
<!----------------------------------------/TOP NAV----------------------------------------> 


<!----------------------------------------IMAGE SLIDER----------------------------------------> 
<div class="container1">      
  <div class="slider-ctr">
 
    <!----Men----> 
    <figure class="slide"><img src="images/men4.jpg" alt="men" width="1500px" height="900px"/>
      <figcaption> 
        <div class="title">MEN</div>
        <div class="author">Smart & Style</div>
      </figcaption>
    </figure>
    <!----/Men----> 

    <!----Women----> 
    <figure class="slide"><img src="images/women.jpg" alt="women"width="1500px" height="900px"/>
      <figcaption> 
        <div class="title">WOMEN</div>
        <div class="author">Fusions & Fashion</div>
      </figcaption>
    </figure>
    <!----/Women----> 

    <!----Kids----> 
    <figure class="slide"><img src="images/kids.jpg" alt="kids" width="1500px" height="900px"/>
      <figcaption>
        <div class="title">KIDS</div>
        <div class="author">Casual & Cute</div>
      </figcaption>
    </figure>
    <!----/Kids----> 

    <!----Slider button----> 
    <div class="slider-control">
      <div class="control prev disabled">
        <div class="fa fa-angle-left"></div>
      </div>
      <div class="control next">
        <div class="fa fa-angle-right"></div>
      </div>
    </div>
    <!----/Slider button----> 
  </div>
</div> 
</br></br>
<!----------------------------------------/IMAGE SLIDER---------------------------------------->  

<!----------------------------------------HOVERABLE BOX----------------------------------------> 
<div class="container2">   
    
    <!--Hoverable box 1st-->    
      <div class="product">            
        <div class="effect-1"></div>            
        <div class="effect-2"></div>           
        <div class="content">             
          <div class="box">
            <i class="fa fa-gift"></i> 
          </div>           
        </div>            
        <span class="title">              
          Free gift            
        </span>      
      </div>
    <!--/Hoverable box 1st--> 

    <!--Hoverable box 2nd-->
        <div class="product">
          <div class="effect-1"></div>
          <div class="effect-2"></div>
          <div class="content">
            <div class="box">
              <i class='fa fa-truck-fast'></i>
            </div>
          </div>
          <span class="title">
            Fast shipping
          </span>
        </div>
    <!--Hoverable box 2nd--> 
  
    <!--Hoverable box 3rd-->
        <div class="product">
          <div class="effect-1"></div>
          <div class="effect-2"></div>
          <div class="content">
            <div class="box">
              <i class="fa fa-globe"></i>
            </div>
          </div>
          <span class="title">
            Global deals
          </span>
        </div>
    <!--Hoverable box 3rd--> 
  
    <!--Hoverable box 4th-->
        <div class="product">            
          <div class="effect-1"></div>            
          <div class="effect-2"></div>           
          <div class="content">             
            <div class="box">
              <i class='fa fa-gem'></i>
            </div>            
          </div>            
          <span class="title">              
            Clothesy Premium            
          </span>      
        </div>
    <!--Hoverable box 4th--> 
  
    <!--Hoverable box 5th-->
        <div class="product">
          <div class="effect-1"></div>
          <div class="effect-2"></div>
          <div class="content">
            <div class="box">
              <i class='fa fa-coins'></i>
            </div>
          </div>
          <span class="title">
            Free points & vouchers
          </span>
        </div>
    <!--Hoverable box 5th--> 

    <!--Hoverable box 6th-->
    <div class="product">
        <div class="effect-1"></div>
        <div class="effect-2"></div>
        <div class="content">
          <div class="box">
            <i class='fa fa-calendar'></i>
          </div>
        </div>
        <span class="title">
          Monthly Sales
        </span>
      </div>
    <!--Hoverable box 6th-->

    <!--Hoverable box 7th-->
    <div class="product">
        <div class="effect-1"></div>
        <div class="effect-2"></div>
        <div class="content">
          <div class="box">
            <i class='fa fa-birthday-cake'></i>
          </div>
        </div>
        <span class="title">
          Birthday Discount
        </span>
      </div>
    <!--Hoverable box 7th-->

    </div>
  </br></br>


 
<!----------------------------------------/HOVERABLE BOX----------------------------------------> 

<section id="New-arrival">

<center><hr style="height:5px; color: black; width:85%; text-align:center; margin-left:70px; margin-top:90px;"></center>
<div class="f-p"></br>

    <h2><center>NEW ARRIVALS</center></h2>
</div>

<!----------------------------------------NEW ARRIVALS----------------------------------------> 
 <!-- Shop -->
 <section class="shop-container">
  <h2 class="section-title"></h2><center><hr style="height:5px; color: black; width:85%; text-align:center; margin-left:70px; margin-top:90px;"></center>
  <br></br>
  <div class="container20">
  <div class="shop-content">
      <!-- Box 1 -->
      <div class="product-box">
          <img src="images/men-formal-3.jpg" alt="" class="product-img">
          <h2 class="product-title">PLAID LAPEL SUIT</h2>
          <span class="price">$ 25</span>
          <i class='bx bx-shopping-bag add-cart' onclick="myFunction()"></i>

      </div>
      <!-- Box 2 -->
      <div class="product-box">
          <img src="images/women-sports-1.jpg" alt="" class="product-img">
          <h2 class="product-title">3pcs SPORTS SET</h2>
          <span class="price">$ 250</span>
          <i class='bx bx-shopping-bag add-cart' onclick="myFunction()"></i>

      </div>
      <!-- Box 3 -->
      <div class="product-box">
          <img src="images/girl dress.png" alt="" class="product-img">
          <h2 class="product-title">CROP TO THE TOP</h2>
          <span class="price">$ 80</span>
          <i class='bx bx-shopping-bag add-cart' onclick="myFunction()"></i>

      </div>
    </div>
  </div>
  </section>
</section>

<!----------------------------------------NEW ARRIVALS----------------------------------------> 
<section id="Best-selling">

<center><hr style="height:5px; color: black; width:85%; text-align:center; margin-left:70px; margin-top:90px;"></center>

<div class="f-p"></br>
    <h2><center>BEST SELLING ITEMS</center></h2>
</div>

<!----------------------------------------NEW ARRIVALS----------------------------------------> 
 <!-- Shop -->
 <section class="shop-container">
  <h2 class="section-title"></h2><center><hr style="height:5px; color: black; width:85%; text-align:center; margin-left:70px; margin-top:90px;"></center>
  <br></br>
  <div class="container20">
  <div class="shop-content">
      <!-- Box 1 -->
      <div class="product-box">
          <img src="images/women-formal-3.jpg" alt="" class="product-img">
          <h2 class="product-title">TODDLER BOYS PLAID SHIRT & ELASTIC WAIST PANTS</h2>
          <span class="price">$ 35</span>
          <i class='bx bx-shopping-bag add-cart' onclick="myFunction()"></i>

      </div>
      <!-- Box 2 -->
      <div class="product-box">
          <img src="images/men-sports-2.jpg" alt="" class="product-img">
          <h2 class="product-title">MEN HOODIE AND JOGGER </h2>
          <span class="price">$ 150</span>
          <i class='bx bx-shopping-bag add-cart' onclick="myFunction()"></i>

      </div>
      <!-- Box 3 -->
      <div class="product-box">
          <img src="images/boy-kids-4.jpg" alt="" class="product-img">
          <h2 class="product-title">WOMEN FLARRED BUTTERFLY</h2>
          <span class="price">$ 80</span>
          <i class='bx bx-shopping-bag add-cart' onclick="myFunction()"></i>

      </div>
    </div>
  </div>
    </section>
  </section>


<!----------------------------------------BEST SELLING----------------------------------------> 

<!----------------------------------------BEST SELLING----------------------------------------> 
<center><hr style="height:5px; color: black; width:85%; text-align:center; margin-left:70px; margin-top:90px;"></center>


<!----------------------------------------FOOTER----------------------------------------> 
<div class="main2"></br>
    <footer>
      <div class="footer" id="footer">
          <div class="container5">
              <div class="row1">
                
                  <div class=" column1">
                      <h3> COMPANY INFO </h3>
                      <ul>
                          <li> <a href="#"> About Clothesy </a> </li>
                          <li> <a href="#"> Fashion Blogger </a> </li>
                          <li> <a href="#"> Social Responsibility </a> </li>
                      </ul>
                  </div>

                  <div class=" column1">
                      <h3> HELP & SUPPORT </h3>
                      <ul>
                          <li> <a href="#"> Shipping Info </a> </li>
                          <li> <a href="#"> Returns </a> </li>
                          <li> <a href="#"> How To Order </a> </li>
                          <li> <a href="#"> How To Track </a> </li>
                          <li> <a href="#"> Payment Method </a> </li>
                      </ul>
                  </div>
                  
                  <div class="column1">
                    <h3> APP </h3>
                    <ul class="apple">
                        <li> <a href="https://apps.apple.com/us/app/shein-online-fashion/id878577184"> <i class=" fab fa-apple">   </i> </a> </li>                   
                    </ul>
                    <ul class="android">
                      <li> <a href="https://play.google.com/store/apps/details?id=com.zzkko"> <i class="fab fa-android">   </i> </a> </li>
                    </ul>
                    <br>
                    <h3> SOCIAL MEDIA</h3>
                    <ul class="fb">
                      <li> <a href="https://www.facebook.com/SHEINOFFICIAL/"> <i class=" fab fa-facebook">   </i> </a> </li>
                    </ul>
                    <ul class="twitter">
                      <li> <a href="https://twitter.com/shein_official"> <i class="fab fa-twitter">   </i> </a> </li>
                    </ul>
                    <ul class="pinterest">
                      <li> <a href="https://www.pinterest.com/SHEINofficial/"> <i class="fab fa-pinterest">   </i> </a> </li>
                    </ul>
                    <ul class="ig">
                      <li> <a href="https://www.instagram.com/sheinofficial/"> <i class="fab fa-instagram">   </i> </a> </li>
                    </ul>
                  </div>
                    
                  <div class=" column1 ">
                      <h3> WE ACCEPT: </h3>
                      <ul class="payments">
                            <li><i class="fab fa-cc-visa"></i></li>
                            <li><i class="fab fa-cc-mastercard"></i></li>
                            <li><i class="fab fa-cc-amex"></i></li>
                            <li><i class="fab fa-cc-paypal"></i></li>
                            <li><i class="fa fa-credit-card"></i></li>
                            <li><i class="fab fa-google-wallet"></i></li>
                            <li><i class="fa fa-money-bill-transfer"></i></li>
                        </ul>       
                  </div>
                  <p>©2022 Clothesy All Rights Reserved</p>
              </div>
              <!--/.row--> 
          </div>
          <!--/.container--> 
      </div>
      <!--/.footer-->
    </footer>
  </div>
  <!----------------------------------------/FOOTER----------------------------------------> 



</body>
</html>
  <script>
    const body = document.querySelector("body"),
    sidebar = body.querySelector("nav"),
    toggle = body.querySelector(".toggle"),
    searchBtn = body.querySelector(".search-box"),
    modeSwitch = body.querySelector(".toggle-switch"),
    modeText = body.querySelector(".mode-text");
    toggle.addEventListener("click", () => {
  sidebar.classList.toggle("close");
});
    searchBtn.addEventListener("click", () => {
    sidebar.classList.remove("close");
});
    modeSwitch.addEventListener("click", () => {
    body.classList.toggle("dark");
    if (body.classList.contains("dark")) {
    modeText.innerText = "Light mode";
  } else {
    modeText.innerText = "Dark mode";
  }
});

</script>

 <script> 
    // buttons
  var sliderControl = document.querySelector(".slider-control");
  
  // slides informations
  var slides = document.querySelectorAll(".slide"),
      slidesLength = slides.length;
  
  // slides array
  var slidesArr = [].slice.call(slides);
  
  // reverse array sorting
  slidesArr = slidesArr.reverse();
  
  // slide current
  var slideCurrent = 0;
  
  sliderControl.addEventListener("click", function(e){
    target = e.target;
    
    // get next button
    if(target.classList.contains("next")){
  
      next = e.target,
      prev = next.previousElementSibling,
      nextSlide = slidesArr[slideCurrent + 1],
      slide = slidesArr[slideCurrent];
      
      slide.classList.add("slide-on");
      slide.classList.remove("text-on");
      nextSlide.classList.add("text-on");
      
      slideCurrent += 1;
      
      if(slideCurrent > 0) {
        prev.classList.remove("disabled");
      }
      
      if(slideCurrent === slidesLength - 1){
        next.classList.add("disabled");
      }
    }
    
    // get prev button
    if(target.classList.contains("prev")){
      
      slideCurrent -= 1;
      
      prev = e.target,
      next = prev.nextElementSibling,
      prevSlide = slidesArr[slideCurrent + 1],
      slide = slidesArr[slideCurrent];
      
      prevSlide.classList.remove("text-on");
      slide.classList.remove("slide-on");
      slide.classList.add("text-on");
      
      if(slideCurrent === slidesLength - 2){
        next.classList.remove("disabled");
      }
  
      if(slideCurrent === 0){
        prev.classList.add("disabled");
      }
      
    }
  
  });
    
  </script>
  <script>
  function myFunction(){
  alert("Please Login or Register To Use The Features");
  }
  </script>
  
 