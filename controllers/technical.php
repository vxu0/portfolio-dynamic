<?php

$config = require 'config.php';
$db = new Database($config['database'], $config['database']['user'], $config['database']['pass']);

$projects = $db->query("select * from tech_projects", [])->fetchAll();

$heading = 'technical projects';

require 'views/technical.view.php';