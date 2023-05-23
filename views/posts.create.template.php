<?php require 'partials/header.php' ?>
<?php require 'partials/nav.php' ?>

<div class="col-lg-8 mx-auto p-4 py-md-5">
    <main>
        <?php require 'partials/banner.php' ?>
    </main>
    <div>
    
    <form method="POST" class="needs-validation" novalidate>
      <?php if ($post): ?>
          <input name="post_id" type="hidden" value="<?= $post['id'] ?>">
      <?php endif ?>
  <div class="form-group row">
    <label for="title" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-10">
      <input type="text" name="title" class="form-control" id="title" placeholder="title" value="<?=$post ? $post['title']:$_POST['title']?>">
      <? if (isset($errors['title'])):?>
      <div class="danger">
          <?= $errors['title'] ?>
      </div>
      <? endif ?>
    </div>
  </div> 
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<form method="GET" action="/posts" class="needs-validation" novalidate>
      <?php if ($post): ?>
          <input name="post_id" type="hidden" value="<?= $post['id'] ?>">
      <?php endif ?>
  <div class="form-group row">
    <label for="title" class="col-sm-2 col-form-label">Search</label>
    <div class="col-sm-10">
      <input type="text" name="title" class="form-control" id="title" placeholder="title" value="<?=$post ? $post['title']:$_POST['title']?>">
      <? if (isset($errors['title'])):?>
      <div class="danger">
          <?= $errors['title'] ?>
      </div>
      <? endif ?>
    </div>
  </div> 
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
    </div>
</div>

<?php require 'partials/footer.php' ?>