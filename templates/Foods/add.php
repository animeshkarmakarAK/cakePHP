<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Food $food
 */
?>
<div class="row justify-content-center">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Recipe list'), ['action' => 'index'], ['class' => 'side-nav-item btn btn-primary']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80 mt-5">
        <div class="foods form content">
            <?= $this->Form->create($food,  ['enctype' => 'multipart/form-data']) ?>
            <fieldset>
                <legend><?= __('Add recipes') ?></legend>
                <?php
                    echo $this->Form->control('name', ['class' =>'form-control']);
                    echo $this->Form->control('description', ['class' =>'form-control']);
                    echo $this->Form->control('picture', ['type' => 'file', 'class' =>'form-control']);
                    echo $this->Form->control('made_by', ['class' =>'form-control']);
                    echo $this->Form->control('rating', ['class' =>'form-control']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success mt-5']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
