

<div class="settingBlock">

    <div class="myDiv">
        <?php include 'divH3title.php' ?>
        <?php include 'divPparagraph.php' ?>
        <?php include 'imgImage1.php' ?>
    </div>

    <label for="h2Activator">modifier</label>
    <input id="h2Activator" type="checkbox" class="styleSetActivator" type="checkbox" >


    <div class="formStyleSet">
        <form>

        <div style="display:none;"><?php include 'globalForm.php' ?></div>

        <?php setSizeInput("_myDiv{width:", 'Largeur des vignettes', '400') ?>
        <?php setSizeInput("_myDiv{height:", 'Hauteur des vignettes', '400') ?>
        <?php chooseColorInput('_myDiv{background:', 'Couleur de fond', 'var(--c5)') ?>
        <input type="submit" value="Ok">

        </form>
    </div>

</div>
