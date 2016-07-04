<?php
return [
    'enablePrettyUrl'   =>  true,
    'showScriptName'    =>  false,
    'rules'             =>  [
        '<module:(siteusers|categories|news|menu|rss)>'  =>  '<module>/default/index',
        '<action>'                              =>  'site/<action>',
        '<module>/<action>'                     =>  '<module>/default/<action>',
        '<module>/<action>/<id:(\d+)>'          =>  '<module>/default/<action>'
    ]
];