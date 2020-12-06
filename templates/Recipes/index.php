<div class="content container">
    <h3><?= __('Recipes') ?></h3>
    <?php echo $this->Html->link('Add new', '/foods/add', ['class' => 'btn btn-success'])?>
    <div class="row">
        <?php foreach($recipes as $recipe): ?>
        <div class="col-md-3 mt-3">
            <div class="card" style="width: 18rem;">
            <?php echo $this->Html->image($recipe->picture, array('class' => 'banner-image', 'height' => '300')); ?>
            <div class="card-body">
                <h5 class="card-title"><?= h($recipe->name)?></h5>
                <p class="card-text"><?= h($recipe->description)?></p>
                
                Rating: 
                <?php for($i = 0; $i < 5; $i++): ?>
                <i class = "fa fa-star fa-fw"></i>
                <?php endfor; ?>
            </div>
            
        </div>
        </div>
        <?php endforeach;?>

    </div>
</div>


<script>
    var stars= document.getElementsByClassName('fa-star');
    

</script>