<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include __DIR__ . "/../../models/User.php";
require_once "../../vendor/Security/Security.php";
require_once "../../vendor/FlashMessage/FlashMessage.php";