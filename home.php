<?php 



include __DIR__ . '/partials/header.php'; 

?>
    <ul>
        <?php foreach($videos as $video) : ?>
            <li>
                <div><img src="<?= $video['thumbnail_url'] ?>" /></div>
                <div><?= $video['name'] ?></div>
            </li>
        <?php endforeach; ?>
    </ul>

<?php include __DIR__ . '/partials/footer.php'; ?>