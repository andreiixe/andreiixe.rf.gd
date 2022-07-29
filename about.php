<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.3.1/css/bulma.min.css">
    <link rel="icon" type="image/x-icon" href="image/justanime.png">
    <link rel="stylesheet" href="stylesmr.css">
    <title>Andreiixe</title>
    <meta name="title" content="Andreiixe">
    <meta name="author" content="Andrei">
    <meta name="description" content="Yo! My personal website">
    </head>
    <body>
        <?php
        $Whoiam = "Who am I?";
        $Resposewho = "I'm a simple high school student who likes web development. In my free time I take pictures with Nikon D3100";
        $Domandone = "Why did I make this website?";
        $resposeone = "I don't know either, I did it to have a website there for the biography on instagram. But then I thought to learn someting from each website update.";
        $domandtwo = "What is the use of the website?";
        $resposetwo = "It doesn't have a specific use, but in the future I'm thinking about what to do with it.";
        echo "
        <section class='section section-3'>
            <div class='container noselect'>
                <div class='navigatie'>
                    <ul>
                        <li><a class='active' href='index.php'>Home</a></li>
                    </ul>
                </div>
                <div align='center'>
                    <h1>
                        <span>
                        $Whoiam
                        </span>
                    </h1>
                    <font style='font-size: 20px;'>$Resposewho</font>
                    <br>
                    <img src='images/pikachu.gif'>
                    <br>
                    <br>
                    <font style='font-size: 50px; color: rgb(109, 194, 255);font-weight: bold;'>FAQ</font>
                    <br>
                    <img src='images/bar.gif'>
                    <br>
                    <br>
                    <h1>
                        <span>
                          $Domandone
                        </span>
                    </h1>
                    <font style='font-size: 20px;'>$resposeone</font>
                    <br>
                    <br>
                    <h1>
                        <span>
                        $domandtwo
                        </span>
                    </h1>
                    <font style='font-size: 20px;'>$resposetwo</font>
                </div>" 
                ?>
</body>
</html>