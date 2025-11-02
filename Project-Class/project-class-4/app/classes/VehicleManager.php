<?php

require_once 'VehicleBase.php';
require_once 'VehicleActions.php';
require_once 'FileHandler.php';

class VehicleManager extends VehicleBase implements VehicleActions
{
    use FileHandler;

    public function addVehicle($data)
    {
        $Vehicles = $this->readFile();
        $Vehicles[] = $data;
        $this->writeFile($Vehicles);
    }

    public function editVehicle($id, $data) {

        $vehicles = $this->readFile();
        if (isset($vehicles[$id])) {
            $vehicles[$id] = array_merge($vehicles[$id], $data);
            $this->writeFile($vehicles);
        } else {
            throw new Exception("Vehicle not found.");
        }

    }

    public function deleteVehicle($id) {
        $vehicles = $this->readFile();
        if (isset($vehicles[$id])) {
            unset($vehicles[$id]);
            $vehicles = array_values($vehicles); // Re-index the array
            $this->writeFile($vehicles);
        } else {
            throw new Exception("Vehicle not found.");
        }
    }

    public function getVehicles() {
        return $this->readFile();
    }

    // Implement abstract method
    public function getDetails() {}
}
