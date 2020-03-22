
<a href="<?= $s['url'] ?>" class="col-12 col-lg mb-4 shortcut-container">
    <div class="jumbotron h-100">

            <h2>
                <?php
                if (isset($s['icon'])) {
                    echo "<i class='".$s['icon']."'></i> ";
                }

                if (isset($s['img'])) {
                    echo "<img class='shortcut-img' src='".$s['img']."'> ";
                }

                echo $s['title'];
                ?>
            </h2>

    </div>
</a>