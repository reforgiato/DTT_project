<!DOCTYPE html>
<html>
    <head>
        <title>Homepage</title>
        {{this.assets.outputCss()}}  {#access the css style, like a require or include#}
    </head>

    <body>
        <main>
            <div class="image">
                <img src="public/img/DTT_logo.png">
            </div>

            <hr class="top_hr">

            {# displays the 5 last added records ordered by date, passed from the IndexController #}
            {% for article in articles %}
            
            <div class="articles">
                <p class="date">{{ article.date }}</p>

                {# passes the article id to the IndexController #}
                <h2 class="floaty"><a class= "outline_h" href="/DTT_project/article?id={{article.id}}">{{ article.title }}</a></h2>
                <div class="preview"><p>{{ article.preview }}</p></div>
            </div>

            {% endfor %}

            <div id="special">
                <p><a class = "underlined_a" href="/DTT_project/archive">Article Archive</a></p>
            </div>

            <hr>

            <p class="footer">DTT Multimedia © 2015. All rights reserved. <a class= "footer_a" href='/DTT_project/admin-login'>Site admin</a></p>

        </main>
    </body>
</html>