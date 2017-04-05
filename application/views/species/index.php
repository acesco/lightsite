<h2><?php echo $title; ?></h2>

<?php foreach ($species as $species_item): ?>

        <h3><?php echo $species_item['specific_name']; ?></h3>
        <div class="main">
                <?php echo $species_item['plant_desc']; ?>
        </div>
        <p><a href="<?php echo site_url('species/'.$species_item['specific_name']); ?>">View article</a></p>

<?php endforeach; ?>