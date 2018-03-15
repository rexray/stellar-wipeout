# Stellar Wipeout

**STELLAR WIPEOUT** is a gathering of the most insane boarders in the galaxy. The object of the game is to zoom as far as you can into deep space, without wiping out. Players will use a number of characters, each armed with hilariously named stunts that allow them to evade obstacles. Your distance is measured in parsecs and the furthest distance wins.  

## Fork Stellar Wipeout on Playcanvas

Want to add a new character or your own obstacle? Fork the [project on Playcanvas](https://playcanvas.com/project/532978/overview/stellarwipeout) and make the game your own. 

## Run Your Own Local Scoreboard

1. Set up a server for your scoreboard. [WAMP](http://www.wampserver.com/en/), [MAMP](https://www.mamp.info/en/), or similar will work. 
2. Create a database and table for your scoreboard. We called our database “stellarWipeout_data” and our table ‘sw_highscores’. 
3. Add an int ‘id’ field and set it to auto increment.
4. Add a varchar ‘name’ field.
5. Add an int ‘score’ field.
```
CREATE TABLE IF NOT EXISTS `sw_highscores` (
	`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    	`name` varchar(100) NOT NULL,
	`score` int(10) UNSIGNED NOT NULL DEFAULT '0',
    PRIMARY KEY (`id`),
    UNIQUE KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
```
6. Drop the [Stellar Wipeout game files](/StellarWipeout/) in the www directory on your server. 
7. Add the [Stellar Wipeout scoreset folder](/StellarWipeout_LocalScoreboardSetup/SW_Scoreset/) to your www directory.
8. Make sure that both PHP files in the score set folder are updated with the correct username, password, database and table name for your server.
