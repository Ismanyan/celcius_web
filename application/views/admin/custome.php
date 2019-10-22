<div class="container">
    <h3>Main Banner</h3>
    <?php foreach ($banner->result_array() as $key) : ?>
        <img class="w-50 mt-5" src="<?= base_url('assets/') ?>img/<?= $key['banner'] ?>" alt="<?= $key['banner'] ?>">
        <h5 class="mt-0 mb-1 my-3"><?= $key['banner'] ?></h5>
        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-info">Move</button>
            <button type="button" class="btn btn-warning">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
        </div>
        <br>
    <?php endforeach; ?>

    <h3 class="my-5">Background Pattern</h3>
    <?php foreach ($patern->result_array() as $key) : ?>
        <img class="w-50 mt-5" src="<?= base_url('assets/') ?>img/<?= $key['pattern'] ?>" alt="<?= $key['pattern'] ?>">
        <h5 class="mt-0 mb-1 my-3"><?= $key['pattern'] ?></h5>
        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-info">Move</button>
            <button type="button" class="btn btn-warning">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
        </div>
        <br>
    <?php endforeach; ?>
</div>