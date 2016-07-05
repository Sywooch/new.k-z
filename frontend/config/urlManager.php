<?php
return [
    'enablePrettyUrl'   =>  true,
    'showScriptName'    =>  false,
    'enableStrictParsing' => false,
    'rules' =>  [
        ''                              =>  'site/index',
        '/'                              =>  'site/index',
        'images/<link:(.*)>'            =>  'site/images',
        '<module:(rss)>'                      =>  '<module>/default/index',
        'rss/<id:(\w+)>-<link:(.*)>'    =>  'rss/default/feed',
        '<action:(home)>'  =>  'site/<action>',
        '<module:(rss)>/<action>'             =>  '<module>/default/<action>',
        [
            'pattern'   =>  '<link:(.*)><id:(\/\d+)>-<newsLink:(.*)>',
            'route'     =>  'site/news',
        ],
        '<link:(.*)>'                   =>  'site/category',
    ]
];