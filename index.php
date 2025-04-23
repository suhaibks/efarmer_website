<?php include("header.php"); ?>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f4fff6;
        margin: 0;
        padding: 0;
    }

    main {
        padding: 30px;
    }

    section {
        margin-bottom: 40px;
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        padding: 20px;
    }

    h2 {
        color: #2e7d32;
        margin-bottom: 10px;
    }

    p {
        color: #444;
        line-height: 1.6;
        margin-bottom: 15px;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .column {
        flex: 1;
        min-width: 280px;
    }

    img {
        width: 100%;
        border-radius: 10px;
    }

    .center {
        text-align: center;
    }
</style>

<main>
    <section class="welcome">
        <h2 class="center">Welcome to Farmer's Friend!</h2>
        <p class="center">Your one-stop solution for farming tools, fertilizers, and seeds.</p>
        <img src="images/farm_banner.jpg" alt="Farm">
    </section>

    <section>
        <h2>Top Countries with Advanced Farming Technology</h2>
        <div class="row">
            <div class="column">
                <img src="images/netherlands_farm.jpg" alt="Netherlands Farm">
                <p><strong>Netherlands:</strong> A leader in greenhouse farming, automation, and vertical farming technologies.</p>
            </div>
            <div class="column">
                <img src="images/usa_farm.jpg" alt="USA Farm">
                <p><strong>USA:</strong> Implements GPS-guided tractors, AI-based crop monitoring, and big data in agriculture.</p>
            </div>
            <div class="column">
                <img src="images/israel.jpg" alt="Japan Smart Farming">
                <p><strong>Israel:</strong> Uses robotics, drones, and hydroponics to maximize space and efficiency.</p>
            </div>
        </div>
    </section>

    <section>
        <h2>Employment Opportunities in Farming</h2>
        <div class="row">
            <div class="column">
                <img src="images/agri_jobs.jpg" alt="Farming Jobs">
                <p><strong>Agri-tech Jobs:</strong> Roles in automation, AI, data science, and IoT are rising in the agriculture sector.</p>
            </div>
            
        </div>
    </section>

    <section>
        <h2>Food Security</h2>
        <div class="row">
            <div class="column">
                <img src="images/food_security.jpg" alt="Food Security">
                <p>Modern agriculture helps ensure food availability, accessibility, and affordability across the globe through innovation and efficient distribution.</p>
            </div>
        </div>
    </section>

    <section>
        <h2>Farming and the Economy</h2>
        <div class="row">
            <div class="column">
                <img src="images/economy.jpg" alt="Farming Economy">
                <p>Farming contributes significantly to GDP in developing countries and supports rural economies by generating income and employment.</p>
            </div>
        </div>
    </section>
</main>
<?php include("footer.php"); ?>
