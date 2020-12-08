<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row justify-content-center mt-5">

    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Register Here') ?></legend>
                <?php
                    echo $this->Form->control('name', ['class'=>'form-control']);
                    echo $this->Form->control('email', ['class'=>'form-control']);
                    echo $this->Form->control('password', ['class'=>'form-control']);
                    echo $this->Form->control('status', ['class'=>'form-control mt-3']);
                ?>
            </fieldset>
            <?= $this->Form->button('Submit', ['class' => 'btn btn-success mt-5 mb-5 btn-block']) ?>
            <?= $this->Form->end() ?>
           
            <p class = "text-center">Have an account? <?= $this->Html->link(__('Login'), ['controller' => 'Users','action' => 'Login']) ?></p>

        </div>
    </div>
</div>



<script>

var nav = document.getElementsByClassName('navbar');
nav[0].style.display = "none";

</script>