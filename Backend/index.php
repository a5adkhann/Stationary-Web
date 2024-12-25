<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend - Stationary Web</title>
    <link rel="stylesheet" href="./css/style.css">

    <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/894005d3c1.js" crossorigin="anonymous"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="logo">
                <img src="./logo/stationary.png" alt="">
            </div>
            <ul> 
                <li class="active"> <span><i class="fa-solid fa-list"></i> <a href=""> Categories </a></span> <span><i id="sidebar-link-toggle" class="fa-solid fa-circle"></i> </span> </li>
                <div id="dropdown-item" class="hide">
                    <p>Add Category</p>
                    <p>View Category</p>
                </div>
                <li> <i class="fa-brands fa-product-hunt"></i> <a href=""> Products </a></li>
                <li> <i class="fa-solid fa-right-to-bracket"></i> <a href=""> Login </a></li>
                <li> <i class="fa-solid fa-registered"></i> <a href=""> Register </a></li>
            </ul>
        </div>

        <div class="main-section">
            <h1>Welcome to Stationary Web Backend</h1>
        </div>
    </div>


    <script src="./js/script.js"></script>
</body>
</html>