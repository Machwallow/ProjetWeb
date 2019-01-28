<?php

session_start();
session_unset();

require_once(PATH_CONTROLLERS.'header.php');
require_once(PATH_VIEWS.'deconnexion.php');
require_once(PATH_VIEWS.'footer.php');
