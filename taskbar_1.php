<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="taskbar.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <div class="navigation">
    <ul>
        <li class="list active">
        <a href="#">
        <span class="icon"  >
            <ion-icon name="home-outline"></ion-icon>
        </span>
       <a href="includes/home.php"> <span class="text">Home</span> <a>
    </a>
        </li>
        <li class="list">
            <a href="#">
            <span class="icon">
                <ion-icon name="cart-outline"></ion-icon>
             </span>
            <span class="text">Cart</span>
            </a>
            </li>
            
            <li class="list">
                <a href="#">
                <span class="icon"> 
                    <ion-icon name="list-outline"></ion-icon>
                </span>
                <span class="text">Categories</span>
            </a>
                </li>
                <li class="list">
                    <a href="#">
                    <span class="icon">
                        <ion-icon name="storefront-outline"></ion-icon>    
                    </span>
                    <span class="text">About Us</span>
                </a>
                    </li>
                    <li class="list">
                        <a href="#">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon>  
                            </span>                  
                            <span class="text">Account</span>
                        </a>
                        </li>
                        <div class="indicator"></div>
    </ul>    
    
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

</body>
</html>