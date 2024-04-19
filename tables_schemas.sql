-- These are the tables that are being used by the application.
-- You can run this file to create them then add dummy data to the database, to test.
CREATE TABLE Roles (
    RoleID INT AUTO_INCREMENT PRIMARY KEY,
    RoleName VARCHAR(100) NOT NULL,
    Description VARCHAR(255)
);
CREATE TABLE Committees (
    CommitteeID INT AUTO_INCREMENT PRIMARY KEY,
    CommitteeName VARCHAR(100) NOT NULL,
    Description VARCHAR(255)
);
CREATE TABLE Users (
    UserID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL UNIQUE,
    Password VARCHAR(255) NOT NULL,  -- An algorithm will be used to hash passwords.
    Contact VARCHAR(15),  -- Phone number; adjust length as needed
    RoleID INT,           -- Foreign key to the Roles table
    FOREIGN KEY (RoleID) REFERENCES Roles(RoleID)
);
CREATE TABLE CommitteeMembers (
    CommitteeMemberID INT AUTO_INCREMENT PRIMARY KEY,
    UserID INT NOT NULL,
    CommitteeID INT NOT NULL,
    RoleID INT NOT NULL,
    FOREIGN KEY (UserID) REFERENCES Users(UserID),
    FOREIGN KEY (CommitteeID) REFERENCES Committees(CommitteeID),
    FOREIGN KEY (RoleID) REFERENCES Roles(RoleID)
);
CREATE TABLE Ministries (
    MinistryID INT AUTO_INCREMENT PRIMARY KEY,
    MinistryName VARCHAR(100) NOT NULL,
    Description VARCHAR(255)
);
CREATE TABLE EvangelisticTeams (
    EveTeamID INT AUTO_INCREMENT PRIMARY KEY,
    EveTeamName VARCHAR(100) NOT NULL,
    Description VARCHAR(255)
);
CREATE TABLE EveTeamMembers (
    EveTeamMemberID INT AUTO_INCREMENT PRIMARY KEY,
    TeamID INT NOT NULL,
    UserID INT NOT NULL,
    FOREIGN KEY (TeamID) REFERENCES EvangelisticTeams(EveTeamID),
    FOREIGN KEY (UserID) REFERENCES Users(UserID)
);
CREATE TABLE Contacts (
    ContactID INT AUTO_INCREMENT PRIMARY KEY,
    ContactType VARCHAR(50) NOT NULL,
    ContactDetail VARCHAR(255) NOT NULL
);
CREATE TABLE AboutUs (
    InfoID INT AUTO_INCREMENT PRIMARY KEY,
    Category VARCHAR(100) NOT NULL,
    Content TEXT NOT NULL
);
CREATE TABLE Affiliations (
    AffiliationID INT AUTO_INCREMENT PRIMARY KEY,
    AffiliationName VARCHAR(100) NOT NULL,
    AffiliationDescription TEXT
);
CREATE TABLE MinistryMembers (
    MinistryMemberID INT AUTO_INCREMENT PRIMARY KEY,
    MinistryID INT NOT NULL,
    UserID INT NOT NULL,
    FOREIGN KEY (MinistryID) REFERENCES Ministries(MinistryID),
    FOREIGN KEY (UserID) REFERENCES Users(UserID)
);
CREATE TABLE ActivityTypes (
    ActivityTypeID INT AUTO_INCREMENT PRIMARY KEY,
    TypeName VARCHAR(100) NOT NULL,
    TypeDescription VARCHAR(255)
);
CREATE TABLE Activities (
    ActivityID INT AUTO_INCREMENT PRIMARY KEY,
    ActivityName VARCHAR(255) NOT NULL,
    ActivityDescription TEXT,
    ActivityDate DATE NOT NULL,
    ActivityTypeID INT NOT NULL,
    FOREIGN KEY (ActivityTypeID) REFERENCES ActivityTypes(ActivityTypeID)
);
CREATE TABLE ActivitiesRegistrations (
    RegistrationID INT AUTO_INCREMENT PRIMARY KEY,
    UserID INT NOT NULL,
    ActivityID INT NOT NULL,
    RegistrationDate DATE NOT NULL,
    FOREIGN KEY (UserID) REFERENCES Users(UserID),
    FOREIGN KEY (ActivityID) REFERENCES Activities(ActivityID)
);
CREATE TABLE ActivityAttendances (
    AttendanceID INT AUTO_INCREMENT PRIMARY KEY,
    ActivityID INT NOT NULL,
    UserID INT NOT NULL,
    AttendanceDate DATE NOT NULL,
    FOREIGN KEY (ActivityID) REFERENCES Activities(ActivityID),
    FOREIGN KEY (UserID) REFERENCES Users(UserID)
);

