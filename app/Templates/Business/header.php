<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title . ' - ' . SITETITLE; ?></title>
        <?php
        echo $meta; //place to pass data / plugable hook zone
        Assets::css([
            'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css',
            Url::templatePath() . 'css/bootstrap.css',
            Url::templatePath() . 'css/bootstrap.min.css',
            Url::templatePath() . 'css/business-casual.css',
            'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
            'https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic',
        ]);
        echo $css; //place to pass data / plugable hook zone
        ?>
    </head>
    <body>
        <?php echo $afterBody; //place to pass data / plugable hook zone?>

        <?php
        /*
          <div class="container">

          <p><img src='<?=Url::templatePath();?>images/nova.png' alt='<?=SITETITLE;?>'></p>
         */
        ?>

        <div class="brand">Gite de Langlebert</div>
        <div class="address-bar">1 Route de Serques |  62910 Moulle | 06 89 61 46 79</div>

        <!-- Navigation -->
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                    <a class="navbar-brand" href="gite">Gite de Langlebert</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="gite">Accueil</a>
                        </li>
                        <li>
                            <a href="gallery">Galerie</a>
                        </li>
                        <li>
                            <a href="about">A propos</a>
                        </li>
                        <li>
                            <a href="reservation">R&eacute;servation</a>
                        </li>
                        <li>
                            <a href="contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <div class="container">
