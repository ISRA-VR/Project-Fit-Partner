<?php
session_start();
session_unset();
session_destroy();

header("Cache-Control: no-cache, must-revalidate");
header("Expires: 0");

header("Location: index.php?view=login");
exit;
