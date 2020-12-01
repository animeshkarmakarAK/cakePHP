<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
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
                    <div class="posts form content">
                        <?= $this->Form->create($post) ?>
                        <fieldset>
                            <legend><?= __('Add Post') ?></legend>
                            <?php
                            echo $this->Form->control('category_id', ['options' => $categories,'class' => 'form-control']);
                            echo $this->Form->control('subcategory_id', ['options' => $subcategories, 'class' => 'form-control']);
                            echo $this->Form->control('title', ['class' => 'form-control']);
                            echo $this->Form->control('content',['class' => 'form-control']);
                            ?>
                        </fieldset>
                        <?= $this->Form->button(__('Submit'),['class'=> 'btn btn-success']) ?>
                        <?= $this->Form->end() ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

