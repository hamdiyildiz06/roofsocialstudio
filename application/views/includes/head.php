<?php $settings = get_settings(); ?>
<meta charset="utf-8">
<title><?php echo $settings->company_name . " | " . $settings->slogan; ?></title>
<meta name="description" content="Erbas Palet İkinci El ve Sıfır Palet">
<meta name="keywords" content="Palet , Ahşap Palet , Ankara Palet , İkinci El Palet , Ostim Palet , Palet Alım Satımı , Erbas Palet , Erbas, Euro Palet, Türpal Palet"/>
<meta name="author" content="Hamdi Yıldız">

<!-- Mobile Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="google-site-verification" content="kKNJCDPgecTHtOFpGS0vzpHe3ViG6r2y4wvO3aywdOk" />

<?php if(isset($opengraph)){ ?>

<!--    OPENGRAPH-->
    <meta property="og:title" content="<?php echo $news->title; ?>" />
    <meta property="og:description" content="<?php echo character_limiter(strip_tags($news->description), 200); ?>" />

    <?php if($news->news_type == "image") { ?>
        <meta property="og:image" content="<?php echo base_url("panel/uploads/news_v/$news->img_url"); ?>" />
    <?php } else { ?>
        <meta property="og:video" content="<?php echo "https://www.youtube.com/v/$news->video_url"; ?>" />
    <?php } ?>

<?php } ?>

    <!-- Küresel site etiketi (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MSTKGFX4QE"></script>
    <script>
        window.dataLayer = pencere.dataLayer || [];
        function gtag(){dataLayer.push(argümanlar);}
        gtag('js', yeni Tarih());

        gtag('config', 'G-MSTKGFX4QE');
    </script>

<?php $this->load->view("includes/include_style"); ?>