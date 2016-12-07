<title><?= (!empty($title)) ? $title : NULL ?></title> 
<meta name="description" content="<?= (!empty($meta_description)) ? $meta_description : NULL ?>">
<meta name="keywords" content="<?= (!empty($meta_keywords)) ? $meta_keywords : NULL ?>">

<meta property="og:description" content="<?= (!empty($meta_description)) ? $meta_description : NULL ?>" />
<meta property="og:site_name" content="<?= SITE_NAME ?>" />
<meta property="og:title" content="<?= (!empty($title)) ? $title : NULL ?>" />

<?= /* Page CSS */ (!empty($css)) ? $this->util->cssList($css) : NULL ?>
<link rel="icon" href="<?= base_url('public/img/favicon.ico') ?>" type="image/x-icon">