<?php

namespace App\Controllers;

use Core\Auth;
use Core\View;
use App\Models\Track;

class DashboardController
{

    public $track;

    public function __construct()
    {
        $this->track = new Track();
    }

    public function showKalimdor()
    {
        if (Auth::user()){

            return View::render('dashboard', [
                "tracksA" => $this->track->allKalimdorAchievement(),
                "tracksM" => $this->track->allKalimdorMount(),
                "tracksR" => $this->track->allKalimdorReputation(),
            ]);

        } else {

            header('location: /Project/login');

        }
    }  
    
    public function showOutland()
    {
        if (Auth::user()){

            return View::render('dashboard', [
                "tracksA" => $this->track->allOutlandAchievement(),
                "tracksM" => $this->track->allOutlandMount(),
                "tracksR" => $this->track->allOutlandReputation(),
            ]);

        } else {

            header('location: /Project/login');

        }
    } 

    public function showEasterK()
    {
        if (Auth::user()){

            return View::render('dashboard', [
                "tracksA" => $this->track->allEasternKAchievement(),
                "tracksM" => $this->track->allEasternKMount(),
                "tracksR" => $this->track->allEasternKReputation(),
            ]);

        } else {

            header('location: /Project/login');

        }
    } 

    public function showNorthrend()
    {
        if (Auth::user()){

            return View::render('dashboard', [
                "tracksA" => $this->track->allNorthrendAchievement(),
                "tracksM" => $this->track->allNorthrendMount(),
                "tracksR" => $this->track->allNorthrendReputation(),
            ]);

        } else {

            header('location: /Project/login');

        }
    } 

    public function delete()
    {
        $this->track->delete($_POST['track_id']);
        header('location: /Project/maps');
    }

    public function edit()
    {
        $description = $_POST['description'];
        $id = $_POST['track_id'];
        
        $this->track->edit($description, $id);
        header('Location: /Project/maps');
    } 
}