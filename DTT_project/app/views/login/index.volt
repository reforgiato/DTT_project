<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        {{this.assets.outputCss()}}  {#access the css style, like a require or include#}
    </head>

    <body>
        <main>

            {{this.tag.form("login-submit")}} {#rember this is the opening form tag, if you inspect it you'll see the method is post#}

                <div class="image">
                    <img src="public/img/DTT_logo.png">
                </div> 

                <hr class="top_hr">
                <div class="form_class">
                    <div id="error_message">
                        <p class="text">
                            {{this.flashSession.output()}}
                        </p>
                    </div>
                    <div class="username_field">
                        <label for="username">Username</label>
                        {{ this.tag.textField(["username", "placeholder" : "Your admin username"]) }}
                    </div>
                    <div id="error_hr"></div>
                    <div class="password_field">
                        <label for="password", class="pass_label">Password</label>
                        {{this.tag.passwordField(["password", "placeholder" : "Your admin password"])}}
                    </div>

                    <p>
                        {{this.tag.submitButton(["Login"])}}
                    </p>
                </div>

                <hr class="bottom_hr">

            </form>

            <p class="footer">DTT Multimedia © 2015. All rights reserved. <a href='/DTT_project/admin-login'>Site admin</a></p>

        </main>
    </body>
</html>