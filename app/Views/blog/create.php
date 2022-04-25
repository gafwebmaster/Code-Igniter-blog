<div class="container">

<h1>Create a new post</h1>
<?php if ($_POST): ?>
    <?= \Config\Services::validation()->listErrors(); ?>
<?php endif; ?>    
<form action="/blog/create" method="post">
    <input type="text" name="title">
    <textarea name="body"></textarea>
    <button type="submit">Create</button>
</form>
</div>