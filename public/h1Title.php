

<div class="settingBlock">
    <h1>CECI EST UN TITRE DE NIVEAU 1</h1>

        <label for="h2Activator">modifier</label>
        <input id="h2Activator" type="checkbox" class="styleSetActivator" type="checkbox" >

    <div class="formStyleSet">
        <?php chooseColorInput('h1{color:', 'Couleur du titre 1', '#000000') ?>
        <?php setFontInput('@font-face{font-family:"myH1font";src:', 'Font du titre 1', '') ?>
        <?php setSizeInput("h1{font-size:", 'Taille du titre 1', '70') ?>
        <?php setRangeInput("h1{padding-left:", 'Décalage Horizontal du titre 1', '0') ?>
        <input type="submit" value="Ok">
    </div>
</div>
