<?php
if ($_SERVER['HTTP_HOST'] === 'localhost' || strpos($_SERVER['REQUEST_URI'], '/developer') !== false) {
    // BASE_URL for the developer environment
    define('BASE_URL', '/developer/public/');
} else {
    // BASE_URL for the production environment and Localhost
    define('BASE_URL', '/public/');
}
