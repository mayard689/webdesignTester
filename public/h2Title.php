

<div class="h2b settingBlock">
    <h2>Ceci est un titre de niveau 2</h2>

        <label for="h2Activator">modifier</label>
        <input id="h2Activator" type="checkbox" class="styleSetActivator" type="checkbox" >


    <div class="formStyleSet">
        <form>

        <div style="display:none"><?php include 'globalForm.php' ?></div>

        <?php chooseColorInput('h2{color:', 'Couleur du titre 2', '#000000') ?>
        <?php setFontInput('@font-face{font-family:"myH2font";src:', 'Font du titre 2', '') ?>
        <?php setSizeInput("h2{font-size:", 'Taille du titre 2', '72') ?>
        <?php setRangeInput("_h2b{left:", 'Décalage Horizontal du titre 2', '0') ?>
        <input type="submit" value="Ok">

        </form>
    </div>

</div>
