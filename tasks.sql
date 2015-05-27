--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL,
  `description` varchar(30) NOT NULL,
  `priority` int(1) NOT NULL,
  `completed` int(1) NOT NULL DEFAULT '0',
  `delete` int(1) NOT NULL DEFAULT '1'
  primary key(`id`);
);

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `description`, `priority`, `completed`, `delete`) VALUES
(1, 'Plan a Holiday', 2, 1, 1),
(2, 'Wash Pots', 3, 0, 1),
(3, 'Cut Hair', 3, 0, 1),
(4, 'Book Car Rental', 1, 0, 1);