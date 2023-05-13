<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweet Bee</title>
    <link rel="shortcut icon"  type="image/x-icon">

    <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet" />

    <!--Bootstrap stylesheet-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" >

    <!--Main stylesheet-->
    <link rel="stylesheet" href="css/main.css">

</head>
<body> 
    <!--NavBar-->
    <nav class="navbar navbar-expand-lg py-2 sticky-top navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="{{URL ('img/bee.png')}}" alt="" width="30" height="30" class="d-inline-block align-text-top">
            <span>SweeetBee</span>
            <h6 class="text-dark my-1"> Welcome, {{ Auth::user()->name}}</h6>
           
          </a>
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
              <a class="nav-link" href="#product">Product</a>
              <a class="nav-link" href="#about">About</a>
              <a class="nav-link" href="#footer">Contact</a>
              <div class="navbar-nav ms-auto">
                <td><button class="btn btn-sml-light" onclick="location.href='{{url('product')}}'">Crud</button></td>              
              </div>
              <form action="{{  route('logout')  }}" method="POST" class="d-flex" roles="search">
                @csrf
                @method('DELETE')
              <button class = "btn btn-danger" type ="submit">Logout</button>
              </form>
              
             
            </div>
            
          </div>
        </div>
      </nav>

      
      <!--HERO-->
      
      <div class="hero vh-100 d-flex align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 mx-auto text-center">
              <h1 class="display-4 text-white">
                Cake for every occasions
              </h1>
              <p class="text-white my-4">
                All of our cakes are baked from scratch daily, nothing is ever frozen, and we only use the highest quality local ingredients.  
              </p>
              <a href="#" class="btn btn-outline-light"> Order now</a>
            </div>
          </div>
        </div>
      </div>
<!--  PRODUCT -->
      <section id="product" >
          <div class="container">
            <div class="row">
              <div class="col-md-8 mx-auto text-center">                         
                <h1><FONT COLOR="#682C0E">Products</FONT></h1>
                <p><FONT COLOR="#682C0E">We serve delicious desserts and deliver unique exprience for you</FONT></p>    
              </div>
            </div>
            <div class = "d-flex flex-wrap justify-content-center mt-1 filter-button-group">
              <button type = "button" class = "btnp m-2 text-dark active-filter-btn" data-filter = "*">Cakes</button>
              <button type = "button" class = "btnp m-2 text-dark" data-filter = ".best">Breads</button>
              <button type = "button" class = "btnp m-2 text-dark" data-filter = ".feat">Drinks</button> 
          </div>
          
          <!--CAKES--> 
            <div class="row mt-3">
              <div class="column">
                <img src="img/Cheesecake.jpg" alt="cheese" >
                <h4>Cheesecake</h4>
              </div>
              <div class="column">
                <img src="img/3chocolate.jpg" alt="choco" >
                <h4>Chocolate Cake</h4>
              </div>
              <div class="column">
                <img src="img/redvelvet.jpg" alt="redvelvet" >
                <h4>Red Velvet</h4>
              </div>
              <div class="column">
                <img src="img/fruitcake.jpg" alt="fruit" >
                <h4>Fruit Cake</h4>
              </div>
              <div class="col-md-12 text-center">
                <a href="#" class="btnp btnp-outline-dark"> See More</a>
              </div>
              <!--bREADS-->
                <div class="column">
                  <img src="img/bananabread.jpg" alt="banana" >
                  <h4>Banana Bread</h4>
                </div>
                <div class="column">
                  <img src="img/cinnamon.jpg" alt="cinnamon" >
                  <h4>Cinnamon</h4>
                </div>
                <div class="column">
                  <img src="img/croissant.jpg" alt="croissant" >
                  <h4>Croissant</h4>
                </div>
                <div class="column">
                  <img src="img/frenchbread.jpg" alt="frenchbread" >
                  <h4>French Bread</h4>
                </div>
                
                <div class="col-md-12 text-center">
                  <a href="#" class="btnp btnp-outline-dark"> See More</a>
                </div>
                <!--dRINKS-->
                  <div class="column">
                    <img src="img/hotchoco.jpg" alt="hotchoco" >
                    <h4>Hot Chocolate</h4>
                  </div>
                  <div class="column">
                    <img src="img/icedcoffee.jpg" alt="icedcoffee" >
                    <h4>Iced Coffee</h4>
                  </div>
                  <div class="column">
                    <img src="img/matcha.jpg" alt="matcha" >
                    <h4>Matcha</h4>
                  </div>
                  <div class="column">
                    <img src="img/espresso.jpg" alt="espresso" >
                    <h4>Espresso</h4>
                  </div>
                  
                  <div class="col-md-12 text-center">
                    <a href="#" class="btnp btnp-outline-dark"> See More</a>
                  </div>
   
            </div>
          </div>
      </section>

      <!--  ABOUT -->
      <section id="about" class="py-5">
        <div class="container">
          <div class="row gy-lg-5 align-items-center">
            <div class="col-lg-6 order-lg-1 text-center text-lg-start">
              <div class="title pt-3 pb-4">
                <h2 class="position-relative d-inline-block ms-4"><FONT COLOR="#682C0E">About us</FONT></h2>
              </div>
              <p class="">Sweet Bee opened its first location on a busy street corner of Makati City. From its inception, Sweet Bee has been cherished for its flavorous baked cakes and breads, and inviting atmosphere.</p>
            </div>

            <div class="col-lg-6 order-lg-0">
              <img src="img/cakes.jpg" alt="" class="img-fluid">
            </div>
          </div>
        </div>
        
      </section>
      
 <!-- NEWSLETTER  -->     
      <section id="newsletter" class="py-3">
        <div class="container">
          <div class="d-flex flex-column align-items-center justify-content-center">
            <div class="title text-center pt-3 pb-3">
              <h2 class="position-relative d-inline-block ms-4"><FONT COLOR="#682C0E">Newsletter Subscription</FONT></h2>
            </div>

            <p calass="text-center text-muted">Subsribe to be updated to our latest products and discounts</p>
            <div class="input-group mb-3 mt-3">
              <input type="text" class="form-control" placeholder="Enter Your Email">
              <button class="btn btn-primary" type="submit">Subscribe</button>

            </div>
          </div>
        </div>
      </section>

  

  <!--  FOOTER  -->
      <footer class="bg-dark py-5" id="footer">
        <div class="container">
          <div class="row text-white g-4">
            <div class="col-md-6 col-lg-3">
              <a class="text-uppercase text-decoration-none brand text-white" href="index.html">SweeetBee</a>
              <p class=" text-secondary mt-3">Life is too short for just one cheat day a week. Every cake is a savory adventure. Explore it!</p>
            </div>

            <div class="col-md-9 col-lg-3">
              <h5 class="fw-light">Links</h5>
              <ul class="list-unstyled">
                <li class=" my-3 ">
                  <a href="#" class="text-secondary text-decoration-none text-secondary">
                    <i>Home</i>
                  </a>
                </li>
                <li class=" my-3 ">
                  <a href="#product"  class="text-decoration-none text-secondary">
                    <i>Product</i>
                  </a>
                </li>
                <li class=" my-3 ">
                  <a href="#about"  class="text-decoration-none text-secondary">
                    <i>About</i>
                  </a>
                </li>
                <li class=" my-3 ">
                  <a href="#" class="text-secondary text-decoration-none text-secondary">
                    <i>Contact</i>
                  </a>
                </li>
              </ul>
            </div>

            <div class="col-md-6 col-lg-3">
              <h5 class="fw-light mb-3">Contact Us</h5>
              <div class="d-flex justify-content-start align-itmes-start my-2 text-secondary">
                <span class="me-2">
                  <i class="fas fa-map-marked-alt"></i>
                </span>
                <span class="fw-light">Bldg A. 123 st., Makati City, Philippines</span>
              </div>
              <div class="d-flex justify-content-start    align-itmes-start my-2 text-secondary">
                <span class="me-2">
                  <i class="fas fa-envelope"></i>
                </span>
                <span class="fw-ightl">sweetbee.info@gmail.com
                </span>
              </div>
              <div class="d-flex justify-content-start align-itmes-start my-2 text-secondary">
                <span class="me-2">
                  <i class="fas fa-phone"></i>
                </span>
                <span class="fw-light">+63932 456 7890
                </span>
              </div>
            </div>

            <div class="col-md-6 col-lg-3">
              <h5 class="fw-light mb-3">Follow us</h5>
              <div>
                <ul class="list-unstyled d-flex">
                  <li>
                    <a href="#" class="text-secondary text-decoration-none text-secondary fs-4 me-4">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="text-secondary text-decoration-none text-secondary fs-4 me-4">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="text-secondary text-decoration-none text-secondary fs-4 me-4">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="text-secondary footer-bottom">
                <p>Copyright &copy;2023 Sweet Bee</p>
              </div>

            </div>
          </div>
        </div>

      </footer>

    <!--Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

<style>
  /*Font*/
@import url('https://fonts.googleapis.com/css2?family=Barlow:wght@300;500&family=Josefin+Sans:wght@500&display=swap');
:root {
    --primary: #682C0E;
    --primary-dark:#7E370C;
    --brown: #B05E27;
    --yellow-1: #D4AC2B;
    --yellow-2: #FFCE45;
    --body:#F9E0AE;
    --white-navbar: #FFFFFF;
    --light: #FAF8F1;
    --lg-font: 'Josefina Sans', serif;
    --sm-font: 'Barlow', sans-serif;
}

html {scroll-behavior: smooth;}

body{
    font-family: var(--sm-font);
    line-height: 1.7;
    background-color: var(--body);
}

h3
 {
    color: #2d3436;
    font-weight: 700;
}

h1,h2,h3,h4,h5,h6,
.display-4 {
    color: var(--light);
    font-weight: 700;
}


a{
    color: var(--light);
    text-decoration: none;
}

.navbar{
    box-shadow: 0 3px 9px 3px rgba(0, 0, 0, 0.2);
}
.navbar .nav-link{
    font-size: 17px;
    font-weight: 700;
}

.navbar-brand{
    font-weight: 600;
    font-size: 23px;
    margin: 0px;
}

.btn{
    padding: 14px 18px;
    border-width: 2px;
    border-radius: 0;
}

.hero {
    background-image: url(../img/blackforest.jpeg);
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    position: relative;
    z-index: 2;
}

.hero::after{
    content: "";
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: -1;
}

section{
    background-color: var(--light);
    padding-top: 30px;
    padding-bottom: 30px;
}
/*Menu images*/
.row{
    display: flex;
    flex-wrap: wrap;
    padding: 0 4px;
}

.column{
    flex: 25%;
    max-width: 25%;
    padding: 0 4px;
}
.column img{
    margin-top: 8px;
    vertical-align: middle;
    width: 100%;
}

@media screen and (max-width:800px){
    .column{
        flex: 50%;
        max-width: 50%;
    }
}

@media screen and (max-width:600px){
    .column{
        flex: 100%;
        max-width: 100%;
    }
}

h4 {
    text-align: center;
    color: #682C0E;
}

.btnp:not(.nav-btns button){
    background-color: var(--light);
    color: rgb(85, 85, 85);
    padding: 10px 28px;
    border-radius: 25px;
    border: 1px solid rgb(85, 85, 85);
}
.btnp:not(.nav-btns button):hover{
    background-color: var(--brown);
    color: #fff;
    border-color: var(--brown);
}


/*  ABOUT   */
#about{
    background-color: var(--body);
}

/*  NEWSLETTER  */
#newsletter{
    background-color: var(--light);
}

#newsletter p{
    max-width: 600px;
}

#newsletter .input-group{
    max-width: 500px;
}

#newsletter .form-control{
    border-top-left-radius: 25px;
    border-bottom-left-radius: 25px;
}

#newsletter .btn{
   background-color: var(--brown);
   color: var(--light);
   border-color: var(--brown);
   border-top-right-radius: 25px;
   border-bottom-right-radius: 25px;
}

#newsletter .btn:hover{
    background-color: #000;
    border-color: #000;
}

/*  footer  */

footer.brand{
    letter-spacing: 2px;
}

footer a{
    transition: color 0.3s ease;
}

footer a:hover{
    color: var(--brown)!important;
}


</style>