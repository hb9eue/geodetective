<?php
declare(strict_types=1);

#Buttons
define("buttonok", "OK");
define("buttoncancel", "Cancel");
define("buttonsave", "Save");
define("buttonback", "Back");
define("buttondelete", "Löschen");
define("buttonupload", "Upload");
define("buttoneditdata", "Save changes");
define("buttoneditscoutgroup", "Edit scoutgroup");
define("buttonguesslocation", "Guess location");
define("buttonguessjid", "Guess Jid");
define("buttonreset", "Center Image");

#common
define("reallydelete", "Do you really want to delete this record?");
define("username", "Username");
define("password", "Passwort");
define("repeatpassword", "Repeat password");
define("next", "Next");


#errormessages
define("errorgroupname", "This groupname is already registered, please choose one from the list.");
define("errorjid", "The JID-Code must be six characters long.");
define("errorusername", "This username is already taken");
define("errorpasswordidentity", "The passwords do not match");
define("errorwrongpassword", "The password is wrong");
define("errorpasswordlength", "The password must at least be 6 characters long");
define("errormissingdescription", "The description of the image is missing");

#Mainmenu
define("menutitle", "Main menu");
define("menuadmin", "Admin");
define("menuplay", "Play");
define("menumyimages", "My images");
define("menusolution", "Solution");
define("menuoptions", "Options");
define("menulogout", "Log out");
#Adminmenu
define("adminmenuuser", "Manage users ");
define("adminmenugroup", "Manage groups");
define("adminmenuevent", "Manage events");
define("adminmenuimages", "Manage images");
define("adminmenuback", "Main menu");

#chooseguessimage
define("guesstitle", "Guess");
define("guesssubmittedby", "submitted by:");
define("guesscontact", "contact:");
define("guessnoimages", "There are no images at the moment");
define("guessexplain", "Geodetective is a game where you try to located the exact location of the photographer
    of the given image. Choose an image by clicking on it to start guessing the location:");
define("guessuntil", "guessing is possible until:");
define("gamestart", "The game begins: ");
define("uploaduntilstart", "Until then you can upload your images for the game.");
define("buttonuploaduntilstart", "Upload images");

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
define("solutionjidcorrect", "Jid guessed correctly!!");
define("solution", "Solution");
define("solutionguesses", "guesses");
define("solutionmyguess", "my guess");
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
define("editmyimagesaccept", "Accept");
define("editmyimagesdecline", "Decline");

#map
define("mapcoordtitle", "Click on the map to define coordinates.");

#mypictures
define("mypicturestitle", "My images");
define("mypicturesnew", "Submit new image");
define("mypicturesedit", "Edit my images");

#submitimage
define("submitimagetitle", "Submit image");
define("submitimageexplain", "Click in the button to upload an image.
Note that the image must show be something that has to do with scouting and
must contain enough clues to make it possible to guess the location.");
define("submitdiabled", "At the moment no images can be uploaded");

#configure

define("configuretitle", "Edit account");
define("configureexplain", "Please fill in the form to edit yout data:");

#register
define("registertitle", "New user");
define("registerexplain", "You are not registered yet. Please fill in the form to register.");
define("registerbutton", "Register new user");

#registerscoutgroup

define("registergroupchoose", "Choose your scoutgroup:");
define("registergroupor", "or");
define("registergroupnew", "If your group ist not registered yet, fill in the following fields:");
define("registergroupname", "Name of your scoutgroup");
define("registergroupassociation", "Name of your scoutassociation");
define("registergroupcity", "City of your scoutgroup:");
define("registergroupcountry", "Country");
define("registergroupjid", "What's your JID-Code?");
define("registergroupcontact", "How can your group be contacted during JOTA/JOTI?");
define("registergroupbutton", "Register new scoutgroup");
define("changegroup", "Change scoutgroup");