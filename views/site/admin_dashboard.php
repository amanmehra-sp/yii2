<?php
$this->title = 'Admin Dashboard';
foreach ($users as $user) {
    echo $user->name . " (" . $user->role . ")<br>";
}
