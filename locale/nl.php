<?php
declare(strict_types=1);

#Buttons
define("buttonok", "OK");
define("buttoncancel", "Abbrechen");
define("buttonsave", "Speichern");
define("buttonback", "zurück");
define("buttondelete", "löschen");
define("buttonupload", "Upload");
define("buttoneditdata", "Daten Ändern");
define("buttoneditscoutgroup", "Pfadfindergruppe ändern");


#common
define("reallydelete", "Soll der Datensatz wirklich unwiderruflich gelöscht werden?");
define("username", "Benutzername");
define("password", "Passwort");
define("repeatpassword", "Passwort wiederholen");
define("next", "weiter");


#errormessages
define("errorgroupname", "Der Gruppenname ist bereits angelegt, bitte aus der Liste auswählen.");
define("errorjid", "Der JID-Code muss sechstellig sein.");
define("errorusername", "Der Nutzername ist bereits vergeben");
define("errorpasswordidentity", "Die Passwörter stimmen nicht überein");
define("errorwrongpassword", "Das Passwort ist falsch");
define("errormissingdescription", "Bitte eine Bildbeschreibung eingeben");

#Mainmenu
define("menutitle", "Main menu");
define("menuadmin", "Admin");
define("menuplay", "Spielen");
define("menumyimages", "Meine Bilder");
define("menusolution", "Auflösung");
define("menuoptions", "Einstellungen");
define("menulogout", "Abmelden");
#Adminmenu
define("adminmenuuser", "Userverwaltung");
define("adminmenugroup", "Gruppenverwaltung");
define("adminmenuevent", "Eventverwaltung");
define("adminmenuimages", "Bilderverwaltung");
define("adminmenuback", "Hauptmenü");

#chooseguessimage
define("guesstitle", "Tippabgabe");
define("guessnoimages", "Im Moment gibt es keine Bilder");
define("guessexplain", "Bei Geodetectives geht es darum möglichst genau den Standort des Fotografen von Bildern zu
   bestimmen. Suche dir zuerst ein Bild aus für das du den Standort erraten möchtest:
   Klicke auf ein Bild um einen Tipp abzugeben");
define("guessuntil", "Raten möglich bis:");
define("gamestart", "Das Spiel beginnt: ");
define("uploaduntilstart", "Bis dahin kannst du Bilder hochladen, die dann im Spiel verwendet werden.");
define("buttonuploaduntilstart", "Bilder einreichen");

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
Hinweise enthalten muss um den Aufnahmeort erraten zu können.");
define("submitdiabled", "Zur Zeit können keine neuen Bilder eingereicht werden");

#configure

define("configuretitle", "Account ändern");
define("configureexplain", "Bitte fülle das Formular aus um deine Daten zu Ändern:");

#register
define("registertitle", "Neuer Benutzer");
define("registerexplain", "Du bist noch nicht registriert. Bitte fülle das Formular aus um dich zu registrieren");
define("registerbutton", "Neuen Benutzer registrieren");

#registerscoutgroup

define("registergroupchoose", "Wähle bitte dein Pfadigruppe sie hier aus:");
define("registergroupor", "oder");
define("registergroupnew", "Sollte deine Gruppe nicht aufgeführt sein, fülle bitte folgende Felder aus:");
define("registergroupname", "Name deiner Pfadigruppe");
define("registergroupassociation", "Name deines Pfadfinderverbands");
define("registergroupcity", "Aus welchem Ort kommt ihr?");
define("registergroupcountry", "Land");
define("registergroupjid", "Wie lautet euer JID-Code?");
define("registergroupcontact", "Wie seid Ihr beim JOTA/JOTI erreichbar?");
define("registergroupbutton", "Neue Pfadfindergruppe registrieren");