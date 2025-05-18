<style>
    .capital {
        /* text-transform: uppercase; */
        color: black;
    }

    .icon {
        font-size: 40px;
    }
</style>

<div class="row">
    <?php foreach ($module as $k) : ?>

        <div class="col-sm-4">
            <div class="card">
                <div class="card-body text-center">
                    <div class="col-md-12">
                        <a href="<?= base_url($k->Url) ?>">
                            <i class="<?= $k->Icon ?> icon"></i>
                            <h5 class="capital"><?= $k->Nama_Module ?></h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>

</div>