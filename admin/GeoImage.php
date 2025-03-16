<?php

class GeoImage {
    // Properties
    public $id;
    public $eventid;
    public $userid;
    public $lat;
    public $lon;
    public $description;
    public $submitted;
    public $accepted;
    public $acceptedby;
    public $accepttime;
    public $filename;
    public $solutiontext;
    public $deadline;
    public $ordernumber;

    // Methods
    function setId($id) {
        $this->id = $id;
    }
    function getId() {
        return $this->id;
    }

    function setEventId($eventid) {
        $this->eventid = $eventid;
    }
    function getEventId() {
        return $this->eventid;
    }

    function setUserId($userid) {
        $this->userid = $userid;
    }
    function getUserId() {
        return $this->userid;
    }

    function setLat($lat) {
        $this->lat = $lat;
    }
    function getLat() {
        return $this->lat;
    }

    function setLon($lon) {
        $this->lon = $lon;
    }
    function getLon() {
        return $this->lon;
    }

    function setDescription($description) {
        $this->description = $description;
    }
    function getDescription() {
        return $this->description;
    }

    function setSubmitted($submitted) {
        $this->submitted = $submitted;
    }
    function getSubmitted() {
        return $this->submitted;
    }

    function setAccepted($accepted) {
        $this->accepted = $accepted;
    }
    function getAccepted() {
        return $this->accepted;
    }

    function setAcceptedBy($acceptedby) {
        $this->acceptedby = $acceptedby;
    }
    function getAcceptedBy() {
        return $this->acceptedby;
    }

    function setAcceptTime($accepttime) {
        $this->accepttime = $accepttime;
    }
    function getAcceptTime() {
        return $this->accepttime;
    }

    function setFilename($filename) {
        $this->filename = $filename;
    }
    function getFilename() {
        return $this->filename;
    }

    function setSolutionText($solutiontext) {
        $this->solutiontext = $solutiontext;
    }
    function getSolutionText() {
        return $this->solutiontext;
    }

    function setDeadline($deadline) {
        $this->deadline = $deadline;
    }
    function getDeadline() {
        return $this->deadline;
    }

    function setOrderNumber($ordernumber) {
        $this->ordernumber = $ordernumber;
    }
    function getOrderNumber() {
        return $this->ordernumber;
    }
}

?>

