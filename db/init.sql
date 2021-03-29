CREATE DATABASE donor_form;

use donor_form;

CREATE TABLE donors (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    lastname TEXT(30) NOT NULL,
    firstname TEXT(30) NOT NULL,
    streetaddress TEXT(30) NOT NULL,
    city TEXT(30) NOT NULL,
    stateregion TEXT(30) NOT NULL,
    country TEXT(50) NOT NULL,
    postalcode INT(10) NOT NULL,
    phonenumber VARCHAR(15) NOT NULL,
    email VARCHAR(320) NOT NULL, 
    preferredcontact TEXT(10) NOT NULL,
    donationfrequency TEXT(20) NOT NULL,
    donationsum VARCHAR(9) NOT NULL,
    donationcurrency TEXT(4) NOT NULL,
    comments TEXT(255)
)