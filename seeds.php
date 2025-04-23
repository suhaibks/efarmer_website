<?php include("header.php"); ?>
<main>
    <h2>Seed Varieties</h2>
    <div class="card-container">
        <?php
        $seeds = [
            ['id' => 1, 'name' => 'Coffee Seeds', 'image' => 'coffee_seeds.jpg', 'short' => 'Coffea arabica – Premium coffee cultivation.'],
            ['id' => 2, 'name' => 'Black Pepper Seeds', 'image' => 'black_pepper_seeds.jpg', 'short' => 'Piper nigrum – Spicy vine with economic value.'],
            ['id' => 3, 'name' => 'Cardamom Seeds', 'image' => 'cardamom_seeds.jpg', 'short' => 'Elettaria cardamomum – Aromatic spice seeds.'],
            ['id' => 4, 'name' => 'Areca Nut Seeds', 'image' => 'areca_nut_seeds.jpg', 'short' => 'Also known as Betel Nut – Used for chewing and rituals.'],
            ['id' => 5, 'name' => 'Cabbage Seeds', 'image' => 'cabbage_seeds.jpg', 'short' => 'Cool season crop for leafy vegetable farming.'],
            ['id' => 6, 'name' => 'Tomato Seeds', 'image' => 'tomato_seeds.jpg', 'short' => 'Widely used in vegetable farming and kitchens.'],
            ['id' => 7, 'name' => 'Chili Seeds', 'image' => 'chili_seeds.jpg', 'short' => 'Hot and spicy – essential for Indian cuisine.'],
            ['id' => 8, 'name' => 'Brinjal Seeds', 'image' => 'brinjal_seeds.jpg', 'short' => 'Also known as Eggplant – grows well in all soils.'],
            ['id' => 9, 'name' => 'Paddy Seeds', 'image' => 'paddy_seeds.jpg', 'short' => 'Rice varieties like IR64, MTU1010 for high yield.'],
            ['id' => 10, 'name' => 'French Beans Seeds', 'image' => 'french_beans_seeds.jpg', 'short' => 'Nutritious and quick-growing legume.']
        ];

        foreach ($seeds as $seed) {
            echo "
            <div class='card'>
                <img src='images/{$seed['image']}' alt='{$seed['name']}'>
                <h3>{$seed['name']}</h3>
                <p>{$seed['short']}</p>
                <a href='seed-details.php?id={$seed['id']}'><button>View Details</button></a>
            </div>
            ";
        }
        ?>
    </div>
</main>
<?php include("footer.php"); ?>
