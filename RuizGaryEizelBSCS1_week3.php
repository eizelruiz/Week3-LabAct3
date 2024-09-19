<?php

// Base class Vehicle
class Vehicle {
    protected $make;
    protected $model;
    protected $year;

    // Constructor to initialize the vehicle details
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Final method to get vehicle details
    final public function getDetails() {
        return "Make: {$this->make}, Model: {$this->model}, Year: {$this->year}\n";
    }

    // Method to describe the vehicle
    public function describe() {
        return "This is a vehicle.";
    }
}

// Derived class Car extending Vehicle
class Car extends Vehicle {
    private $numberOfDoors;

    // Constructor to initialize the car details
    public function __construct($make, $model, $year, $numberOfDoors) {
        parent::__construct($make, $model, $year);
        $this->numberOfDoors = $numberOfDoors;
    }

    // Overriding describe method to specify that it is a car
    public function describe() {
        return "This is a car.";
    }
}

// Final class Motorcycle extending Vehicle
final class Motorcycle extends Vehicle {
    // Constructor to initialize motorcycle details
    public function __construct($make, $model, $year) {
        parent::__construct($make, $model, $year);
    }

    // Overriding describe method to specify that it is a motorcycle
    public function describe() {
        return "This is a motorcycle.";
    }
}

// Interface ElectricVehicle
interface ElectricVehicle {
    public function chargeBattery();
}

// ElectricCar class extending Car and implementing ElectricVehicle interface
class ElectricCar extends Car implements ElectricVehicle {
    // Constructor to initialize electric car details
    public function __construct($make, $model, $year, $numberOfDoors) {
        parent::__construct($make, $model, $year, $numberOfDoors);
    }

    // Implementing chargeBattery method from ElectricVehicle interface
    public function chargeBattery() {
        return "Charging the battery.";
    }

    // Overriding describe method to specify that it is an electric car
    public function describe() {
        return "This is an electric car.";
    }
}

// Testing the implementation
$car = new Car("Toyota", "Camry", 2020, 4);
$motorcycle = new Motorcycle("Harley-Davidson", "Sportster", 2021);
$electricCar = new ElectricCar("Tesla", "Model S", 2023, 4);

echo $car->getDetails();
echo $car->describe();
echo "\n";

echo $motorcycle->getDetails();
echo $motorcycle->describe();
echo "\n";

echo $electricCar->getDetails();
echo $electricCar->describe();
echo "\n";
echo $electricCar->chargeBattery();

?>
