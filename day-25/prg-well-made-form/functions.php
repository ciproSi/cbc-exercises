<?php

function getFlashedMessages() {
    $flashed_messages = [];

    if (isset($_SESSION['flashed_messages'])) {
        $flashed_messages = $_SESSION['flashed_messages'];
        unset($_SESSION['flashed_messages']);
    }

    return $flashed_messages;
    
}

function getFlashedData () {
    $flashed_data = [];

    if (isset($_SESSION['flashed_data'])) {
        $flashed_data = $_SESSION['flashed_data'];
        unset($_SESSION['flashed_data']);
    }

    return $flashed_data;
}

function old ($name, $default_value = null) {

    global $flashed_data;
    
    if (isset($flashed_data[$name])) {
        return $flashed_data[$name];
    }

    return $default_value;

}