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

            <h1>All Articles</h1>

            <div class="main_content">
                <table id="table">

                    <tr class="first_row">
                        <th>Publication Date</th>
                        <th>Article</th>
                    </tr>
                    <?php $color = 1; ?>
                    <?php foreach ($admin_articles as $admin_article) { ?>
                        <?php if ($color == 1) { ?>
                            <tr style="background-color: white; height: 40px;" >
                                <td><?= $admin_article->date ?></td>
                                <td class="pad"><a class="title_a" href="/DTT_project/edit-article?id=<?= $admin_article->id ?>"><?= $admin_article->title ?></a></td>
                            </tr>
                            <?php $color += 1; ?>
                            <?php } else { ?>
                                <tr style="background-color: #fff4cf; height: 40px;" >
                                    <td><?= $admin_article->date ?></td>
                                    <td class="pad"><a class="title_a" href="/DTT_project/edit-article?id=<?= $admin_article->id ?>"><?= $admin_article->title ?></a></td>
                                </tr>
                                <?php $color -= 1; ?>
                        <?php } ?>
                  <?php } ?>
                </table>
                <br>
                <p><?= $total_articles ?> articles in total.</p>
                <a class="underlined_a" href='/DTT_project/add-new-article'>Add a New Article</a>
            </div>
            <br>
            <hr>

            <p class="footer">DTT Multimedia © 2015. All rights reserved. <a class="underlined_a" href='/DTT_project/admin-login'>Site admin</a></p>

        </main>
    </body>
</html>