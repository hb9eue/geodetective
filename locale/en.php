<?php
declare(strict_types=1);
#landing page
define("landingtitle", "All information about JOTA / JOTI - the world's biggest scout event!");
define("geotitle", "GeoDetective Game");
define("geotext", "Take part in the GeoDetective game and find the locations of photos submitted by other scouts.
        Test your knowledge of geography and scouting skills! Use the internet and your deduction skills to find the solutions.
        The actual game starts at JOTA/JOTI, but you can already register and upload your own photos now. See the videos below for more information.");

define("geobutton", "Play GeoDetective now");

define("liveradiotitle", "Listen to the radioscouts live");
define("liveradiotext", "Here you can listen to the live broadcast of the radioscouts on digital amateur radio DMR.
        Click on PLAYER to start the DMR live stream.
        Check the calendar below to see when activities are taking place.");
define("liveradiobutton", "To the DMR Livestream");
        
define("calendartitle", "Calendar of Radioscouts activities:");

#Discord
define("discordtitle", "Discord Server");
define("discordtext", "Join our Discord server to chat with other scouts and exchange information such as JIDs.<br>
There is a voice chat as well as a text chat in both German and English.");

define("discordbutton", "Join Discord Server");

#GeoDetective Spielregeln
define("georulestitle", "GeoDetective Game Rules");
define("georulestext", "The rules for the GeoDetective game are simple: Find the location of the image and submit your guess!<br><br>
<ul>
<li>The game starts at JOTA/JOTI on October 17, 2025 at 6:00 pm and ends on Sunday.</li>
<li>From 11:00 pm to 09:00 am is quiet time, no guesses can be submitted.</li>
<li>Every 4 hours new images are unlocked.</li>
<li>Each player can submit only one guess per image. This can be changed as long as the current game round is active and new images have not yet been unlocked.</li>
<li>After the deadline, the solution and the highscore list for this image will be published.<br>
The winner is the player whose guess is closest to the actual location.</li>
<li>If the JID code is guessed correctly, you get an extra point!</li>
<li>Below the highscore list, players can leave comments about the image and the solutions.<br>
Comments are reviewed and approved by moderators.</li>
");        

define("videotitle", "Videos");

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
define("password", "Password");
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
define("menunewimages", "new images!");
define("menunewimage", "One new image!");
define("menunonewimages", "No new images!");
#Adminmenu
define("adminmenuuser", "Manage users ");
define("adminmenugroup", "Manage groups");
define("adminmenuevent", "Manage events");
define("adminmenuimages", "Manage images");
define("adminsort", "Sort images");
define("adminmenuback", "Main menu");
define("menuacceptcomments", "new comments!");
define("menuacceptcomment", "One new comment!");
define("menunoacceptcomments", "No new comments!");

#chooseguessimage
define("guessmaintitle", "Guess");
define("guesssubmittedby", "Submitted by:");
define("guesscontact", "Contact:");
define("guessnoimages", "There are no images at the moment");
define("guessexplain", "Geodetective is a game where you try to located the exact location of the photographer
    of the given image. Choose an image by clicking on it to start guessing the location:");
define("guessuntil", "Guessing is possible until:");
define("gamestart", "The game begins: ");
define("uploaduntilstart", "Until then you can upload your images for the game.");
define("buttonuploaduntilstart", "Upload images");
define("buttoneditimages", "Edit my guesses");

#choosesolutionimage
define("solutiontitle", "Solution"); 
define("solutionimagdescription", "Image description");
define("solutionnoresults", "There are no results yet.");
define("solutionresults", "For the following images guessing is not possible anymore.<br>
Click the button below the image to view the results.<br>
Click on an image to enlargen it:<br><br>");
    
#guess
define("guesstitle", "Examine the image closely for clues");

#guessmap
define("guessmaptitle", "Geodetective Location Picker");

#solution
define("solutionmarkertitle", "Mapmarkers with distances");
define("solutionheadline", "Solution");
define("solutionlist", "List of submissions");
define("solutionjidcorrect", "Jid guessed correctly!!");
define("solution", "Solution");
define("solutionguesses", "Guesses");
define("solutionmyguess", "My guess");
#editimage

define("editimageeditcoord", "Edit coordinates");
define("editimageedescrition", "<br>General image description and clues:<br>
        (visible for players before guessing)<br>");
define("editimagesolutiontext", "<br>Solution:<br>
        Short description of what can be seen on the image.<br>
        (is visible for players after the deadline)<br>");
define("editimagesavebutton", "Save");

#editmyimages
define("editmyimagesnomimages", "You did not upload an image yet.");
define("editmyimagesclickimage", "Click oń the image to edit<br>");
define("editmyimagesaccept", "Accept");
define("editmyimagesdecline", "Decline");
define("editmyimagesturn", "Turn image");
define("editmyimage", "Edit");

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

#comments
define("commenttitle", "Commentse");
define("comment", "Comment");
define("commentbutton", "Send commend");  
define("commentplaceholder", "Type your comment here:");
define("commentsaved", "Your comment has been send successfully, but must be aproved by a moderator."); 
define("acceptedby", "Accepted by:");
define("declinededby", "Declined by:");
define("pleaseaccept", "New! Please accept or decline!");     
define("alreadyingame", "Already shown in game, changes will reset the image");
