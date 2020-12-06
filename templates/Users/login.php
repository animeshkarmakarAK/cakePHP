

<div class="row justify-content-center" style = "margin-top: 100px;">
    <div class="col-md-6">
        <h1 class = "text-center">Login</h1>
    <?= $this->Form->create() ?>
    <?= $this->Form->control('email', ['class' => 'form-control']) ?>
    <?= $this->Form->control('password' , ['class' => 'form-control']) ?>
    <?= $this->Form->button('Login', ['class' => 'btn btn-success mt-5 btn-block']) ?>
    <?= $this->Form->end() ?>
    </div>

</div>
