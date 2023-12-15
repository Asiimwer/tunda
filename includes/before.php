
<nav class="navbar navbar-expand-sm bg-light">
<div class="container-fluid">
<ul class="navbar-nav ">
            <li class="nav-item">
            <a class="nav-link" href="index.php">  Home </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="cart.php">Cart</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="aboutus.php">About us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="category.php">Categories</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="cartegories.php"><i class="fa-thin fa-tty-answer"></i></a>
            </li>
        </ul>
</div>
</nav>
<div class="container">
<div class=" p-5 leveling btn-group pb-1">
    <li class="btn btn-primary btn-block C ">Supermarket</li>
    <li class="btn btn-primary btn-block C "> Computing</li>
    <li class="btn btn-primary btn-block C ">Cookery</li>
    <li class="btn btn-primary btn-block C ">Electronics</li>
    <li class="btn btn-primary btn-block C ">Fashion and design</li>
    <li class="btn btn-primary btn-block C ">Gaming</li>
    <li class="btn btn-primary btn-block C ">Home equipment</li>
    <li class="btn btn-primary btn-block C ">Personal Hygiene</li>
    <li class="btn btn-primary btn-block C ">Phones and Tablets</li>
    <li class="btn btn-primary btn-block C">Contact Us</li>
</div>   
</div>


<div class="container">
<div class=" p-5 leveling btn-group pb-1">
<li class="list1 btn btn-primary btn-block C">
<a  class=" nav-link" href="#">
<span class="icon">
    <ion-icon name="person-outline"></ion-icon>  
    </span>                  
    <span class="text">Computing</span>
</a>
</li>
<div class="indicator"></div>

<li class="list1 btn btn-primary btn-block C">
<a  class=" nav-link" href="#">
<span class="icon">
    <ion-icon name="person-outline"></ion-icon>  
    </span>                  
    <span class="text">Cookery</span>
</a>
</li>
<div class="indicator"></div>
<li class="list1 btn btn-primary btn-block C">
<a  class=" nav-link" href="#">
<span class="icon">
    <ion-icon name="person-outline"></ion-icon>  
    </span>                  
    <span class="text">Electronics</span>
</a>
</li>
<div class="indicator"></div>

<li class="list1 btn btn-primary btn-block C">
<a  class=" nav-link" href="#">
<span class="icon">
    <ion-icon name="person-outline"></ion-icon>  
    </span>                  
    <span class="text">Fashion and design</span>
</a>
</li>
<div class="indicator"></div>

<li class="list1 btn btn-primary btn-block C">
<a  class=" nav-link" href="#">
<span class="icon">
    <ion-icon name="person-outline"></ion-icon>  
    </span>                  
    <span class="text">Gaming</span>
</a>
</li>
<div class="indicator"></div>

<li class="list1 btn btn-primary btn-block C">
<a  class=" nav-link" href="#">
<span class="icon">
    <ion-icon name="person-outline"></ion-icon>  
    </span>                  
    <span class="text">Home equipment</span>
</a>
</li>
<div class="indicator"></div>

<li class="list1 btn btn-primary btn-block C">
<a  class=" nav-link" href="#">
<span class="icon">
    <ion-icon name="person-outline"></ion-icon>  
    </span>                  
    <span class="text">Personal Hygiene</span>
</a>
</li>
<div class="indicator"></div>

<li class="list1 btn btn-primary btn-block C">
<a  class=" nav-link" href="#">
<span class="icon">
    <ion-icon name="person-outline"></ion-icon>  
    </span>                  
    <span class="text">Phones and Gadgets</span>
</a>
</li>
<div class="indicator"></div>

<li class="list1 btn btn-primary btn-block C">
<a  class=" nav-link" href="#">
<span class="icon">
    <ion-icon name="person-outline"></ion-icon>  
    </span>                  
    <span class="text">Contact Us</span>
</a>
</li>
<div class="indicator"></div>
</div>   
@import url('https:/fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900');
*
{

margin: o;
padding: 0;
box-sizing: border-box;
font-family: 'Poppins', sans-serif;
}
:root
{
    --clr: #222327;
}
body
{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: var(--clr);
}
.navigation
{
    position: relative;
    width: 400px;
    height: 70px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 10px;
}
.navigation ul
{
    display: flex;
    width: 3500px;
}
.navigation ul li
{
    position: relative;
    list-style: none;
    width: 70%;
    height: 70px;
    z-index: 1;
}
.navigation ul li a{
    position: relative;   
 display: flex;
 justify-content: center;
 align-items: center;
 flex-direction: column;
 width: 100%;
 text-align: center;
 font-weight: 500;
}
.navigation ul li a .icon{
        position: relative;
        display: block;
        line-height: 75px;
        font-size: 1.5em;
        text-align: center;
        transition: 0.5s;
        color: var(--clr);
}
.navigation ul li:active a .icon
{
    transform: translateY(-32px);
}
.navigation ul li a .text
{
    position: absolute;
    color: var(--clr);
    font-weight: 400;;
    font: size 0.75em;
    letter-spacing: 0.0;
    transition: 0.5s;
    opacity: 0;
    transform: translateY(28px);
}
.navigation ul li:active  a .text
{
    opacity: 1;
    transform: translateY(10px);
}

.indicator
{
    position: absolute;
    top: -50%;
    width: 70px;
    height: 70px;
    background-color: #29fd53;
    border-radius: 50%;
    border: 6px solid var(--clr);
    transition: 0.5s;
}
.indicator::before{
    content: '';
    position: absolute;
    top:50%;
    left: -22.5px;
    width: 20px;
    height: 20px;
    background:transparent;
    border-top-right-radius: 20px;
    box-shadow: 0px -10px 0 0 var(--clr);

}
.indicator::after{
    content: '';
    position: absolute;
    top:50%;
    right: -22.5px;
    width: 20px;
    height: 20px;
    background:transparent;
    border-top-left-radius: 20px;
    box-shadow: 0px -10px 0 0 var(--clr);

}
.navigation ul li:nth-child(1) .active ~ .indicator
{
    transform: translateX(calc(70px * 0));
}
.navigation ul li:nth-child(2) .active ~ .indicator
{
    transform: translateX(calc(70px * 1));
}