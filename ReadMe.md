//create database: gis-project

//create Register table -------------------------------------------------------
	   "CREATE TABLE `gisreg` (
        `Id` INT(10) NOT NULL AUTO_INCREMENT,
	   `First_Name` VARCHAR(100) NOT NULL,
	   `Last_Name` VARCHAR(100) NOT NULL,
	   `Email` VARCHAR(100) NOT NULL,
       `Passwordd` VARCHAR(100) NOT NULL,
	  PRIMARY KEY (`Id`))";

//create location table -------------------------------------------------------
	 "CREATE TABLE `location_tab` (
	  `locationLatitude` VARCHAR(50) NOT NULL,
	  `locationLongitude` VARCHAR(50) NOT NULL,
	  `Id` INT(10) NOT NULL AUTO_INCREMENT,
	  PRIMARY KEY (`Id`))";

	  //search on google map, the latitude and longitude of any location to be added, you can enter from frontend or 'insert' option in database