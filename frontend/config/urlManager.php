<?php
return [
    'enablePrettyUrl'   =>  true,
    'showScriptName'    =>  false,
    'rules' =>  [
        'rss/<id:(\w+)>-<link:(.*)>'    =>  'rss/default/feed',
        '<module>'                      =>  '<module>/default/index',
        '<module>/<action>'             =>  '<module>/default/<action>'
    ]
];