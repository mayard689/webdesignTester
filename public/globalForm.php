

            <input class="_toolBoxActivator" type="checkbox"> Afficher la palette. </input>
            <div class="palette _toolBox">
                <?php setColorInput(':root{--c1:', 'Couleur 1', '#000000') ?>
                <?php setColorInput(':root{--c2:', 'Couleur 2', '#444444') ?>
                <?php setColorInput(':root{--c3:', 'Couleur 3', '#888888') ?>
                <?php setColorInput(':root{--c4:', 'Couleur 4', '#CCCCCC') ?>
                <?php setColorInput(':root{--c5:', 'Couleur 5', '#FFFFFF') ?>

                <input type="submit" value="Validerla palette">
            </div>

            <input class="_toolBoxActivator" type="checkbox"> Afficher les options graphique. </input>
            <div class="settings _toolBox">
                <div class="styleSet">
                    <?php chooseColorInput('h1{color:', 'Couleur du titre 1', '#000000') ?>
                    <?php setFontInput('@font-face{font-family:"myH1font";src:', 'Font du titre 1', '') ?>
                    <?php setSizeInput("h1{font-size:", 'Taille du titre 1', '140') ?>
                    <?php setRangeInput("_h1b{left:", 'Décalage Horizontal du titre 1', '0') ?>
                </div>

                <div class="styleSet">
                    <?php chooseColorInput('h2{color:', 'Couleur du titre 2', '#000000') ?>
                    <?php setFontInput('@font-face{font-family:"myH2font";src:', 'Font du titre 2', '') ?>
                    <?php setSizeInput("h2{font-size:", 'Taille du titre 2', '72') ?>
                    <?php setRangeInput("_h2b{left:", 'Décalage Horizontal du titre 2', '0') ?>
                </div>

                <div class="styleSet">
                    <?php chooseColorInput('h3{color:', 'Couleur du titre 3', '#000000') ?>
                    <?php setFontInput('@font-face{font-family:"myH3font";src:', 'Font du titre 3', '') ?>
                    <?php setSizeInput("h3{font-size:", 'Taille du titre 3', '36') ?>
                    <?php setRangeInput("_h3b{left:", 'Décalage Horizontal du titre 3', '0') ?>
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
            </div>