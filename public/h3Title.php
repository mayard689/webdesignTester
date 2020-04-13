

<div class="settingBlock">
    <h3>Ceci est un titre de niveau 3</h3>

        <label for="h2Activator">modifier</label>
        <input id="h2Activator" type="checkbox" class="styleSetActivator" type="checkbox" >


    <div class="formStyleSet">
        <form>

        <div style="display:none;"><?php include 'globalForm.php' ?></div>

        <?php chooseColorInput('h3{color:', 'Couleur du titre 3', '#000000') ?>
        <?php setFontInput('@font-face{font-family:"myH3font";src:', 'Font du titre 3', '') ?>
        <?php setSizeInput("h3{font-size:", 'Taille du titre 3', '36') ?>
        <?php setRangeInput("h3{padding-left:", 'Décalage Horizontal du titre 3', '0') ?>
        <input type="submit" value="Ok">

        </form>
    </div>

</div>
