<?php


require_once '../app/classes/VehicleManager.php';


$vehicleManager = new VehicleManager("", "", "", "", "");
$vehicles = $vehicleManager->getVehicles();







include './views/header.php';
?>


<div class="container my-4">
    <h1>Vehicle Listing</h1>
    <a href="./../public/views/add.php" class="btn btn-success mb-4">Add Vehicle</a>
    <div class="row">
        <!-- Loop Go here -->

        <?php if (!empty($vehicles)): ?>
            <?php foreach ($vehicles as $index => $vehicle): ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?= htmlspecialchars($vehicle['image']) ?>" class="card-img-top" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($vehicle['name'] ?? "") ?></h5>
                            <p class="card-text">Type: <?= htmlspecialchars($vehicle['type'] ?? "") ?></p>
                            <p class="card-text">Price: $<?= number_format((float)$vehicle['price'], 2) ?></p>
                            <a href="./views/edit.php?id=<?= $index ?>" class="btn btn-primary">Edit</a>
                            <a href="./views/delete.php?id=<?= $index ?>" class="btn btn-danger">Delete</a>
                            <a href="./views/details.php?id=<?= $index ?>" class="btn btn-info text-white">Details</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-12">
                <div class="alert alert-info text-center">
                    No vehicles found. Please add some vehicles.
                </div>
            </div>
        <?php endif; ?>



        <!-- Loop ends here -->
    </div>
</div>

</body>

</html>