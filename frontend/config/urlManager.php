<?php
return [
    'enablePrettyUrl'   =>  true,
    'showScriptName'    =>  false,
    'rules' =>  [
        ''                              =>  'site/index',
        '/'                              =>  'site/index',
        'images/<link:(.*)>'            =>  'site/images',
        '<module:(rss)>'                      =>  '<module>/default/index',
        'rss/<id:(\w+)>-<link:(.*)>'    =>  'rss/default/feed',
        '<module:(rss)>/<action>'             =>  '<module>/default/<action>',
        '<link:(.*)><id:(\/\d+)>-<newsLink:(.*)>'  =>  'site/news',
        '<link:(.*)>'                   =>  'site/category',
    ]
];