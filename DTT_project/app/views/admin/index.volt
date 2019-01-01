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

            <h2>Widget News Admin</h2>

            <p>You are logged as admin. <a href='/DTT_project/admin-logout'>Log out</a></p>

            <p class="footer">DTT Multimedia © 2015. All rights reserved. <a href='/DTT_project/admin-login'>Site admin</a></p>

        </main>
    </body>
</html>