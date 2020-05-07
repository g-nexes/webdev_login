# webdev_login
A simple login page with HTML and PHP 


### Database Creation Codes

###### Creation of '**_student_**' database

```sql
CREATE DATABASE IF NOT EXISTS `student` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;

#select created 'student' database
USE `student`; 
```

###### Creation of '**_sign_**' table
```sql
DROP TABLE IF EXISTS `sign`;

CREATE TABLE IF NOT EXISTS `sign` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usrname` varchar(40) NOT NULL,
  `pword` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
);
```
###### Creation of '**_details_**' table
```sql
DROP TABLE IF EXISTS `details`;

CREATE TABLE IF NOT EXISTS `details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `usn` varchar(12) NOT NULL,
  `dob` date NOT NULL,
  `course` varchar(40) NOT NULL,
  `branch` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
);
```
