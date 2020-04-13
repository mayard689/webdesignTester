

<div class="settingBlock">
    <h3 class="myDivH3">Ceci est un titre de niveau 3</h3>

    <label for="h2Activator">modifier</label>
    <input id="h2Activator" type="checkbox" class="styleSetActivator" type="checkbox" >


    <div class="formStyleSet">
        <form>

        <div style="display:none"><?php include 'globalForm.php' ?></div>
        <p>Propriétés valables sur toute la page :</p>
        <?php chooseColorInput('h3{color:', 'Couleur du titre 3', '#000000') ?>
        <?php setFontInput('@font-face{font-family:"myH3font";src:', 'Font du titre 3', '') ?>
        <?php setSizeInput("h3{font-size:", 'Taille du titre 3', '36') ?>
        <?php setRangeInput("h3{padding-left:", 'Décalage Horizontal du titre 3', '0') ?>
        <br>
        <p>Propriétés valables seulement dans la vignette :</p>
        <?php setSizeInput("_myDivH3{top:", 'Décalage Vertical des titres', '0') ?>
        <?php setSizeInput("_myDivH3{left:", 'Decalage horizontal des titres', '0') ?>
        <br>
        <input type="submit" value="Ok">

        </form>
    </div>

</div>
