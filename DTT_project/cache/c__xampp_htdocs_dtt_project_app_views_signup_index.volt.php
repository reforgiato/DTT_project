<!DOCTYPE html>
<html>
    <head>
        <title>Signup</title>
    </head>

    <body>

        <?= $this->tag->form('signup/register') ?>  

            <p><?= $this->flashSession->output() ?></p>

            <div>
                <label for="username">Username</label>
                <?= $this->tag->textField(['name', 'placeholder' => 'Your admin username']) ?>
            </div>

            <div>
                <label for="password">Password</label>
                <?= $this->tag->textField(['email', 'placeholder' => 'Your admin password']) ?>
            </div>

            <p>
                <?= $this->tag->submitButton(['Login']) ?>
            </p>

        </form>
        
    </body>
</html>

