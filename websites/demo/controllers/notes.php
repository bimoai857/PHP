<?php

require_once '/Users/bimochanshrestha/projects/php/websites/demo/Constants.php';

require 'Database.php';

$heading = "Notes";

$config = require(__DIR__ . '/../config.php');

$db = new Database($config['database']);

$user_id = Constants::USER_ID;

if ($user_id) {

    $notes = $db->query("select * from notes where user_id=?", [$user_id])->findOrFail();

    if ($_GET['id']) {

        $noteDetails = $db->query("select * from notes where user_id=? and id=?", [$user_id, $_GET['id']])->findOrFail();
 
        require 'views/noteDetail.view.php';
        die();
    }
} else {
    abort(403);
}

require 'views/notes.view.php';
