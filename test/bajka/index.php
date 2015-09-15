<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bajka bend</title>
    <link type="text/css" rel="stylesheet" href="css/naslovna.css" />
</head>
<body>
<?php 
$narodnaArray = [
[ '	ATOMSKO SKLONIŠTE: ' , ' Pakleni vozaci ' ],
[ '  ' , ' Za ljubav treba imat.. ' ],
[ ' AZRA: ' , ' Balkan ' ],
[ '  ' , ' A šta da radim ' ],
[ ' ALISA: ' , ' Hej hej decace ' ],
[ '  ' , ' Kesteni ' ],
[ ' ANIMATORI: ' , ' Andjeli  nas zovu da.. ' ],
[ ' BAJAGA: ' , ' Vesela pesma ' ],
[ '  ' , ' Plavi safir ' ],
[ '  ' , ' 20. vek ' ],
[ '  ' , ' Moji su drugovi ' ],
[ '  ' , ' Jer ti se ljubiš ' ],
[ '  ' , ' Samo nam je ljubav  ' ],
[ ' BABE: ' , ' Noc bez sna ' ],
[ '  ' , ' Ko me tero  ' ],
[ ' BIJELO DUGME: ' , ' Lažeš zlato… ' ],
[ '  ' , ' Svi marš na ples ' ],
[ '  ' , ' Ružica si bila  ' ],
[ '  ' , ' Ne spavaj mala moja ' ],
[ '  ' , ' Na zadnjem sjedištu ' ],
[ '  ' , ' Napile se ulice ' ],
[ '  ' , ' Ako ima boga ' ],
[ '  ' , ' Ajdemo u planine ' ],
[ ' GALIJA: ' , ' Kotor ' ],
[ '  ' , ' Digni ruku ' ],
[ ' GENERACIJA 5: ' , ' Dolazim za 5 minuta ' ],
[ '  ' , ' Ti I ja ' ],
[ ' GIBONI: ' , ' Tempera ' ],
[ '  ' , ' Libar ' ],
[ '  ' , ' Cinim pravu stvar ' ],
[ '  ' , ' Zedjam ' ],
[ ' DEJAN CUKIC: ' , ' Letnje kiše ' ],
[ '  ' , ' Ja bih da pevam ' ]

];

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
                <li><a href="#" rel="narodna">Domaća narodna muzika</a></li>
                <li><a href="#" rel="zabavna">Domaća zabavna muzika</a></li>
                <li><a href="#" rel="strana">Strana muzika</a></li>
                
            </ul>
        </div>
        
        <div id="narodna" >
            <table class="songs">
                <?php for($i=0;$i<=14;$i++){ ?>
                <tr>
                    <th><?php echo $narodnaArray[$i][0] ?></th>
                    <th><?php echo $narodnaArray[$i][1] ?></th>
                    <th><?php echo $narodnaArray[$i+15][0] ?></th>
                    <th><?php echo $narodnaArray[$i+15][1] ?></th>
                </tr>
                <?php } ?>
            </table>
        </div>
        
        <div id="zabavna" hidden="hidden">
            bla
        </div>
    
    
    
    </div>
</body>
</html>