

<div class="settingBlock">
    <div class="myDivImg myDivImg2" ></div>

    <label for="h2Activator">modifier</label>
    <input id="h2Activator" type="checkbox" class="styleSetActivator" type="checkbox" >

    <div class="formStyleSet">
        <form>

        <div style="display:none"><?php include 'globalForm.php' ?></div>

            <?php setSizeInput("_myDivImg{width:", 'Largeur des images', '200') ?>
            <?php setSizeInput("_myDivImg{height:", 'Hauteur des images', '150') ?>
            <?php setSizeInput("_myDivImg{top:", 'Décalage Vertical des images', '0') ?>
            <?php setSizeInput("_myDivImg{left:", 'Decalage horizontal des images', '0') ?>
            <?php setPictureInput('_myDivImg2{background:', 'Image de fond', '') ?>
            <input type="submit" value="Ok">

        </form>
    </div>

</div>
