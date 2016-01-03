<?php
return [
    'enablePrettyUrl'   =>  true,
    'showScriptName'    =>  false,
    'rules'             =>  [
        '<module:(siteusers|categories|news)>'  =>  '<module>/default/index',
        '<action>'                              =>  'site/<action>',
        '<module>/<action>'                     =>  '<module>/default/<action>'
    ]
];