<?php include("header.php"); ?>
<main>
    <h2>Fertilizers</h2>
    <div class="card-container">
        <?php
        $fertilizers = [
            ['id' => 1, 'name' => 'NPK Fertilizer', 'image' => 'npk.jpg', 'short' => 'Balanced N-P-K mix for full plant growth.'],
            ['id' => 2, 'name' => 'DAP', 'image' => 'dap.jpg', 'short' => 'Rich in phosphorus. Helps early plant development.'],
            ['id' => 3, 'name' => 'Urea', 'image' => 'urea.jpg', 'short' => 'High nitrogen fertilizer for foliage growth.'],
            ['id' => 4, 'name' => 'Cow Dung Compost', 'image' => 'cow_dung_compost.jpg', 'short' => 'Natural manure that improves soil fertility.'],
            ['id' => 5, 'name' => 'Vermicompost', 'image' => 'vermicompost.jpg', 'short' => 'Organic compost produced by earthworms.'],
            ['id' => 6, 'name' => 'Bone Meal', 'image' => 'bone_meal.jpg', 'short' => 'Excellent source of phosphorus and calcium.'],
            ['id' => 7, 'name' => 'Neem Cake Fertilizer', 'image' => 'neem_cake.jpg', 'short' => 'Natural pest repellent and soil enricher.'],
            ['id' => 8, 'name' => 'Seaweed Extract', 'image' => 'seaweed_extract.jpg', 'short' => 'Improves root health and stress tolerance.'],
            ['id' => 9, 'name' => 'Poultry Manure', 'image' => 'poultry_manure.jpg', 'short' => 'High in nitrogen. Enhances vegetable crops.'],
            ['id' => 10, 'name' => 'Dr. Earth 4-4-4', 'image' => 'dr_earth_444.jpg', 'short' => 'Complete organic fertilizer for all crops.']
        ];

        foreach ($fertilizers as $item) {
            echo "
            <div class='card'>
                <img src='images/{$item['image']}' alt='{$item['name']}'>
                <h3>{$item['name']}</h3>
                <p>{$item['short']}</p>
                <a href='fertilizer-details.php?id={$item['id']}'><button>View Details</button></a>
            </div>
            ";
        }
        ?>
    </div>
</main>
<?php include("footer.php"); ?>
