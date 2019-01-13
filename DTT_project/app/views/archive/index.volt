<!DOCTYPE html>
<html>
    <head>
        <title>Archive</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{this.assets.outputCss()}}  {#access the css style, like a require or include#}
    </head>

    <body>
        <main>
            <div class="image">
                <img src="public/img/DTT_logo.png">
            </div>

            <hr class="top_hr">

            <h1>Article Archive</h1>

                                
            {#displays all the articles from the database, the archive_article. are passed from the ArchiveController #}                   
            {% for archived_article in archived_articles %}
            
            <div class="articles">
                <p class="date">{{ archived_article.date }}</p>
                <h2 class="floaty"><a class= "outline_h" href="/DTT_project/article?id={{archived_article.id}}">
                {{ archived_article.title }}</a></h2>
                <p class="preview">{{ archived_article.preview }}</p>
            </div>

            {% endfor %}

            <p class="count">{{how_many}} articles in total.</p>

            <div id="special">
                <p><a class = "underlined_a" href="/DTT_project">Return to Homepage</a></p>
            </div>

            <hr>

            <p class="footer">DTT Multimedia © 2015. All rights reserved. <a class= "footer_a" href='/DTT_project/admin-login'>Site admin</a></p>

        </main>
    </body>
</html>