

<div class="settingBlock">
    <h2>Ceci est un titre de niveau 2</h2>

    <label for="h2Activator">modifier</label>
    <input id="h2Activator" type="checkbox" name="h2" class="styleSetActivator" type="checkbox" >
    <div class="formStyleSet">
        <?php chooseColorInput('h2{color:', 'Couleur du titre 2', '#000000') ?>
        <?php setFontInput('@font-face{font-family:"myH2font";src:', 'Font du titre 2', '') ?>
        <?php setSizeInput("h2{font-size:", 'Taille du titre 2', '36') ?>
        <?php setRangeInput("h2{padding-left:", 'Décalage Horizontal du titre 2', '0') ?>
        <input type="submit" value="Ok">
    </div>
</div>
