<?php Core\View::render('header', ['title' => 'Maps']);
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

    <main class="main--maps">
        <a class="map--link" href="/Project/Kalimdor"><img  src="/Project/Views/resources/images/Kalimdor.jpg" alt="Kalimdor">Kalimdor</a>
        <a class="map--link" href="/Project/EasternKingdoms"><img  src="/Project/Views/resources/images/Eastern kingdoms.jpg" alt="Eastern Kingdoms">Eastern Kingdoms</a>
        <a class="map--link" href="/Project/Outland"><img  src="/Project/Views/resources/images/outland.jpg" alt="Outland">Outland</a>
        <a class="map--link" href="/Project/Northrend"><img  src="/Project/Views/resources/images/Northrend.jpg" alt="Northrend">Northrend</a>
    </main>
</body>
</html>