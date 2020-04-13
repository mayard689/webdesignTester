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

    <label for="<?= $name ?>"><?=$label?></label>
    <input id="<?= $name ?>" type="color" name="<?= $name ?>" value="<?= $_GET[$name] ?? $default ?>">
<?php }

/**
 * @param string $name
 * @param string $label
 * @param string $default
 */
function setFontInput(string $name, string $label, string $default) : void
{
    $name="f_".$name;

    if ($dossier = opendir('../public/assets/font/')) { ?>
        <label for="<?= $name ?>"><?=$label?></label>
        <select STYLE="width:150px" name='<?= $name ?>'>
            <?php while (false !== ($fichier = readdir($dossier))) {
                if ($fichier[0]!='.') { ?>
                    <option value="<?=$fichier?>" <?= $fichier==$_GET[$name]?'selected':'' ?> ><?=$fichier?></option>;
                <?php }
            } ?>
        </select>
        <?php closedir($dossier);
    } ?>

<?php }

function setSizeInput(string $name, string $label, string $default) : void
{
    $name="s_".$name;?>

    <label for="<?= $name ?>"><?=$label?></label>
    <input size="1" id="<?= $name ?>" type="number" name="<?= $name ?>" value="<?= $_GET[$name] ?? $default ?>">
<?php }

function setRangeInput(string $name, string $label, string $default) : void
{
    $name="r_".$name;?>

    <label for="<?= $name ?>"><?=$label?></label>
    <input id="<?= $name ?>" type="range" name="<?= $name ?>" value="<?= $_GET[$name] ?? $default ?>">
<?php }