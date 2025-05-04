<?php
declare(strict_types=1);

#Buttons
define("buttonok", "OK");
define("buttoncancel", "Annuleren");
define("buttonsave", "Opslaan");
define("buttonback", "Terug");
define("buttondelete", "Verwijderen");
define("buttonupload", "Upload");
define("buttoneditdata", "Gegevens wijzigen");
define("buttoneditscoutgroup", "Padvindergroep wijzigen");
define("buttonguesslocation", "Locatie raden");
define("buttonguessjid", "Jid raden");
define("buttonreset", "Foto centreren");

#common
define("reallydelete", "Wil je dit record echt onherroepelijk verwijderen?");
define("username", "Gebruikersnaam");
define("password", "Wachtwoord");
define("repeatpassword", "Herhaal wachtwoord");
define("next", "Volgende");


#errormessages
define("errorgroupname", "De groepsnaam is al geregistreerd, kies er een uit de lijst.");
define("errorjid", "De JID-code moet zes tekens lang zijn.");
define("errorusername", "Deze gebruikersnaam is al in gebruik");
define("errorpasswordidentity", "De wachtwoorden komen niet overeen");
define("errorwrongpassword", "Het wachtwoord is onjuist");
define("errorpasswordlength", "Het wachtwoord moet minimaal 6 tekens lang zijn");
define("errormissingdescription", "De beschrijving van de foto ontbreekt");

#Mainmenu
define("menutitle", "Hoofdmenu");
define("menuadmin", "Admin");
define("menuplay", "Spelen");
define("menumyimages", "Mijn foto's");
define("menusolution", "Oplossing");
define("menuoptions", "Instellingen");
define("menulogout", "Uitloggen");
define("menunewimages", "Nieuwe foto's!");
define("menunewimage", "Een nieuwe foto!");
define("menunonewimages", "Geen nieuwe foto's!");
#Adminmenu
define("adminmenuuser", "Gebruikersbeheer");
define("adminmenugroup", "Groepsbeheer");
define("adminmenuevent", "Evenementbeheer");
define("adminmenuimages", "Fotobeheer");
define("adminmenuback", "Hoofdmenu");
define("menuacceptcomments", "Nieuwe opmerkingen!");
define("menuacceptcomment", "Een nieuwe opmerking!");
define("menunoacceptcomments", "Geen nieuwe opmerkingen!");

#chooseguessimage
define("guessmaintitle", "Raden");
define("guesssubmittedby", "Ingezonden door:");
define("guesscontact", "Contact:");
define("guessnoimages", "Er zijn momenteel geen foto's");
define("guessexplain", "Bij Geodetectives gaat het erom zo nauwkeurig mogelijk de locatie van de fotograaf te
   bepalen. Kies eerst een foto waarvoor je de locatie wilt raden:
   Klik op een foto om een gok te doen.");
define("guessuntil", "Raden kan tot:");
define("gamestart", "Het spel begint: ");
define("uploaduntilstart", "Tot die tijd kun je foto's uploaden die in het spel gebruikt zullen worden.");
define("buttonuploaduntilstart", "Upload foto's ");
define("buttoneditimages", "Bewerk mijn pogingen");

#choosesolutionimage
define("solutiontitle", "Oplossing");
define("solutionimagdescription", "Fotobeschrijving");
define("solutionnoresults", "Er zijn nog geen resultaten");
define("solutionresults", "Voor de volgende foto's is het niet meer mogelijk om te raden.<br>
   Klik op de knop onder de foto om de resultatenlijst te bekijken.<br>
   Klik op een foto om deze te vergroten:<br><br>");

#guess
define("guesstitle", "Bekijk de foto goed voor aanwijzingen");

#guessmap
define("guessmaptitle", "Geodetective Location Picker");

#solution
define("solutionmarkertitle", "Kaartmarkeringen met afstanden");
define("solutionheadline", "Oplossing");
define("solutionlist", "Lijst van inzendingen");
define("solutionjidcorrect", "Jid correct geraden!!");
define("solution", "Oplossing");
define("solutionguesses", "Pogingen");
define("solutionmyguess", "Mijn poging");

#editimage

define("editimageeditcoord", "Coördinaten bewerken");
define("editimageedescrition", "<br>Algemene fotobeschrijving en eventuele aanwijzingen:<br>
        (kan worden gelezen door spelers tijdens het raden)<br>");
define("editimagesolutiontext", "<br>Oplossing:<br>
        Korte beschrijving van wat er op de foto te zien is.<br>
        (is na de deadline zichtbaar voor spelers)<br>");
define("editimagesavebutton", "Opslaan");

#editmyimages
define("editmyimagesnomimages", "Je hebt nog geen foto's geüpload.");
define("editmyimagesclickimage", "Klik op de foto om deze te bewerken.<br>");
define("editmyimagesaccept", "Accepteren");
define("editmyimagesdecline", "Afwijzen");

#map
define("mapcoordtitle", "Klik op de kaart om coördinaten te definiëren.");

#mypictures
define("mypicturestitle", "Mijn foto's");
define("mypicturesnew", "Nieuwe foto uploaden");
define("mypicturesedit", "Bewerk mijn foto's");

#submitimage
define("submitimagetitle", "Foto uploaden");
define("submitimageexplain", "Klik op de knop om een foto te uploaden.
Let op dat er iets scouting-gerelateerds op de foto te zien moet zijn en dat er voldoende
aanwijzingen moeten zijn om de locatie te kunnen raden.");
define("submitdiabled", "Op dit moment kunnen er geen nieuwe foto's worden geüpload");

#configure

define("configuretitle", "Account bewerken");
define("configureexplain", "Vul het formulier in om je gegevens aan te passen:");

#register
define("registertitle", "Nieuwe gebruiker");
define("registerexplain", "Je bent nog niet geregistreerd. Vul het formulier in om je te registreren.");
define("registerbutton", "Registreer nieuwe gebruiker");

#registerscoutgroup

define("registergroupchoose", "Kies je padvindersgroep:");
define("registergroupor", "of");
define("registergroupnew", "Als je groep er niet bij staat, vul dan het volgende formulier in:");
define("registergroupname", "Naam van je padvindersgroep");
define("registergroupassociation", "Naam van je padvindersvereniging");
define("registergroupcity", "Uit welke plaats kom je?");
define("registergroupcountry", "Land");
define("registergroupjid", "Wat is jullie JID-code?");
define("registergroupcontact", "Hoe is je groep tijdens JOTA/JOTI bereikbaar?");
define("registergroupbutton", "Registreer nieuwe padvindersgroep");
define("changegroup", "Groep wijzigen");


#comments
define("commenttitle", "Opmerkingen");
define("comment", "Opmerking");
define("commentbutton", "Verstuur opmerking");
define("commentplaceholder", "Typ hier je opmerking:");
define("commentsaved", "Je opmerking is succesvol verzonden, maar moet nog worden goedgekeurd door een moderator.");
define("acceptedby", "Goedgekeurd door:");
define("declinededby", "Afgewezen door:");
define("pleaseaccept", "Nieuw! Gelieve goed te keuren of af te wijzen!");
define("alreadyingame", "Al in het spel, wijzigingen zullen de foto opnieuw instellen");
