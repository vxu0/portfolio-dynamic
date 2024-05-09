<?php

$config = require 'config.php';

$db = new Database($config['database']);

$visuals = $db->query("select * from visual_pieces", [])->fetchAll();
$notes = $db->query("select * from written_pieces", [])->fetchAll();

$heading = 'creative space';

require 'views/creative.view.php';