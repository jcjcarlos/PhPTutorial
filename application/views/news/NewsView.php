<h2>Lista das Notícias</h2>
<?php foreach($news as $item): ?> 
<h3><?php echo $item['title']; ?></h3>
<div class="main">
    <ul>
        <li><?php echo $item['text'];?></li>
    </ul>
</div>
<?php endforeach; ?>