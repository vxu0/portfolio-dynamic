<?php

$config = require 'config.php';
// $db = new Database($config['database'], $config['database']['user'], $config['database']['pass']);
$db = new Database();

$projects = $db->query("select * from tech_projects order by date desc", [])->fetchAll();

$heading = 'technical projects';

require 'views/technical.view.php';