<?php
return [
    'enablePrettyUrl'   =>  true,
    'showScriptName'    =>  false,
    'rules' =>  [
        ''                              =>  'site/index',
        '/'                              =>  'site/index',
        'rss/<id:(\w+)>-<link:(.*)>'    =>  'rss/default/feed',
        '<link:(.*)><id:(\/\d+)>-<newsLink:(.*)>'  =>  'site/news',
        '<link:(.*)>'                   =>  'site/category',
        '<module>'                      =>  '<module>/default/index',
        '<module>/<action>'             =>  '<module>/default/<action>'
    ]
];