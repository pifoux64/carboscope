<?php

if (! defined ( 'ABSPATH' )) {
	exit (); // Exit if accessed directly
}

require_once __DIR__ . '/libs/vendor/autoload.php';

if (! function_exists ( 'maxicharts_log' )) {
	function maxicharts_log($message) {
		if (WP_DEBUG === true) {
			if (is_array ( $message ) || is_object ( $message )) {
				error_log ( print_r ( $message, true ) );
			} else {
				error_log ( $message );
			}
		}
	}
}


if (! class_exists ( 'MAXICHARTSAPI' )) {
	class MAXICHARTSAPI{
		public static $maxicharts_logger = null;
		
		
		static function getArrayForFieldInForm($gfEntries, $includes) {
			$answersToCatch = array();
			self::getLogger()->info("entries :".count($gfEntries));
			self::getLogger()->info($includes);
			
			foreach ( $gfEntries as $entry ) {
				$answersToCatch [rgar($entry,'id')] = array();
				foreach ( $includes as $idToCatch ) {
					$valToCatch = rgar($entry,strval($idToCatch));
					if (!empty($valToCatch)){
						self::getLogger()->info("catching ".$valToCatch);
						$answersToCatch [rgar($entry,'id')][$idToCatch] = $valToCatch;
					}
					
					
				}
			}
			return $answersToCatch;
		}
		
		public static function getLogger() {
			if (self::$maxicharts_logger == NULL) {
				self::setupLog4PHPLogger ();
			}
			
			return self::$maxicharts_logger;
		}
		static function setupLog4PHPLogger() {
			$fileConfig = false;
			if (! $fileConfig) {
				$dir = plugin_dir_path ( __FILE__ );
				$logFilesPath = $dir . 'logs/maxicharts-%s.log';
				maxicharts_log ( $logFilesPath );
				Logger::configure ( array (
						'rootLogger' => array (
								'appenders' => array (
										'maxicharts' 
								),
								'level' => 'debug' 
						),
						'appenders' => array (
								'maxicharts' => array (
										'class' => 'LoggerAppenderDailyFile',
										'layout' => array (
												'class' => 'LoggerLayoutPattern',
												'params' => array (
														'conversionPattern' => "%date{Y-m-d H:i:s,u} %logger %-5level %F{10}:%L %msg%n %ex" 
												) 
										),
										
										'params' => array (
												'file' => strval ( $logFilesPath ),
												'append' => true,
												'datePattern' => "Y-m-d" 
										) 
								) 
						) 
				) );
				
				self::$maxicharts_logger = Logger::getLogger ( "maxicharts_log4php" );
				maxicharts_log ( "Logger initialized" );
				Logger::getLogger ( __CLASS__ )->debug ( "Logger up!..." );
			}
		}
	}
}