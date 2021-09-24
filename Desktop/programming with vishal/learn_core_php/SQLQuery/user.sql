CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `marks` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `marks`, `city`) VALUES
(1, 'Vishal', 60, 'Delhi'),
(2, 'Amit', 70, 'Mumbai'),
(3, 'Sumit', 65, 'Pune'),
(4, 'Namit', 70, 'Delhi'),
(5, 'Vishal', 70, 'Pune');