<?php include("header.php"); ?>
<main>
    <h2>Farming Equipment</h2>
    <div class="card-container">
        <?php
        $equipments = [
            ['id' => 1, 'name' => 'Tractor', 'image' => 'tractor.jpg', 'short' => 'Multi-purpose engine-driven vehicle.'],
            ['id' => 2, 'name' => 'Harvester', 'image' => 'harvester.jpg', 'short' => 'Used for harvesting crops quickly.'],
            ['id' => 3, 'name' => 'Seed Drill', 'image' => 'seed_drill.jpg', 'short' => 'Plants seeds at proper spacing.'],
            ['id' => 4, 'name' => 'Rotavator', 'image' => 'rotavator.jpg', 'short' => 'Breaks up and mixes soil.'],
            ['id' => 5, 'name' => 'Cultivator', 'image' => 'cultivator.jpg', 'short' => 'Used to stir soil before planting.'],
            ['id' => 6, 'name' => 'Plough', 'image' => 'plough.jpg', 'short' => 'Turns over the upper layer of soil.'],
            ['id' => 7, 'name' => 'Baler', 'image' => 'baler.jpg', 'short' => 'Compacts straw or hay into bales.'],
            ['id' => 8, 'name' => 'Sprayer', 'image' => 'sprayer.jpg', 'short' => 'Applies fertilizers or pesticides.'],
            ['id' => 9, 'name' => 'Threshing Machine', 'image' => 'thresher.jpg', 'short' => 'Separates grain from crop.'],
            ['id' => 10, 'name' => 'Power Tiller', 'image' => 'tiller.jpg', 'short' => 'Handy for small-scale soil prep.']
        ];

        foreach ($equipments as $eq) {
            echo "
            <div class='card'>
                <img src='images/{$eq['image']}' alt='{$eq['name']}'>
                <h3>{$eq['name']}</h3>
                <p>{$eq['short']}</p>
                <a href='equipment-details.php?id={$eq['id']}'><button>View Details</button></a>
            </div>
            ";
        }
        ?>
    </div>
</main>
<?php include("footer.php"); ?>
