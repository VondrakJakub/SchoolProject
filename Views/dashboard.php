<?php 
use Core\View;

View::render('header', ['title' => 'Collection helper']);


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


    <main class="main--dash">
        <h2 class="track_type">Achievements</h2>
        
        <ul class="main--example">
            <li class="example">Map</li>
            <li class="example">Location</li>
            <li class="example">Name</li>
        </ul>

        <?php 

        foreach ($tracksA as $track) 
        { 
            View::render('track', ['track' => $track]); 
        } 

        ?>
        

        <h2 class="track_type">Mounts</h2>
        
        <ul class="main--example">
            <li class="example">Map</li>
            <li class="example">Location</li>
            <li class="example">Name</li>
        </ul>

        <?php 

        foreach ($tracksM as $track) 
        { 
            View::render('track', ['track' => $track]); 
        } 

        ?>
        
        <h2 class="track_type">Reputation</h2>
        
        <ul class="main--example">
            <li class="example">Map</li>
            <li class="example">Location</li>
            <li class="example">Name</li>
        </ul>

        <?php 

        foreach ($tracksR as $track) 
        { 
            View::render('track', ['track' => $track]); 
        } 

        ?>

        
    </main>

    <script src="/Project/Views/resources/modal.js"></script>
</body>
</html>