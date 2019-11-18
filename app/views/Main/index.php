<h1>Hello from index</h1>

<?php foreach ($posts as $post): ?>
    <h3><?=$post->title;?></h3>
    <p><?=$post->content;?></p>
<?php endforeach; ?>
