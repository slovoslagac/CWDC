<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bajka bend</title>
    <link type="text/css" rel="stylesheet" href="css/naslovna.css" />
</head>
<body>
<?php
$path = join(DIRECTORY_SEPARATOR, array('spisak.php'));
include $path;


?>
    <div id="container">
        <div id="header">
            <img src="img/zaglavlje.PNG">
        </div>
        <div id="menu">
            <img src="img/meny.PNG">
        </div>
        <div id="about">
            <h1>Bajka Bend - muzika za svadbe i sva Vaša veselja</h1>
            <br />
            <p>Repertoar muzike Bajka Benda je veoma bogat i raznovrstan, te je vrlo teško nabrojati sve. Na programu su domaće i strane kompozicije, narodne, zabavne, folk, etno, pop-rock... Muzika pogodna za svadbe, proslave, krštenja, klupske zabave, proslave firmi, rođendane, jubileje i bilo koje slavlje gde je imperativ dobro raspoloženje, opuštena atmosfera i ekstra zabava.</p>
        </div>
        <div id="repertoar">
            <ul>
                <li><a id="narodna" href="#">Domaća narodna muzika</a></li>
                <li><a id="zabavna" href="#">Domaća zabavna muzika</a></li>
                <li><a id="strana" href="#">Strana muzika</a></li>
                
            </ul>
        </div>
        
        <div id="narodnaTable" class="TableSongs">
            <p>Muzika kojoj se rado vracamo i pevamo je. Evergreen muzika je uvek aktuelna i uvek se rado sluša. Ako je u pitanju svadba ili proslava uz ovu muziku se peva i pleše. Veseli ritam podiže raspoloženje i dovodi slušaoce na plesni podijum. Mladenci na svadbi često započinju veselje time što otplešu prvi ples uz valcer ili neku drugu veselu melodiju.</p>
<p>Starogradska muzika budi nežna osećanja i svi je vrlo rado pevaju zajedno sa nama. </p>
            <table class="songs">
                <?php $data=$narodnaArray;$j=halfarray($data); $leng=count($data); for($i=0;$i<$j;$i++){ ?>
                <tr>
                    <th><?php echo $data[$i][0] ?></th>
                    <th><?php echo $data[$i][1] ?></th>
                    <th><?php echo ($i+$j < $leng) ? $data[$i+$j][0] : ""; ?></th>
                    <th><?php echo ($i+$j < $leng) ? $data[$i+$j][1] : ""; ?></th>
                </tr>
                <?php } ?>
            </table>
        </div>
        
        <div id="zabavnaTable" class="TableSongs" style="display: none;">
            <table class="songs">
                <?php $data=$zabavnaArray;$j=halfarray($data); $leng=count($data); for($i=0;$i<$j;$i++){ ?>
                <tr>
                    <th><?php echo $data[$i][0] ?></th>
                    <th><?php echo $data[$i][1] ?></th>
                    <th><?php echo ($i+$j < $leng) ? $data[$i+$j][0] : ""; ?></th>
                    <th><?php echo ($i+$j < $leng) ? $data[$i+$j][1] : ""; ?></th>
                </tr>
                <?php } ?>
            </table>
        </div>
        
        <div id="stranaTable" class="TableSongs" style="display: none;">
            <table class="songs">
                <?php $data=$stranaArray;$j=halfarray($data); $leng=count($data); for($i=0;$i<$j;$i++){ ?>
                <tr>
                    <th><?php echo $data[$i][0] ?></th>
                    <th><?php echo $data[$i][1] ?></th>
                    <th><?php echo ($i+$j < $leng) ? $data[$i+$j][0] : ""; ?></th>
                    <th><?php echo ($i+$j < $leng) ? $data[$i+$j][1] : ""; ?></th>
                </tr>
                <?php } ?>
            </table>
        </div>
    
    
    
    </div>
</body>
    
<script>
    document.getElementById("narodna").onclick=function() {

        document.getElementById("zabavnaTable").style.display="none";
        document.getElementById("narodnaTable").style.display="";
        document.getElementById("stranaTable").style.display="none";
        
    };
    
    document.getElementById("zabavna").onclick=function() {

        document.getElementById("zabavnaTable").style.display="";
        document.getElementById("narodnaTable").style.display="none";
        document.getElementById("stranaTable").style.display="none";
        
    };
    
    document.getElementById("strana").onclick=function() {

        document.getElementById("zabavnaTable").style.display="none";
        document.getElementById("narodnaTable").style.display="none";
        document.getElementById("stranaTable").style.display="";
        
    }
</script>
</html>