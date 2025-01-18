<?php
declare(strict_types=1);

#Buttons
define("buttonok", "OK");
define("buttoncancel", "cancel");
define("buttonsave", "save");
define("buttonback", "back");
define("buttondelete", "löschen");
define("buttonupload", "upload");
define("buttoneditdata", "edit data");


#common
define("reallydelete", "Do you really want to delete this record?");
define("username", "username");
define("password", "passwort");
define("repeatpassword", "The passwords do not match");
define("next", "next");


#errormessages
define("errorgroupname", "This groupname is already registered, please choose one from the list.");
define("errorjid", "The JID-Code must be six characters long.");
define("errorusername", "This username is already taken");
define("errorpasswordidentity", "The passwords do not match");
define("errorwrongpassword", "The password is wrong");

#Mainmenu
define("menuadmin", "admin");
define("menuplay", "play");
define("menumyimages", "my images");
define("menusolution", "solution");
define("menuoptions", "options");
define("menulogout", "log out");
#Adminmenu
define("adminmenuuser", "manage users ");
define("adminmenugroup", "manage groups");
define("adminmenuevent", "manage events");
define("adminmenuimages", "manage images");
define("adminmenuback", "main menu");

#chooseguessimage
define("guesstitle", "guess");
define("guessnoimages", "There are no images at the moment");
define("guessexplain", "Bei Geodetectives geht es darum möglichst genau den Standort des Fotografen von Bildern zu
   bestimmen. Suche dir zuerst ein Bild aus für das du den Standort erraten möchtest:
   Klicke auf ein Bild um einen Tipp abzugeben<br>");
define("guessuntil", "Raten möglich bis:");

#choosesolutionimage
define("solutiontitle", "Auflösung");
define("solutionnoresults", "Es gibt noch keine Ergebnisse");
define("solutionresults", "Für folgende Bilder ist keine Tippabgabe mehr möglich.<br>
   Klicke auf ein Bild um des Rätsels Lösung anzusehen:<br><br>");

   #guess
define("guesstitle", "Untersuche das Bild genau nach Hinweisen");

#guessmap
define("guessmaptitle", "Geodetective Location Picker");

#solution
define("solutiontitle", "Kartenmarker mit Entfernungen");
define("solutionheadline", "Auflösung");
define("solutionlist", "Liste der Einsendungen");

#editimage

define("editimageeditcoord", "Koordinaten anpasssen");
define("editimageedescrition", "<br>Allgemeine Bildbeschreibung und evt. Tipps:<br>
        (kann bei der Tippabgabe von Spielern gelsesen werden)<br>");
define("editimagesolutiontext", "<br>Auflösung:<br>
        Kurze Beschreibung was hier wo zu sehen ist.<br>
        (Wird nach Ablauf der Deadline angezeigt)<br>");
define("editimagesavebutton", "Bildbeschreibung speichern");

#editmyimages
define("editmyimagesnomimages", "Du hast bisher keine Bilder eingereicht.");
define("editmyimagesclickimage", "Klicke auf ein Bild um es zu bearbeiten<br>");
define("editmyimagesaccept", "freigeben");
define("editmyimagesdecline", "sperren");

#map
define("mapcoordtitle", "Klicke auf die Karte um die Koordinaten festzulegen.");

#mypictures
define("mypicturestitle", "Meine Bilder");
define("mypicturesnew", "Neues Bild einreichen");
define("mypicturesedit", "Meine Bilder bearbeiten");

#submitimage
define("submitimagetitle", "Bild einreichen");
define("submitimageexplain", "Klicke auf den Button um ein Bild hochzuladen.
Beachte dass auf dem Bild etwas Pfadfinderisches zu sehen sein muss und auch genug
Hinweise enthalten muss um den Aufnhameort erraten zu können.");

#configure

define("configuretitle", "Account ändern");
define("configureexplain", "Bitte fülle das Formular aus um deine Daten zu Ändern:");

#register
define("registertitle", "Neuer Benutzer");
define("registerexplain", "Du bist noch nicht registriert. Bitte fülle das Formular aus um dich zu registrieren");
define("registerbutton", "Neuen Benutzer registrieren");

#registerscoutgroup

define("registergroupchoose", "Choose your scoutgroup:");
define("registergroupor", "oder");
define("registergroupnew", "Sollte deine Gruppe nicht aufgeführt sein, fülle bitte folgende Felder aus:");
define("registergroupname", "Name deiner Pfadigruppe");
define("registergroupassociation", "Name deines Pfadfinderverbands");
define("registergroupcity", "Aus welchem Ort kommt ihr?");
define("registergroupcountry", "Land");
define("registergroupjid", "Wie lautet euer JID-Code?");
define("registergroupcontact", "Wie seid Ihr beim JOTA/JOTI erreichbar?");
define("registergroupbutton", "Neue Pfadfindergruppe registrieren");