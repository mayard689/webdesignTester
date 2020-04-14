<?php

    require "../src/tools.php";

    if (empty($_GET['f_@font-face{font-family:"myH1font";src:']) && !empty($_GET['h1Font'])) {
        $_GET['f_@font-face{font-family:"myH1font";src:'] = $_GET['h1Font'];
    }
    if (empty($_GET['f_@font-face{font-family:"myH2font";src:']) && !empty($_GET['h1Font'])) {
        $_GET['f_@font-face{font-family:"myH2font";src:'] = $_GET['h2Font'];
    }
    if (empty($_GET['f_@font-face{font-family:"myH3font";src:']) && !empty($_GET['h1Font'])) {
        $_GET['f_@font-face{font-family:"myH3font";src:'] = $_GET['h3Font'];
    }
    if (empty($_GET['f_@font-face{font-family:"myPfont";src:']) && !empty($_GET['h1Font'])) {
        $_GET['f_@font-face{font-family:"myPfont";src:'] = $_GET['pFont'];
    }

    unset($_GET['h1Font']);
    unset($_GET['h2Font']);
    unset($_GET['h3Font']);
    unset($_GET['pFont']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <title> My Design tester </title>
    <link rel="stylesheet" href="/assets/css/tools.css">
    <link rel="stylesheet" href="/assets/css/style.css">

    <style type="text/css">
        <?php echo printCss()?>
    </style>

</head>
<body>


    <div class="tools">

        <input class="toolBoxActivator" type="checkbox" checked> Afficher les options graphique. </input>
        <div class="settings toolBox">

            <form>

                <div style="display:none;"><?php include 'globalForm.php' ?></div>

                <div class="palette">
                    <?php setColorInput(':root{--c1:', 'Couleur 1', '#000000') ?>
                    <?php setColorInput(':root{--c2:', 'Couleur 2', '#444444') ?>
                    <?php setColorInput(':root{--c3:', 'Couleur 3', '#888888') ?>
                    <?php setColorInput(':root{--c4:', 'Couleur 4', '#CCCCCC') ?>
                    <?php setColorInput(':root{--c5:', 'Couleur 5', '#FFFFFF') ?>

                    <input type="submit" value="Validerla palette">
                </div>

                <div class="backgnd">
                    <?php chooseColorInput('_content{background-color:', 'Couleur du body', 'var(--c5)') ?>
                    <?php chooseColorInput('_section1{background-color:', 'Couleur de section 1', 'var(--c5)') ?>
                    <?php chooseColorInput('_section2{background-color:', 'Couleur de section 2', 'var(--c5)') ?>

                    <label>largeur de section</label>
                    <input type="range" name="r_section{width:" value="<?=$_GET['r_section{width:'] ?? '100' ?>">

                    <label>padding de section</label>
                    <input type="range" name="r__sectionContent{width:" value="<?=$_GET['r__sectionContent{width:'] ?? '100' ?>">

                    <input type="submit" value="Valider les choix">
                </div>

            </form>
        </div>

        <input class="toolBoxActivator" type="checkbox"> Afficher le css. </input>
        <div class="cssCode toolBox">
            <?php echo str_replace("\r","<br>",printCss()); ?>
        </div>

    </div>





    <div class="content" >


        <?php include 'h1Title.php'?>

        <section class="section1">
            <div class="sectionContent">
                <?php include 'h2Title.php'?>
                <?php include 'h3Title.php'?>
                <?php include 'pParagraphe.php'?>

                <div class ="myDivPanel">
                    <?php include 'dDiv.php'?>
                    <?php include 'dDiv2.php'?>
                </div>
            </div>
        </section>

        <section class="section2">
            <div class="sectionContent">
                <?php include 'h2Title.php'?>
                <?php include 'h3Title.php'?>
                <?php include 'pParagraphe.php'?>

                <div class ="myDivPanel">
                    <?php include 'dDiv.php'?>
                    <?php include 'dDiv2.php'?>
                </div>
            </div>
        </section>

    </div>




</body>
</html>
