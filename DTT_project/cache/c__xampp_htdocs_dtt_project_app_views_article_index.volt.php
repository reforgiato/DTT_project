<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage</title>
        <?= $this->assets->outputCss() ?>  
    </head>

    <body>
        <main>
            <div class="image">
                <img src="public/img/DTT_logo.png">
            </div>

            <hr class="top_hr">
            
            <div class="articles">
            <h1 class="title"><?= $show_article->title ?></h1>
            <p class="content"><?= $show_article->main ?></p>
            <p class="date">PUBLISHED ON <?= $show_article->date ?></p>
            </div>

            <div id="special">
                <p><a class = "underlined_a" href="/DTT_project">Return to Homepage</a></p>
            </div>

            <hr>

            <p class="footer">DTT Multimedia © 2015. All rights reserved. <a class= "footer_a" href='/DTT_project/admin-login'>Site admin
            </a></p>

        </main>
    </body>
</html>