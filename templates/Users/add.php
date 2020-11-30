<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header">
                    <h4 class="d-inline"><?= __('Actions') ?></h4>
                    <a href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'index']) ?>" class="float-right">List Users</a>
                </div>
                <div class="card-body">
                    <div class="users form content">
                        <?= $this->Form->create($user) ?>
                        <fieldset>
                            <legend><?= __('Add User') ?></legend>
                            <?php
                            echo $this->Form->control('name', ['class' => 'form-control']);
                            echo $this->Form->control('email', ['class' => 'form-control']);
                            echo $this->Form->control('password', ['class' => 'form-control']);
                            echo $this->Form->input('status',['type' => 'checkbox']);
                            ?>
                        </fieldset>
                        <?= $this->Form->button(__('Submit'),['class' => 'btn btn-success mt-2']) ?>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
