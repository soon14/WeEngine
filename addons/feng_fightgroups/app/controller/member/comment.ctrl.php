<?php ?><?php
 /*  起点源码社区 http://Www.qdyma.Com  */
?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');