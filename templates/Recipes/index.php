

<div class="content container">
    <h3><?= __('Recipes') ?></h3>
    <?php echo $this->Html->link('Add new', '/foods/add', ['class' => 'btn btn-success'])?>
    <?php echo $this->Html->link('List of Recipes', '/foods', ['class' => 'btn btn-info'])?>
    <div class="row">
        <?php foreach($recipes as $recipe): ?>
        <div class="col-md-3 mt-3">
            <div class="card" style="width: 18rem;">
            <?php echo $this->Html->image($recipe->picture, array(
                'class' => 'banner-image', 
                'height' => '300',
                'width' => '300',
                'url' => array('controller' => 'Foods', 'action' => 'view', $recipe->id )
                )); ?>
            <div class="card-body">
                <h5 class="card-title"><?= h($recipe->name)?></h5>
                <p class="card-text"><?= h($recipe->description)?></p>
                <p class="rating" id = "rating" style = "display: none";><?= h($recipe->rating) ?></p>
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
var card_body = document.getElementsByClassName('card-body');

for(let i = 0; i < card_body.length; ++i){
    var stars= card_body[i].getElementsByClassName('fa-star');
    var rating = Number(card_body[i].getElementsByClassName('rating')[0].innerText);

    for(let j = 0; j < rating; j++){
        stars[j].style.color = "yellow";
    }
}
    
</script>