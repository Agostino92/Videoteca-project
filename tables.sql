
/*Struttura tabella `users` */

CREATE TABLE IF NOT EXISTS `users` (
  `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nickname` varchar(50) DEFAULT NULL,
  `type` set('user','moderator') NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  
  PRIMARY KEY (`id`),
  UNIQUE KEY `mail` (`mail`),
  UNIQUE KEY `nickname` (`nickname`)
  )ENGINE=InnoDB DEFAULT CHARSET=latin1;
  


/*Dump dei dati per la tabella `users`*/

INSERT INTO `users` (`id`, `nickname`, `type`, `mail`, `password`) VALUES 
('1','iltac','user','tonino.taccone@gmail.com', '$2y$10$rZuSBFFDZE1d3bAU2Dai6uJG9WyOvofwmr3bQTGRrJlUelOZju1xC'),
('2','amecav','user','americocav93@hotmail.it','$2y$10$VQWeDO6JywrUyUEhPSJZIOAOf/1jgeBayRtWZOEpLPBFkhlf80JLe'),
('3','marossi','user','mariorossi@gmail.com','$2y$10$W5SwuC3F02VzxQbqWrUQyegvzOeW5mzBMiMSJG.SxfwM7cUxNRbwa'),
('4','fra1996','user','framascitti@gmail.it','$2y$10$vy2E7uo8cT9Ab.cEh5LqzuzHXb8I3H8KAeXtaHJD7JOMV6y8bdf.q');

/*Struttura tabella `user_info` */

CREATE TABLE IF NOT EXISTS `user_info` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `birth_place` varchar(30) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `bio` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Dump dei dati per la tabella `user_info`*/

INSERT INTO `user_info` (`id`, `first_name`, `last_name`, `birth_place`,`birth_date`, `bio`) VALUES 
('1','Tonino','Taccone', 'Roma','1992-03-12','niente'),
('2','Americo','Cavasinni','Milano','1992-06-11','niente'),
('3','Mario','Rossi','Napoli','1993-09-13','niente'),
('4','Francesco','Natale','Avezzano','1999-08-23','niente');

/*Struttura tabella `film` */



CREATE TABLE IF NOT EXISTS `film` 
(
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(40) DEFAULT NULL,
  `author` varchar(30) DEFAULT NULL,
  `genre` varchar(30) DEFAULT NULL,
  `descrizione` varchar(2048) NOT NULL,
  `locandina` varchar(256) DEFAULT NULL,
  `tipo` varchar(10) DEFAULT NULL,
   PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


/*Dump dei dati per la tabella `film` */


INSERT INTO `film` (`id`, `name`, `author`, `genre`, `descrizione`, `locandina`, `tipo`) VALUES
('1', 'The Wolf of Wall Street', 'Martin Scorsese', 'Drammatico' , 'Il film narra l''ascesa e la caduta di Jordan Bellfort, spregiudicato broker newyorkese interpretato da Leonardo Di Caprio, fulcro della pellicola è la descrizione della sua vita, fatta di eccessi e vizi che lo porteranno poi a una rovinosa caduta.', 'https://i.imgur.com/KrdARhS.jpg', 'jpeg'),
('2', 'The Hateful Eight', 'Quentin Tarantino', 'Western', 'Alcuni anni dopo la fine della guerra civile il cacciatore di taglie John Ruth chiamato "il boia" , scorta la latitante Daisy Domergue. Nel corso del loro viaggio incontrano due sconosciuti: il Maggiore Marquis Warren, ex soldato diventato cacciatore di taglie e Chris Mannix, un rinnegato del Sud che afferma di essere il nuovo sceriffo della città. A causa di una tormenta di neve sono tutti costretti a rifugiarsi in un negozio chiamato "Minnie", dove con l''inganno, vengono attirati in un terreno molto pericoloso.', 'https://i.imgur.com/hWdDX1j.jpg','jpeg'),
('3', 'No game no life zero', 'Yu Kamiya', 'Fantasy', 'Capitolo della serie No Game no Life, che ha come protagonisti il fratello e sorella Sora e Shiro, due NEET imbattibili in qualsiasi gioco. Sono conosciute nel mondo videoludico come i Senza Nome. Un giorno ricevono una misteriosa sfida a scacchi da un utente anonimo, accettano la sfida ma, al termine della scontro, gli viene posta una domanda che cambierà per sempre il loro destino.', 'https://i.imgur.com/n3sBgtk.jpg', 'jpeg'),
('4', 'Django Unchained', 'Quentin Tarantino', 'Azione', 'Schultz è sulle tracce degli assassini fratelli Brittle, e solo l''aiuto di Django lo porterà a riscuotere la taglia che pende sulle loro teste. Il poco ortodosso Schultz assolda Django con la promessa di donargli la libertà una volta catturati i Brittle, vivi o morti. Il successo dell''operazione induce Schultz a liberare Django, sebbene poi i due decidono di non separarsi. Infatti Schultz parte alla ricerca dei criminali più ricercati del sud con Django al suo fianco. Django ha un solo obiettivo, ritrovare e salvare la moglie Broomhilda, che aveva perso a causa della sua vendita come schiavo.','https://i.imgur.com/9PqulT1.jpg','jpeg'),
('5', 'The Avengers', 'Joss Whedon', 'Fantasy', 'I supereroi più famosi si riuniscono in una squadra di personaggi leggendari come Iron Man, Hulk, Thor, Captain America, Occhio di Falco e Vedova Nera. Quando la comparsa di un nemico inatteso minaccia la tranquillità e la sicurezza del mondo, Nick Fury, direttore dell''agenzia internazionale per il mantenimento della pace conosciuta come S.H.I.E.L.D, si trova ad aver bisogno di una squadra che salvi il pianeta dall''orlo del disastro.', 'https://i.imgur.com/PRsQLmo.jpg', 'jpeg'),
('6', 'Titanic', 'James Cameron', 'Drammatico', 'Film che vede protagonisti Jack e Rose, che si innamorano durante il primo e ultimo viaggio della nave RMS Titanic, definita l''inaffondabile, salpata da Southampton(Inghilterra). Jack è uno spirito libero, Rose invece è fidanzzta con un ricco uomo, ma il loro rapporto non è felice. Si innamora infatti di Jack. Durante la notte tra il 14 e 15 aprile 1912, la nave colpi un iceberg affondando lentamente nel mare e portando con se migliaia di vite tra cui quella di Jack.','https://i.imgur.com/h5Ko8a9.jpg','jpeg'),
('7', 'Steins Gate', 'Kanji Wakabayashi', 'Fantasy', 'Il film è ambientato un anno dopo gli avvenimenti della serie televisiva,i protagonisti vivono nella linea temporale Steins Gate, ma Okabe continua ad avere nella sua mente dei deja vu delle linee temporali alfa e beta. La sua capacità di avere il reading steiner fa si che l''esistenza di Okabe sia parallela alle due linee e venga negata nella linea Steins Gate. Cosi Okabe svanisce nel nulla e nessuno si ricorda della sua esistenza.','https://i.imgur.com/7djvtJu.jpg','jpeg'); 


/* Struttura tabella `followers` */


CREATE TABLE IF NOT EXISTS `followers` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `id_follower` smallint(5) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`,`id_follower`),
  KEY `id_follower` (`id_follower`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


/* Constraints for table `user_info` */

ALTER TABLE `user_info`
ADD CONSTRAINT `user_info_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

 /* Constraints for table `followers` */
 ALTER TABLE `followers`
  ADD CONSTRAINT `followers_ibfk_1` FOREIGN KEY (`id`) REFERENCES `film` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `followers_ibfk_2` FOREIGN KEY (`id_follower`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*
CREATE TABLE `cartacredito` (
  `numero` varchar(16) NOT NULL,
  `titolare` varchar(20) NOT NULL,
  `nome_titolare` varchar(40) DEFAULT NULL,
  `cognome_titolare` varchar(40) DEFAULT NULL,
  `data_scadenza` date DEFAULT NULL,
  `cvv` varchar(3) DEFAULT NULL,
  `ammontare` float DEFAULT NULL,
  PRIMARY KEY (`numero`),
  CONSTRAINT `titolare_carta` FOREIGN KEY (`titolare`) REFERENCES `utente`(`username`) 
);
*/







/*
INSERT INTO `cartacredito` (`numero`,`titolare`, `nome_titolare`, `cognome_titolare`, `data_scadenza`, `cvv`,`ammontare`) VALUES
('1233333333333333','gigipietri', 'gigi', 'marimpietri', '2020-01-01', '200','2561'),
('1222222222222222','dipaclaudia', 'claudia', 'di paolo', '2022-10-01', '234','653'),
('1234123412341234','rustov', 'maurizio', 'natalia', '2029-10-10', '123','9866');
*/