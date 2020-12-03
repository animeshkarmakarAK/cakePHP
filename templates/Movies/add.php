<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movie $movie
 */
?>
<div class="row justify-content-center">
    <aside class="column">
        <div class="side-nav ml-0" style = 'margin-bottom: 10px;'>
            <?= $this->Html->link(__('Movie List'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="movies form content">
            <?= $this->Form->create($movie, ['enctype' => 'multipart/form-data']) ?>
            <fieldset>
                <legend><?= __('Add Movie') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('short_description');
                    echo $this->Form->control('poster', ['type' => 'file']);
                    echo $this->Form->control('release_year');
                    echo $this->Form->control('rating');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>



<div class="movies index content">
    <?= $this->Html->link(__('Add New Movie'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Movies') ?></h3>

    <div class="row">
    <?php foreach($movies as $key => $movie): ?>
    j<?php if($key == 0) continue; ?>
    <div class="col-md-3">
        <div class="poster-image" style="color: #000">
        <p><?php echo $this->Html->image($movie->poster, array('width' => '200' ,'height' => '200'))?></p>       
        <?php echo $this->Html->image('the_hill.jpg', array('class' => 'banner-image')); ?>

            
        </div>
        <div class="">
        <p><?= h($movie->name) ?></p>
        <p><?= h($movie->short_description) ?></p>
        <p>rating: <?= h($movie->rating) ?></p>

        </div>
    </div>
    <?php endforeach; ?>
    </div>
