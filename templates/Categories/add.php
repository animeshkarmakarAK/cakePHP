<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header">
                    <h4 class="d-inline"><?= __('Actions') ?></h4>
                    <a href="<?php echo $this->Url->build(['controller' => 'Categories', 'action' => 'index']) ?>" class="float-right">List Categories</a>
                </div>
                <div class="card-body">
                    <div class="categories form content">
                        <?= $this->Form->create($category) ?>
                        <fieldset>
                            <legend><?= __('Add Category') ?></legend>
                            <?php
                            echo $this->Form->control('name',['class' => 'form-control']);
                            echo $this->Form->control('status',['type' => 'checkbox','class'=> 'mt-3']);
                            ?>
                        </fieldset>
                        <?= $this->Form->button(__('Submit'),['class' => 'btn btn-success']) ?>
                        <?= $this->Form->end() ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
