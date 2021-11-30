 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
       <div class="nav-wrapper">
           <div class="left-side">
               <div class="nav-link-wrapper">
                    <a href="index.html">Home</a>
               </div>
               <div class="nav-link-wrapper">
                   <a href="about.html">About</a>
                </div>
                
            </div>

            <div class="right-side"
                <div class="brand" 
                    <div>FASHIONISTAH DESIGNS</div>
                </div>
            </div> 

                
        </div>
    </div>
    <form action="action_page.p…
[12:09 PM, 11/3/2020] Fridah abiero: body {
    margin: 0px;
}

.nav-wrapper {
  display: flex;
  justify-content: space-between;
  padding: 38px;
}

.left-side {
    display: flex;
}

.nav-wrapper > .left-side > div {
    margin-right: 20px;
    font-size: 0.9em; 
    text-transform: uppercase;
}

.nav-link-wrapper{
    height: 22px;
    border-bottom: 1px solid transparent;
    transition: border-bottom 0.5s;
}

.nav-link-wrapper a{
    color: #8a8a8a;
    text-decoration: none;
    transition: color 0.5s;
}

.nav-link-wrapper:hover {
    border-bottom: 1px solid purple;
}

.nav-link-wrapper a:hover {
    color: purple
}

/* Bordered form */
form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8p…
[12:09 PM, 11/3/2020] Fridah abiero: <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About</title>
</head>
<body>
    <h2>About me...coming soon</h2>
    <img src=" images\matias-ilizarbe--uqM_knm2as-unsplash.jpg" alt="Lady"  width="50" height="50">

    <!-- Load font awesome icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- The navigation menu -->
<div class="navbar">
  <a href="#styles">Styles</a>
  <div class="subnav">
    <button class="subnavbtn">Services <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#men">Men</a>
      <a href="#ladies">Ladies</a>
      <a href="#jewels">Jewels</a>
      <a href="#babies">Babies</a>
      <a href="#shoes">Shoes</a>
    </div>
  </div>
  <div class="subnav">
    <button class="subnavbtn">Package <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#bring">Bring</a>
      <a href="#deliver">Deliver</a>
      <a href="#trace">Trace</a>
      <a href="#express">Express</a>
    </div>
  </div>
  <div class="subnav">
    <button class="subnavbtn">Partners <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#link1">Link 1</a>
      <a href="#link2">Link 2</a>
      <a href="#link3">Link 3</a>
      <a href="#link4">Link 4</a>
    </div>
  </div>

  <a href="#contact">Contact</a>
</div>
</body>
</html>