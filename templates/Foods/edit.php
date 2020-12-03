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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $food->id], ['class' => 'btn btn-danger'],
                ['confirm' => __('Are you sure you want to delete # {0}?', $food->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Foods'), ['action' => 'index'],['class'=>'btn btn-info'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="foods form content">
            <?= $this->Form->create($food) ?>
            <fieldset>
                <legend><?= __('Edit Recipe') ?></legend>
                <?php
                    echo $this->Form->control('name', ['class'=>'form-control']);
                    echo $this->Form->control('description', ['class'=>'form-control']);
                    echo $this->Form->control('picture', ['type' =>'file', 'class'=>'form-control']);
                    echo $this->Form->control('made_by', ['class'=>'form-control']);
                    echo $this->Form->control('rating', ['class'=>'form-control']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success mt-2']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
