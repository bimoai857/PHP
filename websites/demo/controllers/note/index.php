<?php

require base_path('core/Constants.php');

$heading = "Notes";

$config = require(__DIR__ . '/../../config.php');

$db = new Database($config['database']);

$user_id = Constants::USER_ID;

if ($user_id) {

    $notes = $db->query("select * from notes where user_id=?", [$user_id])->findOrFail();

    if ($_GET && $_GET['id']) {

        $noteDetails = $db->query("select * from notes where user_id=? and id=?", [$user_id, $_GET['id']])->findOrFail();
 
        view('note/show.view.php',['noteDetails'=>$noteDetails,'heading'=>$heading]);
        die();
    }
} else {
    abort(403);
}

view('note/index.view.php',['heading'=>$heading,'notes'=>$notes]);
