<!DOCTYPE html>
<html>
    <head>
        <title>Admin Homepage</title>
        <?= $this->assets->outputCss() ?>  
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

            <h1>Edit Article</h1>

            <div class="error">
                <?= $this->flashSession->output() ?>
            </div>

            <br>
            
            <div class="main_content">


            <?= $this->tag->form('edit-submit') ?>

                
                <?= $this->tag->hiddenField(['hidden_field', 'value' => $edit_article->id]) ?>
            
                
                <div id="title">
                    <label for="article_title">Article Title</label>
                    <?= $this->tag->textField(['article_title', 'autofocus' => true, 'placeholder' => 'Name of the article.', 'value' => $edit_article->title]) ?>
                </div>
                <br>

                <div id="summary">
                    <label id="summary_position" for="article_summary">Article Summary</label>
                    <?= $this->tag->textArea(['article_summary', 'value' => $edit_article->preview]) ?>
                </div>

                <br>

                <div id="content">
                <label id="content_position" for="article_content">Article Content</label>
                <?= $this->tag->textArea(['article_content', 'value' => $edit_article->main]) ?>
                </div>

                <br>

                <div id="date">
                <label for="publication_date">Publication date</label>
                <?= $this->tag->textField(['publication_date', 'placeholder' => '22/11/2017', 'value' => $edit_article->date]) ?>
                </div>

                    <?= $this->tag->submitButton(['Save Changes', 'id' => 'sub_button']) ?>
                        
            </form>

            <?= $this->tag->form('cancel') ?>
                <?= $this->tag->submitButton(['Cancel', 'id' => 'canc_button']) ?>
            </form>

            </div>
            <br>

            
            <a class="delete_a" href='/DTT_project/delete-article?id=<?= $edit_article->id ?>'>Delete This Article</a>

            <hr>
            <p class="footer">DTT Multimedia © 2015. All rights reserved. <a class="underlined_a" href='/DTT_project/admin-login'>Site admin</a></p>

        </main>
    </body>
</html>