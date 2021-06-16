<?php print_r( $_SESSION['error_handler_template']);?>
<div class="container mt-5 text-center mb-5">
    <h1>
        <?= $header, ' => ', $code ?>
    </h1>
    <p>
        <?= $text ?>
    </p>
    <p>
        LINE: <?= $line ?>
    </p>
    <p>
        FILE: <?= $file ?>
    </p>
</div>
