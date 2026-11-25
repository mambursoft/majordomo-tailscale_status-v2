<?php
$dictionary=array(
'TAILSCALE_STATUS_ENDPOINT'=>'Адрес API',
'TAILSCALE_STATUS_METHOD'=>'HTTP-метод',
'TAILSCALE_STATUS_TOKEN'=>'Токен доступа',
'TAILSCALE_STATUS_REGION'=>'Регион / маршрут',
'TAILSCALE_STATUS_TRACKING'=>'Номер отправления',
'TAILSCALE_STATUS_PAYLOAD'=>'Шаблон POST-запроса',
'TAILSCALE_STATUS_HINT'=>'Локальный модуль. Данные не отправляются, пока сценарий не вызовет api().',
'TAILSCALE_STATUS_LAST'=>'Последний результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}