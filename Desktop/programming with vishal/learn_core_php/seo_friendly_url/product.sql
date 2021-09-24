CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alias` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

INSERT INTO `product` (`id`, `alias`, `name`, `desc`, `image`) VALUES
(1, 'product1', 'Product1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mollis enim eget interdum venenatis. Donec scelerisque consectetur lectus eget sagittis. Nam at sollicitudin elit. Nunc imperdiet quam sed enim tempor bibendum. Maecenas non ante nec orci molestie tempor eu nec risus. Nulla facilisi. Ut fringilla massa dui,', 'product.png'),
(2, 'product2', 'Product2', 'rat. Vestibulum eget leo a est convallis euismod quis a ex. Praesent vestibulum lobortis augue. Aenean ipsum lectus, molestie vitae fringilla non, lacinia ut metus. Nullam dictum, ligula et consequat ultricies, est purus aliquet tellus, commodo tempor mi enim ac dolor. Morbi id mauris e', 'product.png');