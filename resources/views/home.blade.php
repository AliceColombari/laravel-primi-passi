<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <!-- Style -->
    <style>
        html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-relativa {
            position: relative;
        }
        .position-assoluta {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 2px;
            text-decoration: none;
            text-transform: uppercase;
        }
        .box-titolo {
            text-align: center;
        }
        .titolo {
            font-size: 84px;
        }
    </style>
</head>
<body>

    <header class="flex-center position-relativa">
        <div class="position-assoluta links">
           
                <a href="product">PRODOTTI</a>
                <a href="contact">CONTATTI</a>
            
        </div>
    </header>

    <main class="box-titolo">
        <h1  class="titolo">
            {{$stringa}}    
        </h1>
    </main>

</body>
</html>