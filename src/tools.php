<?php function printCss() : string
{

    $code="";

    foreach($_GET as $selector=>$value){
            $selectorType=substr($selector,0,2);
            $selectorName=str_replace("_",".",substr($selector,2));
            if ($selectorType=='r_'){
                $code.= $selectorName.$value.'%;}'."\r" ;
            }elseif ($selectorType=='f_'){
                $code.= $selectorName.'url("./assets/font/'.$value.'");}'."\r" ;
            }elseif ($selectorType=='s_'){
                $code.= $selectorName.$value.'px;}'."\r" ;
            }elseif ($selectorType=='p_'){
                $code.= $selectorName.'no-repeat center/100% url("./assets/pictures/'.$value.'");}'."\r" ;
            }else{
                $code.= $selectorName.$value.';}'."\r" ;
            }
    }

    $code.='h1{font-family: myH1font;}'."\r";
    $code.='h2{font-family: myH2font;}'."\r";
    $code.='h3{font-family: myH3font;}'."\r";
    $code.='p{font-family: myPfont;}'."\r";

    return $code;
}

/**
 * @param string $name
 * @param string $label
 * @param string $default
 */
function setColorInput(string $name, string $label, string $default) : void
{
    $name="__".$name;?>
    <div class="labelInput">
        <label for="<?= $name ?>"><?=$label?></label>
        <input id="<?= $name ?>" type="color" name="<?= $name ?>" value="<?= $_GET[$name] ?? $default ?>">
    </div>
<?php }

function chooseColorInput(string $name, string $label, string $default) : void
{
    $name="__".$name;

    if (empty($_GET[$name])) {
        $_GET[$name]=$default;
    }?>

    <div class="labelInput">
        <label for="<?= $name ?>"><?=$label?></label>
        <select STYLE="width:150px" name='<?= $name ?>'>
            <option class="colorSample1" value="var(--c1)" <?= "var(--c1)"==$_GET[$name]?'selected':'' ?> > couleur 1 </option>;
            <option class="colorSample2" value="var(--c2)" <?= "var(--c2)"==$_GET[$name]?'selected':'' ?> > couleur 2</option>;
            <option class="colorSample3" value="var(--c3)" <?= "var(--c3)"==$_GET[$name]?'selected':'' ?> > couleur 3 </option>;
            <option class="colorSample4" value="var(--c4)" <?= "var(--c4)"==$_GET[$name]?'selected':'' ?> > couleur 4 </option>;
            <option class="colorSample5" value="var(--c5)" <?= "var(--c5)"==$_GET[$name]?'selected':'' ?> > couleur 5 </option>;
        </select>
    </div>
<?php }


/**
 * @param string $name
 * @param string $label
 * @param string $default
 */
function setFontInput(string $name, string $label, string $default) : void
{
    $name="f_".$name;

    if (empty($_GET[$name])) {
        $_GET[$name]=$default;
    }

    if ($dossier = opendir('../public/assets/font/')) { ?>
        <div class="labelInput">
            <label for='<?= $name ?>'><?=$label?></label>
            <select STYLE="width:150px" name='<?= $name ?>'>
                <?php while (false !== ($fichier = readdir($dossier))) {
                    if ($fichier[0]!='.') { ?>
                        <option value="<?=$fichier?>" <?= $fichier==$_GET[$name]?'selected':'' ?> ><?=$fichier?></option>;
                    <?php }
                } ?>
            </select>
        </div>
        <?php closedir($dossier);
    } ?>

<?php }




function setSizeInput(string $name, string $label, string $default) : void
{
    $name="s_".$name;?>
    <div class="labelInput">
        <label for="<?= $name ?>"><?=$label.' (px)'?></label>
        <input size="1" id="<?= $name ?>" type="number" name="<?= $name ?>" value="<?= $_GET[$name] ?? $default ?>">
    </div>
<?php }




function setRangeInput(string $name, string $label, string $default) : void
{
    $name="r_".$name;?>
    <div class="labelInput">
        <label for="<?= $name ?>"><?=$label.' (%)'?></label>
        <input id="<?= $name ?>" type="number" name="<?= $name ?>" value="<?= $_GET[$name] ?? $default ?>">
    </div>
<?php }





function setPictureInput(string $name, string $label, string $default) : void
{
    $name="p_".$name;

    if (empty($_GET[$name])) {
        $_GET[$name]='';
    }

    if ($dossier = opendir('../public/assets/pictures/')) { ?>
        <div class="labelInput">
            <label for="<?= $name ?>"><?=$label?></label>
            <select STYLE="width:150px" name='<?= $name ?>'>
                <?php while (false !== ($fichier = readdir($dossier))) {
                    if ($fichier[0]!='.') { ?>
                        <option value="<?=$fichier?>" <?= $fichier==$_GET[$name]?'selected':'' ?> ><?=$fichier?></option>;
                    <?php }
                } ?>
            </select>
        </div>
        <?php closedir($dossier);
    } ?>

<?php }