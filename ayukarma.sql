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
   Username varchar(20) UNIQUE NOT NULL ,
   Password nvarchar (500) NOT NULL ,
   Gender varchar(6) NOT NULL ,
   Telephone bigint NOT NULL CHECK (Telephone between 100000000 and 999999999),
   Email nvarchar (30) NOT NULL, 
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
	UserID int FOREIGN KEY REFERENCES USERS (UserID) ,
	ProductName varchar (100) NOT NULL,
	Unitprice float NOT NULL,
	Totalprice float NOT NULL,
	Date date NOT NULL,
	Quantity int NOT NULL,
	PRIMARY KEY(OrderID)
);

 
CREATE TABLE KnowledgePanel(
	ID int Identity (1,1) NOT NULL,
	ScientificName nvarchar (50),
	FamilyName nvarchar (50),
	EnglishName nvarchar (50),
	LocalName nvarchar (50),
	SanskirtName nvarchar (50),
	Description nvarchar (500),
	Status varchar (50),
	PartsforTreatment nvarchar (50),
	EdibleParts nvarchar (500),
	Treatment nvarchar (500),
	ImageName varchar(100),
	TAGS nvarchar (500),
	PRIMARY KEY(ID)
);

 
CREATE TABLE Products(
	ID int Identity (1,1) NOT NULL,
	NAME varchar (50) NOT NULL,
	Description nvarchar (500),
	Price float (4),
	ImageName varchar(100),
	Category varchar (50),
	TAGS varchar (500),
	PRIMARY KEY(ID)
);

 
CREATE TABLE RawMaterials(
	ID int Identity (1,1) NOT NULL,
	NAME varchar (50) NOT NULL,
	Description varchar (500),
	Price float (4),
	ImageName varchar(100),
	Category varchar (50),
	TAGS varchar (500),
	PRIMARY KEY(ID)
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

INSERT INTO KnowledgePanel(ScientificName,FamilyName,EnglishName,LocalName,SanskirtName,Description,Status,PartsforTreatment,EdibleParts,Treatment,ImageName,TAGS)
VALUES ('Brassica juncea', 'BRASSICACEAE', 'Mustard', 'Aba (අබ)', 'Sarshapa / Siddharta / Rajika', 'Perennial herb, usually grown as an annual or biennial, up to 1 m or more tall. Lower leaves petioled, green, variously lobed with toothed, scalloped or frilled edges, lyrate-pinnatisect, with 1–2 lobes or leaflets on each side and a larger sparsely setose, terminal lobe; upper leaves subentire, 30–60 mm long, 2–3.5 mm wide, constricted at intervals, sessile. Flowers bright yellow. Fruit a green, sickle shaped pod', 'Naturalized Exotic', 'Seed', 'Lung infections / Thyroid Diseases / Paediatrics Diseases ','Leaves / Seeds / Root', 'A01 brassica-junceaMain','Brassica juncea / Mustard  / Aba / Lung infections / Thyroid Diseases / Paediatrics Diseases / Seed ' );

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
 
 INSERT INTO KnowledgePanel(ScientificName,FamilyName,EnglishName,LocalName,SanskirtName,Description,Status,PartsforTreatment,EdibleParts,Treatment,ImageName,TAGS)
VALUES  ('Brassica juncea',   'BRASSICACEAE',   'Mustard',   'Aba (අබ)',   'Sarshapa / Siddharta / Rajika',   'Perennial herb, usually grown as an annual or biennial, up to 1 m or more tall. Lower leaves petioled, green, variously lobed with toothed, scalloped or frilled edges, lyrate-pinnatisect, with 1–2 lobes or leaflets on each side and a larger sparsely setose, terminal lobe; upper leaves subentire, 30–60 mm long, 2–3.5 mm wide, constricted at intervals, sessile. Flowers bright yellow. Fruit a green, sickle shaped pod',   'Naturalized Exotic',   'Seed',   'Lung infections / Thyroid Diseases / Paediatrics Diseases',   'Leaves / Seeds / Root',    'A01 brassica-junceaMain',   ' Brassica juncea / BRASSICACEAE / Mustard / Aba / Seed / Lung infections / Thyroid Diseases / Paediatrics Diseases / Leaves / Seeds / Root');


INSERT INTO ADMINS ( AdminID, FName,  MName,  LName,  NICNo, Dob, AADLine1, AADLine2,  AADLine3, Password, Position)
VALUES ('AID12346',	'rajitha',	'vishwajith',	'abeykoon',	'981311541v','1998-05-01','acb','abd','asd','1234','admin');


INSERT INTO admindateils (ADminID,  NICNo,  Password,  Position,  Temp)
VALUES ('AID12355',	'981311531v','1234'	,'admin','1');

INSERT INTO Products ( NAME, Description, Price, ImageName, Category, TAGS)
VALUES ('aaaaa','aaaaaa','1232','aaaaa','harbs','harbs');

INSERT INTO RawMaterials ( NAME, Description, Price, ImageName, Category, TAGS)
VALUES ( 'acaaa','aaaaaaa','1236','aaaaa','harbs','harbs');

INSERT INTO KnowledgePanel(ScientificName,FamilyName,EnglishName,LocalName,SanskirtName,Description,Status, EdibleParts ,Treatment, PartsforTreatment,ImageName,TAGS)
VALUES     ('Brassica juncea','BRASSICACEAE','Mustard','Aba','Sarshapa / Siddharta / Rajika','Perennial herb, usually grown as an annual or biennial, up to 1 m or more tall. Lower leaves petioled, green, variously lobed with toothed, scalloped or frilled edges, lyrate-pinnatisect, with 1–2 lobes or leaflets on each side and a larger sparsely setose, terminal lobe; upper leaves subentire, 30–60 mm long, 2–3.5 mm wide, constricted at intervals, sessile. Flowers bright yellow. Fruit a green, sickle shaped pod','Naturalized Exotic','Seed','Lung infections / Thyroid Diseases / Paediatrics Diseases','Leaves / Seeds / Root','A01 brassica-junceaMain','  Brassica juncea / BRASSICACEAE / Mustard / Aba / Seed / Lung infections / Thyroid Diseases / Paediatrics Diseases / Leaves / Seeds / Root');
select * from dbo.KnowledgePanel;
INSERT INTO KnowledgePanel(ScientificName,FamilyName,EnglishName,LocalName,SanskirtName,Description,Status, EdibleParts ,Treatment, PartsforTreatment,ImageName,TAGS)
VALUES    ('Bixa orellana','BIXACEAE','Lipstick Tree','Anaththa   / Rata kaha','Sinduraka','Shrub or small tree 2 – 6 (8) m high. Leaves 7 – 25 X  4 – 18 cm, broadly ovate, with acute, gradually long-acuminate apex and subcordate, sometimes truncate, base, scaly on both surface when young, later only on the lower surface, ultimately glabrescent, with numerous small red dots beneath. Flowers 10 – 50 in corymbose panicles., Developing fruit covered with soft, dark red prickles. Mature capsule 4 – 5.5 x 3 – 4 cm, ovoid or deltoid. Seeds obovoid, smooth, angular.','Only under cultivation','None','Jaundice / Nervous Diseases','Seeds / Root','A03 Bixa orellana',' BIXACEAE / BIXACEAE / Lipstick Tree / Anaththa   / Rata kaha / Jaundice / Nervous Diseases / Seeds / Root');
 
INSERT INTO KnowledgePanel(ScientificName,FamilyName,EnglishName,LocalName,SanskirtName,Description,Status, EdibleParts ,Treatment, PartsforTreatment,ImageName,TAGS)
VALUES     ('Spilanthes paniculata',	 'ASTERACEAE',	 ' ',	 'Akmella', 	 ' ',	 'Annual herb. Stems subglabrous or very sparsely pubescent, eventually attaining about 40 cm tall. Leaves ovate, lamina 2- 9 X 1-7 cm acute or obtuse at the tip, margin undulate serrate, sparsely pubescent on the lower surface. Ray flowers absent, disc flowers 2 mm long, yellow, 4-5 lobed. Achenes narrowly obovate, c. 2 mm long, 1mm broad, black, very sparsely puberulous near the apex,. Pappus bristles 1- 1.25 mm long.',	 'Native',	 'None',	  'Toothache / Oedema/ Wounds / Headache / Snake Bites',	 'Flower / Root / Whole Plant',	 'A04 Spilanthes paniculata',	 ' Spilanthes paniculata / ASTERACEAE / Akmella / None / Toothache / Oedema/ Wounds / Headache / Snake Bites / Flower / Root / Whole Plant');
INSERT INTO KnowledgePanel(ScientificName,FamilyName,EnglishName,LocalName,SanskirtName,Description,Status, EdibleParts ,Treatment, PartsforTreatment,ImageName,TAGS)
VALUES  ('Eryngium foetidum',	 'APIACEAE',	 'Long coriander / Sea Holly',	 'Andu',	 ' ',	 ' ',	 'Native',	 'None',	 'Insanity / Skin Diseases /  Mucosal diseases / Diabetes mellitus / Paralysis / Epilepsy /  Convulsions /  Spasms /  Pulmonary ailments /  Pains /  Stomach disorders',	 'Leaves / Root',	 'A05 Eryngium foetidum',	 ' Eryngium foetidum / APIACEAE / Long coriander / Sea Holly / Andu  / None / Insanity / Skin Diseases /  Mucosal diseases / Diabetes mellitus / Paralysis / Epilepsy /  Convulsions /  Spasms /  Pulmonary ailments /  Pains /  Stomach disorders / Leaves');

INSERT INTO KnowledgePanel(ScientificName,FamilyName,EnglishName,LocalName,SanskirtName,Description,Status, EdibleParts ,Treatment, PartsforTreatment,ImageName,TAGS)
VALUES  ('Terminalia chebula','COMBRETACEAE','Chebulic Myrobalan','Aralu','Harithaki / Abhay','Trees to','Native','Seed leaf/ Cotyledon','Dental caries /  Bleeding gums /  Fevers /  Piles /  Dropsy /  Sores /  Chronic dysentery /  Worm infestation /  Swellings /  Haemorrhoid / Jaundice / Colds / Coughs / Catarrh / Anorexia','Pericarp of The Fruit','A06 Terminalia chebula',' Terminalia chebula / COMBRETACEAE / Chebulic Myrobalan / Aralu  / Seed leaf / Cotyledon / Dental caries /  Bleeding gums /  Fevers /  Piles /  Dropsy /  Sores /  Chronic dysentery /  Worm infestation /  Swellings /  Haemorrhoid / Jaundice / Colds / Coughs / Catarrh / Anorexia/Pericarp of The Fruit');

INSERT INTO KnowledgePanel(ScientificName,FamilyName,EnglishName,LocalName,SanskirtName,Description,Status, EdibleParts ,Treatment, PartsforTreatment,ImageName,TAGS)
VALUES ('Trachyspermum involucratum','APIACEAE',' ','Asamodagam', 'Ajamoda',' ','Only under cultivation','Leaves and Young stems','Coughs / Asthma / Hiccough / Dysentery','Seeds',	' A07 Trachyspermum involucratum	 Trachyspermum involucratum / APIACEAE / Asamodagam  / Leaves and Young stems / Coughs / Asthma / Hiccough / Dysentery / Seeds');
INSERT INTO KnowledgePanel(ScientificName,FamilyName,EnglishName,LocalName,SanskirtName,Description,Status, EdibleParts ,Treatment, PartsforTreatment,ImageName,TAGS)
VALUES    ('Elephantopus scaber',	 'ASTERACEAE',	 'Elephant foot',	 'Eth-adi',	 'Mayura-shikha,Gojihva',	 'Stiff perennial herbs; stems (3.5-) 10-50 cm tall',	 'Native',	 'None',	' ',	' ',	 'E09 Elephantopus scaber',	 ' Elephantopus scaber / ASTERACEAE / Elephant foot / Eth-adi');
INSERT INTO KnowledgePanel(ScientificName,FamilyName,EnglishName,LocalName,SanskirtName,Description,Status, EdibleParts ,Treatment, PartsforTreatment,ImageName,TAGS)
VALUES  ('Fagraea ceilanica',	 'LOGANIACEAE',	 ' ',	 'Etamburu',	 ' ',	 ' ',	 'Native',	 'None',	' ', '' ,	 'E08 Fagraea ceilanica',	 ' Fagraea ceilanica / LOGANIACEAE / Etamburu');

INSERT INTO KnowledgePanel(ScientificName,FamilyName,EnglishName,LocalName,SanskirtName,Description,Status, EdibleParts ,Treatment, PartsforTreatment,ImageName,TAGS)
VALUES   ('Lepironia articulata',	 'CYPERACEAE',	 ' ',	 'Eta pan',	 ' ',	 'Aphyllous perennial. Rhizome decumbent, woody, dark brown ',	 'Native',	 'None',	' ','	 ',	 'E07 Lepironia articulata',	 ' Lepironia articulata / CYPERACEAE / Eta pan');
INSERT INTO KnowledgePanel(ScientificName,FamilyName,EnglishName,LocalName,SanskirtName,Description,Status, EdibleParts ,Treatment, PartsforTreatment,ImageName,TAGS)
VALUES ('Fagraea ceilanica',	 'LOGANIACEAE',	 ' ',	 'Etamburu',	 ' ',	 ' ',	 'Native',	 'None',	' ','	 ',	 'E06 Fagraea ceilanica',	 ' Fagraea ceilanica / LOGANIACEAE / Etamburu');

INSERT INTO KnowledgePanel(ScientificName,FamilyName,EnglishName,LocalName,SanskirtName,Description,Status, EdibleParts ,Treatment, PartsforTreatment,ImageName,TAGS)
VALUES  ('Abrus melanospermus',	 'FABACEAE',	 ' ',	 'Ela olinda',	 ' ',	 'Perennial wine, about 6m long, usually climbing on bushes and trees. Stipules linear. Leaves compound, about 14-34 foliolate, leaflets predominantly oblong or oblong-obovate, 7-20 mm long, 5-6mm wide. Inflorescences  racemose, terminal or axillary, longer than the leaves, flowers 8-10 mm long, petals lavender or light purple, fruits 5-7 cm long, about 1 cm wide, fulvo-puberulent, Seeds lenticular, about 5mm in diameter, mottled greyish brown.',	 'Native',	 'Roots, seeds, leaves, in some occasions, the whole plant is used',	 'Asthma / Excessive thirst /  Eye diseases / Eczema /  Leucoderma /  Heart diseases',	 'Roots / seeds / leaves',	 'E05 Abrus melanospermus',	 ' Abrus melanospermus / FABACEAE / Ela olinda / Asthma / Excessive thirst /  Eye diseases / Eczema /  Leucoderma /  Heart diseases / Roots / seeds / leaves');

INSERT INTO KnowledgePanel(ScientificName,FamilyName,EnglishName,LocalName,SanskirtName,Description,Status, EdibleParts ,Treatment, PartsforTreatment,ImageName,TAGS)
VALUES   ('Euphorbia indica',	 'EUPHORBIACEAE',	 ' ',	 'Ela dadakeeriya',	 'Dugdhika',	 'Annial herb, 15 – 30 ( - 45) cm tall. Leaves opposite, 6 – 20 ( - 35) X 3 – 9 ( - 15 ) mm, elliptic-oblong, base unequal, obtuse, shortly petiolate, apex rounded, obtuse, subentire to minutely serrulate, glabrous to minutely and sparsely crisped pubescent, especially beneath. Inflorescence of minute stalked heads of flowers in shortly pedunculate or subsessile, axillary or terminal cymes. Capsule c. 1.5 mm diameter, slightly hairy to subglobose.',	 'Native',	 'None',	 'Diarrhoea / Dysentery / Menorrhagia /  Leucorrhoea / Skin Diseases ',	 'Leaves ',	 'E03 Euphorbia indica',	 ' Euphorbia indica / EUPHORBIACEAE / Ela dadakeeriya / Diarrhoea / Dysentery / Menorrhagia /  Leucorrhoea / Skin Diseases / Leaves');
INSERT INTO KnowledgePanel(ScientificName,FamilyName,EnglishName,LocalName,SanskirtName,Description,Status, EdibleParts ,Treatment, PartsforTreatment,ImageName,TAGS)
VALUES  ('Cassia fistula',	 'FABACEAE',	 'Golden shower tree / Indian Laburnum',	 'Ehela',	 'Aragvadha, Chaturangula, Krutamalaka',	'Trees, to about 20 m tall; stems glabrous; leaves 10-4-(-60) cm long with (2-)3-8 pairs of leaflets',	 'Only under cultivation',	 'None',	 'Constipation / Nervous system disorders / Oedeama / Rashes / Coughs /  Burning sensations in the body',	 'Roots / Bark /  Juice of the pods','E02 Cassia fistula',' Cassia fistula   Juice of the pods');

INSERT INTO KnowledgePanel(ScientificName,FamilyName,EnglishName,LocalName,SanskirtName,Description,Status, EdibleParts ,Treatment, PartsforTreatment,ImageName,TAGS)
VALUES  ('Heteropogon contortus',	 'POACEAE',	 ' ',	 'E-thana',	 ' ',	 'Untidily tufted perennial, basal sheaths laterally compressed. culms 30 – 100 cm tall. Leaf blades flat, 4 – 30 cm X 2 – 5 mm, abruptly narrowed at the tip. Racemes 1 to many, sometimes forming a false panicle, the awns forming a twisted spire at the tip. Basal homogamous pairs 3 – 10, their glumes resembling those of the pedicelled spikelets.  Awn 5 – 8 cm long, hirtellous, lower glume green with yellowish membranous margins.',	 'Native',	 'None',	 'Bronchial diseases /  Jaundice /   Pyelitis /  Cystitis / Gonorrhoea / Strangury',	 'Root',	 'E01 Heteropogon contortus',	 ' Heteropogon contortus /  POACEAE / E-thana / Bronchial diseases /  Jaundice /   Pyelitis /  Cystitis / Gonorrhoea / Strangury / Root');

select * from dbo.KnowledgePanel;

INSERT INTO KnowledgePanel(ScientificName,FamilyName,EnglishName,LocalName,SanskirtName,Description,Status, EdibleParts ,Treatment, PartsforTreatment,ImageName,TAGS)
VALUES  ('Loxococcus rupicola',	 'ARECACEAE',	 ' ',	 'Dothalu / Ran dothalu',	 ' ',	 ' ',	 'Endemic',	 'None',	 'Diarrhoae',	 ' Fruit',	 'D10 Loxococcus rupicola',	 ' Loxococcus rupicola / ARECACEAE / Dothalu / Ran dothalu / Diarrhoae / Fruit');


INSERT INTO KnowledgePanel(ScientificName,FamilyName,EnglishName,LocalName,SanskirtName,Description,Status, EdibleParts ,Treatment, PartsforTreatment,ImageName,TAGS)
VALUES ('Pagiantha dichotoma',	 'APOCYNACEAE',	 'Poison nut / Eve′s apple',	 'Divi kaduru',	 ' ',	 'Small glabrous trees. Young parts covered with a shining, resinous coat. Petiole 2-4 cm long. Leaves opposite; leaf blades 8-21 cm long and 2-5.9 cm wide. Flowers five- or six-merous, in long peduncled, dichasially branched cymes. Corolla white with the throat  and tube yellow within; corolla-tube 1.8-2.5 cm long. Merocarps pendulous, 3.5-7 cm long and 3-5 cm in diam.',	 'Native',	 'None',	 'Wounds /  Snake bites / Centipede bites /  Ulcers /  Fistula',	 'Bark /  Leaves ',	 'D09 Pagiantha dichotoma',	 ' Pagiantha dichotoma / APOCYNACEAE / Poison nut / Eve′s appleDivi kaduru / Wounds /  Snake bites / Centipede bites /  Ulcers /  Fistula / Bark /  Leaves');
INSERT INTO KnowledgePanel(ScientificName,FamilyName,EnglishName,LocalName,SanskirtName,Description,Status, EdibleParts ,Treatment, PartsforTreatment,ImageName,TAGS)
VALUES  ('Diplodiscus verrucosus',	 'TILIACEAE',	 ' ',	 'Dikwenna / Dik-andhe',	 ' ',	 'Tree to 10 m tall. Leaf blade ovte to elliptic, sometimes narrowly so, obtuse to rounded or sometimes subcordate at bese, rounded to obtuse to sometimes acute at the apex, the margins more or less repand, remotely and minutely glandular. Panicles terminal and axillary, erect, large, much-branched, multiflorous, the axes densely lepidote, flowers pink-white. Capsules surrounded at the base by the persistent calyx and filaments, obovoid.',	 'Endemic',	 'None',	' ',	 ' ',	 'D08 Diplodiscus verrucosus',	 ' Diplodiscus verrucosus / TILIACEAE / Dikwenna / Dik-andhe');

INSERT INTO KnowledgePanel(ScientificName,FamilyName,EnglishName,LocalName,SanskirtName,Description,Status, EdibleParts ,Treatment, PartsforTreatment,ImageName,TAGS)
VALUES ('Eugenia rotundata',	 'MYRTACEAE',	 ' ',	 'Dhaduwa',	 ' ',	 '2 m tall densely leafy shrub with smooth pale greyish white bark. Leaf lamina (1.3 -) 2 – 7 X (0.8 -) 1 – 5.5 cm, ovate or lanceolate, coriaceous, refous to chocolate-brown on drying; base subcordate, obtuse or broadly cuneate; apex + broadly – 1.5 cm long acuminate. Flowers white, in terminal or axillary fascicles. Fruit – 12 mm long, - 10 mm diam., ellipsoid to globose, ripening bright red',	 'Endemic',	 'None',	 ' ',	  ' ',	 'D07 Eugenia rotundata',	 ' Eugenia rotundata / MYRTACEAE / Dhaduwa');

INSERT INTO KnowledgePanel(ScientificName,FamilyName,EnglishName,LocalName,SanskirtName,Description,Status, EdibleParts ,Treatment, PartsforTreatment,ImageName,TAGS)
VALUES    ('Citrus aurantifolia',	 'RUTACEAE',	 'Lime',	 'Dehi',	 ' ',	 'Small tree, branchlets with short stiff sharp spines. Leaves small, mostly 5-7.5. Inflorescence short, 2-7- flowered, rarely 1-flowered, axillary. Flowers small, white. Fruits small, globose to ovoid, greenish-yellow, the pericarp glandular dotted, very thin, juice very sour, seeds small.',	 'Only under cultivation',	 'Fruit',	 'Skin diseases /  Coughs /  Dysentery /  Dandruff ', 	 'Seeds / Bark / Root ',	 'D06 Citrus aurantifolia',	 ' Citrus aurantifolia / RUTACEAE / Lime / Dehi / Skin diseases /  Coughs /  Dysentery /  Dandruff / Seeds / Bark / Root');
INSERT INTO KnowledgePanel(ScientificName,FamilyName,EnglishName,LocalName,SanskirtName,Description,Status, EdibleParts ,Treatment, PartsforTreatment,ImageName,TAGS)
VALUES   ('Neolitsea cassia',	 'LAURACEAE',	 ' ',	 'Dawul kurundu / Kudu dawula',	 ' ',	 'A small tree; bark thick, grey; buds minutely puberulous. Leaves numerous closely placed at ends of branches, 7.5-12.5 cm long, distinctly 3-nerved at base; petiole 3-9 mm long. Umbels small, sessile, clustered, 4-5 flowered; bracts slightly silky. Fruit either about 6 mm, oblong-ovoid, or 4 mm, globose, dark purple.',	 'Native',	 'None',	 'Fractures',	 'Leaves /  Bark ',	 'D05 Neolitsea cassia',	 ' Neolitsea cassia / LAURACEAE / Dawul kurundu / Kudu dawula / Fractures / Leaves /  Bark');
INSERT INTO KnowledgePanel(ScientificName,FamilyName,EnglishName,LocalName,SanskirtName,Description,Status, EdibleParts ,Treatment, PartsforTreatment,ImageName,TAGS)
VALUES   ('Carallia brachiata',	 'RHIZOPHORACEAE',	 ' ',	 'Dawata',	 ' ',	 'Tree, up to 50 m tall. Leaves up to 10 cm; petiole very short. Stipules ;arge, 2 cm long, enclose terminal buds. Flowers small, 3 mm diameter, in small heads of cymes. Fruit about 5 mm diameter, berry-like, red. Seed with thick orange testa, lobulate.',	 'Native',	 'None',	 'Pruritus /  Oral ulcers /  Throat inflammations /  Stomatitis /  Sapraemia /  Wounds ',	 'Leaves /  Bark /  Fruit juice ',	 'D04 Carallia brachiata',	 ' Carallia brachiata / RHIZOPHORACEAE / Dawata / Pruritus /  Oral ulcers /  Throat inflammations /  Stomatitis /  Sapraemia /  Wounds / Leaves /  Bark /  Fruit juice');

INSERT INTO KnowledgePanel(ScientificName,FamilyName,EnglishName,LocalName,SanskirtName,Description,Status, EdibleParts ,Treatment, PartsforTreatment,ImageName,TAGS)
VALUES   ('Xylopia championii',	 'ANNONACEAE',	 'Indian snake root, Mongoose plant',	 'Dathketiya',	 ' ',	 'A slender tree up to 12 m tall or probably taller. Leaf blade 6 – 15 cm long, 2 – 5 cm wide',	 'Endemic',	 'None',	 'Snake bites',	 'Whole plants',	 'D03 Xylopia championii',	 ' Xylopia championii / ANNONACEAE / Indian snake root, Mongoose plant / Dathketiya / Snake bites / Whole plants');

INSERT INTO KnowledgePanel(ScientificName,FamilyName,EnglishName,LocalName,SanskirtName,Description,Status, EdibleParts ,Treatment, PartsforTreatment,ImageName,TAGS)
VALUES   ('Grewia damine',	 'TILIACEAE',	 ' ',	 'Daminiya',	 ' ',	 'Large shrub or small tree attaining 10 m. leaves alternate, distichous blade suninequilateral to markedly inequilateral, rotund, ovate or obovate, the base more or less cordate to truncate to rounded, apex rounded to emarginated, sometimes obtuse or even acute, margins crenete-serrate, 18 X 12 cm',	 'Native',	 'Fruit (Wild Fruit)',	 'Diarrhoea /  Skin diseases',	 'Whole plants',	 'D02 Grewia damine',	 ' Grewia damine / TILIACEAE / Daminiya / Diarrhoea /  Skin diseases / Whole plants');

INSERT INTO KnowledgePanel(ScientificName,FamilyName,EnglishName,LocalName,SanskirtName,Description,Status, EdibleParts ,Treatment, PartsforTreatment,ImageName,TAGS)
VALUES  ('Dioscorea trimenii',	 'DIOSCOREACEAE',	 ' ',	 'Dahiya ala',	 ' ',	 ' ',	 'Endemic',	 'None',	 ' ',	 ' ',	 'D01 Dioscorea trimenii',	 ' Dioscorea trimenii / DIOSCOREACEAE / Dahiya ala');

CREATE TRIGGER delete_cart_on_order_insert ON Orders
    FOR INSERT
    AS
        DELETE FROM Cart where CartID = (SELECT CartId FROM inserted)









