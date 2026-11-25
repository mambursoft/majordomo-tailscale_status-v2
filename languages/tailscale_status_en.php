<?php
$dictionary=array(
'TAILSCALE_STATUS_ENDPOINT'=>'API endpoint',
'TAILSCALE_STATUS_METHOD'=>'HTTP method',
'TAILSCALE_STATUS_TOKEN'=>'Access token',
'TAILSCALE_STATUS_REGION'=>'Region / route',
'TAILSCALE_STATUS_TRACKING'=>'Tracking number',
'TAILSCALE_STATUS_PAYLOAD'=>'POST payload template',
'TAILSCALE_STATUS_HINT'=>'Local-first module. No data leaves the system until api() is called.',
'TAILSCALE_STATUS_LAST'=>'Last result'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}