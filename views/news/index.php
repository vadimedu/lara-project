<?php foreach ($newsList as $key => $news): ?>
    <div style="border: 1px solid teal;">
        <h2><a href="<?=route('news.show', ['id' => $key]) ?>"><?= $news['title'] ?></a></h2>
        <p><?= $news['author'] ?></p>
    </div>
<?php endforeach; ?>