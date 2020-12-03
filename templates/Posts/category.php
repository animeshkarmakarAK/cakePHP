
<div class="container">
    <div class="row">
        <?php foreach ($posts as $post): ?>
        <div class="col-lg-4">
            <div class="card" style="width:400px">
                <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title"><?php $post->title ?></h4>
                    <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

        <?= $posts->title ?>
    </div>
</div>
