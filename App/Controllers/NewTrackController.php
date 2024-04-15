<?php

namespace App\Controllers;


use Core\View;
use App\Models\Track;


class NewTrackController
{
    public $track;

    public function __construct()
    {
        $this->track = new Track();
    }

    public function show()
    {
        View::render("new_track");
    }

    public function create()
    {
        $this->track->create($_POST);
        header('location: /Project/maps');
    }
}