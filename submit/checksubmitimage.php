<?php
session_start();
 
   include("../templateoben.php");  

   if(isset($abbrechen)) {
    echo "<script>window.location.href='../menu/main.php';</script>";  
    //header("location: ../menu/main.php");
    exit(1);
   }

   function removeExifData($file) {
    // Überprüfen, ob die Datei existiert und ein Bild ist
    if (isset($file) && $file['error'] == 0) {
    // Ermitteln des Dateityps
    $imageType = exif_imagetype($file['tmp_name']);
    
    // Bild je nach Typ laden
    switch ($imageType) {
    case IMAGETYPE_JPEG:
    $image = imagecreatefromjpeg($file['tmp_name']);
    break;
    case IMAGETYPE_PNG:
    $image = imagecreatefrompng($file['tmp_name']);
    break;
    case IMAGETYPE_GIF:
    $image = imagecreatefromgif($file['tmp_name']);
    break;
    default:
    return "Unsupported image type.";
    }
    
    // Neues Bild ohne EXIF-Daten speichern
    $newFilePath = '../uploads/' . basename($file['name']);
    switch ($imageType) {
    case IMAGETYPE_JPEG:
    imagejpeg($image, $newFilePath);
    break;
    case IMAGETYPE_PNG:
    imagepng($image, $newFilePath);
    break;
    case IMAGETYPE_GIF:
    imagegif($image, $newFilePath);
    break;
    }
    
    // Speicher freigeben
    imagedestroy($image);
    
    return true;
    } else {
    return false;
    }
    }
    
   
    function gps($coordinate, $hemisphere) {
         
        if (is_string($coordinate)) {
        
          $coordinate = array_map("trim", explode(",", $coordinate));
                
        }
        
        for ($i = 0; $i < 3; $i++) {
          $part = explode('/', $coordinate[$i]);
          if (count($part) == 1) {
            $coordinate[$i] = $part[0];
          } else if (count($part) == 2) {
            $coordinate[$i] = floatval($part[0])/floatval($part[1]);
          } else {
            $coordinate[$i] = 0;
          }
        }
        list($degrees, $minutes, $seconds) = $coordinate;
        $sign = ($hemisphere == 'W' || $hemisphere == 'S') ? -1 : 1;
        return $sign * ($degrees + $minutes/60 + $seconds/3600);
      }


      function triphoto_getGPS($fileName, $assoc = false)
      {
          //get the EXIF
          echo $fileName;
          $exif = exif_read_data($fileName);
     //print_r($exif);
          //get the Hemisphere multiplier
          $LatM = 1; $LongM = 1;

	if (!isset($exif["GPSLatitudeRef"])) {
		return false;
	}          
          
          if($exif["GPSLatitudeRef"] == 'S')
          {
          $LatM = -1;
          }
          if($exif["GPSLongitudeRef"] == 'W')
          {
          $LongM = -1;
          }
      
          
          //get the GPS data



          $gps['LatDegree']=$exif["GPSLatitude"][0];
          $gps['LatMinute']=$exif["GPSLatitude"][1];
          $gps['LatgSeconds']=$exif["GPSLatitude"][2];
          $gps['LongDegree']=$exif["GPSLongitude"][0];
          $gps['LongMinute']=$exif["GPSLongitude"][1];
          $gps['LongSeconds']=$exif["GPSLongitude"][2];
      
          //convert strings to numbers
          foreach($gps as $key => $value)
          {
          $pos = strpos($value, '/');
          if($pos !== false)
          {
              $temp = explode('/',$value);
            
              if ($temp[1]>0){
              $gps[$key] = $temp[0] / $temp[1];
              }else {
                $gps[$key] =0;
              }
          }
          }
      
          //calculate the decimal degree
          $result['latitude'] = $LatM * ($gps['LatDegree'] + ($gps['LatMinute'] / 60) + ($gps['LatgSeconds'] / 3600));
          $result['longitude'] = $LongM * ($gps['LongDegree'] + ($gps['LongMinute'] / 60) + ($gps['LongSeconds'] / 3600));
      
          if($assoc)
          {
          return $result;
          }
      
          return json_encode($result);
      }



      //$target_dir ="../uploads/";
      
      //echo basename($_FILES["uploadedimage"]["name"]);
      //$target_file = $target_dir . basename($_FILES["uploadedimage"]["name"]);
      
      //$uploadOk = 1;
      //$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      // Check if image file is a actual image or fake image
      
        //$check = getimagesize($_FILES["uploadedimage"]["tmp_name"]);
        //if($check !== false) {
          //echo "File is an image - " . $check["mime"] . ".";
        //  $uploadOk = 1;
        //} else {
          //echo "File is not an image.";
        //  $uploadOk = 0;
        //}
        //print_r ($_FILES);
        
        $json=triphoto_getGPS($_FILES["uploadedimage"]["tmp_name"]);
        
	if ($json === false)  {
		$lat = 0;
		$lon = 0;
	} else {
	        $koordinaten = json_decode($json);
        
        	$lat=$koordinaten->latitude;
	        $lon=$koordinaten->longitude;
	}

        //TODO: GPSdaten aus uploadedimage entfernen und zu blob konvertieren
        

         echo'<br>';     
        
        
//echo $target_file;
          //Bild speichern
          //if (move_uploaded_file($_FILES["uploadedimage"]["tmp_name"], $target_file)) {
            if (removeExifData($_FILES["uploadedimage"])){

               $conn->query("INSERT INTO image (eventid,filename,userid,lat,lon) VALUES ('".$_SESSION['eventid']."', '".$_FILES["uploadedimage"]["name"]."', '".$_SESSION['userid']."', '".$lat."', '".$lon."')");
          } else {
            echo'Fehler';
          }

//und kontext merken in session dann weiter zum Bild editieren

$_SESSION['imageid'] = $conn->insert_id;
$_SESSION['lat'] = $lat;
$_SESSION['lon'] = $lon;
//check if coordinates are present
if ($lat>0) {
  echo "<script>window.location.href='editimage.php';</script>";  
  //header("location: editimage.php");
  exit(1);
   
        }else{
          //Wenn keine Koordinaten, dann locationpicker
        echo "<script>window.location.href='map.php';</script>";    
        //header("location: map.php");
        exit(1);
        }
        
       

    //$exif = exif_read_data($_FILES["uploadedimage"]["tmp_name"]);
    //print_r($exif);
    
    //$latitude = gps($exif["GPSLatitude"], $exif['GPSLatitudeRef']);
    //$longitude = gps($exif["GPSLongitude"], $exif['GPSLongitudeRef']);
   
?>
