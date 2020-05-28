-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 24, 2016 at 01:00 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phl`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladministrator`
--

CREATE TABLE `tbladministrator` (
  `id` int(11) NOT NULL auto_increment,
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbladministrator`
--

INSERT INTO `tbladministrator` (`id`, `user`, `pass`) VALUES
(1, 'Administrator', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL auto_increment,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Firstname` text NOT NULL,
  `Lastname` text NOT NULL,
  `Email` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--FOUSSOU JUNIOR BDD
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `Username`, `Password`, `Firstname`, `Lastname`, `Email`) VALUES
(6, 'TobiramaNidaime', 'hokage123', 'Tobirama', 'Senju', 'nidaimesenjou@gmail.com'),
(7, 'shodaimeHashirama', 'konohashodaihokage01', 'Hashirama', 'Senju', 'shodaimeHokage01@gmail.com'),
(8, 'SaruHokage03', 'hiruzensaru03', 'Hiruzen', 'Sarutobi', 'sarutobiHiruzen@gmail.com'),
(9, 'NamekazeMinato04', 'p@55Test12345', 'Minato', 'Namekaze', 'nameuzumaki@gmail.com');

  --Dumping data for table `articles`

CREATE TABLE `articles` (
  `id` int(11) NOT NULL auto_increment,
  `titre` varchar(80) NOT NULL,
  `contenu` varchar(80) NOT NULL,
   `date_time_publication` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;


CREATE TABLE `table_articles` (
`id` int(8) unsigned NOT NULL auto_increment,
`auteur` varchar(255) NOT NULL default '',
`date` int(15) unsigned NOT NULL default '0',
`titre` varchar(255) NOT NULL default '',
`texte` text NOT NULL,
`hit` int(10) unsigned NOT NULL default '1',
PRIMARY KEY (`id`)
) TYPE=MyISAM ; 


CREATE TABLE `images` (
  `id` int(11) NOT NULL auto_increment,
  `image` varchar(100) NOT NULL,
  `image_text` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

CREATE TABLE `articlesf` (
  `id` int(11) NOT NULL auto_increment,
  `nom` varchar(80) NOT NULL,
  `description` varchar(80) NOT NULL,
   `photo` varchar(80) NOT NULL,
   `prix` varchar(80) NOT NULL,
   `statut` varchar(80) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;