<?php
declare(strict_types=1);

class Car {
    // declaring private variables(fields) is the safest approach when building classes
    private string $make;
    private string $model;
    private int $year;

    // The constructor ensures these variables are properly initialized
    public function __construct(string $make, string $model, int $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // The getter function returns the string containing these private fields
    public function getter(): string {
        // Still don't get why we have to use $this pointer even tho there aren't
          // any local variables in the function that could possibly override the class's private fields
        // Apparently, I will understand it as we go through the course
        return "<b>make:</b> $this->make<br><b>model:</b> $this->model<br> <b>year:</b> $this->year";
    }
}

?>
