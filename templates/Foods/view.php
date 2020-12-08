<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Food $food
 */
?>

<div class="container">
    <div class="row">
    <p><?php echo $this->Html->image($food->picture, array('width' => '700' ,'height' => '400'))?></p>
    </div>

    <div class="row">
        <h3><?= h($food->name) ?></h3>
        <p class = "ml-5" style = "color:black; font-type:bold;">By  ---<?= h($food->made_by) ?></p>
    </div>
    <div class="row">
    <p><?= h($food->description)?></p>
    </div>
    <div class="row">
        <p>Rating: <?= h($food->rating)?></p>
    </div>
    <div class="add-ingredients row ml-auto mr-0">
        <?php echo $this->Html->link('Add Ingredients',  ['controller' =>'Recipes', 'action' => 'addIngredients']); ?>
    </div>
</div>


<div class="row ml-5">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Food'), ['action' => 'edit', $food->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Food'), ['action' => 'delete', $food->id], ['confirm' => __('Are you sure you want to delete # {0}?', $food->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Foods'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Food'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
</div>
