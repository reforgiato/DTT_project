<!DOCTYPE html>
<html>
    <head>
        <title>Admin Homepage</title>
        {{this.assets.outputCss()}}  {#access the css style, like a require or include#}
    </head>

    <body>
        <main>
            <div class="image">
                <img src="public/img/DTT_logo.png">
            </div>

            <hr>
            <div class="widget">
            <h2>Widget News Admin</h2>
            <br>
            <p>You are logged as admin. <a class="underlined_a" href='/DTT_project/admin-logout'>Log out</a></p>
            </div>
            <hr>

            <h1>All Articles</h1>

            <div class="main_content">
                {# set a table that shows all the articles from the database #}
                <table id="table">

                    <tr class="first_row">
                        <th>Publication Date</th>
                        <th>Article</th>
                    </tr>

                    {# simple logic for alterning the background color of the rows of the table#}
                    {# the admin_article. are passed from AdminController #}
                    {% set color = 1 %}
                    {% for admin_article in admin_articles %}
                        {% if color == 1 %}
                            <tr style="background-color: white; height: 40px;" >
                                <td>{{admin_article.date}}</td>

                                {# catches the id of the article and passes it to the EditController so that it can uses it
                                    to retrieve the article infos and show them into their respective field of the form in the
                                    edit view #}
                                <td class="pad"><a class="title_a" href="/DTT_project/edit-article?id={{admin_article.id}}">{{admin_article.title}}</a></td>

                            </tr>
                            {% set color += 1 %}
                            {% else %}
                                <tr style="background-color: #fff4cf; height: 40px;" >
                                    <td>{{admin_article.date}}</td>
                                {# catches the id of the article and passes it to the EditController so that it can uses it
                                    to retrieve the article infos and show them into their respective field of the form in the
                                    edit view #}
                                    <td class="pad"><a class="title_a" href="/DTT_project/edit-article?id={{admin_article.id}}">{{admin_article.title}}</a></td>
                                    
                                </tr>
                                {% set color -=1 %}
                        {% endif %}
                  {% endfor %}
                </table>
                <br>

                {# shows how many records are in the database, total_article is passed from AdminController #}
                <p>{{total_articles}} articles in total.</p>

                <a class="underlined_a" href='/DTT_project/add-new-article'>Add a New Article</a>
            </div>
            <br>
            <hr>

            <p class="footer">DTT Multimedia © 2015. All rights reserved. <a class="underlined_a" href='/DTT_project/admin-login'>Site admin</a></p>

        </main>
    </body>
</html>