<?php

namespace yii2module\offline\console\helpers;

use Yii;
use yii2lab\helpers\yii\FileHelper;
use yii2lab\init\domain\exceptions\NotInitApplicationException;

class ConfigHelper
{

	static $config = '@common/config/main-local.php';
	const ENABLED_STR = "'catchAll'";
	const DISABLED_STR = "//'catchAll'";
	
	public static function isDetected()
	{
		$file = Yii::getAlias(self::$config);
		$content = FileHelper::load($file);
		return strpos($content, self::ENABLED_STR) !== false;
	}
	
	public static function restoreConfig()
	{
		$file = Yii::getAlias(self::$config);
		$content = FileHelper::load($file);
		$content = str_replace("return [", "return [\n\t" . self::DISABLED_STR . " => ['offline'],\n", $content);
		FileHelper::save($file, $content);
	}

	public static function getState()
	{
		$file = Yii::getAlias(self::$config);
		$config = @include($file);
		if(!is_array($config)) {
			throw new NotInitApplicationException();
		}
		return !empty($config['catchAll']);
	}

	public static function setState($state)
	{
		$file = Yii::getAlias(self::$config);
		$content = FileHelper::load($file);
		$contentOld = $content;
		if($state) {
			if(strpos($content, self::DISABLED_STR) === false) {
				return null;
			}
			$content = str_replace(self::DISABLED_STR, self::ENABLED_STR, $content);
		} else {
			if(strpos($content, self::DISABLED_STR) !== false) {
				return null;
			}
			$content = str_replace(self::ENABLED_STR, self::DISABLED_STR, $content);
		}
		FileHelper::save($file, $content);
		return $contentOld != $content;
	}
	
}
