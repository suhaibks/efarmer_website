<?php include("header.php"); ?>

<?php
$data = [
    1 => ['Tractor', 'tractor.jpg', 'Tractors are powerful vehicles used to pull farm machinery. Essential for plowing, tilling, planting, and transportation on farms.'],
    2 => ['Harvester', 'harvester.jpg', 'Harvesters are used to gather mature crops from the fields. They combine reaping, threshing, and winnowing in one process.'],
    3 => ['Seed Drill', 'seed_drill.jpg', 'A seed drill ensures that seeds are planted at proper depth and spacing, improving germination and yield.'],
    4 => ['Rotavator', 'rotavator.jpg', 'Rotavators break up, churn, and mix soil before planting, making the seedbed suitable for crops.'],
    5 => ['Cultivator', 'cultivator.jpg', 'Cultivators are used to stir and pulverize the soil, either before planting or to remove weeds and aerate soil.'],
    6 => ['Plough', 'plough.jpg', 'Ploughs turn over the upper layer of soil, bringing nutrients to the surface while burying weeds.'],
    7 => ['Baler', 'baler.jpg', 'A baler is used to compress cut crops like hay or straw into compact bales for easier handling and storage.'],
    8 => ['Sprayer', 'sprayer.jpg', 'Sprayers apply fertilizers, herbicides, or pesticides to crops. Available in hand-held and tractor-mounted types.'],
    9 => ['Threshing Machine', 'thresher.jpg', 'Threshers separate grains from their stalks and husks. This mechanized process saves labor and time.'],
    10 => ['Power Tiller', 'tiller.jpg', 'A mini tractor-like machine that’s ideal for tilling and weeding in small fields or gardens.']
];

$id = $_GET['id'] ?? null;

if ($id && isset($data[$id])) {
    $eq = $data[$id];
    echo "
    <main style='text-align: center; padding: 30px;'>
        <h2>{$eq[0]}</h2>
        <img src='images/{$eq[1]}' alt='{$eq[0]}' style='width: 300px; height: auto; border-radius: 10px; margin: 20px 0;'>
        <p style='font-size: 18px; max-width: 700px; margin: 0 auto;'>{$eq[2]}</p>
        <br><a href='equipment.php'><button style='margin-top:20px;'>Back to Equipment</button></a>
    </main>";
} else {
    echo "<p style='text-align: center;'>Equipment details not found.</p>";
}
?>

<?php include("footer.php"); ?>
