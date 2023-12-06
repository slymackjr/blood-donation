<?php 

class donationRequestHandler
{
    private $requestID;
    private $donor;
    private $time;
    private $location;
    private $status;

    private $conn;

    public function __construct($requestID, $donor, $time, $location, $status, $conn){
        $this->requestID = $requestID;
        $this->donor = $donor;
        $this->time = $time;
        $this->location = $location;
        $this->status = $status;

        $this->conn = new PDO("mysql:host=localhost;dbname=your_database_name", "your_username", "your_password");
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getRequestID()
    {
        return $this->requestID;
    }

    public function getDonor()
    {
        return $this->donor;
    }

    public function getTime()
    {
        return $this->time;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function updateStatus($newStatus)
    {
        $this->status = $newStatus;

        
        $stmt = $this->conn->prepare("UPDATE donation_requests SET status = :status WHERE request_id = :request_id");
        $stmt->bindParam(':status', $newStatus);
        $stmt->bindParam(':request_id', $this->requestID);
        $stmt->execute();
    }

    public function saveToDatabase()
    {

        $stmt = $this->conn->prepare("INSERT INTO donation_requests (request_id, donor_id, time, location, status) 
                                   VALUES (:request_id, :donor_id, :time, :location, :status)");
        $stmt->bindParam(':request_id', $this->requestID);
        $stmt->bindParam(':donor_id', $this->donor->getDonorID()); 
        $stmt->bindParam(':time', $this->time);
        $stmt->bindParam(':location', $this->location);
        $stmt->bindParam(':status', $this->status);
        $stmt->execute();
    }

    }



?>