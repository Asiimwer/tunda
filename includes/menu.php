       
    
    


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/taskbar.css" type="text/css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light">
   
    
    <div class="navigation container-fluid">
      <ul class="navbar-nav ">
        <li class="list active">
        <a class=" nav-link" href="#">
        <span class="icon">
            <ion-icon name="home-outline"></ion-icon>
        </span>
        <span class="text ">Home</span>
    </a>
        </li>
        <li class="list">
            <a class=" nav-link" href="#">
            <span class="icon">
                <ion-icon name="cart-outline"></ion-icon>
             </span>
            <span class="text">Cart</span>
            </a>
            </li>
            
            <li class="list">
                <a class=" nav-link" href="#">
                <span class="icon"> 
                    <ion-icon name="list-outline"></ion-icon>
                </span>
                <span class="text">About Us </span>
            </a>
                </li>
                <li class="list">
                    <a class="nav-link" href="cartegories.php">
                    <span class="icon">
                        <ion-icon name="storefront-outline"></ion-icon>    
                    </span>
                    <span class="text">Categories</span>

                </a>
                    </li>
                    <li class="list">
                        <a  class=" nav-link" href="#">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon>  
                            </span>                  
                            <span class="text">Account</span>
                        </a>
                        </li>
                        <div class="indicator"></div>
    </ul>  
    <li class="list">
                        <a  class=" nav-link" href="#">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon>  
                            </span>                  
                            <span class="text"></span>
                        </a>
                        </li>
                        <div class="indicator"></div>
    
    </div>
    <script>
        const list = document.querySelectorAll('list');
        function activeLink(){
            list.forEach((item)=>
            item.classList.remove('active'));
            this.classList.add('active');
        }
        list.forEach((item) =>
        item.addEventListener('click,activeLink'))
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</nav>

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
</div>
</body>
</html>
