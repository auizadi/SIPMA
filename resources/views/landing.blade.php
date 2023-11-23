<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>SIPMA</title>
    <link rel="stylesheet" href="CSS/style-landing.css">
</head>
<body>

    
    <header class="header">
        <a href="" class="logo">SIPMA</a>

        <nav class="navbar">
            <a href="">HOME</a>
            <a href="">ABOUT</a>
            <a href="">TUTORIAL</a>
            <a href="">CONTACT</a>
        </nav>
    </header>

    <div class="grid-container">
        <div class="grid-item konten">
            
                <h1>SIPMA</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt recusandae voluptas eaque ut dolorem enim hic iure itaque blanditiis, nemo, veritatis, tempore saepe officiis sit perspiciatis minus ullam nesciunt accusantium repellat ipsa libero. Maxime nemo reiciendis, perspiciatis blanditiis deleniti a explicabo fugit suscipit dolor porro temporibus. Exercitationem quo alias culpa.</p>
            <br>
                <div class="container-button">
                <div class="item-button btn1">
                    <button>LOGIN</button>
                </div>
                <div class="item-button btn2">
                  <a href="{{ route('user') }}"><button>DAFTAR </button></a>
                </div>

            </div>
            
          </div>
       
        <div class="grid-item gambar">
            <img src="{{ asset('img/sample.jpeg')  }}" alt="" width="500px">
        </div>
     
</body>

</html>