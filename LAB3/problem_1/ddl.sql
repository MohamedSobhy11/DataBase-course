CREATE DATABASE problem_1;

-------------------------------------------------------------------------------------
CREATE TABLE department (
  Dnumber int(11) NOT NULL,
  Dname varchar(225) NOT NULL,
  mgr_ssn int(11) NOT NULL,
  mgr_start_date varchar(225) NOT NULL,
  PRIMARY KEY (Dnumber)  
);

CREATE TABLE employee (
  ssn int(11) NOT NULL,
  fname varchar(225) NOT NULL,
  lname varchar(225) NOT NULL,
  bdate varchar(225),
  address varchar(255),
  gender varchar(255) NOT NULL,
  salary varchar(255) NOT NULL,
  Dno int(11) NOT NULL,
   PRIMARY KEY (ssn)  
   
);


CREATE TABLE project (
  Pnumber int(11) NOT NULL,
  Pname varchar(225) NOT NULL,
  Plocation varchar(225) NOT NULL,
  Dno int(11) NOT NULL,
  PRIMARY KEY (Pnumber) 

);

ALTER TABLE department ADD FOREIGN KEY (mgr_ssn) REFERENCES employee(ssn);
ALTER TABLE employee ADD FOREIGN KEY (Dno) REFERENCES department (Dnumber);
ALTER TABLE project ADD FOREIGN KEY (Dno) REFERENCES department(Dnumber);



