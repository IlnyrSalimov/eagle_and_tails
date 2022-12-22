<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="public/style.css">
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script defer src="public/script.js"></script>
</head>
<body>
    <div class="wrapper">
        <h1 class="result">Flip a Coin</h1>
        <div class="wrapper-content">
            <div>
                <form class="wrapper-form" action="index.php">
                    <input type="text" name="name" placeholder="Введите имя">
                    <label for="name"></label>
                    <input type="text" name="coins" placeholder="Введите количество монет">
                    <label for="coins"></label>
                </form>
            </div>
            <div class="coin-container">
                <div id="coin">
                    <div class="coin-side heads">
                        Heads
                    </div>
                    <div class="coin-side tails">
                        Tails
                    </div>
                </div>
            </div>
            <div>
                <form class="wrapper-form" action="index.php">
                    <input type="text" name="name" placeholder="Введите имя">
                    <label for="name"></label>
                    <input type="text" name="coins" placeholder="Введите количество монет">
                    <label for="coins"></label>
                </form>
            </div>
        </div>
        <div class="btn-container">
            <button type="submit">Flip Coin</button>
            <a href="#" class="btn js-flip-coin">Flip Coin</a>
        </div>
    </div>
</body>
</html>