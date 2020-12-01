<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php foreach ($categories as $category): ?>
                <?php if (count($category->subcategories) > 0): ?>
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?= $category->name ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php foreach ($category->subcategories as $subcategory): ?>
                         <a class="dropdown-item" href="">
                             <?php echo $subcategory->title ?>
                         </a>
                            <?php endforeach; ?>

                        </div>
                    </li>
                <?php
                else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $this->Url->build(['controller' => 'Posts', 'action' => 'category', $category->id]) ?>"><?= $category->name ?></a>
                    </li>
            <?php

                endif;
            ?>
            <?php endforeach; ?>
        </ul>
    </div>
</nav>
