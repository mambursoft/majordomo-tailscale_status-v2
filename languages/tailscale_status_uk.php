<?php
$dictionary=array(
'TAILSCALE_STATUS_ENDPOINT'=>'Адреса API',
'TAILSCALE_STATUS_METHOD'=>'HTTP-метод',
'TAILSCALE_STATUS_TOKEN'=>'Токен доступу',
'TAILSCALE_STATUS_REGION'=>'Регіон / маршрут',
'TAILSCALE_STATUS_TRACKING'=>'Номер відправлення',
'TAILSCALE_STATUS_PAYLOAD'=>'Шаблон POST-запиту',
'TAILSCALE_STATUS_HINT'=>'Локальний модуль. Дані не надсилаються, доки сценарій не викличе api().',
'TAILSCALE_STATUS_LAST'=>'Останній результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}