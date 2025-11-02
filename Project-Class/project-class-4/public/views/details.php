<?php


include './header.php';


require_once '../../app/classes/VehicleManager.php';
$vehicleManager = new VehicleManager("", "", "", "", "");

$id = $_GET['id'] ?? null;

if ($id === null) {
    header("Location: ../index.php");
    exit;
}



$vehicles = $vehicleManager->getVehicles();

$vehicle = $vehicles[$id] ?? null;

if ($vehicle === null) {
    header("Location: ../index.php");
    exit;
}



?>


<div class="container my-4 d-flex justify-content-center flex-column align-items-center">
    <h1>Details Vehicle</h1>
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="<?= htmlspecialchars($vehicle['image']) ?>" class="card-img-top" style="height: 200px; object-fit: cover;">
            <div class="card-body">
                <h5 class="card-title"><?= htmlspecialchars($vehicle['name'] ?? "") ?></h5>
                <p class="card-text">Type: <?= htmlspecialchars($vehicle['type'] ?? "") ?></p>
                <p class="card-text">Price: $<?= number_format((float)$vehicle['price'], 2) ?></p>
                <a href="../index.php" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </div>
</div>

</body>

</html>