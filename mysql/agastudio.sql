# MySQL-Front 3.2  (Build 6.14)
CREATE TABLE `categorias` (
  `ID` int(11) NOT NULL auto_increment,
  `NOME` varchar(100) default NULL,
  `DIA` int(2) default NULL,
  `MES` int(2) default NULL,
  `ANO` int(4) default NULL,
  `MOSTRAR` char(1) default 'S',
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

INSERT INTO `categorias` VALUES (1,'acess�rios',NULL,NULL,NULL,'S');
INSERT INTO `categorias` VALUES (2,'aparador',NULL,NULL,NULL,'S');
INSERT INTO `categorias` VALUES (3,'�rea externa',NULL,NULL,NULL,'S');
INSERT INTO `categorias` VALUES (4,'banco',NULL,NULL,NULL,'S');
INSERT INTO `categorias` VALUES (5,'banqueta',NULL,NULL,NULL,'S');
INSERT INTO `categorias` VALUES (6,'base',NULL,NULL,NULL,'S');
INSERT INTO `categorias` VALUES (7,'buffet',NULL,NULL,NULL,'N');
INSERT INTO `categorias` VALUES (8,'cadeira',NULL,NULL,NULL,'S');
INSERT INTO `categorias` VALUES (9,'cama',NULL,NULL,NULL,'S');
INSERT INTO `categorias` VALUES (10,'chaise',NULL,NULL,NULL,'S');
INSERT INTO `categorias` VALUES (11,'criado',NULL,NULL,NULL,'N');
INSERT INTO `categorias` VALUES (12,'linha office',NULL,NULL,NULL,'S');
INSERT INTO `categorias` VALUES (13,'mesa de centro',NULL,NULL,NULL,'S');
INSERT INTO `categorias` VALUES (14,'mesa de jantar',NULL,NULL,NULL,'S');
INSERT INTO `categorias` VALUES (15,'mesa lateral',NULL,NULL,NULL,'S');
INSERT INTO `categorias` VALUES (16,'outros',NULL,NULL,NULL,'N');
INSERT INTO `categorias` VALUES (17,'poltrona',NULL,NULL,NULL,'S');
INSERT INTO `categorias` VALUES (18,'puff',NULL,NULL,NULL,'S');
INSERT INTO `categorias` VALUES (19,'rack',NULL,NULL,NULL,'S');
INSERT INTO `categorias` VALUES (20,'sof�',NULL,NULL,NULL,'S');
INSERT INTO `categorias` VALUES (21,'bar',NULL,NULL,NULL,'N');
INSERT INTO `categorias` VALUES (22,'inform�tica',NULL,NULL,NULL,'N');
INSERT INTO `categorias` VALUES (26,'home theater',NULL,NULL,NULL,'S');
INSERT INTO `categorias` VALUES (27,'beb�',NULL,NULL,NULL,'N');
CREATE TABLE `clientes` (
  `ID` int(11) NOT NULL auto_increment,
  `NOME` varchar(100) default NULL,
  `DIA_NASCIMENTO` int(2) default NULL,
  `MES_NASCIMENTO` int(2) default NULL,
  `ANO_NASCIMENTO` int(4) default NULL,
  `DIA` int(2) default NULL,
  `MES` int(2) default NULL,
  `ANO` int(4) default NULL,
  `HORA` int(2) default NULL,
  `MINUTO` int(2) default NULL,
  `SEGUNDO` int(2) default NULL,
  `EMAIL` varchar(255) default NULL,
  `RECEBE_EMAIL` char(1) default 'S',
  `PROFISSAO` varchar(50) default NULL,
  `MUNICIPIO` varchar(50) default NULL,
  `UF` char(2) default NULL,
  `DDD_FONE` int(2) default NULL,
  `FONE` int(8) default NULL,
  `COMENTARIO` text,
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

INSERT INTO `clientes` VALUES (1,'teste',23,23,2323,27,8,2008,NULL,NULL,NULL,'teste','S',NULL,NULL,NULL,34,23423423,'teste');
CREATE TABLE `contador` (
  `ID` int(11) NOT NULL auto_increment,
  `DIA` int(2) default NULL,
  `MES` int(2) default NULL,
  `ANO` int(4) default NULL,
  `HORA` int(2) default NULL,
  `MINUTO` int(2) default NULL,
  `SEGUNDO` int(2) default NULL,
  `IP` varchar(15) default NULL,
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

INSERT INTO `contador` VALUES (1,1,9,2008,2,54,32,'');
INSERT INTO `contador` VALUES (2,1,9,2008,2,55,34,'');
INSERT INTO `contador` VALUES (3,1,9,2008,2,55,36,'');
INSERT INTO `contador` VALUES (4,1,9,2008,3,1,32,'');
INSERT INTO `contador` VALUES (5,1,9,2008,3,3,34,'');
INSERT INTO `contador` VALUES (6,1,9,2008,3,6,29,'');
INSERT INTO `contador` VALUES (7,1,9,2008,3,7,2,'');
INSERT INTO `contador` VALUES (8,1,9,2008,3,9,47,'');
INSERT INTO `contador` VALUES (9,1,9,2008,3,9,48,'');
INSERT INTO `contador` VALUES (10,1,9,2008,3,12,21,'');
INSERT INTO `contador` VALUES (11,1,9,2008,3,12,38,'');
INSERT INTO `contador` VALUES (12,1,9,2008,3,14,48,'');
INSERT INTO `contador` VALUES (13,1,9,2008,3,16,17,'');
INSERT INTO `contador` VALUES (14,1,9,2008,3,17,16,'');
INSERT INTO `contador` VALUES (15,1,9,2008,3,28,28,'');
INSERT INTO `contador` VALUES (16,1,9,2008,3,33,14,'');
INSERT INTO `contador` VALUES (17,1,9,2008,3,34,27,'');
INSERT INTO `contador` VALUES (18,1,9,2008,3,35,4,'');
INSERT INTO `contador` VALUES (19,1,9,2008,3,36,42,'');
INSERT INTO `contador` VALUES (20,1,9,2008,3,37,46,'');
INSERT INTO `contador` VALUES (21,1,9,2008,3,39,44,'');
INSERT INTO `contador` VALUES (22,1,9,2008,3,39,57,'');
INSERT INTO `contador` VALUES (23,9,9,2008,1,37,48,'');
INSERT INTO `contador` VALUES (24,9,9,2008,2,14,6,'');
INSERT INTO `contador` VALUES (25,14,9,2008,0,48,0,'');
INSERT INTO `contador` VALUES (26,14,9,2008,23,48,45,'');
INSERT INTO `contador` VALUES (27,17,9,2008,2,12,53,'');
INSERT INTO `contador` VALUES (28,26,9,2008,4,12,31,'');
INSERT INTO `contador` VALUES (29,26,9,2008,4,41,15,'');
INSERT INTO `contador` VALUES (30,26,9,2008,4,44,29,'');
INSERT INTO `contador` VALUES (31,26,9,2008,4,52,28,'');
INSERT INTO `contador` VALUES (32,26,9,2008,4,58,40,'');
INSERT INTO `contador` VALUES (33,26,9,2008,5,0,44,'');
INSERT INTO `contador` VALUES (34,26,9,2008,5,3,48,'');
CREATE TABLE `diretorios` (
  `ID` int(11) NOT NULL auto_increment,
  `DIRETORIO` varchar(20) default NULL,
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

INSERT INTO `diretorios` VALUES (1,'fotos_moveis');
INSERT INTO `diretorios` VALUES (2,'fotos_eventos');
INSERT INTO `diretorios` VALUES (3,'fotos_parceiros');
CREATE TABLE `eventos` (
  `ID` int(11) NOT NULL auto_increment,
  `ID_IMAGEM` int(11) default NULL,
  `TITULO` varchar(50) default NULL,
  `EMENTA` varchar(100) default NULL,
  `TEXTO` text,
  `LOCAL` varchar(50) default NULL,
  `DIA_EVENTO` int(2) default NULL,
  `MES_EVENTO` int(2) default NULL,
  `ANO_EVENTO` int(4) default NULL,
  `HORA_EVENTO` int(2) default NULL,
  `MINUTO_EVENTO` int(2) default NULL,
  `SEGUNDO_EVENTO` int(2) default '0',
  `DIA` int(2) default NULL,
  `MES` int(2) default NULL,
  `ANO` int(4) default NULL,
  `HORA` int(2) default NULL,
  `MINUTO` int(2) default NULL,
  `SEGUNDO` int(2) default NULL,
  `MOSTRAR` char(1) default 'S',
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

INSERT INTO `eventos` VALUES (1,3,'A.G.A. Studio','Coquetel','�timo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'S');
CREATE TABLE `fale_conosco` (
  `ID` int(11) NOT NULL auto_increment,
  `ID_MOTIVO` int(11) default NULL,
  `NOME` varchar(100) default NULL,
  `DDD_FONE` int(2) default NULL,
  `FONE` int(8) default NULL,
  `EMAIL` varchar(255) default NULL,
  `RECEBE_EMAIL` char(1) default 'S',
  `TEXTO` text,
  `DIA` int(2) default NULL,
  `MES` int(2) default NULL,
  `ANO` int(4) default NULL,
  `HORA` int(2) default NULL,
  `MINUTO` int(2) default NULL,
  `SEGUNDO` int(2) default NULL,
  `IP` varchar(15) default '0.0.0.0',
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

CREATE TABLE `imagens` (
  `ID` int(11) NOT NULL auto_increment,
  `ID_DIRETORIO` int(11) default '1',
  `ARQUIVO` varchar(50) default NULL,
  `DIA` int(2) default NULL,
  `MES` int(2) default NULL,
  `ANO` int(4) default NULL,
  `MOSTRAR` char(1) default 'S',
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

INSERT INTO `imagens` VALUES (1,1,'APARADOR PIZA.jpg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (2,1,'APARADOR PREMIER.jpeg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (3,1,'APARADOR PREMIER VIDRO.jpeg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (13,1,'BANCO BANDEIROLA II.jpg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (14,1,'BASE BALMES.jpg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (15,1,'BANCO BERTOIA - CLASSICA.jpg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (16,1,'BANCO CUBO.jpeg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (17,1,'BANQUETA 1749.jpeg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (18,1,'BANQUETA 5085 - TC.jpeg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (19,1,'HOME THEATER PERFIL - �TTO.jpg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (20,1,'CHAISE SERENA.jpeg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (21,1,'CHAISE POLI.jpg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (22,1,'CHAISE �MEGA II ..jpg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (23,1,'BANQUETA 5181.jpeg',NULL,NULL,NULL,'N');
INSERT INTO `imagens` VALUES (24,1,'BASE ARAMADA CHARLES EAMES-CLA.jpg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (25,1,'Base Athenas 11001.jpg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (26,1,'Buffet Bella 1,60.JPG',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (27,1,'BUFFET CONTRA-BAIXO.jpg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (28,1,'BUFFET DECORE 2 PORTAS.jpg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (29,1,'CADEIRA ARGENTE FIBRA.jpeg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (30,1,'CADEIRA ARPA 34.jpg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (31,1,'CADEIRA ARPA 36.jpeg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (32,1,'Criado peq Colina e grd Totem - A.N..jpg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (33,1,'CRIADO REGIA.jpeg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (34,1,'CRIADO RIVIERA.jpeg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (35,1,'MESA CENTRO ANNE.jpg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (36,1,'Home Theater Morphos.jpg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (37,1,'HOME THEATER QUADRA.jpg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (38,1,'MESA CENTRO BASEL.jpg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (39,1,'MESA CENTRO BOTANIC.jpeg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (40,1,'MESA JANTAR DECO.jpg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (41,1,'MESA JANTAR HELIANTO.jpg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (42,1,'MESA JANTAR LUXUS.jpeg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (43,1,'MESA LATERAL BASICA COM BANDEJA.jpg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (44,1,'MESA LATERAL BOX.jpg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (45,1,'MESA LATERAL CAPRICCIO.jpg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (46,1,'POLTRONA A�UCENA.jpeg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (47,1,'POLTRONA ADONIS.jpeg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (48,1,'POLTRONA AGATA.jpeg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (49,1,'PUFF MOUSE.jpg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (50,1,'PUFF OTTO.jpg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (51,1,'PUFF PALACE.jpeg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (52,1,'SOF� AGASSI.jpeg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (53,1,'SOFA ANTONY.jpg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (54,1,'SOF� ARTEFACTO.jpeg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (55,2,'6230_005.jpg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (56,2,'6230_021.jpg',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (57,1,'IMAG3270.JPG',NULL,NULL,NULL,'S');
INSERT INTO `imagens` VALUES (58,1,'IMAG3268.JPG',NULL,NULL,NULL,'S');
CREATE TABLE `log` (
  `ID` int(11) NOT NULL auto_increment,
  `PG` varchar(50) default NULL,
  `IP` varchar(15) default NULL,
  `DIA` int(2) default NULL,
  `MES` int(2) default NULL,
  `ANO` int(4) default NULL,
  `HORA` int(2) default NULL,
  `MINUTO` int(2) default NULL,
  `SEGUNDO` int(2) default NULL,
  `MSG` text,
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

CREATE TABLE `motivos` (
  `ID` int(11) NOT NULL auto_increment,
  `NOME` varchar(20) default NULL,
  `OBS` text,
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

INSERT INTO `motivos` VALUES (1,'D�vida',NULL);
INSERT INTO `motivos` VALUES (2,'Sugest�o',NULL);
INSERT INTO `motivos` VALUES (3,'Reclama��o',NULL);
INSERT INTO `motivos` VALUES (4,'Or�amento',NULL);
CREATE TABLE `parceiros` (
  `ID` int(11) NOT NULL auto_increment,
  `ID_IMAGEM` int(11) default NULL,
  `NOME` varchar(100) default NULL,
  `PROFISSAO` varchar(50) default NULL,
  `ENDERECO` varchar(100) default NULL,
  `MUNICIPIO` varchar(50) default NULL,
  `UF` char(2) default 'PR',
  `DDD_FONE` int(2) default NULL,
  `FONE` int(8) default NULL,
  `EMAIL` varchar(100) default NULL,
  `SITE` varchar(255) default NULL,
  `MOSTRAR` char(1) default 'S',
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

INSERT INTO `parceiros` VALUES (1,NULL,'RODRIGO','WEBDESIGNER',NULL,NULL,'PR',NULL,NULL,NULL,'www.rss.adv.br','S');
CREATE TABLE `produtos` (
  `ID` int(11) NOT NULL auto_increment,
  `ID_CATEGORIA` int(11) default NULL,
  `ID_IMAGEM` int(11) default NULL,
  `NOME` varchar(100) default NULL,
  `LANCAMENTO` char(1) default 'N',
  `DIA` int(2) default NULL,
  `MES` int(2) default NULL,
  `ANO` int(4) default NULL,
  `HORA` int(2) default NULL,
  `MINUTO` int(2) default NULL,
  `SEGUNDO` int(2) default NULL,
  `MOSTRAR` char(1) default 'S',
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

INSERT INTO `produtos` VALUES (2,2,2,'APARADOR PREMIER','S',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (3,2,3,'APARADOR PREMIER VIDRO','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (7,2,1,'APARADOR PIZA','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (8,4,13,'BANCO BANDEIROLA II','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (9,4,15,'BANCO BERTOIA','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (10,4,16,'BANCO CUBO','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (11,5,17,'BANQUETA 1749','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (12,5,18,'BANQUETA 5085 - TC','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (16,10,20,'CHAISE SERENA','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (17,10,21,'CHAISE POLI','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (18,10,22,'CHAISE �MEGA II','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (19,5,23,'BANQUETA 5181','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (20,6,24,'BASE ARAMADA CHARLES EAMES-CLA','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (21,6,25,'Base Athenas 11001','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (22,6,14,'BASE BALMES','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (23,7,26,'Buffet Bella 1,60','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (24,7,27,'BUFFET CONTRA-BAIXO','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (25,7,28,'BUFFET DECORE 2 PORTAS','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (26,8,29,'CADEIRA ARGENTE FIBRA','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (27,8,30,'CADEIRA ARPA 34','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (28,8,31,'CADEIRA ARPA 36','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (29,11,32,'Criado peq Colina e grd Totem - A.N','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (30,11,33,'CRIADO REGIA','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (31,11,34,'CRIADO RIVIERA','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (32,13,35,'MESA CENTRO ANNE','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (33,26,36,'Home Theater Morphos','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (34,26,19,'HOME THEATER PERFIL - �TTO','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (35,26,37,'HOME THEATER QUADRA','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (36,13,38,'MESA CENTRO BASEL','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (37,13,39,'MESA CENTRO BOTANIC','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (38,14,40,'MESA JANTAR DECO','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (39,14,41,'MESA JANTAR HELIANTO','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (40,14,42,'MESA JANTAR LUXUS','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (41,15,43,'MESA LATERAL BASICA COM BANDEJA','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (42,15,44,'MESA LATERAL BOX','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (43,15,45,'MESA LATERAL CAPRICCIO','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (44,17,46,'POLTRONA A�UCENA','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (45,17,47,'POLTRONA ADONIS','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (46,17,48,'POLTRONA AGATA','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (47,18,49,'PUFF MOUSE','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (48,18,50,'PUFF OTTO','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (49,18,51,'PUFF PALACE','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (50,20,52,'SOF� AGASSI','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (51,20,53,'SOFA ANTONY','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (52,20,54,'SOF� ARTEFACTO','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
INSERT INTO `produtos` VALUES (53,1,34,'TESTE','N',NULL,NULL,NULL,NULL,NULL,NULL,'S');
CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL auto_increment,
  `LOGIN` varchar(15) default NULL,
  `SENHA` varchar(100) default NULL,
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

INSERT INTO `usuarios` VALUES (1,'rodrigo','e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `usuarios` VALUES (2,'agnaldo','e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `usuarios` VALUES (3,'gislaine','e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `usuarios` VALUES (4,'anderson','e10adc3949ba59abbe56e057f20f883e');
