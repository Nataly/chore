<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php header('content-type: text/html; charset=utf-8'); ?>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="es" />
        <link href='<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico' rel='shortcut icon' type='image/x-icon'></link>
        <link href='<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.png' rel='shortcut icon' type='image/png'></link>
        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/slidegaleria.css" />
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->
        <meta http-equiv="content-script-type" content="text/javascript" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/slidergaleria.js"></script>


        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>

        <div class="container" id="page">

            <div id="header">
                <div class="lateral">
                    <div id="titulo"><?php echo CHtml::link(Yii::app()->name, array('index')); ?> </div>
                    <div id="subtitulo"><?php echo 'universidad del táchira' ?></div>
                </div>
                <div id="mainmenu">
                    <div id="inisesion">

                        <?php
                        if (Yii::app()->user->isGuest) {
                            echo CHtml::link('Iniciar sesión', array('/site/login'));
//                            echo CHtml::link('Iniciar sesión  &nbsp; <img class="bottom" alt="logo" src="' . Yii::app()->request->baseUrl . '/images/favicon2.png" />', array('/site/login'));
                        } else {
                            echo CHtml::link('Cerrar sesión (' . Yii::app()->user->name . ')', array('/site/logout'), array('class' => 'sesion'));
                        }
                        ?>

                    </div>
                    <?php
                    $this->widget('zii.widgets.CMenu', array(
                        'items' => array(
                            array('label' => 'currículum', 'url' => array('/site/curriculum')),
                            array('label' => 'Director', 'url' => array('/site/Director')),
                            array('label' => 'Integrantes', 'url' => array('/site/integrantes')),
                            array('label' => 'Discografía', 'url' => array('/site/discografia')),
                        ),
                    ));
                    ?>
                    <br />

                </div>

            </div><!-- header -->


            <!-- mainmenu -->
            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>

            <?php echo $content; ?>

            <div id="footer">
                <div style="float:left; ">

                    <div class="cf">
                        <a href="http://www.unet.edu.ve/" title="Página oficial de la Universidad Experimental del Táchira"><img class="bottom" alt="logo" src="<?php echo Yii::app()->request->baseUrl; ?>/images/iconos/logoUnetAzul.jpg" /></a>
                        <a href="http://www.unet.edu.ve/" title="Página oficial de laUniversidad Experimental del Táchira"><img class="top"  alt="logo" src="<?php echo Yii::app()->request->baseUrl; ?>/images/iconos/logoUnetGris.jpg" /></a>
                    </div>
                </div>
                Agrupación adscrita a la Coordinación de Extensión Sociocultural - MMXI Universidad Nacional Experimental del Táchira · Centro de Estudios en Teleinformática.<br />
                <img class="bottom" alt="logo" width="17" height="9" src="<?php echo Yii::app()->request->baseUrl; ?>/images/iconos/sobre.jpg" /> Dirección postal: Ofc. CoroUNET,  Edf. 35 Universidad del Táchira, · San Cristóbal 5001 - VENEZUELA  <img class="bottom" alt="logo" width="18" height="11" src="<?php echo Yii::app()->request->baseUrl; ?>/images/iconos/telefono.jpg" /> Tel.: +58 276 3532578<br />
                Todos los derechos reservados.<br/>

            </div><!-- footer -->

        </div><!-- page -->

    </body>
</html>