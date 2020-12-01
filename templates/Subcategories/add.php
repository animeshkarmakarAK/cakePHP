<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subcategory $subcategory
 */
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header">
                    <h4 class="d-inline"><?= __('Actions') ?></h4>
                    <a href="<?php echo $this->Url->build(['controller' => 'Subcategories', 'action' => 'index']) ?>" class="float-right">List Categories</a>
                </div>
                <div class="card-body">
                    <div class="subcategories form content">
                        <?= $this->Form->create($subcategory) ?>
                        <fieldset>
                            <legend><?= __('Add Subcategory') ?></legend>
                            <?php
                            echo $this->Form->control('category_id', ['options' => $categories,'class'=> 'form-control']);
                            echo $this->Form->control('title',['class'=> 'form-control']);
                            ?>
                        </fieldset>
                        <?= $this->Form->button(__('Submit')) ?>
                        <?= $this->Form->end() ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

