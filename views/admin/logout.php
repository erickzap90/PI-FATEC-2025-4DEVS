<?php
session_start();
session_destroy();
header("Location: /PI-FATEC-2025-4DEVS/views/index.php");
exit;
