<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title> My Design tester </title>

    <style type="text/css">

	    <?php foreach($_GET as $selector=>$value){
		    $selectorType=substr($selector,0,2);
		    $selectorName=str_replace("_",".",substr($selector,2));
	            echo $selectorName.$value.';}'."\r" ;
	    } ?>
    </style>

</head>
<body>

        <form>
            <button> Afficher la boite à outils. </button>

            <div class="styleSet">
                <label for="__h1{color:">Couleur du titre 1</label>
                <input id="__h1{color:" type="color" name="__h1{color:" value="<?= $_GET['__h1{color:'] ?? '#000000' ?>">
            </div>

            <input type="submit" value="tester">

        </form>

    <div class="content" >


        <h1>CECI EST UN TITRE H1</h1>

        <section class="section1">
            <div class="sectionContent">
                <h2>Ceci est un titre de niveau 2</h2>
                <h3>Ceci est un titre de niveau 3</h3>
                <p>Ceci est un paragraphe. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <div class="mydiv">
                    <h3>Ceci est un titre de niveau 3</h3>
                    <p>Ceci est un paragraphe. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </section>

        <section class="section2">
            <div class="sectionContent">
                <h2>Ceci est un titre de niveau 2</h2>
                <h3>Ceci est un titre de niveau 3</h3>
                <p>Ceci est un paragraphe. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <div class="mydiv">
                    <h3>Ceci est un titre de niveau 3</h3>
                    <p>Ceci est un paragraphe. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </section>

    </div>



</body>
</html>
