<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
        <title>HelloWorld</title>
        
    </head>
    <style>
        /* common */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .wrapper {
            width: 80%;
            margin: 0 auto;
        }

        h1 {
            color: cornflowerblue;
        }
        body {
            font-family: 'Roboto', sans-serif;
            padding: 30px 0;
            background-color: bisque;
        }
        /* main */
        main img {
            width: 200px;
            border-radius: 20%;
        }
        main * {
            margin: 10px 0;
        }

        /* footer */
        footer ul li {
            list-style: none;
        }

        footer ul li a {
            text-decoration: none;
            color: black;
        }

        footer ul li a:hover {
           color: rgb(120, 122, 122);
        }

    </style>
    <body>
        <main class="wrapper">

            <section>
                <article>
                    <h1>Le tue offerte per oggi, {{$name}}</h1>
                </article>
            </section>

            <section>
                <article>
                    <h4>{{$productName}}</h4>
                    <h3>Prezzo</h3>
                    <h3>{{$price}}</h3>
                    <img src="{{$imagePath}}" alt="">
                    <h3>Descrizione</h3>
                    <h3>{{$description}}</h3>
                </article>
            </section>

        </main>

        <footer class="wrapper">
            <ul>
                @foreach ($links as $link)
                    <li><a href="">{{$link}}</a></li>
                @endforeach
            </ul>
        </footer>
    </body>
</html>