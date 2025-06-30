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
CREATE TABLE `diretorios` (
  `ID` int(11) NOT NULL auto_increment,
  `DIRETORIO` varchar(20) default NULL,
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;
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
CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL auto_increment,
  `LOGIN` varchar(15) default NULL,
  `SENHA` varchar(100) default NULL,
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;
