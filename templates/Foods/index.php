<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Food[]|\Cake\Collection\CollectionInterface $foods
 */
?>
<div class="foods index content justify-content-center">
<?php echo $this->Html->link('Home', '/recipe', ['class' => 'info'])?>
    <?= $this->Html->link(__('New Recipe'), ['action' => 'add'], ['class' => 'button btn btn-success float-right']) ?>
    <h3><?= __('Recipes') ?></h3>
    <div class="table-bordered table-responsive text-center font-weight-bold">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('picture') ?></th>
                    <th><?= $this->Paginator->sort('made_by') ?></th>
                    <th><?= $this->Paginator->sort('rating') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($foods as $food): ?>
                <tr>
                    <td><?= h($food->name) ?></td>
                    <td><?= h($food->description) ?></td>
                    <td><?php echo $this->Html->image($food->picture, array('width' => '200' ,'height' => '200'))?></td>       
                    <td><?= h($food->made_by) ?></td>
                    <td><?= $this->Number->format($food->rating) ?></td>
                    <td><?= h($food->created) ?></td>
                    <td><?= h($food->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $food->id], ['class' => 'btn btn-info']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $food->id], ['class' =>'btn btn-warning']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $food->id],['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $food->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
