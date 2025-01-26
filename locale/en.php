<?php
declare(strict_types=1);

#Buttons
define("buttonok", "OK");
define("buttoncancel", "cancel");
define("buttonsave", "save");
define("buttonback", "back");
define("buttondelete", "löschen");
define("buttonupload", "upload");
define("buttoneditdata", "save changes");
define("buttoneditscoutgroup", "edit scoutgroup");
define("buttonguesslocation", "guess location");
define("buttonguessjid", "guess Jid");

#common
define("reallydelete", "Do you really want to delete this record?");
define("username", "username");
define("password", "passwort");
define("repeatpassword", "repeat password");
define("next", "next");


#errormessages
define("errorgroupname", "This groupname is already registered, please choose one from the list.");
define("errorjid", "The JID-Code must be six characters long.");
define("errorusername", "This username is already taken");
define("errorpasswordidentity", "The passwords do not match");
define("errorwrongpassword", "The password is wrong");
define("errormissingdescription", "The description of the image is missing");

#Mainmenu
define("menutitle", "Main menu");
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
define("guessexplain", "Geodetective is a game where you try to located the exact location of the photographer
    of the given image. Choose an image by clicking on it to start guessing the location:");
define("guessuntil", "guessing is possible until:");
define("gamestart", "The game begins: ");
define("uploaduntilstart", "Until then you can upload your images for the game.");
define("buttonuploaduntilstart", "upload images");

#choosesolutionimage
define("solutiontitle", "Solution");
define("solutionnoresults", "There are no results yet.");
define("solutionresults", "For the following images guessing is not possible anymore.<br>
   Click on an image to view the results:<br><br>");

   #guess
define("guesstitle", "Examine the image closely for clues");

#guessmap
define("guessmaptitle", "Geodetective Location Picker");

#solution
define("solutiontitle", "Mapmarkers with distances");
define("solutionheadline", "Solution");
define("solutionlist", "List of submissions");

#editimage

define("editimageeditcoord", "Edit coordinates");
define("editimageedescrition", "<br>General image description and clues:<br>
        (visible for players before guessing)<br>");
define("editimagesolutiontext", "<br>Solution:<br>
        Short description of what can be seen on the image.<br>
        (is visible for players after the deadline)<br>");
define("editimagesavebutton", "save");

#editmyimages
define("editmyimagesnomimages", "You did not upload an image yet.");
define("editmyimagesclickimage", "Click oń the image to edit<br>");
define("editmyimagesaccept", "accept");
define("editmyimagesdecline", "decline");

#map
define("mapcoordtitle", "Click on the map to define coordinates.");

#mypictures
define("mypicturestitle", "my images");
define("mypicturesnew", "submit new image");
define("mypicturesedit", "edit my images");

#submitimage
define("submitimagetitle", "submit image");
define("submitimageexplain", "Click in the button to upload an image.
Note that the image must show be something that has to do with scouting and
must contain enough clues to make it possible to guess the location.");
define("submitdiabled", "At the moment no images can be uploaded");

#configure

define("configuretitle", "edit account");
define("configureexplain", "Please fill in the form to edit yout data:");

#register
define("registertitle", "new user");
define("registerexplain", "You are not registered yet. Please fill in the form to register.");
define("registerbutton", "register new user");

#registerscoutgroup

define("registergroupchoose", "Choose your scoutgroup:");
define("registergroupor", "or");
define("registergroupnew", "If your group ist not registered yet, fill in the following fields:");
define("registergroupname", "Name of your scoutgroup");
define("registergroupassociation", "Name of your scoutassociation");
define("registergroupcity", "From which city are you?");
define("registergroupcountry", "Country");
define("registergroupjid", "What's your JID-Code?");
define("registergroupcontact", "How can your group be contaced during JOTA/JOTI?");
define("registergroupbutton", "register new scoutgroup");