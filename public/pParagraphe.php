

<div class="settingBlock">

    <p>Ceci est un paragraphe. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <label for="h2Activator">modifier</label>
    <input id="h2Activator" type="checkbox" class="styleSetActivator" type="checkbox" >


    <div class="formStyleSet">
        <form>

        <div style="display:none;"><?php include 'globalForm.php' ?></div>

        <?php chooseColorInput('p{color:', 'Couleur du paragraphe', '#000000') ?>
        <?php setFontInput('@font-face{font-family:"myPfont";src:', 'Font du paragraphe', '') ?>
        <?php setSizeInput("p{font-size:", 'Taille du paragraphe', '16') ?>
        <input type="submit" value="Ok">

        </form>
    </div>


</div>
