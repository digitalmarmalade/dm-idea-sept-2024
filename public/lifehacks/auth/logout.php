<?php

session_start();
session_destroy();
header('Location: https://idea.org.uk');
die();