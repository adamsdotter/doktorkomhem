<?php
    // Metadata
    $metaTitle = 'Contact Doktor Kom Hem | Family doctor in Hornsberg/Lindhagen, Kungsholmen Stockholm';
    $metaDescription = 'Doktor Kom Hem is a genuine family practice in Hornsberg / Lindhagen at Kungsholmen in Stockholm. Here you\'ll find general practitioners and nurses with many years of experience';
    $canonical = 'contact';

    // Page specifict
    $siteLang = 'en';
    $pageName = 'contact'; // To set active in nav
    $pageTitle = 'Contact us';
    $pageImg = 'dkh.jpg';
?>

<?php require_once('assets/head.php'); ?>
    <?php require_once('assets/en/header.php'); ?>
        <main class="main container--full bg">
            <h1><?php echo $pageTitle; ?></h1>
            <div class="page-content cushycms">
                <p>We are located on <a href="https://www.google.se/maps/place/Lindhagensgatan+142,+112+16+Stockholm/@59.339131,18.0058207,17z/data=!4m2!3m1!1s0x465f9d862457ff97:0xcc4def0b1b2972bb" target="_blank" title="Öppna i Google Maps">Lindhagensgatan 140-142</a> at Kungsholmen. We are <b>open Mon-Fri 08:00-17:00</b>.</p>
                <p>To book an appointment with us, please call our <b>reception <a href="tel:+468-6569700">+46 (0) 8-656 97 00</a></b>.</p>
                <p>When the clinic is closed, we refer to Bromma Akuten jourmottagning at Brommaplan. Phone .<a href="tel:+468-50585400">+46 (0) 8-505854 00</a>, street address Tunnlandet 1. </p>
                <p><i>As of October 1, 2013 you can no longer communicate via email with us.</i> We apologize for this. This is a directive from the Hälso- och sjukvårdsnämnen in Stockholm. Data-/and patient confidentiality can not be guaranteed in this type of communication.</p>
                <h2>Getting here</h2>
                <p>The easiest way to our practice is by bus 50 to "Moa Martinsons plats" which stops outside our clinic. Bus 61 goes via Fridhemsplan Fredhäll with its end station outside our door. Bus 56 from Hornsberg via Fridhemsplan towards Stora Essingen is also an option.</p>
                <p>If you go by subway, take the green line to Kristineberg or the blue line to Stadshagen.</p>
            </div>
            <figure class="page-img">
                <img src="<?php echo $images; ?>page-img/<?php echo $pageImg; ?>" alt="" />
            </figure>
        </main>

<?php require_once('assets/en/footer.php'); ?>