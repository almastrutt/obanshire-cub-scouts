{"filter":false,"title":"db_connect.php","tooltip":"/config/db_connect.php","undoManager":{"mark":19,"position":19,"stack":[[{"start":{"row":0,"column":0},"end":{"row":19,"column":6},"action":"insert","lines":["<?php","","    global $pdo; ","    ","    $host='127.0.0.1';","    $db='Scotland';","    $user='root';","    $pass='';","    $charset='utf8';","    ","    $dsn=\"mysql:host=$host;dbname=$db;charset=$charset\";","    $opt=[","    ","        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, ","        PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC, ","        PDO::ATTR_EMULATE_PREPARES=>false,","    ];","    $db = new PDO($dsn, $user, $pass, $opt);","","?>    "],"id":1}],[{"start":{"row":5,"column":16},"end":{"row":5,"column":17},"action":"remove","lines":["d"],"id":2}],[{"start":{"row":5,"column":15},"end":{"row":5,"column":16},"action":"remove","lines":["n"],"id":3}],[{"start":{"row":5,"column":14},"end":{"row":5,"column":15},"action":"remove","lines":["a"],"id":4}],[{"start":{"row":5,"column":13},"end":{"row":5,"column":14},"action":"remove","lines":["l"],"id":5}],[{"start":{"row":5,"column":12},"end":{"row":5,"column":13},"action":"remove","lines":["t"],"id":6}],[{"start":{"row":5,"column":11},"end":{"row":5,"column":12},"action":"remove","lines":["o"],"id":7}],[{"start":{"row":5,"column":10},"end":{"row":5,"column":11},"action":"remove","lines":["c"],"id":8}],[{"start":{"row":5,"column":9},"end":{"row":5,"column":10},"action":"remove","lines":["S"],"id":9}],[{"start":{"row":5,"column":9},"end":{"row":5,"column":10},"action":"insert","lines":["O"],"id":10}],[{"start":{"row":5,"column":10},"end":{"row":5,"column":11},"action":"insert","lines":["b"],"id":11}],[{"start":{"row":5,"column":11},"end":{"row":5,"column":12},"action":"insert","lines":["a"],"id":12}],[{"start":{"row":5,"column":12},"end":{"row":5,"column":13},"action":"insert","lines":["n"],"id":13}],[{"start":{"row":5,"column":13},"end":{"row":5,"column":14},"action":"insert","lines":["s"],"id":14}],[{"start":{"row":5,"column":14},"end":{"row":5,"column":15},"action":"insert","lines":["h"],"id":15}],[{"start":{"row":5,"column":15},"end":{"row":5,"column":16},"action":"insert","lines":["i"],"id":16}],[{"start":{"row":5,"column":16},"end":{"row":5,"column":17},"action":"insert","lines":["r"],"id":17}],[{"start":{"row":5,"column":17},"end":{"row":5,"column":18},"action":"insert","lines":["e"],"id":18}],[{"start":{"row":5,"column":18},"end":{"row":5,"column":19},"action":"insert","lines":["C"],"id":19}],[{"start":{"row":5,"column":19},"end":{"row":5,"column":20},"action":"insert","lines":["S"],"id":20}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":3,"column":4},"end":{"row":3,"column":4},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1516372112000,"hash":"930f46ced2de71d05faa1dfbea9e8b2c0a2ef9f6"}