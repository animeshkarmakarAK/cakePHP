<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movie $movie
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Movie'), ['action' => 'edit', $movie->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Movie'), ['action' => 'delete', $movie->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movie->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Movies'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Movie'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="movies view content">
            <h3><?= h($movie->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($movie->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Short Description') ?></th>
                    <td><?= h($movie->short_description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Poster') ?></th>
                    <td><?= h($movie->poster) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($movie->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rating') ?></th>
                    <td><?= $this->Number->format($movie->rating) ?></td>
                </tr>
                <tr>
                    <th><?= __('Release Year') ?></th>
                    <td><?= h($movie->release_year) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
