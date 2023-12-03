CREATE TABLE user_logs (
    log_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    action VARCHAR(255) NOT NULL,
    action_type ENUM('Login', 'Logout') NOT NULL,
    ip_address VARCHAR(45) NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE blood_donor_users (
    donor_id INT AUTO_INCREMENT UNIQUE,
    username VARCHAR(150) NOT NULL,
    full_name VARCHAR(100) NOT NULL,
    gender ENUM('Male', 'Female') NOT NULL,
    blood_type VARCHAR(5) NOT NULL,
    address TEXT,
    phone_number VARCHAR(15),
    birthdate DATE,
    email VARCHAR(150) PRIMARY KEY NOT NULL,
    password VARCHAR(255) NOT NULL,
    status ENUM('Active', 'Inactive') NOT NULL DEFAULT 'Active',
    register_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Sample 1
INSERT INTO blood_donor_users (username, full_name, gender, blood_type, address, phone_number, birthdate, email, password, status)
VALUES ('user1', 'John Doe', 'Male', 'A+', 'Address 1', '1234567890', '1990-01-01', 'user1@example.com', 'password1', 'Active');

-- Sample 2
INSERT INTO blood_donor_users (username, full_name, gender, blood_type, address, phone_number, birthdate, email, password, status)
VALUES ('user2', 'Jane Doe', 'Female', 'B-', 'Address 2', '9876543210', '1985-03-15', 'user2@example.com', 'password2', 'Active');

-- Sample 3
INSERT INTO blood_donor_users (username, full_name, gender, blood_type, address, phone_number, birthdate, email, password, status)
VALUES ('user3', 'Bob Smith', 'Male', 'O+', 'Address 3', '5551112233', '1995-07-20', 'user3@example.com', 'password3', 'Active');

-- Sample 4
INSERT INTO blood_donor_users (username, full_name, gender, blood_type, address, phone_number, birthdate, email, password, status)
VALUES ('user4', 'Alice Johnson', 'Female', 'AB+', 'Address 4', '9998887777', '1982-11-30', 'user4@example.com', 'password4', 'Active');

-- Sample 5
INSERT INTO blood_donor_users (username, full_name, gender, blood_type, address, phone_number, birthdate, email, password, status)
VALUES ('user5', 'Michael Brown', 'Male', 'B+', 'Address 5', '3332221111', '1998-05-10', 'user5@example.com', 'password5', 'Active');

-- Sample 6
INSERT INTO blood_donor_users (username, full_name, gender, blood_type, address, phone_number, birthdate, email, password, status)
VALUES ('user6', 'Sara Miller', 'Female', 'O-', 'Address 6', '7776665555', '1989-09-25', 'user6@example.com', 'password6', 'Active');

-- Sample 7
INSERT INTO blood_donor_users (username, full_name, gender, blood_type, address, phone_number, birthdate, email, password, status)
VALUES ('user7', 'Tom Wilson', 'Male', 'A-', 'Address 7', '1112223333', '1993-02-18', 'user7@example.com', 'password7', 'Active');

-- Sample 8
INSERT INTO blood_donor_users (username, full_name, gender, blood_type, address, phone_number, birthdate, email, password, status)
VALUES ('user8', 'Emily Davis', 'Female', 'AB-', 'Address 8', '4445556666', '1987-08-05', 'user8@example.com', 'password8', 'Active');

-- Sample 9
INSERT INTO blood_donor_users (username, full_name, gender, blood_type, address, phone_number, birthdate, email, password, status)
VALUES ('user9', 'Daniel White', 'Male', 'B+', 'Address 9', '8889990000', '1996-04-12', 'user9@example.com', 'password9', 'Active');

-- Sample 10
INSERT INTO blood_donor_users (username, full_name, gender, blood_type, address, phone_number, birthdate, email, password, status)
VALUES ('user10', 'Olivia Taylor', 'Female', 'A+', 'Address 10', '2223334444', '1984-12-08', 'user10@example.com', 'password10', 'Active');

-- Sample 11 to 20...


-- Sample 11
INSERT INTO blood_donor_users (username, full_name, gender, blood_type, address, phone_number, birthdate, email, password, status)
VALUES ('user11', 'Chris Evans', 'Male', 'O+', 'Address 11', '5554443333', '1997-06-28', 'user11@example.com', 'password11', 'Active');

-- Sample 12
INSERT INTO blood_donor_users (username, full_name, gender, blood_type, address, phone_number, birthdate, email, password, status)
VALUES ('user12', 'Mia Johnson', 'Female', 'B+', 'Address 12', '1112223333', '1986-10-15', 'user12@example.com', 'password12', 'Active');

-- Sample 13
INSERT INTO blood_donor_users (username, full_name, gender, blood_type, address, phone_number, birthdate, email, password, status)
VALUES ('user13', 'Alex Turner', 'Male', 'A-', 'Address 13', '9998887777', '1994-03-20', 'user13@example.com', 'password13', 'Active');

-- Sample 14
INSERT INTO blood_donor_users (username, full_name, gender, blood_type, address, phone_number, birthdate, email, password, status)
VALUES ('user14', 'Emma Stone', 'Female', 'AB+', 'Address 14', '7776665555', '1983-07-30', 'user14@example.com', 'password14', 'Active');

-- Sample 15
INSERT INTO blood_donor_users (username, full_name, gender, blood_type, address, phone_number, birthdate, email, password, status)
VALUES ('user15', 'Matthew Harris', 'Male', 'B-', 'Address 15', '3332221111', '1999-01-10', 'user15@example.com', 'password15', 'Active');

-- Sample 16
INSERT INTO blood_donor_users (username, full_name, gender, blood_type, address, phone_number, birthdate, email, password, status)
VALUES ('user16', 'Sophia Walker', 'Female', 'O-', 'Address 16', '8889990000', '1988-05-25', 'user16@example.com', 'password16', 'Active');

-- Sample 17
INSERT INTO blood_donor_users (username, full_name, gender, blood_type, address, phone_number, birthdate, email, password, status)
VALUES ('user17', 'Ryan Martinez', 'Male', 'A+', 'Address 17', '2223334444', '1992-02-18', 'user17@example.com', 'password17', 'Active');

-- Sample 18
INSERT INTO blood_donor_users (username, full_name, gender, blood_type, address, phone_number, birthdate, email, password, status)
VALUES ('user18', 'Isabella Turner', 'Female', 'AB-', 'Address 18', '4445556666', '1989-08-05', 'user18@example.com', 'password18', 'Active');

-- Sample 19
INSERT INTO blood_donor_users (username, full_name, gender, blood_type, address, phone_number, birthdate, email, password, status)
VALUES ('user19', 'Nathan Adams', 'Male', 'B+', 'Address 19', '9998887777', '1995-04-12', 'user19@example.com', 'password19', 'Active');

-- Sample 20
INSERT INTO blood_donor_users (username, full_name, gender, blood_type, address, phone_number, birthdate, email, password, status)
VALUES ('user20', 'Lily Wilson', 'Female', 'A+', 'Address 20', '5554443333', '1987-12-08', 'user20@example.com', 'password20', 'Active');


ALTER TABLE blood_donor_users
DROP COLUMN birthdate;

ALTER TABLE blood_donor_users
ADD COLUMN birthdate DATE AFTER phone_number;


-- Table for hospital information
CREATE TABLE hospitals (
    hospital_id INT AUTO_INCREMENT PRIMARY KEY,
    hospital_name VARCHAR(100) NOT NULL,
    hospital_address TEXT,
    contact_number VARCHAR(15),
    email VARCHAR(150) NOT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Sample Hospital
INSERT INTO hospitals (hospital_name, hospital_address, contact_number, email)
VALUES ('Sample Hospital', 'Hospital Address', '1234567890', 'hospital@example.com');

-- Table for staff members
CREATE TABLE staff_members (
    staff_id INT AUTO_INCREMENT UNIQUE,
    username VARCHAR(150) NOT NULL,
    full_name VARCHAR(150) NOT NULL,
    gender ENUM('Male', 'Female') NOT NULL,
    job_title VARCHAR(150) NOT NULL,
    department VARCHAR(150),
    address TEXT,
    phone_number VARCHAR(15),
    email VARCHAR(150) PRIMARY KEY NOT NULL,
    password VARCHAR(255) NOT NULL,
    status ENUM('Active', 'Inactive') NOT NULL DEFAULT 'Active',
    register_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    hospital_id INT,
    FOREIGN KEY (hospital_id) REFERENCES hospitals(hospital_id) ON DELETE SET NULL
);

-- Sample Staff Member
INSERT INTO staff_members (username, full_name, gender, job_title, department, address, phone_number, email, password, status, hospital_id)
VALUES ('staff_user', 'John Doe', 'Male', 'Nurse', 'Medical', 'Staff Address', '1112223333', 'staff@example.com', 'staff_password', 'Active', 1);


-- Table for blood donation requests
CREATE TABLE blood_requests (
    request_id INT AUTO_INCREMENT PRIMARY KEY,
    requester_name VARCHAR(100) NOT NULL,
    requester_contact VARCHAR(15),
    blood_type ENUM('A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-') NOT NULL,
    units_requested INT NOT NULL,
    request_status ENUM('Pending', 'Approved', 'Rejected') NOT NULL DEFAULT 'Pending',
    request_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    staff_email VARCHAR(150),
    donor_email VARCHAR(150),
    FOREIGN KEY (staff_email) REFERENCES staff_members(email) ON DELETE SET NULL,
    FOREIGN KEY (donor_email) REFERENCES blood_donor_users(email) ON DELETE SET NULL
);

-- Sample Blood Request
INSERT INTO blood_requests (requester_name, requester_contact, blood_type, units_requested, request_status, staff_email, donor_email)
VALUES ('Requester Name', '9876543210', 'A+', 5, 'Pending', 'staff@example.com', 'user1@example.com');
