<!DOCTYPE html>
   <?php
    $artikels = array(
        array('titel' => 'Rusland maakt trajecten Belgische F-16s in Syrië openbaar',
              'datum' => '20 oktober 2016',
              'inhoud' => 'Volgens het Russische ministerie van Defensie bewijzen radarbeelden dat Belgische F-16s wel degelijk een bombardement hebben uitgevoerd op een dorp nabij het noord-Syrische Aleppo. Rusland zal de vliegroutes van de gevechtstoestellen op het ogenblik van het dodelijk bombardement openbaar maken. Volgens het ministerie zijn de twee Belgische F-16s van op een luchthaven in Jordanië opgestegen en zijn twee keer in de lucht door een Amerikaans tankvliegtuig bijgetankt. <br />

    De woordvoerder van het Russische ministerie van Defensie, Igor Konasjenkov, zegt dat Russische en Syrische radardata bevestigen dat Belgische toestellen Hassadjek nabij Aleppo hebben gebombardeerd. <br />

    Het controlecentrum van het luchtruim registreerde op 18 oktober om 01.34 uur Moskouse tijd het opstijgen van twee militaire vliegtuigen van de internationale coalitie van het vliegveld al-Salti in Jordanië, zei de majoor-generaal. De toestellen zijn onmiddelllijk als F-16s en als van de Belgisch luchtmacht geïdentificeerd, aldus het Russische ministerie van Defensie. Zij zijn om 02.37 uur het Syrisch luchtruim binnengevlogen ongeveer 115 km ten noordoosten van Deir Ezzor. <br />

    Ter hoogte van Deir-Ezzor zijn ze door een Amerikaans KC-135 tankvliegtuig bijgetankt en hebben ze hun vlucht hebben voortgezet in noordwestelijke richting, zegt de woordvoerder nog. Om 03.10 uur vlogen de F-16s 80 km ten noordoosten van de Syrische stad Raqqa.',
              'afbeelding' => 'get_img/artikel0.jpg',
              'afbeeldingBeschrijving' => 'Uitgeruste F16 piloot in Jordanië'),
        
        array('titel' => 'Republikeinen ontzet na debat: Trump had net zo goed in eigen kist kunnen gaan liggen',
              'datum' => '20 oktober 2016',
              'inhoud' => 'Niet alleen Democraten, maar ook Republikeinen reageren ontzet op de uitspraak van Donald Trump vannacht dat hij niet zeker weet of de verkiezingen wel eerlijk verlopen. Hij had net zo goed met een hamer en spijkers in zijn eigen grafkist kunnen gaan liggen en hem zelf dichtslaan, zei Nicolle Wallace, een adviseur van senator John McCain tijdens diens verkiezingscampagne in 2008, op NBC. <br />

    Trump klaagt al maanden dat het systeem hem tegenwerkt, maar had nog niet eerder zo expliciet gezegd dat hij zich mogelijk niet zal neerleggen bij een eventueel verlies. Daar zal ik dan naar kijken. Ik laat jullie nog in spanning, zei hij vannacht tijdens het derde presidentiële debat. Zijn tegenstrever Clinton noemde zijn uitspraak angstwekkend. <br />

    Ook binnen zijn eigen partij werd vol ongeloof en afkeer gereageerd. De Republikeinse senator Lindey Graham, die zelf als kandidaat van Trump heeft verloren in de voorverkiezingen, stelt dat Trump de partij en het land zeker geen dienst bewijst door voortdurend te suggereren dat de uitkomst van de verkiezingen niet in zijn eigen handen ligt. Volgens Jeff Flake, senator van Arizona, is de opmerking onaanvaardbaar. <br />

    De website Politico heeft een dozijn Republikeinse strategen over het debat gesproken en de meesten van hen waren zeer bezorgd over de uitlatingen. Volgens Steve Schmidt, die McCain eveneens in 2008 begeleidde, overschaduwt deze uitspraak elk ander sterk moment dat de kandidaat tijdens dit debat had. <br />

    Hij maakte een enorme fout vannacht, meent Austin Barbour, strateeg uit Mississsippi. Trump stond al achter, zegt Bill Kristol, hoofdredacteur van het conservatieve The Weekly Standard. Hij zal waarschijnlijk verliezen, en slecht verliezen. Hij sleept de Senaat en het Huis van Afgevaardigden met zich mee. <br />',
              'afbeelding' => 'get_img/artikel1.jpg',
              'afbeeldingBeschrijving' => 'Donald Trump in debat'),
        
        array('titel' => 'Ambulance doet er drie keer langer over om bij ongeval te komen: Mensen gaan niet meer uit de weg',
              'datum' => '19 oktober 2016',
              'inhoud' => 'Bij een ongeval gisteren op de Antwerpse ring deed een ambulance er drie keer zo lang als gewoonlijk over om bij het slachtoffer te komen. Alsmaar vaker weigeren mensen uit de weg te gaan voor ambulances. Dat schrijft Het Laatste Nieuws. <br />

    Er ontstond grote chaos op de Antwerpse ring gisteren, toen een 22-jarige vrouw met haar wagen uit de bocht ging op de oprit in Borgerhout. De brandweer moest het dak van de wagen knippen om de twintiger te bevrijden. <br />

    De ambulance was er pas na ongeveer 20 minuten, beduidend meer dan de gewoonlijke 7 à 8 minuten. Dat het zo lang duurde, kwam voornamelijk door het drukke verkeer. Maar er speelt nog een andere factor: ambulances kunnen steeds moeilijker passeren, waardoor ze kostbare tijd verliezen. <br />

    Sommige bestuurders gaan zelfs op de pechstrook rijden en dan komen wij als hulpdiensten in de problemen, zegt dokter Jan Christiaen, voorzitter van de Belgische Beroepsvereniging van Ambulancediensten. Bovendien merken we de laatste jaren ook gewoon een gebrek aan respect. De mensen gaan niet meer uit de weg en dat kan in bepaalde gevallen het verschil betekenen tussen leven en dood.',
              'afbeelding' => 'get_img/artikel2.jpg',
              'afbeeldingBeschrijving' => 'Uitrijdende ambulance'));


	$oneArticle = false;
	if(isset($_GET['id'])&&$_GET['id']<count($artikels)){
		$oneArticle=true;
    }
?>

<html>
	<head>
		<title>Oplossing get <?php if($oneArticle){echo" - ".$artikels[$_GET['id']]["titel"];}?></title>
		<style>
        body {
	font-family: Arial;
}

h3 {
	width:80%;
	margin:0 auto;
	border-bottom:1px solid lightGray;
	font-weight:400;
	font-size:1.4em;
}

s {
	color:gray;
}

main {
	display:flex;
	flex-wrap:wrap;
	margin:0 auto;
	width:80%;
	position:relative;
}

article {
	width:40%;
	padding:10px 5%;
}

article img {
	width:90%;
}

article a {
	color:gray;
}

article a::after {
	content:" >>";
}

p.long {
	display:none;
}

p.short {
	display:block;
}

.oneArticle {
	position:absolute;
	left:0;
	right:0;
	top:0;
	padding:70px 0 20px;
	background:rgba(255,255,255,0.8);
	width:100%;
}

.oneArticle a {
	display:none;
}

.oneArticle p.long {
	display:block;
}

.oneArticle p.short {
	display:none;
}
        </style>
	</head>
	<body>
		<h1>Oplossing get</h1>
		<main>
			<?php foreach($artikels as $id => $article):?>
			<article id="<?php echo $id;?>"<?php if($oneArticle&&$_GET['id']==$id){echo"class='oneArticle'";}?>>
				<h4><?php echo $artikels["titel"];?></h4>
				<img src="<?php echo $artikels["afbeelding"];?>" alt="<?php echo $artikels["beschrijvingAfbeelding"];?>">
				<p class="short"><?= substr($artikels["paragraaf"],0,50)."...";?></p>
				<p class="long"><?= $artikels["paragraaf"];?></p>
				<a href="index.php?id=<?php echo $id;?>">lees meer</a>
			</article>
			<?php endforeach?>
		</main>
		<script type="text/javascript">
			document.getElementsByTagName('main')[0].addEventListener("click",function(){document.getElementById(<?php if($oneArticle){echo $_GET['id'];}?>).classList.remove('showOne');});
		</script>
	</body>
</html>