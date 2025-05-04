<?php
declare(strict_types=1);

#Buttons
define("buttonok", "OK");
define("buttoncancel", "Annuler");
define("buttonsave", "Sauver");
define("buttonback", "retour");
define("buttondelete", "effacer");
define("buttonupload", "Téléversement");
define("buttoneditdata", "Modification données");
define("buttoneditscoutgroup", "Modifier troupe");
define("buttonguesslocation", "Deviner localisation");
define("buttonguessjid", "Deviner JID");
define("buttonreset", "Réinitialiser l'image");

#common
define("reallydelete", "Voulez-vous vraiment supprimer définitivement l'enregistrement ?");
define("username", "Nom d'utilisateur");
define("password", "Mot de passe");
define("repeatpassword", "Répéter le mot de passe");
define("next", "suivant");


#errormessages
define("errorgroupname", "Nom de troupe existant. Choisi le dans la liste.");
define("errorjid", "Le code JID est composé de 6 caractères.");
define("errorusername", "Nom d'utilisateur déjà existant.");
define("errorpasswordidentity", "Les mots de passes ne concordent pas.");
define("errorwrongpassword", "Mot de passe erroné.");
define("errorpasswordlength", "Le mot de passe doit comporter au moins 6 caractères.");
define("errormissingdescription", "Veuillez donner une description de l'image.");

#Mainmenu
define("menutitle", "Menu");
define("menuadmin", "Admin");
define("menuplay", "Jouer");
define("menumyimages", "Mes images");
define("menusolution", "Solutions");
define("menuoptions", "Paramètres");
define("menulogout", "Logout");
define("menunewimages", "nouvelles photos!");
define("menunewimage", "une nouvelle photo!");
define("menunonewimages", "Pas de nouvelles photos!");
#Adminmenu
define("adminmenuuser", "Gestion des utilisateurs");
define("adminmenugroup", "Gestion des troupes");
define("adminmenuevent", "Gestion des évènements");
define("adminmenuimages", "Gestion des images");
define("adminmenuback", "Menu principale");
define("menuacceptcomments", "Commentaires nouveaux!");
define("menuacceptcomment", "Un commentaire nouveaux!");
define("menunoacceptcomments", "Pas de nouveaux commentaires !");


#chooseguessimage
define("guessmaintitle", "Tentative");
define("guesssubmittedby", "Soumis par:");
define("guesscontact", "Contact:");
define("guessnoimages", "Pour le moment, pas d'image");
define("guessexplain", "Le géo-detective consiste à déterminer le plus précisèment possible l'endroit où se trouvait le photographe d'une image. Choisi une image pour laquelle tu souhaite soumettre une possible localisation:
   Cliquez sur une image pour soumettre un conseil.");
define("guessuntil", "Tentative à soumettre jusqu'au :");
define("gamestart", "Le jeu débute: ");
define("uploaduntilstart", "Délai de dépôt d'images jusqu'auquel elles peuvent être utilisée dans le jeu.");
define("buttonuploaduntilstart", "Soumettre image");
define("buttoneditimages", "Changer mes tentatives");

#choosesolutionimage
define("solutiontitle", "Solution"); DUPLICATE!
define("solutionimagdescription", "Description d'image");
define("solutionnoresults", "Il n'y a pas encore de solution.");
define("solutionresults", "Pour l'image suivante, il n'est pas possible de déposer une suggestion.<br>
Clique sur le bouton pour voir la solution de l'énigme:<br>
Clique sur l'image pour l'agrandir:<br><br>");

#guess
#define("guesstitle", "Analyse l'image de manière détaillée selon les indications"); DUPLICATE!

#guessmap
define("guessmaptitle", "Geodetective selection de localisation");

#solution
define("solutionmarkertitle", "Indicateur de carte avec éloignement");
define("solutionheadline", "Solution");
define("solutionlist", "Liste des soumissions");
define("solutionjidcorrect", "Jid correctement devnié !!");
define("solution", "Solution");
define("solutionguesses", "tentatives");
define("solutionmyguess", "ma tentative");

#editimage

define("editimageeditcoord", "Modifier les coordonnées");
define("editimageedescrition", "<brDescription générale de l'image et indices éventuels:<br>
        (peut être affiché par les utilisateurs sous forme d'indice)<br>");
define("editimagesolutiontext", "<br>Solution:<br>
        Kurze Beschreibung was hier wo zu sehen ist.<br>
        (Sera affiché à l'échéant du délai)<br>");
define("editimagesavebutton", "Sauver la description de l'image");

#editmyimages
define("editmyimagesnomimages", "Tu n'as encore déposé aucune image.");
define("editmyimagesclickimage", "Clique sur l'image pour l'éditer.<br>");
define("editmyimagesaccept", "libérer");
define("editmyimagesdecline", "bloquer");

#map
define("mapcoordtitle", "Clique sur la carte pour définir les coordonnées.");

#mypictures
define("mypicturestitle", "Mes images");
define("mypicturesnew", "Déposer une nouvelle image");
define("mypicturesedit", "Modifier mes images");

#submitimage
define("submitimagetitle", "Soumettre une image");
define("submitimageexplain", "Clique sur le bouton pour téléverser une image.
Celle-ci doit visuellement contenir quelque chose en rapport avec le scoutisme ainsi
que des indices suffisant pour la rendre localisable.");
define("submitdiabled", "Pour le moment, aucune nouvelle image ne peut être soumise");

#configure

define("configuretitle", "Modifier compte");
define("configureexplain", "Rempli le formulaire pour modifier mes données:");

#register
define("registertitle", "Nouvel utilisateur");
define("registerexplain", "Tu n'est pas encore enregistré. Merci de remplir le formulaire.");
define("registerbutton", "Enregistrer le nouvel utilisateur");

#registerscoutgroup

define("registergroupchoose", "Sélectionne ton groupe scout:");
define("registergroupor", "ou");
define("registergroupnew", "Si ton groupe n'apparait pas, rempli le formulaire suivant :");
define("registergroupname", "Nom de ton groupe");
define("registergroupassociation", "Nom de ton association scoute");
define("registergroupcity", "De quel endroit venez-vous ?");
define("registergroupcountry", "Pays");
define("registergroupjid", "Quel est votre code JID ?");
define("registergroupcontact", "Par quels moyens êtes vous atteignables lors du JOTA-JOTI ?");
define("registergroupbutton", "Enregistrer un nouveau groupe scout");
define("changegroup", "Modifier groupe");

#comments
define("commenttitle", "Commentaires");
define("comment", "Commentaire");
define("commentbutton", "Soumettre un commentaire");  
define("commentplaceholder", "Écrivez votre commentaire ici:");
define("commentsaved", "Votre commentaire a été enregistré mais doit encore être approuvé par un modérateur.");      
define("acceptedby", "Approuvé par:");
define("declinededby", "Bloqué par:");
define("pleaseaccept", "Nouveau! Veuillez approuver ou bloquer!");
define("alreadyingame", "Bereits im Spiel, Änderung führt zu reset der Deadline");
?>
