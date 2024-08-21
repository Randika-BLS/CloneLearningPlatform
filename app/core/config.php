<?php

/****
 * app info
 */
define('APP_NAME','Udemy CLone');
define('APP_DESC','Free and paid tutotrials');


/****
 * database config
 */
 
if($_SERVER['SERVER_NAME'] == 'localhost'){
    //database config for your local server
    define('DBHOST','localhost');
    define('DBNAME','udemy_db');
    define('DBUSER','root');
    define('DBPASS','');
    define('DBDRIVER','mysql');

    //root path e.g. localhost
    define('ROOT','http://localhost/udemy/public');

}else{
    //database config for your live server
    define('DBHOST','localhost');
    define('DBNAME','udemy_db');
    define('DBUSER','root');
    define('DBPASS','');
    define('DBDRIVER','mysql');

    //root path e.g https://www.yourwebsite.com
    define('ROOT','http://');
}