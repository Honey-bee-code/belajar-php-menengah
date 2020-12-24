<?php
require_once 'error.php';

ob_start();
require 'file-error.php';
ob_end_flush();
