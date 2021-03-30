CREATE DATABASE AYUKARMA;

Use AYUKARMA;

CREATE TABLE ADMINS(
    AdminID varchar(8) CHECK (AdminID LIKE 'AID_____'), 
    FName varchar(20) NOT NULL ,	
    MName varchar(20) NULL,
    LName varchar(20) NOT NULL ,
    NICNo varchar(10) NOT NULL CHECK (NICNo LIKE '_________v'), 
	Dob date NOT NULL,
    AADLine1 varchar(30) NOT NULL ,
	AADLine2 varchar(30) NOT NULL ,
	AADLine3 varchar(20) DEFAULT('_'),
	Password varchar (100) NOT NULL,
	Position varchar(10) NOT NULL,
    PRIMARY KEY(AdminID)
);

create table admindateils(
	ADminID varchar(8) NOT NULL,
	NICNo varchar(10) NOT NULL,
	Password varchar (100) NOT NULL,
	Position varchar(10) NOT NULL,
	Temp int  DEFAULT(1)
);


CREATE TABLE USERS(
	UserID int identity  (1,1) NOT NULL,
   NICNo varchar(10) NOT NULL UNIQUE CHECK (NICNo LIKE '_________v'),
   FName varchar(20)NOT NULL ,
   MName varchar(20) NULL,
   LName varchar(20)NOT NULL ,
   UADLine1 varchar(30) NOT NULL ,                      
   UADLine2 varchar(30) NOT NULL ,						
   UADLine3 varchar(20) DEFAULT('_') ,
   Username varchar(20) NOT NULL ,
   Password nvarchar (500) NOT NULL ,
   Gender varchar(6) NOT NULL ,
   Telephone bigint NOT NULL CHECK (Telephone between 100000000 and 999999999),
   Email VARCHAR (30) NOT NULL, 
   Position int NOT NULL DEFAULT('0'),
   PRIMARY KEY(UserID)
);

CREATE TABLE Cart(
	CartID int identity (1,1) NOT NULL,
	ProductName varchar (100) NOT NULL,
	UserID int FOREIGN KEY REFERENCES USERS(UserID),
	Price float NOT NULL,
	Date date NOT NULL,
	Quantity int NOT NULL,
	PRIMARY KEY(CartID)
);

CREATE TABLE SpecialOrders(	
	SOrderID int Identity(1,1) NOT NULL ,
	ProductName varchar (100) NOT NULL,
	UserID int FOREIGN KEY REFERENCES USERS (UserID),
	Date date NOT NULL,
	Quantity int NOT NULL,
	DeadLine date NOT NULL,
	PRIMARY KEY(SOrderID)
);

CREATE TABLE Orders(
	OrderID int Identity(1,1) NOT NULL ,
	ProductName varchar (100) NOT NULL,
	UserID int FOREIGN KEY REFERENCES USERS (UserID),
	Unit price float NOT NULL,
	Totalprice float NOT NULL,
	Date date NOT NULL,
	Quantity int NOT NULL,
	PRIMARY KEY(OrderID)
);


CREATE TABLE KnowledgePanel(
	ID int Identity (1,1) NOT NULL,
	ScientificName nvarchar (50) NOT NULL,
	FamilyName nvarchar (50) NOT NULL,
	EnglishName nvarchar (50) NOT NULL,
	LocalName nvarchar (50) NOT NULL,
	SanskirtName nvarchar (50) NOT NULL,
	Description nvarchar (500),
	Status varchar (50),
	PartsforTreatment nvarchar (50)
	EdibleParts nvarchar (50),
	TreatmentFor nvarchar (50),
	ImageName varchar(100),
	TAGS varchar (500),
	PRIMARY KEY(ID)
);

CREATE TABLE Products(
	ID int Identity (1,1) NOT NULL,
	NAME varchar (50) NOT NULL,
	Description nvarchar (500),
	Price float (4),
	ImageName varchar(100),
	Category1 varchar (50),
	Category2 varchar (50),
	TAGS varchar (500),
	PRIMARY KEY(PID)
);

CREATE TABLE RawMaterials(
	ID int Identity (1,1) NOT NULL,
	NAME varchar (50) NOT NULL,
	Description varchar (500),
	Price float (4),
	ImageName varchar(100),
	Category1 varchar (50),
	Category2 varchar (50),
	TAGS varchar (500),
	PRIMARY KEY(RMID)
);


CREATE TABLE Selling(
	SellingID int Identity(1,1) NOT NULL ,
	UserID int FOREIGN KEY REFERENCES USERS (UserID),
	Item varchar(50) NOT NULL,
	Category varchar(50) NOT NULL,
	Price float NOT NULL,
	Quantity varchar(20) not null ,
	Unit varchar(10) not null,
	Address varchar (100) NOT NULL,
	Telephone bigint NOT NULL CHECK (Telephone between 100000000 and 999999999),
	ImageName1 varchar(100),
	ImageName2 varchar(100),
	ImageName3 varchar(100),
	ImageName4 varchar(100),
	ImageName5 varchar(100),
	PRIMARY KEY(SellingID)
);


CREATE TABLE PastSelling(
	SellingID int Identity(1,1) NOT NULL ,
	UserID int FOREIGN KEY REFERENCES USERS (UserID),
	Item varchar(50) NOT NULL,
	Category varchar(50) NOT NULL,
	Price float NOT NULL,
	Quantity varchar(20) not null ,
	Unit varchar(10) not null,
	Address varchar (100) NOT NULL,
	Telephone bigint NOT NULL CHECK (Telephone between 100000000 and 999999999),
	ImageName1 varchar(100),
	ImageName2 varchar(100),
	ImageName3 varchar(100),
	ImageName4 varchar(100),
	ImageName5 varchar(100),
	PRIMARY KEY(SellingID)
);

CREATE TABLE UserActivitylog(
	LoginID int Identity(1,1) NOT NULL ,
	UserID int FOREIGN KEY REFERENCES USERS (UserID),
	LoginDate varchar(10) NOT NULL,
	LoginTime varchar(8) NOT NULL,
	LogoutTime varchar(8) DEFAULT NULL,
	PRIMARY KEY (LoginID),
);

CREATE TABLE AdminActivitylog(
	LoginID int Identity(1,1) NOT NULL ,
	AdminID varchar(8) FOREIGN KEY REFERENCES ADMINS (AdminID),
	LoginDate varchar(10) NOT NULL,
	LoginTime varchar(8) NOT NULL,
	LogoutTime varchar(8) DEFAULT NULL,
	PRIMARY KEY (LoginID),
);

CREATE TABLE SystemUsage(
	ID int identity(1,1) NOT NULL,
	Date date, 
	Weblogin int, 
	Webtransaction int, 
	Desktoplogin int,
	Desktoptransaction int,
	Webselling int,
	Desktopselling int,
	WebsBuying int,
	DesktopBuying int,
	WebSpecialorders int,
	DesktopSpecialorders int,
	PRIMARY KEY (ID)
);


CREATE TABLE Doctor(
	ID int IDENTITY (1,1),
	Docname varchar(30),
	Phone int,
	Email varchar(50),
	Descrip varchar(100),
	ImageName varchar(50),
	Lat decimal(10,8),
	Lng decimal(11,8),
	PRIMARY KEY (ID)
	);

CREATE TABLE Centre(
	ID int IDENTITY (1,1),
	Cenname varchar(30),
	Phone int,
	Email varchar(50),
	Descrip varchar(100),
	ImageName varchar(50),
	Lat decimal(10,8),
	Lng decimal(11,8),
	PRIMARY KEY (ID)
);

INSERT INTO Doctor(Docname, Phone, Email, Descrip, ImageName, Lat, Lng) 
VALUES
('D Tennakoon', 0451234567, 'tennakoon@mail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium non nisi in rutrum.', 'maledoc.jpg', 6.7056, 80.3847),
('Y Lokukankanamge', 0341234567, 'kankanamge@mail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium non nisi in rutrum.', 'maledoc.jpg', 6.5854, 79.9607),
('D Samaranayaka', 0371234567, 'samaranayaka@mail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium non nisi in rutrum.', 'femaledoc.jpg', 7.4818, 80.3609),
('R Arsakulasooriya', 0452234567, 'arsakulasooriya@mail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium non nisi in rutrum.', 'maledoc.jpg', 6.6111, 80.4237),
('A Yasuru', 0111234567, 'yasuru@mail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium non nisi in rutrum.', 'maledoc.jpg', 6.8517, 80.0327),
('R Abeykoon', 0251234567, 'abeykoon@mail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium non nisi in rutrum.', 'maledoc.jpg', 8.3114, 80.4037),
('S Welivita', 0112234567, 'welivita@mail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium non nisi in rutrum.', 'femaledoc.jpg', 6.8433, 80.0032),
('R Dilshan', 0521234567, 'dilshan@mail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium non nisi in rutrum.', 'maledoc.jpg', 6.9497, 80.7891),
('R Jayathilaka', 0453234567, 'jayathilaka@mail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium non nisi in rutrum.', 'maledoc.jpg', 6.8218, 80.3615);

INSERT INTO Centre(Cenname, Phone, Email, Descrip, ImageName, Lat, Lng) 
VALUES
('AAA centre', 0451234567, 'aaa@mail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium non nisi in rutrum.', 'centre1.jpg', 6.7056, 80.3847),
('BBB centre', 0341234567, 'bbb@mail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium non nisi in rutrum.', 'centre2.jpg', 6.5854, 79.9607),
('CCC centre', 0371234567, 'ccc@mail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium non nisi in rutrum.', 'centre1.jpg', 7.4818, 80.3609),
('DDD centre', 0452234567, 'ddd@mail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium non nisi in rutrum.', 'centre2.jpg', 6.6111, 80.4237),
('EEE centre', 0111234567, 'eee@mail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium non nisi in rutrum.', 'centre1.jpg', 6.8517, 80.0327);
 

