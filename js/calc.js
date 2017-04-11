
//variables
var prijsLosseLes = 27.50;
var prijsBlokLes = 50;
var totaalPrijsRijlessen;
var totaalPrijsBloklessen;
var voordeel;
var aantalBlokLessen;
var aantalGelijk;


function incrementBlokPrice()
{	
	aantalBlokLessen = document.getElementById("aantalBlokLessen").innerHTML;
	totaalPrijsBloklessen = document.getElementById("totaalBlok").innerHTML;
	aantalBlokLessen++;
    document.getElementById("aantalBlokLessen").innerHTML = aantalBlokLessen;
    document.getElementById("aantalBlokLessen2").innerHTML = aantalBlokLessen;
	totaalPrijsBloklessen = (aantalBlokLessen * prijsBlokLes).toFixed(2);	
	totaalPrijsRijlessen = ((aantalBlokLessen * 2 ) * prijsLosseLes).toFixed(2);
	document.getElementById("totaalBlok").innerHTML = totaalPrijsBloklessen;	
	voordeel = (totaalPrijsRijlessen - totaalPrijsBloklessen).toFixed(2);		
	document.getElementById("totaalBlok").style.fontWeight = "bold";
	document.getElementById("voordeel").style.fontWeight = "bold";
	document.getElementById("totaalLos").style.fontWeight = "bold";
	document.getElementById("totaalLos").style.color = "red";
	document.getElementById("voordeel").innerHTML = voordeel;
	aantalGelijk = aantalBlokLessen * 2;
	document.getElementById("gelijkAan").innerHTML = aantalGelijk;
	document.getElementById("totaalLos").innerHTML = totaalPrijsRijlessen;
	if(aantalBlokLessen > 1)
	{
		document.getElementById("blokles1").innerHTML = " bloklessen";
	}	
}

function decrementBlokPrice()
{
	aantalBlokLessen = document.getElementById("aantalBlokLessen").innerHTML;
	totaalPrijsBloklessen = document.getElementById("totaalBlok").innerHTML;

	if(aantalBlokLessen > 1)
	{	
		aantalBlokLessen--;
		document.getElementById("aantalBlokLessen").innerHTML = aantalBlokLessen;
		document.getElementById("aantalBlokLessen2").innerHTML = aantalBlokLessen;
		totaalPrijsBloklessen = (aantalBlokLessen * prijsBlokLes).toFixed(2);	
		totaalPrijsRijlessen = ((aantalBlokLessen * 2 ) * prijsLosseLes).toFixed(2);
		aantalGelijk = aantalBlokLessen * 2;
		document.getElementById("totaalBlok").innerHTML = totaalPrijsBloklessen;
		voordeel = (totaalPrijsRijlessen - totaalPrijsBloklessen).toFixed(2);	
		document.getElementById("totaalBlok").style.fontWeight = "bold";
		document.getElementById("voordeel").style.fontWeight = "bold";
		document.getElementById("totaalLos").style.fontWeight = "bold";
		document.getElementById("totaalLos").style.color = "red";
		document.getElementById("voordeel").innerHTML = voordeel;
		document.getElementById("gelijkAan").innerHTML = aantalGelijk;
		document.getElementById("totaalLos").innerHTML = totaalPrijsRijlessen;

		if(aantalBlokLessen == 1)
		{
			document.getElementById("blokles1").innerHTML = " blokles";
		}	

	}
	
}



