{"filter":false,"title":"database.php","tooltip":"/config/database.php","undoManager":{"mark":2,"position":2,"stack":[[{"start":{"row":1,"column":0},"end":{"row":1,"column":96},"action":"insert","lines":["$heroku_db_url = parse_url(env('DATABASE_URL', \t\"postgres://forge:forge@localhost:5432/forge\"));"],"id":2}],[{"start":{"row":85,"column":10},"end":{"row":86,"column":0},"action":"insert","lines":["",""],"id":3},{"start":{"row":86,"column":0},"end":{"row":86,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":86,"column":8},"end":{"row":95,"column":19},"action":"insert","lines":["'pg-heroku' => [","\t                'driver' => 'pgsql',","\t                'host' => $heroku_db_url['host'],","\t                'database' => substr($heroku_db_url['path'], 1),","\t                'username' => $heroku_db_url['user'],","\t                'password' => $heroku_db_url['pass'],","\t                'charset' => 'utf8',","\t                'prefix' => '',","\t                'schema' => 'public',","\t                ],"],"id":6}]]},"ace":{"folds":[],"scrolltop":1389,"scrollleft":0,"selection":{"start":{"row":95,"column":19},"end":{"row":95,"column":19},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1556131669294,"hash":"7ea0354691a95940111afbe62797291934c81ef9"}