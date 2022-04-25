<section>

<?php
  $session = \Config\Services::session();
?>

<?php if(isset($session->success)): ?>
  <?= $session->success; ?>
<?php endif; ?>

<div class="jumbotron">
  <h1 class="display-4">Hello, world!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>
</section>

<section>
  <?php if ($news): ?>
  <?php foreach ($news as $newsItem): ?>
    <?= $newsItem['title'] ?>
  <?php endforeach; ?>
  <?php else: ?>
    <p>No posts</p>
  <?php endif; ?>
  
</section>