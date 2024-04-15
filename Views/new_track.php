<?php

use Core\Auth;

Core\View::render('header', ['title' => 'New track']); 

?>

<body>
    <header class="main--header">
        <h1 class="header--h1">Collection helper</h1>
        <div class="main--links">
            <a class="map" href="/Project/new-track">New Track</a>
            <a class="map" href="/Project/Kalimdor">Kalimdor</a>
            <a class="map" href="/Project/EasternKingdoms">Eastern Kingdoms</a>
            <a class="map" href="/Project/Outland">Outland</a>
            <a class="map" href="/Project/Northrend">Northrend</a>
            <a class="map" href="/Project/logout" >Logout</a>
        </div>
    </header>

    <form class="new_track_form" action="/Project/new-track" method="post">
        <div class="track_form_input">
            <input class="form_input_text" type="text" name="map" placeholder="Map">
            <input class="form_input_text" type="text" name="location" placeholder="Location">
            <input class="form_input_text" type="text" name="name" placeholder="Name">
        </div>
        
        <textarea class="text_area" name="description" id="" cols="30" rows="10" placeholder="Description"></textarea>
        <div class="track_form_fieldset">
            <fieldset>
                <legend>Choose continent</legend>
                <input type="radio" name="continent" id="kalimdor" value="kalimdor">
                <label for="kalimdor">Kalimdor</label>
                <input type="radio" name="continent" id="eastern kingdoms" value="eastern kingdoms">
                <label for="eastern kingdoms">Eastern Kingdoms</label>
                <input type="radio" name="continent" id="outland" value="outland">
                <label for="outland">Outland</label>
                <input type="radio" name="continent" id="northrend" value="northrend">
                <label for="northrend">Northrend</label>
            </fieldset>
            <fieldset>
                <legend>Choose type</legend>
                <input type="radio" name="type" id="achievement" value="achievement">
                <label for="achievement">Achievement</label>
                <input type="radio" name="type" id="mount" value="mount">
                <label for="mount">Mount</label>
                <input type="radio" name="type" id="reputation" value="reputation">
                <label for="reputation">Reputation</label>
            </fieldset>
            <input name="user_id" type="hidden" value="<?php echo Auth::user() ?>">
            <button class="track_form_add" type="submit">Add</button>
        </div>  
    </form>
</body>
</html>