<div class="container mt-5 text-center mb-5">
    <h1>ERROR PAGE <?= $_SESSION['error_token']; ?></h1>
    <p>This website doesn't exists :(</p>
    <a class='btn btn-outline-primary' href='<?= ErrorPage::$config['main_site']?>'>Back to homepage</a>
</div>
