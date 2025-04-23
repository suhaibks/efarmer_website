<?php include("header.php"); ?>

<?php
$seedData = [
    1 => ['Coffee Seeds', 'coffee_seeds.jpg', 'Coffea arabica is widely grown for its high-quality beans used in making coffee. Prefers tropical climate and requires shade and rainfall.'],
    2 => ['Black Pepper Seeds', 'black_pepper_seeds.jpg', 'Piper nigrum, a climbing vine grown for its fruit. It needs a hot and humid climate, often intercropped with coffee.'],
    3 => ['Cardamom Seeds', 'cardamom_seeds.jpg', 'Elettaria cardamomum thrives in loamy soils with high humidity. Known as the “Queen of Spices”.'],
    4 => ['Areca Nut Seeds', 'areca_nut_seeds.jpg', 'Betel Nut trees grow well in coastal regions with regular rainfall. Commonly used in traditional chewing.'],
    5 => ['Cabbage Seeds', 'cabbage_seeds.jpg', 'Cabbage is a cool season leafy vegetable, ideal for open fields and polyhouses.'],
    6 => ['Tomato Seeds', 'tomato_seeds.jpg', 'Tomatoes grow in warm climates. Seeds require nursery raising before transplanting.'],
    7 => ['Chili Seeds', 'chili_seeds.jpg', 'Chili peppers need warm weather and well-drained soil. Used in cooking and seasoning.'],
    8 => ['Brinjal Seeds', 'brinjal_seeds.jpg', 'Eggplants thrive in warm weather with well-drained loamy soil. Pest control is crucial.'],
    9 => ['Paddy Seeds', 'paddy_seeds.jpg', 'Includes IR64 and MTU1010 – high-yield rice varieties used across India in flooded conditions.'],
    10 => ['French Beans Seeds', 'french_beans_seeds.jpg', 'Quick-maturing, rich in protein and fiber. Best in moderate climate.']
];

$id = $_GET['id'] ?? null;

if ($id && isset($seedData[$id])) {
    $seed = $seedData[$id];
    echo "
    <main style='text-align: center; padding: 30px;'>
        <h2>{$seed[0]}</h2>
        <img src='images/{$seed[1]}' alt='{$seed[0]}' style='width: 300px; height: auto; border-radius: 10px; margin: 20px 0;'>
        <p style='font-size: 18px; max-width: 700px; margin: 0 auto;'>{$seed[2]}</p>
        <br><a href='seeds.php'><button style='margin-top:20px;'>Back to Seeds</button></a>
    </main>";
} else {
    echo "<p style='text-align: center;'>Seed details not found.</p>";
}
?>

<?php include("footer.php"); ?>
