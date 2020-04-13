

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
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/tools.css">
    <style type="text/css">
        <?php echo printCss()?>
    </style>

</head>
<body>


    <div class="tools">

        <form>

            <input class="toolBoxActivator" type="checkbox"> Afficher la palette. </input>
            <div class="palette toolBox">
                <?php setColorInput(':root{--c1:', 'Couleur 1', '#000000') ?>
                <?php setColorInput(':root{--c2:', 'Couleur 2', '#444444') ?>
                <?php setColorInput(':root{--c3:', 'Couleur 3', '#888888') ?>
                <?php setColorInput(':root{--c4:', 'Couleur 4', '#CCCCCC') ?>
                <?php setColorInput(':root{--c5:', 'Couleur 5', '#FFFFFF') ?>

                <input type="submit" value="Validerla palette">
            </div>

            <input class="toolBoxActivator" type="checkbox"> Afficher les options graphique. </input>
            <div class="settings toolBox">
                <div class="styleSet">
                    <?php chooseColorInput('h1{color:', 'Couleur du titre 1', '#000000') ?>
                    <?php setFontInput('@font-face{font-family:"myH1font";src:', 'Font du titre 1', '') ?>
                    <?php setSizeInput("h1{font-size:", 'Taille du titre 1', '70') ?>
                </div>

                <div class="styleSet">
                    <?php chooseColorInput('h2{color:', 'Couleur du titre 2', '#000000') ?>
                    <?php setFontInput('@font-face{font-family:"myH2font";src:', 'Font du titre 2', '') ?>
                    <?php setSizeInput("h2{font-size:", 'Taille du titre 2', '36') ?>
                    <?php setRangeInput("h2{padding-left:", 'Décalage Horizontal du titre 2', '0') ?>
                </div>

                <div class="styleSet">
                    <?php chooseColorInput('h3{color:', 'Couleur du titre 3', '#000000') ?>
                    <?php setFontInput('@font-face{font-family:"myH3font";src:', 'Font du titre 3', '') ?>
                    <?php setSizeInput("h3{font-size:", 'Taille du titre 3', '36') ?>
                    <?php setRangeInput("h3{padding-left:", 'Décalage Horizontal du titre 3', '0') ?>
                </div>

                <div class="styleSet">
                    <?php chooseColorInput('p{color:', 'Couleur du paragraphe', '#000000') ?>
                    <?php setFontInput('@font-face{font-family:"myPfont";src:', 'Font du paragraphe', '') ?>
                    <?php setSizeInput("p{font-size:", 'Taille du paragraphe', '16') ?>
                </div>

                <div class="styleSet">
                    <?php setSizeInput("_myDiv{width:", 'Largeur des vignettes', '400') ?>
                    <?php setSizeInput("_myDiv{height:", 'Hauteur des vignettes', '400') ?>
                    <?php chooseColorInput('_myDiv{background:', 'Couleur de fond', 'var(--c5)') ?>
                </div>

                <div class="styleSet">
                    <?php setSizeInput("_myDivImg{width:", 'Largeur des images', '200') ?>
                    <?php setSizeInput("_myDivImg{height:", 'Hauteur des images', '150') ?>
                    <?php setSizeInput("_myDivImg{top:", 'Décalage Vertical des images', '0') ?>
                    <?php setSizeInput("_myDivImg{left:", 'Decalage horizontal des images', '0') ?>
                    <?php setPictureInput('_myDivImg1{background:', 'Image de fond', '') ?>
                    <?php setPictureInput('_myDivImg2{background:', 'Image de fond', '') ?>
                </div>

                <div class="styleSet">
                    <?php setSizeInput("_myDivH3{top:", 'Décalage Vertical des titres', '0') ?>
                    <?php setSizeInput("_myDivH3{left:", 'Decalage horizontal des titres', '0') ?>
                </div>

                <div class="styleSet">
                    <?php setSizeInput("_myDivP{top:", 'Décalage Vertical des paragraphes', '0') ?>
                    <?php setSizeInput("_myDivP{left:", 'Decalage horizontal des paragraphes', '0') ?>
                </div>


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

        <input class="toolBoxActivator" type="checkbox"> Afficher le css. </input>
        <div class="cssCode toolBox">
            <?php echo str_replace("\r","<br>",printCss()); ?>
        </div>

    </div>

    <form>

    <div class="palette">
        <?php setColorInput(':root{--c1:', 'Couleur 1', '#000000') ?>
        <?php setColorInput(':root{--c2:', 'Couleur 2', '#444444') ?>
        <?php setColorInput(':root{--c3:', 'Couleur 3', '#888888') ?>
        <?php setColorInput(':root{--c4:', 'Couleur 4', '#CCCCCC') ?>
        <?php setColorInput(':root{--c5:', 'Couleur 5', '#FFFFFF') ?>

        <input type="submit" value="Validerla palette">
    </div>

    <div class="content" >


        <h1>CECI EST UN TITRE H1</h1>

        <section class="section1">
            <div class="sectionContent">
                <?php include 'h2Title.php'?>
                <h3>Ceci est un titre de niveau 3</h3>
                <p>Ceci est un paragraphe. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <div class ="myDivPanel">
                    <div class="myDiv">
                        <h3 class="myDivH3">Ceci est un titre de niveau 3</h3>
                        <p class="myDivP">Ceci est un paragraphe. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <div class="myDivImg myDivImg1" ></div>
                    </div>

                    <div class="myDiv">
                        <h3 class="myDivH3">Ceci est un titre de niveau 3</h3>
                        <p class="myDivP">Ceci est un paragraphe. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <div class="myDivImg myDivImg2" ></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section2">
            <div class="sectionContent">
                <h2>Ceci est un titre de niveau 2</h2>
                <h3>Ceci est un titre de niveau 3</h3>
                <p>Ceci est un paragraphe. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <div class ="myDivPanel">
                    <div class="myDiv">
                        <h3 class="myDivH3">Ceci est un titre de niveau 3</h3>
                        <p class="myDivP">Ceci est un paragraphe. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <div class="myDivImg myDivImg1" ></div>
                    </div>

                    <div class="myDiv">
                        <h3 class="myDivH3">Ceci est un titre de niveau 3</h3>
                        <p class="myDivP">Ceci est un paragraphe. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <div class="myDivImg myDivImg2" ></div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <form>


</body>
</html>
