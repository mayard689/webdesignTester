

<div class="settingBlock">

    <div class="myDiv">
        <h3 class="myDivH3">Ceci est un titre de niveau 3</h3>
        <p class="myDivP">Ceci est un paragraphe. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <?php include 'imgImage2.php' ?>
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
