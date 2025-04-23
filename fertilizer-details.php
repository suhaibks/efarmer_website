<?php include("header.php"); ?>

<?php
$data = [
    1 => ['NPK Fertilizer', 'npk.jpg', 'A balanced fertilizer containing Nitrogen, Phosphorus, and Potassium. Supports overall growth, fruiting, and flowering. Used widely in vegetable and grain production.'],
    2 => ['DAP', 'dap.jpg', 'Diammonium Phosphate is rich in phosphorus and promotes root development. Ideal for initial plant growth stages.'],
    3 => ['Urea', 'urea.jpg', 'Urea is a nitrogen-rich fertilizer that stimulates leafy growth. Best used in controlled quantities to prevent burning.'],
    4 => ['Cow Dung Compost', 'cow_dung_compost.jpg', 'Traditional organic fertilizer that enhances soil health, microbial activity, and texture.'],
    5 => ['Vermicompost', 'vermicompost.jpg', 'Produced using worms, this compost boosts microbial activity and provides rich nutrients.'],
    6 => ['Bone Meal', 'bone_meal.jpg', 'Rich in phosphorus and calcium, it supports root and flower development. Ideal for bulbs and fruiting plants.'],
    7 => ['Neem Cake Fertilizer', 'neem_cake.jpg', 'Natural insect repellent and fertilizer that improves soil quality and plant resistance.'],
    8 => ['Seaweed Extract', 'seaweed_extract.jpg', 'Improves resistance to pests and diseases, stimulates root and shoot growth.'],
    9 => ['Poultry Manure', 'poultry_manure.jpg', 'An organic fertilizer that improves soil nitrogen and is ideal for fast-growing vegetables.'],
    10 => ['Dr. Earth 4-4-4', 'dr_earth_444.jpg', 'An all-purpose organic fertilizer for fruits, vegetables, and herbs. Balanced NPK content.']
];

$id = $_GET['id'] ?? null;

if ($id && isset($data[$id])) {
    $f = $data[$id];
    echo "
    <main style='text-align: center; padding: 30px;'>
        <h2>{$f[0]}</h2>
        <img src='images/{$f[1]}' alt='{$f[0]}' style='width: 300px; height: auto; border-radius: 10px; margin: 20px 0;'>
        <p style='font-size: 18px; max-width: 700px; margin: 0 auto;'>{$f[2]}</p>
        <br><a href='fertilizers.php'><button style='margin-top:20px;'>Back to Fertilizers</button></a>
    </main>";
} else {
    echo "<p style='text-align:center;'>Fertilizer details not found.</p>";
}
?>

<?php include("footer.php"); ?>
