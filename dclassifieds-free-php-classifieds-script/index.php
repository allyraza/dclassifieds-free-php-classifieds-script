<?php
/**********************************************************************************
* DClassifieds                                                                    *
* Open-Source Project Inspired by Dinko Georgiev (webmaster@dclassifieds.eu)      *
* =============================================================================== *
* Software Version:           0.1b                                           	  *
* Software by:                Dinko Georgiev     								  *
* Support, News, Updates at:  http://www.dclassifieds.eu                       	  *
***********************************************************************************
* This program is free software; you may redistribute it and/or modify it under   *
* the terms of the provided license.          									  *
*                                                                                 *
* This program is distributed in the hope that it is and will be useful, but      *
* WITHOUT ANY WARRANTIES; without even any implied warranty of MERCHANTABILITY    *
* or FITNESS FOR A PARTICULAR PURPOSE.                                            *
*                                                                                 *
* See the "license.txt" file for details of the license.                          *
* The latest version can always be found at http://www.gnu.org/licenses/gpl.txt   *
**********************************************************************************/
if(!ini_get('short_open_tag')){
	ini_set('short_open_tag', 1);
}

//for debugging/devolopment set this to 1
ini_set('display_errors' , 1);

//uncomment for debugging/devolopment
//$yii=dirname(__FILE__).'/yii/framework/yii.php';

//comment this if uncomment the above
$yii=dirname(__FILE__).'/yii/framework/yiilite.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG', true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

//define('YII_ENABLE_ERROR_HANDLER', true);
//define('YII_ENABLE_EXCEPTION_HANDLER', true);

require_once($yii);
Yii::createWebApplication($config)->run();