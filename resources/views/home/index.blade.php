<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fedan studio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Spectral:wght@300;400&family=Viaoda+Libre&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="dist/index.css" />
</head>
<body>
<!-- HEADER START -->
@include('home.header')
<!-- HEADER END -->
<!-- INDIVIDUAL DANCE START -->
@include('home.section_1')
<!-- INDIVIDUAL DANCE END -->
<!-- FIRST DANCE START -->
@include('home.section_2')
<!-- FIRST DANCE END -->
<!-- WEDDING DANCE START -->
@include('home.section_3')
<!-- WEDDING DANCE END -->
<!-- INFO SECTION START -->
@include('home.section_4')
<!-- INFO SECTION END -->
<!-- TRAINING PROGRAM START -->
@include('home.section_5')
<!-- TRAINING PROGRAM END -->
<!-- RESULTS DANCE START -->
@include('home.section_6')
<!-- RESULTS DANCE END -->
<!-- FEEDBACKS SECTION START -->
@include('home.section_7')
<!-- FEEDBACKS SECTION END -->
<!-- FORM SECTION START -->
@include('home.section_8')
<!-- FORM SECTION END -->
<!-- MAP START -->
<section class="map-section">
    <div id="map" class="map-section-map"></div>
    <script
        async
        defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_O4Uu3OpcT9d8E3fVGBeId99wuDjn-ms&callback=initMap"
    ></script>
</section>
<!-- MAP END -->
<!-- FOOTER START -->
@include('home.footer')
<!-- FOOTER END -->
<script src="dist/index.js"></script>
</body>
</html>
