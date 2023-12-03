<?php

namespace App\classes;
use Exception;
use PDOException;
use App\classes\DBManager;

class HospitalOfficer
{
    protected string $staff_id;
    protected string $username;
    protected string $full_name;
    protected string $gender;
    protected string $job_title;
    protected string $address;
    protected string $phone_number;
    protected string $department;
    protected string $email;
    protected string $password;
    protected string $register_date;
    protected string $status;
    protected string $hospital_id;
    protected ?DBManager $db = null;

    // constructor for the class which is inherited by other classes,
    public function __construct()
    {
        $db = new DBManager();
        if (!isset($db->con)) {
            throw new \InvalidArgumentException("DBManager instance must have a valid connection");
        }
        $this->db = $db;
    }

    // Getter and Setter for staff_id
    public function getStaffId(): string
    {
        return $this->staff_id;
    }

    public function setStaffId(string $staffId): void
    {
        $this->staff_id = $staffId;
    }

    // Getter and Setter for username
    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    // Getter and Setter for full_name
    public function getFullName(): string
    {
        return $this->full_name;
    }

    public function setFullName(string $fullName): void
    {
        $this->full_name = $fullName;
    }

    // Getter and Setter for gender
    public function getGender(): string
    {
        return $this->gender;
    }

    public function setGender(string $gender): void
    {
        $this->gender = $gender;
    }

    // Getter and Setter for job_title
    public function getJobTitle(): string
    {
        return $this->job_title;
    }

    public function setJobTitle(string $jobTitle): void
    {
        $this->job_title = $jobTitle;
    }

    // Getter and Setter for address
    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    // Getter and Setter for phone_number
    public function getPhoneNumber(): string
    {
        return $this->phone_number;
    }

    public function setPhoneNumber(string $phoneNumber): void
    {
        $this->phone_number = $phoneNumber;
    }

    // Getter and Setter for department
    public function getDepartment(): string
    {
        return $this->department;
    }

    public function setDepartment(string $department): void
    {
        $this->department = $department;
    }

    // Getter and Setter for email
    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    // Getter and Setter for password
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    // Getter and Setter for register_date
    public function getRegisterDate(): string
    {
        return $this->register_date;
    }

    public function setRegisterDate(string $registerDate): void
    {
        $this->register_date = $registerDate;
    }

    // Getter and Setter for status
    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    // Getter and Setter for hospital_id
    public function getHospitalId(): string
    {
        return $this->hospital_id;
    }

    public function setHospitalId(string $hospitalId): void
    {
        $this->hospital_id = $hospitalId;
    }

     // method to clean any harmful entry such harmful code etc.
     public function sanitizeString($variable): array|bool|string
     {
         $variable = strip_tags($variable);
         $variable = htmlentities($variable);
         $variable = stripslashes($variable);
         $result = "'".$variable."'"; // This adds single quotes
         return str_replace("'", "", $result); // So now remove them
     }
 
    //insert into product reviews table
    public function getOfficerDetails($email = null,$table = "staff_members"): bool
    {
        $success = false;
        $user = null;
        if ($this->db->con != null){
            if ($email != null){
                try{
                    $stmt = $this->db->con->prepare("SELECT * FROM $table WHERE email=?");
                    $stmt->bind_param('s',$email);
                    $stmt->execute();
                    $results = $stmt->get_result();
                    $user = $results->fetch_assoc();
                
                if ($user != null){
                // Assign values to class properties
                $this->staff_id = $user['staff_id'];
                $this->username = $user['username'];
                $this->full_name = $user['full_name'];
                $this->email = $user['email'];
                $this->gender = $user['gender'];
                $this->department = $user['department'];
                $this->address = $user['address'];
                $this->phone_number = $user['phone_number'];
                $this->email = $user['email'];
                $this->status = $user['status'];
                $this->register_date = $user['register_date'];
                $this->hospital_id = $user['hospital_id'];
                $this->job_title = $user['job_title'];
                $success = true;
                }
                }
                catch(PDOException $e){
                    echo "There is some problem in connection: " . $e->getMessage();
                }
            }
        }
        return $success;
    }

    public function verifyOfficer($login,$email,$password,$table = "staff_members"): bool
    {
        $success = false;
        // sanitize to void malicious script to be processed in the database.
        $email = $this->sanitizeString($email);
        if ($this->db->con != null)
        {
            if (isset($login)) {
                try {
                    $stmt = $this->db->con->prepare("SELECT *,COUNT(*) AS numrows FROM $table WHERE email = ?");
                    $stmt->bind_param('s', $email); // Bind the parameter
                    $stmt->execute();

                    // Fetch the result as an associative array
                    $result = $stmt->get_result();
                    $row = $result->fetch_assoc();
                    if ($row['numrows'] > 0) {
                        if ($row['status']) {
                            if (password_verify($password, $row['password'])) {
                                    $_SESSION['user'] = $row['staff_id'];
                                    $_SESSION['username'] = $row['username'];
                                    $_SESSION['userEmail'] = $row['email'];
                                    $_SESSION['log'] = $row['email'];
                                $success = true;
                            } else {
                                $_SESSION['error'] = 'Incorrect Password';
                            }
                        } else {
                            $_SESSION['error'] = 'Account not active.'.$row['numrows'];
                        }
                    } else {
                        $_SESSION['error'] = 'Email not found';
                    }
                } catch (Exception $e) {
                    echo "There is some problem in connection: " . $e->getMessage();
                }

            } else {
                $_SESSION['error'] = 'Input login credentials first';
            }
        }
            return $success;

    }

    public function registerStaff($register,$name,$username,$email,$password,$confirmPassword,$address,$blood_type,$birthdate,$phone_number,$table = "staff_members"): bool
    {
        $message = false;
        if (isset($register)) {

            if ($password != $confirmPassword) {
                $_SESSION['error'] = 'Passwords did not match';
                header('location: ../register.php');
            } else {
                $stmt = $this->db->con->prepare("SELECT COUNT(*) AS numrows FROM $table WHERE email=?");
                $stmt->bind_param('s',$email);
                $stmt->execute();
            

                // Fetch the result as an associative array
                $result = $stmt->get_result();
                $row = $result->fetch_assoc();
                if ($row['numrows'] > 0) {
                    $_SESSION['error'] = 'Email already taken';
                    header('location: ../register.php');
                } else {
                    $now = date('Y-m-d');
                    $password = password_hash($password, PASSWORD_DEFAULT);
                    $code = 'active';

                        $stmt = $this->db->con->prepare("INSERT INTO $table (email, password, full_name, username, status, register_date,birthdate,phone_number,address,blood_type,gender) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
                        $stmt->bind_param('sssssssssss', $email, $password, $name, $username, $code, $now,$birthdate,$phone_number,$address,$blood_type,$gender);
                        if ($stmt->execute()) {
                            $message = true;
                            $_SESSION['error'] = "Registered Successfully!";
                            header('location: ../register.php');
                        }else{
                            $_SESSION['error'] = "Failed to Register! Please try again.";
                            header('location: ../register.php');
                        }
                }

            }

        } else {
            $_SESSION['error'] = 'Fill up signup form first';
            header('location: ../register.php');
        }
        return $message;
    }


   public function viewDonors($table = 'blood_donor_users'): array
    {
        //fetch product data using getData method
        $result = $this->db->con->prepare("SELECT * FROM $table");
        $result->execute();
        $stmt = $result->get_result();

        $resultArray = array();

        //fetch product data one by one
        while ($item = $stmt->fetch_assoc()){
            $resultArray[] = $item;
        }
        return $resultArray;
    }

}

