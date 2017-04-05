<?php

require_once 'Vehicle.php';

class Car implements Vehicle {

    public function go($speed) {
        echo "Go with speed $speed";
    }

    public function stop() {
        echo "Stop";
    }

}
