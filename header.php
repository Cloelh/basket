<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Paris basket</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/595ca4abfa.js" crossorigin="anonymous"></script>

    <!-- font -->

    <?php wp_head(); ?>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light scrolled awake" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="index.html"><i class="flaticon-helmet"></i><span>Logo</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                </button>
                <div class="collapse navbar-collapse mr-auto" id="ftco-nav">
                    <?php wp_nav_menu(array('theme_location' => 'Top')); ?>
                </div>
            </div>
        </nav>
    </header>

    <section class="banner">

    </section>
    
    <section class="content">
        <div class='container'>