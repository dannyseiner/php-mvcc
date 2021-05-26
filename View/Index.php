<div class="row row-cols-1 row-cols-md-2 g-4 container mx-auto mt-2 mb-4">
    <?php foreach (Index::$data as $key): ?>
        <div class="col mx-auto mt-5">
            <div class="card">
                <img
                    src="https://static-cse.canva.com/blob/140257/ComposeStunningImages5.jpg"
                    class="card-img-top"
                    alt=""
                />
                <div class="card-body">
                    <h5 class="card-title"><?= $key['nazev']; ?> <span class='float-right'><?= $key['spz']; ?></span></h5>
                    <p class="card-text">
                        $key['popis']
                    </p>
                </div>
                <form class='card-footer m-0' method=POST>
                    <span><?= $key['barva']; ?></span>
                    <div class='float-right'>                                
                    </div>
                </form>
            </div>
        </div>
    <?php endforeach; ?>
</div>