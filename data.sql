

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ;

ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
