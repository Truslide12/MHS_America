<?php
/**
 * Piwik - Open source web analytics
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 * @category Piwik
 * @package Piwik
 */

/**
 * A DataTable Renderer can produce an output given a DataTable object.
 * All new Renderers must be copied in DataTable/Renderer and added to the factory() method.
 * To use a renderer, simply do:
 *  $render = new Piwik_DataTable_Renderer_Xml();
 *  $render->setTable($dataTable);
 *  echo $render;
 *
 * @package Piwik
 * @subpackage Piwik_DataTable
 */
abstract class Piwik_DataTable_Renderer
{
    protected $table;
    protected $exception;
    protected $renderSubTables = false;
    protected $hideIdSubDatatable = false;

    /**
     * Whether to translate column names (i.e. metric names) or not
     * @var bool
     */
    public $translateColumnNames = false;

    /**
     * Column translations
     * @var array
     */
    private $columnTranslations = false;

    /**
     * The API method that has returned the data that should be rendered
     * @var string
     */
    public $apiMethod = false;

    /**
     * API metadata for the current report
     * @var array
     */
    private $apiMetaData = null;

    /**
     * The current idSite
     * @var int
     */
    public $idSite = 'all';


    public function __construct()
    {
    }

    /**
     * Sets whether to render subtables or not
     *
     * @param bool $enableRenderSubTable
     */
    public function setRenderSubTables($enableRenderSubTable)
    {
        $this->renderSubTables = (bool)$enableRenderSubTable;
    }

    /**
     * @param bool $bool
     */
    public function setHideIdSubDatableFromResponse($bool)
    {
        $this->hideIdSubDatatable = (bool)$bool;
    }

    /**
     * Returns whether to render subtables or not
     *
     * @return bool
     */
    protected function isRenderSubtables()
    {
        return $this->renderSubTables;
    }

    /**
     * Output HTTP Content-Type header
     */
    protected function renderHeader()
    {
        @header('Content-Type: text/plain; charset=utf-8');
    }

    /**
     * Computes the dataTable output and returns the string/binary
     *
     * @return string
     */
    abstract public function render();

    /**
     * Computes the exception output and returns the string/binary
     *
     * @return string
     */
    abstract public function renderException();

    protected function getExceptionMessage()
    {
        $message = self::renderHtmlEntities($this->exception->getMessage());

        // DEBUG
//		$message .= $this->exception->getTraceAsString();
        return $message;
    }

    /**
     * @see render()
     * @return string
     */
    public function __toString()
    {
        return $this->render();
    }

    /**
     * Set the DataTable to be rendered
     *
     * @param Piwik_DataTable|Piwik_DataTable_Simple|Piwik_DataTable_Array $table  table to be rendered
     * @throws Exception
     */
    public function setTable($table)
    {
        if (!is_array($table)
            && !($table instanceof Piwik_DataTable)
            && !($table instanceof Piwik_DataTable_Array)
        ) {
            throw new Exception("DataTable renderers renderer accepts only Piwik_DataTable and Piwik_DataTable_Array instances, and array instances.");
        }
        $this->table = $table;
    }

    /**
     * Set the Exception to be rendered
     *
     * @param Exception $exception  to be rendered
     * @throws Exception
     */
    public function setException($exception)
    {
        if (!($exception instanceof Exception)) {
            throw new Exception("The exception renderer accepts only an Exception object.");
        }
        $this->exception = $exception;
    }


    /**
     * @var array
     */
    static protected $availableRenderers = array('xml',
                                                 'json',
                                                 'csv',
                                                 'tsv',
                                                 'html',
                                                 'php',
												 'sjson'
    );

    /**
     * Returns available renderers
     *
     * @return array
     */
    static public function getRenderers()
    {
        return self::$availableRenderers;
    }

    /**
     * Returns the DataTable associated to the output format $name
     *
     * @param string $name
     * @throws Exception If the renderer is unknown
     * @return Piwik_DataTable_Renderer
     */
    static public function factory($name)
    {
        $name = ucfirst(strtolower($name));
        $className = 'Piwik_DataTable_Renderer_' . $name;

        try {
            Piwik_Loader::loadClass($className);
            return new $className;
        } catch (Exception $e) {
            $availableRenderers = implode(', ', self::getRenderers());
            @header('Content-Type: text/plain; charset=utf-8');
            throw new Exception(Piwik_TranslateException('General_ExceptionInvalidRendererFormat', array($name, $availableRenderers)));
        }
    }

    /**
     * Returns $rawData after all applicable characters have been converted to HTML entities.
     *
     * @param String $rawData  data to be converted
     * @return String
     */
    static protected function renderHtmlEntities($rawData)
    {
        return self::formatValueXml($rawData);
    }

    /**
     * Format a value to xml
     *
     * @param string|number|bool $value  value to format
     * @return int|string
     */
    public static function formatValueXml($value)
    {
        if (is_string($value)
            && !is_numeric($value)
        ) {
            $value = html_entity_decode($value, ENT_COMPAT, 'UTF-8');
            // make sure non-UTF-8 chars don't cause htmlspecialchars to choke
            if (function_exists('mb_convert_encoding')) {
                $value = @mb_convert_encoding($value, 'UTF-8', 'UTF-8');
            }
            $value = htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
            $htmlentities = array("&nbsp;", "&iexcl;", "&cent;", "&pound;", "&curren;", "&yen;", "&brvbar;", "&sect;", "&uml;", "&copy;", "&ordf;", "&laquo;", "&not;", "&shy;", "&reg;", "&macr;", "&deg;", "&plusmn;", "&sup2;", "&sup3;", "&acute;", "&micro;", "&para;", "&middot;", "&cedil;", "&sup1;", "&ordm;", "&raquo;", "&frac14;", "&frac12;", "&frac34;", "&iquest;", "&Agrave;", "&Aacute;", "&Acirc;", "&Atilde;", "&Auml;", "&Aring;", "&AElig;", "&Ccedil;", "&Egrave;", "&Eacute;", "&Ecirc;", "&Euml;", "&Igrave;", "&Iacute;", "&Icirc;", "&Iuml;", "&ETH;", "&Ntilde;", "&Ograve;", "&Oacute;", "&Ocirc;", "&Otilde;", "&Ouml;", "&times;", "&Oslash;", "&Ugrave;", "&Uacute;", "&Ucirc;", "&Uuml;", "&Yacute;", "&THORN;", "&szlig;", "&agrave;", "&aacute;", "&acirc;", "&atilde;", "&auml;", "&aring;", "&aelig;", "&ccedil;", "&egrave;", "&eacute;", "&ecirc;", "&euml;", "&igrave;", "&iacute;", "&icirc;", "&iuml;", "&eth;", "&ntilde;", "&ograve;", "&oacute;", "&ocirc;", "&otilde;", "&ouml;", "&divide;", "&oslash;", "&ugrave;", "&uacute;", "&ucirc;", "&uuml;", "&yacute;", "&thorn;", "&yuml;", "&euro;");
            $xmlentities = array("&#162;", "&#163;", "&#164;", "&#165;", "&#166;", "&#167;", "&#168;", "&#169;", "&#170;", "&#171;", "&#172;", "&#173;", "&#174;", "&#175;", "&#176;", "&#177;", "&#178;", "&#179;", "&#180;", "&#181;", "&#182;", "&#183;", "&#184;", "&#185;", "&#186;", "&#187;", "&#188;", "&#189;", "&#190;", "&#191;", "&#192;", "&#193;", "&#194;", "&#195;", "&#196;", "&#197;", "&#198;", "&#199;", "&#200;", "&#201;", "&#202;", "&#203;", "&#204;", "&#205;", "&#206;", "&#207;", "&#208;", "&#209;", "&#210;", "&#211;", "&#212;", "&#213;", "&#214;", "&#215;", "&#216;", "&#217;", "&#218;", "&#219;", "&#220;", "&#221;", "&#222;", "&#223;", "&#224;", "&#225;", "&#226;", "&#227;", "&#228;", "&#229;", "&#230;", "&#231;", "&#232;", "&#233;", "&#234;", "&#235;", "&#236;", "&#237;", "&#238;", "&#239;", "&#240;", "&#241;", "&#242;", "&#243;", "&#244;", "&#245;", "&#246;", "&#247;", "&#248;", "&#249;", "&#250;", "&#251;", "&#252;", "&#253;", "&#254;", "&#255;", "&#8364;");
            $value = str_replace($htmlentities, $xmlentities, $value);
        } elseif ($value === false) {
            $value = 0;
        }
        return $value;
    }

    /**
     * Translate column names to the current language.
     * Used in subclasses.
     *
     * @param array $names
     * @return array
     */
    protected function translateColumnNames($names)
    {
        if (!$this->apiMethod) {
            return $names;
        }

        // load the translations only once
        // when multiple dates are requested (date=...,...&period=day), the meta data would
        // be loaded lots of times otherwise
        if ($this->columnTranslations === false) {
            $meta = $this->getApiMetaData();
            if ($meta === false) {
                return $names;
            }

            $t = Piwik_API_API::getDefaultMetricTranslations();
            foreach (array('metrics', 'processedMetrics', 'metricsGoal', 'processedMetricsGoal') as $index) {
                if (isset($meta[$index]) && is_array($meta[$index])) {
                    $t = array_merge($t, $meta[$index]);
                }
            }

            $this->columnTranslations = & $t;
        }

        foreach ($names as &$name) {
            if (isset($this->columnTranslations[$name])) {
                $name = $this->columnTranslations[$name];
            }
        }

        return $names;
    }

    /**
     * @return array|null
     */
    protected function getApiMetaData()
    {
        if ($this->apiMetaData === null) {
            list($apiModule, $apiAction) = explode('.', $this->apiMethod);

            if (!$apiModule || !$apiAction) {
                $this->apiMetaData = false;
            }

            $api = Piwik_API_API::getInstance();
            $meta = $api->getMetadata($this->idSite, $apiModule, $apiAction);
            if (is_array($meta[0])) {
                $meta = $meta[0];
            }

            $this->apiMetaData = & $meta;
        }

        return $this->apiMetaData;
    }

    /**
     * Translates the given column name
     *
     * @param string $column
     * @return mixed
     */
    protected function translateColumnName($column)
    {
        $columns = array($column);
        $columns = $this->translateColumnNames($columns);
        return $columns[0];
    }

    /**
     * Enables column translating
     *
     * @param bool $bool
     */
    public function setTranslateColumnNames($bool)
    {
        $this->translateColumnNames = $bool;
    }

    /**
     * Sets the api method
     *
     * @param $method
     */
    public function setApiMethod($method)
    {
        $this->apiMethod = $method;
    }

    /**
     * Sets the site id
     *
     * @param int $idSite
     */
    public function setIdSite($idSite)
    {
        $this->idSite = $idSite;
    }

    /**
     * Returns true if an array should be wrapped before rendering. This is used to
     * mimic quirks in the old rendering logic (for backwards compatibility). The
     * specific meaning of 'wrap' is left up to the Renderer. For XML, this means a
     * new <row> node. For JSON, this means wrapping in an array.
     *
     * In the old code, arrays were added to new DataTable instances, and then rendered.
     * This transformation wrapped associative arrays except under certain circumstances,
     * including:
     *  - single element (ie, array('nb_visits' => 0))   (not wrapped for some renderers)
     *  - empty array (ie, array())
     *  - array w/ arrays/DataTable instances as values (ie,
     *            array('name' => 'myreport',
     *                  'reportData' => new Piwik_DataTable())
     *        OR  array('name' => 'myreport',
     *                  'reportData' => array(...)) )
     *
     * @param array $array
     * @param bool $wrapSingleValues Whether to wrap array('key' => 'value') arrays. Some
     *                               renderers wrap them and some don't.
     * @param bool|null $isAssociativeArray Whether the array is associative or not.
     *                                      If null, it is determined.
     * @return bool
     */
    protected static function shouldWrapArrayBeforeRendering(
        $array, $wrapSingleValues = true, $isAssociativeArray = null)
    {
        if (empty($array)) {
            return false;
        }

        if ($isAssociativeArray === null) {
            $isAssociativeArray = Piwik::isAssociativeArray($array);
        }

        $wrap = true;
        if ($isAssociativeArray) {
            // we don't wrap if the array has one element that is a value
            $firstValue = reset($array);
            if (!$wrapSingleValues
                && count($array) === 1
                && (!is_array($firstValue)
                    && !is_object($firstValue))
            ) {
                $wrap = false;
            } else {
                foreach ($array as $value) {
                    if (is_array($value)
                        || is_object($value)
                    ) {
                        $wrap = false;
                        break;
                    }
                }
            }
        } else {
            $wrap = false;
        }

        return $wrap;
    }
}
