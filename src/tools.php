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
}?>
