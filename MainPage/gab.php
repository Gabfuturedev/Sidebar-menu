<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        header {
            height: auto;
            width: 100%;
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            z-index: 9999;
            background-color: #D9D9D9;
            
            
        }

        nav {
            position: absolute;
            top: 0;
            left: 0;
            height: 100vh;
            background-color: #D9D9D9;
            transition: all 0.5s ease;
            width: 70px;
            padding-top: 20px;
        }

        nav.active  {
            width: 250px;
        }

        nav #btn {
            position: absolute;
            top: .4rem;
            left: 10px;
            font-size: 1.5rem;
            cursor: pointer;
        }

        nav.active #btn {
            left: 90%;
        }

        nav ul {
            margin-top: 50px;
        }

        nav ul li {
            margin-bottom: 10px;
        }

        nav ul li a {
            display: flex;
            align-items: center;
            color: black;
            text-decoration: none;
            padding: 10px;
        }

        nav ul li a:hover {
            background-color: black;
            color: white;
        }

        nav ul li a i {
            margin-right: 10px;
            font-size: 1.2rem;
        }

        nav .nav-item {
            display: none;
            transition: all 0.5s ease;
        }

        nav.active .nav-item {
            display: inline;
            margin-top: 20px;

        }nav.active .label{
            opacity: 0;
        }
        .label {
            margin-left: 10px;
        }

        .main-content {
            transition: all 0.5s ease;
            margin-left: 70px;
            padding: 20px;
        }

        nav.active ~ .main-content {
            margin-left: 250px;
        }.logo{
            margin-left: 20%;
        }.logo-pic{
            border-radius: 100%;
            height: 100px;
            width: 100px;
        }.logo-text{
            line-height: 100px;
        }
    </style>
</head>
<body>
   <header>
    <div class="logo" ></div>
   <img src="logo.png" alt="" class="logo-pic" >
   <span class="logo-text">Agri-Learn</span>
       
      
       
   </header>

   <nav class="sidebar">
       <div><i class='bx bx-menu' id="btn" style="font-size: 32px;"></i></div>     
       <ul>
            <li>
                <a href="">
                    <i class="bx bx-home" style="font-size: 32px;"></i>
                    <span class="nav-item">Home</span>
                </a>
               <small class="label">Home</small>
            </li>
            
            <li>
                <a href="">
                    <i class="bx bx-book" style="font-size: 32px;"></i>
                    <span class="nav-item">Enrolled</span>
                </a>
                <small class="label">Enrolled</small>
            </li>
            
            <li>
                <a href="">
                    <i class='bx bx-cart' style="font-size: 32px;"></i>
                    <span class="nav-item">Purchase</span>
                </a>
                <small class="label">Purchase</small>
            </li>
        </ul>
   </nav>

   <main class="main-content">
       <div class="container"></div>
   </main>

   <script>
        let btn = document.querySelector('#btn');
        let sidebar = document.querySelector('.sidebar');

        btn.onclick = function() {
            sidebar.classList.toggle('active');
        };
   </script>
</body>
</html>
