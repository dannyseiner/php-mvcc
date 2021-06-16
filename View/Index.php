<div class="row row-cols-1 row-cols-md-2 g-4 container mx-auto mt-2 mb-4">
    <div class="col mx-auto mt-5">
        <div class="card" data-aos="fade-left">
            <img
                src="https://static-cse.canva.com/blob/140257/ComposeStunningImages5.jpg"
                class="card-img-top"
                alt=""
            />
            <div class="card-body">
                <h5 class="card-title">Username: <?= $username ?></h5>
                <p class="card-text">
                Password: <?= $password ?>
                </p>
            </div>
            <div class='card-footer m-0' method=POST>
                <p>+<?= $pre_phone,' ',$phone ?></p>
                <p><?= $email ?></p>
            </div>
        </div>
    </div>
</div>