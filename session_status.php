<?php
session_start();
header('Content-Type: application/json');
echo json_encode(['is_admin' => isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === true]); 