<div class="contanier">
    <div class="row justify-content-center">
    <div class="column-responsive column-80">
        <div class="movies form content">
            <?= $this->Form->create($recipe = null, ['enctype' => 'multipart/form-data']) ?>
            <fieldset>
                <legend><?= __('Add New Recipe') ?></legend>
                <?php
                    echo $this->Form->control('name', ['class' => 'form-control']);
                    echo $this->Form->control('description', ['class' => 'form-control']);
                    echo $this->Form->control('picture', ['type' => 'file', 'class' => 'form-control']);
                    echo $this->Form->control('made_by', ['class' => 'form-control']);
                    echo $this->Form->control('rating', ['class' => 'form-control']);
                ?>
            </fieldset>
            <div class="column text-center">
                <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-primary mt-5 ml-0 mr-auto']) ?>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
    </div>
</div>