<?php
$this->title = 'Manager Dashboard';
foreach ($projects as $project) {
    echo $project->title . " - " . $project->description . "<br>";
}
