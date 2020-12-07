

<div class="row justify-content-center" style = "margin-top: 100px;">
    <div class="col-md-6">
        <h1 class = "text-center">Login</h1>
    <?= $this->Form->create() ?>
    <?= $this->Form->control('email', ['class' => 'form-control']) ?>
    <?= $this->Form->control('password' , ['class' => 'form-control']) ?>
    <?= $this->Form->button('Login', ['class' => 'btn btn-success mt-5 mb-5 btn-block']) ?>
    <?= $this->Form->end() ?>


    <p class = "text-center">Not an user? <?= $this->Html->link(__('Register'), ['controller' => 'Users','action' => 'add']) ?></p>

    </div>
</div>


<script>

var nav = document.getElementsByClassName('navbar');
nav[0].style.display = "none";

</script>