<?php
/*
 Plugin Name: MaxiCharts CSV Source Add-on
 Plugin URI:  https://maxicharts.com/
 Description: Extend MaxiCharts : Add the possibility to show beautiful Chartjs graphs from CSV files imported in Wordpress
 Version:     1.2.3
 Author:      MaxiCharts
 Author URI:  https://wordpress.org/support/users/munger41/
 License:     GPL2
 License URI: https://www.gnu.org/licenses/gpl-2.0.html
 Text Domain: mcharts_csv
 Domain Path: /languages
 */
if (! defined('ABSPATH')) {
    exit();
}

define('CSV_DEFAULT_MAX_ENTRIES',500);
//define ( 'PLUGIN_PATH', trailingslashit ( plugin_dir_path ( __FILE__ ) ) );

if (!class_exists('maxicharts_reports')) {
    //maxicharts_log("include maxicharts_reports");
    define('MAXICHARTS_PATH',plugin_dir_path ( __DIR__ ));
    //include_once(MAXICHARTS_PATH . 'gf-charts-reports/gf_charts_reports.php');
    /*if (class_exists('maxicharts_reports')) {
     include_once(MAXICHARTS_PATH . 'gf-charts-reports/mcharts_utils.php');
     }*/
    $toInclude = MAXICHARTS_PATH. '/maxicharts/mcharts_utils.php';
    if (file_exists($toInclude)){
        include_once($toInclude);
    }
}


require_once __DIR__ . '/libs/vendor/autoload.php';
use League\Csv\Reader;
use Monolog\Logger;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Formatter\LineFormatter;

if (! class_exists('mcharts_csv_source_plugin')) {
    
    class mcharts_csv_source_plugin
    {
        //protected static $logger = null;
        protected $csvParameters = null;
        
        function __construct()
        {
            
            if (!class_exists('MAXICHARTSAPI')) {
                $msg = __('Please install MaxiCharts before');                
                return $msg;
            }
            
            
            self::getLogger()->debug("Adding Module : " . __CLASS__);
    
            add_shortcode('csv2chartjs', array(
                $this,
                'csv2chartjs_shortcode'
            ));
            
            add_filter ( "maxicharts_get_data_from_source", array (
                $this,
                "get_data_from_csv"
            ), 10, 3 );
            
            add_filter ( 'mcharts_filter_defaults_parameters', array (
                $this,
                'add_default_params'
            ) );
            add_filter ( 'mcharts_return_without_graph', array (
                $this,
                'return_without_graph'
            ) );
            self::getLogger()->debug("Added Module : " . __CLASS__);
            // add_filter( 'process_additionnal_source', array($this,'process_csv_source'), 10, 3 );
        }
        
        /*
         * function add_csv_shortcode() {
         * MAXICHARTSAPI::getLogger ()->debug ( "Adding shortcode : csv2chartjs" );
         * add_shortcode('csv2chartjs', array(
         * $this,
         * 'csv2chartjs_shortcode'
         * ));
         * }
         */
        
        function return_without_graph($atts) {
            /* MAXICHARTSAPI::getLogger ()->debug ( $atts);
             $type = str_replace ( ' ', '', $atts['type']);
             if ($type === 'array' || $type === 'total' || $type === 'list' || $type === 'sum') {
             return true;
             }*/
            return false;
        }
        
        function csv2chartjs_shortcode($atts)
        {
            self::getLogger()->info("Executing shortcode : csv2chartjs");
            if (! is_admin()) {
                $source = 'csv';
                $destination = 'chartjs';
                if (class_exists('maxicharts_reports')) {
                    return maxicharts_reports::chartReports($source, $destination, $atts);
                } else {
                    $msg = "no class maxicharts_reports";
                    self::getLogger()->error($msg);
                    return $msg;
                }
            }
        }
        
        
        function getLogger() {
            if (class_exists('MAXICHARTSAPI')){
                return MAXICHARTSAPI::getLogger ('CSV');
            }
            
        }
        
        
        function get_data_from_csv($reportFields, $source, $atts) {
            if ($source == 'csv') {
                
                $reportFields = array();
                
                extract ( shortcode_atts ($this->csvParameters, $atts ) );
                
                $type = str_replace ( ' ', '', $type );
                $url = str_replace ( ' ', '', $url );
                $columns = maxicharts_reports::get_all_ranges ( $columns );
                $rows = maxicharts_reports::get_all_ranges ( $rows );
                $delimiter = str_replace ( ' ', '', $delimiter );
                MAXICHARTSAPI::getLogger ()->debug ( $columns );
                MAXICHARTSAPI::getLogger ()->debug ( $rows );
                $maxentries = str_replace ( ' ', '', $maxentries );
                if (empty ( $maxentries )) {
                    $maxentries = CSV_DEFAULT_MAX_ENTRIES;
                }
                /*
                 self::getLogger()->debug($defaultsParameters);
                 self::getLogger()->debug($atts);
                 */
                $msg = "Using CSV file : " . $url;
                self::getLogger()->debug($msg);
                
                if (empty($columns) && empty($rows)) {
                    $msg ="Need at least one row of column to chart";
                    self::getLogger()->error($msg);
                    return $msg;
                }
                
                $csvArray = $this->csv_to_array( $url, $delimiter);
                
                //self::getLogger()->debug($reportFields);
                
                $args = array(
                    'columns' => $columns,
                    'rows' => $rows,
                    'maxentries' => $maxentries,
                    'type' => $type,
                    'source' => $source
                    
                );
                
                $reportFields = $this->csv_array_to_report($csvArray, $args);
                //		        $reportFields = apply_filters('mcharts_csv_array_to_report', $csvArray, $args);
                
                self::getLogger()->debug($reportFields);
            }
            return $reportFields;
        }
        
        function get_all_ranges($inputRows) {
            $rawRows = explode ( ',', str_replace ( ' ', '', $inputRows) );
            self::getLogger()->debug ( $rawRows);
            $result = array();
            foreach ($rawRows as $rowsItems) {
                self::getLogger()->debug ($rowsItems);
                if (stripos($rowsItems, '-') !== false) {
                    $limits = explode('-',$rowsItems);
                    $newRows = range($limits[0],$limits[1]);
                    $result = array_merge($result,$newRows);
                } else {
                    $result[] = $rowsItems;
                }
                
            }
            
            if (count($result) == 1 && empty($result[0])){
                $result = false;
            }
            self::getLogger()->debug ( $result);
            return $result;
        }
        
        function process_csv_source($source, $defaultsParameters, $atts) {
            
            
            if ($source == 'csv') {
                
                extract ( shortcode_atts ($this->csvParameters, $atts ) );
                $xcol = str_replace ( ' ', '', $xcol );
                $columns = $this->get_all_ranges($columns);
                $rows = $this->get_all_ranges($rows);
                $delimiter = str_replace ( ' ', '', $delimiter);
                self::getLogger()->debug ( $columns);
                self::getLogger()->debug ( $rows );
                $header_start = str_replace ( ' ', '', $header_start );
                $header_size = str_replace ( ' ', '', $header_size );
                
                // FIXME : process URL instead of server files
                $msg = "Using CSV file : " . $url;
                self::getLogger()->debug ( $msg );
                
                if (empty ( $columns ) && empty ( $rows )) {
                    
                    $msg = "Need at least one row of column to chart";
                    self::getLogger()->error ( $msg );
                    return $msg;
                }
                
                $csvArray = apply_filters ( 'mcharts_csv_file_to_array', $url, $delimiter );
                
                //self::getLogger()->debug ( $reportFields );
                
                $args = array(
                    'columns' => $columns,
                    'rows' => $rows,
                    'maxentries' => $maxentries,
                    'type' => $type,
                    'source' => $source,
                    
                );
                $reportFields = apply_filters ( 'mcharts_csv_array_to_report', $csvArray, $args);
                
                
                self::getLogger()->debug ( $reportFields );
                
            }
            
            return $reportFields;
        }
        
        function add_default_params($defaultsParameters){
            // CSV source
           
            $newParameters = array (
                'type' => 'bar',
                'url' => '',
                'maxentries' => strval ( CSV_DEFAULT_MAX_ENTRIES ),
                'columns' => '',
                'rows' => '',
                'delimiter' => '',
                'information_source' => '',
            );
            
            $this->csvParameters = array_merge($defaultsParameters,$newParameters);
            
            return $this->csvParameters;
        }
        
        function add_root_logger_appender($rootAppenders) {
            $rootAppenders[] = __CLASS__;
            
            return $rootAppenders;
        }
        function add_log_appender($appenders) {
            
            $appenders[__CLASS__] = array (
                'class' => 'LoggerAppenderDailyFile',
                'layout' => array (
                    'class' => 'LoggerLayoutPattern',
                    'params' => array (
                        'conversionPattern' => "%date{Y-m-d H:i:s,u} %logger %-5level %F{10}:%L %msg%n"
                    )
                )
                ,
                
                'params' => array (
                    'file' => $appenders['mcharts_core']['params']['file'],
                    'append' => true,
                    'datePattern' => "Y-m-d"
                )
            );
            
            return $appenders;
        }
        // $newGraph = $this->csvColumnAnalysis ( $csvArray, $header_start, $header_size, $xcol, $idx, $type, $compute, $maxentries );
        function csv_to_array($filename, $delimiter)
        {
            self::getLogger()->debug("###::csv_to_array:" . $filename);
            $errorMsg = '';
            $realPathFilename = realpath($filename);
            $results = array();
            
            if (file_exists($realPathFilename)) {
                self::getLogger()->debug("server path :" . $realPathFilename);
                if (is_readable($realPathFilename)) {
                    try {
                        //$reader = Reader::createFromPath($realPathFilename);
                        //load the CSV document
                        /*
                         $csv = Reader::createFromPath($realPathFilename)->addStreamFilter('convert.iconv.ISO-8859-1/UTF-8')->setDelimiter(';')->setHeaderOffset(0);
                         $results = $csv->fetchAll();
                         */
                        $csv = Reader::createFromPath($realPathFilename);
                        //get the first row, usually the CSV header
                        //$headers = $csv->fetchOne();
                        if (!empty($delimiter)){
                            $csv->setDelimiter($delimiter);
                        }
                        
                        $input_bom = $csv->getInputBOM();
                        
                        if ($input_bom === Reader::BOM_UTF16_LE || $input_bom === Reader::BOM_UTF16_BE) {
                            $csv->appendStreamFilter('convert.iconv.UTF-16/UTF-8');
                        }
                        //get 25 rows starting from the 11th row
                        $results= $csv->fetchAll();
                        
                        
                    } catch (Exception $e) {
                        // Handle exception
                        $errorMsg = 'cannot read file : ' . $realPathFilename;
                        // self::getLogger()->error("file not readable :" . $realPathFilename);
                    }
                } else {
                    $errorMsg = 'cannot read file : ' . $realPathFilename;
                    // self::getLogger()->error("file not readable :" . $realPathFilename);
                }
            } else
                if (filter_var($filename, FILTER_VALIDATE_URL) !== FALSE) {
                    self::getLogger()->debug("url used :" . $filename);
                    try {
                        $content = file_get_contents($filename);
                        self::getLogger()->debug($content);
                        if ($content === false) {
                            // Handle the error
                            $errorMsg = 'file is empty : ' . $filename;
                        } else {
                            // $rows = explode("\n",$content);
                            $rows = explode(PHP_EOL, $content);
                            // self::getLogger()->debug($rows);
                            // $results = array();
                            foreach ($rows as $row) {
                                // str_getcsv(string,separator,enclosure,escape)
                                $results[] = str_getcsv($row,$delimiter);
                            }
                            // self::getLogger()->debug($results);
                        }
                    } catch (Exception $e) {
                        // Handle exception
                        $errorMsg = 'cannot read file at url : ' . $filename;
                    }
                }
            
            if (! empty($errorMsg)) {
                self::getLogger()->error($errorMsg);
                return false;
            }
            
            return $results;
        }
        
        function build_array_from_csv_filepath($url)
        {
            self::getLogger()->debug("build_array_from_csv_filepath");
            $csvArray = $this->csv_to_array($url);
            return $csvArray;
        }
        
        function csv_array_to_report($csvArray, $args)
        {
            $columns = $args['columns'];
            $rows = $args['rows'];
            $maxentries = $args['maxentries'];
            $type = $args['type'];
            $source = $args['source'];
            
            self::getLogger()->debug(count($columns) . ' columns to get');
            self::getLogger()->debug(count($rows) . ' lines parsed');
            $maxColsNb = count($csvArray[0]);
            self::getLogger()->debug($maxColsNb . ' columns in file');
            self::getLogger()->debug('Rows to get ' . implode('/', $rows));
            self::getLogger()->debug($rows);
            self::getLogger()->debug('Columns to get ' . implode('/', $columns));
            self::getLogger()->debug($columns);
            $reportFields = array();
            
            self::getLogger()->debug(array_slice($csvArray, 0, 5));
            
            $vals = array_values($columns);
            $rowTitleColIdx = array_shift($vals);
            
            $rowTitles = array();
            $firstRow = min($rows);
            $firstCol = min($columns);
            $colTitles = $csvArray[$firstRow];
            $index = 0;
            foreach ($csvArray as $csvRowKey => $csvLine) {
                if ($index >= $maxentries) {
                    self::getLogger()->debug('max reached ' . $maxentries);
                    break;
                }
                // self::getLogger()->debug ( $csvRowKey.' : '.implode('/',$csvLine));
                
                if ($index <= $firstRow || (is_array($rows) && count($rows) > 0 && ! in_array($csvRowKey, $rows))) {
                    // self::getLogger()->debug ( 'Skip row '.$csvRowKey.' not in '.implode('/',$rows));
                    $index ++;
                    continue;
                }
                
                $rowTitles[] = $csvLine[$rowTitleColIdx];
                $index ++;
            }
            
            self::getLogger()->debug('ROW TITLES : ' . implode(' / ', $rowTitles));
            self::getLogger()->debug('COL TITLES : ' . implode(' / ', $colTitles));
            
            $entriesProcessed = 0;
            foreach ($csvArray as $csvRowKey => $csvLine) {
                if ($entriesProcessed >= $maxentries) {
                    self::getLogger()->debug('max reached ' . $maxentries);
                    break;
                }
                
                if ((is_array($rows) && count($rows) > 0 && ! in_array($csvRowKey, $rows))) {
                    //self::getLogger()->debug ( 'Skip row '.$csvRowKey.' not in '.implode('/',$csvLine));
                    // $entriesProcessed++;
                    continue;
                }
                if ($csvRowKey == $firstRow) {
                    self::getLogger()->debug ( 'Title row skipped'.$csvRowKey.' not in '.implode('/',$csvLine));
                    $entriesProcessed ++;
                    continue;
                }
                
                //self::getLogger()->debug($csvRowKey . ' : ' . implode('/', $csvLine));
                
                $currentRowTitle = $csvLine[$firstCol];
                // self::getLogger()->debug ( 'Row is '.implode(';',$csvLine) );
                foreach ($csvLine as $csvColKey => $csvCell) {
                    //self::getLogger()->debug ( '___Process '.$csvRowKey.' / '.$csvColKey.' -> '.$csvCell);
                    if ($csvColKey == $firstCol || (is_array($columns) && count($columns) > 0 && ! in_array($csvColKey, $columns))) {
                        // self::getLogger()->debug ( 'Skip col '.$csvColKey.' not in '.implode('/',$columns));
                        
                        continue;
                    }
                    
                    $colTitle = $colTitles[$csvColKey];
                    
                    
                    $numericValueToCatch = $this->tofloat($csvCell);
                    /*
                     $valueToCatch = $csvCell;
                     $trimed = $this->clean($valueToCatch);
                     self::getLogger()->debug($valueToCatch . ' => ' . $trimed);
                     if (is_numeric($trimed)) {
                     $valueToCatch = $trimed; // str_replace (' ','',$values [$yCol]);
                     } else {
                     $valueToCatch = '"' . $this->removeQuotesAndConvertHtml($valueToCatch) . '"';
                     }
                     */
                    self::getLogger()->debug('*** Process ' . $csvRowKey . ' (' . $currentRowTitle . ') / ' . $csvColKey . ' (' . $colTitle . ') -> ' . $csvCell);
                    
                    $reportFields[0]['datasets'][$colTitle]['data'][$currentRowTitle] = $numericValueToCatch;
                    // $reportFields [0] ['datasets'] ['label'] = $colTitle;
                    
                    /*
                     * $reportFields [$id] ['datasets'] [$datasetNameLabel] ['data'] [$datasetValLabel] = $scoreValue;
                     * $reportFields [$id] ['labels'] [] = $datasetValLabel;
                     */
                }
                $entriesProcessed ++;
            }
            
            $reportFields[0]['labels'] = $rowTitles;
            $reportFields[0]['multisets'] = 1;
            
            $reportFields[0]['graphType'] = $type;
            $reportFields[0]['type'] = $source;
            
            self::getLogger()->debug($reportFields);
            
            return $reportFields;
        }
        
        function tofloat($num) {
            $dotPos = strrpos($num, '.');
            $commaPos = strrpos($num, ',');
            $sep = (($dotPos > $commaPos) && $dotPos) ? $dotPos :
            ((($commaPos > $dotPos) && $commaPos) ? $commaPos : false);
            
            if (!$sep) {
                return floatval(preg_replace("/[^0-9]/", "", $num));
            }
            
            return floatval(
                preg_replace("/[^0-9]/", "", substr($num, 0, $sep)) . '.' .
                preg_replace("/[^0-9]/", "", substr($num, $sep+1, strlen($num)))
                );
        }
        
        function csvColumnAnalysis($csvArray, $header_start, $header_size, $xCol, $yCol, $type, $compute, $maxentries)
        {
            $collectionArray = array();
            self::getLogger()->debug("### Options : " . implode('/', array(
                $header_start,
                $header_size,
                $xCol,
                $yCol,
                $type,
                $compute,
                $maxentries
            )));
            $idx = 0;
            $title = "";
            $results = array();
            if ($compute == 'SUM') {
                foreach ($csvArray as $key => $values) {
                    if ($header_start > $idx) {
                        $idx ++;
                        continue;
                    }
                    
                    if ($idx >= $maxentries) {
                        break;
                    }
                    if ($header_size >= $idx && $idx > $header_start) {
                        $title .= $values[$yCol];
                    } else {
                        $collectionArray[] = $values[$yCol];
                    }
                    
                    $idx ++;
                }
                $results ['scores'] = array_count_values ( $collectionArray );
                $results ['data'] = array_values ( $results ['scores'] );
                $results ['labels'] = array_keys ( $results ['scores'] );
            } else {
                self::getLogger()->debug ( "#### Build chart with max " . $maxentries . " CSV datas of column " . $yCol );
                foreach ( $csvArray as $key => $values ) {
                    
                    if ($header_start > $idx) {
                        self::getLogger()->warn ( 'skip ' . $idx );
                        $idx ++;
                        
                        continue;
                    }
                    if ($idx >= $maxentries) {
                        self::getLogger()->warn ( 'max reached ' . $maxentries );
                        break;
                    }
                    if (($header_start + $header_size) > $idx && $idx > $header_start) {
                        $title .= empty ( $values [$yCol] ) ? '' : $values [$yCol] . '\n';
                        self::getLogger()->warn ( '---------- title: ' . $title );
                        $idx ++;
                        continue;
                    } else {
                        
                        $valueToCatch = $values [$yCol];
                        $trimed = $this->clean ( $valueToCatch );
                        self::getLogger()->debug ( $valueToCatch . ' => ' . $trimed );
                        if (is_numeric ( $trimed )) {
                            $valueToCatch = $trimed; // str_replace (' ','',$values [$yCol]);
                        } else {
                            /*
                             * $idx ++;
                             * continue;
                             */
                            $valueToCatch = '"' . $this->removeQuotesAndConvertHtml ( $valueToCatch ) . '"';
                        }
                        
                        $collectionArray [$values [$xCol]] = $valueToCatch;
                        self::getLogger()->debug ( $idx . ' :: ' . $values [$xCol] . ' -> ' . $values [$yCol] );
                    }
                    $idx ++;
                }
                
                self::getLogger()->debug ( $collectionArray );
                $results ['data'] = array_values ( $collectionArray );
                $results ['labels'] = array_keys ( $collectionArray );
            }
            
            if (! empty ( $title )) {
                $results ['label'] = $title;
            }
            
            return $results;
        }
        
        function replace_carriage_return($replace, $string) {
            return str_replace ( array (
                "\n\r",
                "\n",
                "\r"
            ), $replace, $string );
        }
        function removeQuotesAndConvertHtml($str) {
            $res = preg_replace ( '/["]/', '', $str );
            $res = html_entity_decode ( $res );
            $res = $this->replace_carriage_return ( " ", $res );
            
            return $res;
        }
        function removeQuotes($string) {
            return preg_replace ( '/["]/', '', $string ); // Removes special chars.
        }
        function clean($string) {
            $string = str_replace ( ' ', '', $string ); // Replaces all spaces with hyphens.
            
            return preg_replace ( '/[^A-Za-z0-9\-]/', '', $string ); // Removes special chars.
        }
    }
    
}
new mcharts_csv_source_plugin();