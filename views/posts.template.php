<?php require 'partials/header.php' ?>
<?php require 'partials/nav.php' ?>

<div class="col-lg-8 mx-auto p-4 py-md-5">
    <main>
        <?php require 'partials/banner.php' ?>
    </main>
    <div>
    
    <?php foreach ($posts as $post): ?>
      <li>  <?= $post['title'] ?></li>
    <?php endforeach;?>
    </div>
</div>

<?php require 'partials/footer.php' ?>