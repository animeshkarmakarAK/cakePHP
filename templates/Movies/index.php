<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movie[]|\Cake\Collection\CollectionInterface $movies
 */
?>
<div class="movies index content">
    <?= $this->Html->link(__('Add New Movie'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Movies') ?></h3>

    <div class="row">
    <?php foreach($movies as $movie): ?>
    <div class="col-md-3">
        <div class="poster-image" style="color: #000">
        <p><?php echo $this->Html->image($movie->poster, array('width' => '200' ,'height' => '200'))?></p>
            
        </div>
        <div class="">
        <p><?= h($movie->name) ?></p>
        <p><?= h($movie->short_description) ?></p>
        <p>rating: <?= h($movie->rating) ?></p>

        </div>
    </div>
    <?php endforeach; ?>
    <div class="col-md-3">
    </div>
    </div>
    <div class="table-responsive table-bordered">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('short_description') ?></th>
                    <th><?= $this->Paginator->sort('poster') ?></th>
                    <th><?= $this->Paginator->sort('release_year') ?></th>
                    <th><?= $this->Paginator->sort('rating') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($movies as $movie): ?>
                <tr>
                    <td><?= $this->Number->format($movie->id) ?></td>
                    <td><?= h($movie->name) ?></td>
                    <td><?= h($movie->short_description) ?></td>
                    <td><?= h($movie->poster) ?></td>
                    <td><?= h($movie->release_year) ?></td>
                    <td><?= $this->Number->format($movie->rating) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $movie->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $movie->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $movie->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movie->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <p style= "float-left"><?= $this->Paginator->prev('< ' . __('previous')) ?></p>
            <?= $this->Paginator->numbers() ?>
            <p style = "margin-left: 10px;"><?= $this->Paginator->next(__('next') . ' >') ?></p>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
