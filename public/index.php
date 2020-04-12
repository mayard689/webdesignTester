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

            <div class="styleSet">
                <label>Couleur du titre 2</label>
                <input type="color" name="__h2{color:" value="<?=$_GET['__h2{color:'] ?? '#000000' ?>">
            </div>

            <div class="styleSet">
                <label>Couleur du titre 3</label>
                <input type="color" name="__h3{color:" value="<?=$_GET['__h3{color:'] ?? '#000000' ?>">
            </div>

            <div class="styleSet">
                <label>Couleur du paragraphe</label>
                <input type="color" name="__p{color:" value="<?=$_GET['__p{color:'] ?? '#000000' ?>">
            </div>

            <label>Couleur du body</label>
            <input type="color" name="___content{background-color:" value="<?=$_GET['___content{background-color:']??'#FFFFFF' ?>">
            
	    <label>Couleur de section 1</label>
            <input type="color" name="___section1{background-color:" value="<?=$_GET['___section1{background-color:'] ?? '#FFFFFF' ?>">

            <label>Couleur de section2</label>
            <input type="color" name="___section2{background-color:" value="<?=$_GET['___section2{background-color:'] ?? '#FFFFFF' ?>">

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
