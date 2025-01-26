<?php
session_start();
    
    //load event
    $eventresult = $conn->query("SELECT * FROM event WHERE curdate() between submitfrom and endtimestamp");
    $event = $eventresult->fetch_assoc();
       
    $_SESSION['eventid'] = $event['id']; 
    $_SESSION['starttimestamp'] = $event['starttimestamp'];
    $_SESSION['endtimestamp'] = $event['endtimestamp'];
    $_SESSION['interval'] = $event['publishinterval'];
    $_SESSION['imagesperinterval'] = $event['imagesperinterval'];
    $_SESSION['submitfrom'] = $event['submitfrom'];
    $_SESSION['submituntil'] = $event['submituntil'];
    $_SESSION['startnight'] = $event['startnightsrest'];
    $_SESSION['endnight'] = $event['endnightsrest'];
       
    