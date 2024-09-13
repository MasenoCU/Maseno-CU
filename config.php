<?php
if (strpos($_SERVER['REQUEST_URI'], '/developer') !== false) {
    // BASE_URL for the developer environment
    define('BASE_URL', '/developer/public/');
} elseif ($_SERVER['HTTP_HOST'] === 'localhost') {
    // BASE_URL for localhost without /developer
    define('BASE_URL', 'mucuwebsitegithub/public/');
} else {
    // BASE_URL for the production environment
    define('BASE_URL', 'mucuwebsitegithub/public/');
}
?>
