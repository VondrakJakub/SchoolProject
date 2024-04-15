<?php

namespace App\Models;

use Core\Auth;


class Track extends BaseModel
{
    //  KALIMDOR

    public function allKalimdorAchievement()
    {
        return $this->database->sql("SELECT * FROM tracks WHERE continent = 'Kalimdor' AND type = 'achievement' AND user_id =". Auth::user());

    }

    public function allKalimdorMount()
    {
        return $this->database->sql("SELECT * FROM tracks WHERE continent = 'Kalimdor' AND type = 'mount' AND user_id =" . Auth::user());

    }

    public function allKalimdorReputation()
    {
        return $this->database->sql("SELECT * FROM tracks WHERE continent = 'Kalimdor' AND type = 'reputation' AND user_id =" . Auth::user());
    
    }

    //  OUTLAND

    public function allOutlandAchievement()
    {
        return $this->database->sql('SELECT * from tracks where continent = "Outland" and type = "Achievement" and user_id ='. Auth::user());
    }

    public function allOutlandMount()
    {
        return $this->database->sql('SELECT * from tracks where continent = "Outland" and type = "Mount" and user_id ='. Auth::user());
    }

    public function allOutlandReputation()
    {
        return $this->database->sql('SELECT * from tracks where continent = "Outland" and type = "Reputation" and user_id ='. Auth::user());
    }

    // EASTERN KINGDOMS

    public function allEasternKAchievement()
    {
        return $this->database->sql('SELECT * from tracks where continent = "Eastern Kingdoms" and type = "Achievement" and user_id ='. Auth::user());
    }

    public function allEasternKMount()
    {
        return $this->database->sql('SELECT * from tracks where continent = "Eastern Kingdoms" and type = "Mount" and user_id ='. Auth::user());
    }

    public function allEasternKReputation()
    {
        return $this->database->sql('SELECT * from tracks where continent = "Eastern Kingdoms" and type = "Reputation" and user_id ='. Auth::user());
    }

    // NORTHREND
    
    public function allNorthrendAchievement()
    {
        return $this->database->sql('SELECT * from tracks where continent = "Northrend" and type = "Achievement" and user_id ='. Auth::user());
    }

    public function allNorthrendMount()
    {
        return $this->database->sql('SELECT * from tracks where continent = "Northrend" and type = "Mount" and user_id ='. Auth::user());
    }

    public function allNorthrendReputation()
    {
        return $this->database->sql('SELECT * from tracks where continent = "Northrend" and type = "Reputation" and user_id ='. Auth::user());
    }


    public function create(array $data = [])
    {
        $sql = "INSERT INTO tracks (map, location, name, description, continent, type, user_id) VALUES 
        (" . "'" . $data['map'] . "', '" . $data['location'] . "', '" . $data['name'] . "', '" . $data['description'] . "', '" . $data['continent'] . "', '" . $data['type'] . "', '" . $data['user_id'] . "')";


        $this->database->sql($sql);
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM tracks WHERE id = $id";

        $this->database->sql($sql);
    }
}