<?php

/**
 * @package Flextype Components
 *
 * @author Sergey Romanenko <awilum@yandex.ru>
 * @link http://components.flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype\Component\Agent;

class Agent
{
    /**
     * Mobiles
     *
     * @var array
     */
    public static $mobiles = [
        'ipad',
        'iphone',
        'ipod',
        'android',
        'windows ce',
        'windows phone',
        'mobileexplorer',
        'opera mobi',
        'opera mini',
        'fennec',
        'blackberry',
        'nokia',
        'kindle',
        'ericsson',
        'motorola',
        'minimo',
        'iemobile',
        'symbian',
        'webos',
        'hiptop',
        'palmos',
        'palmsource',
        'xiino',
        'avantgo',
        'docomo',
        'up.browser',
        'vodafone',
        'portable',
        'pocket',
        'mobile',
        'phone',
    ];

    /**
     * Robots
     *
     * @var array
     */
    public static $robots = [
        'googlebot',
        'msnbot',
        'slurp',
        'yahoo',
        'askjeeves',
        'fastcrawler',
        'infoseek',
        'lycos',
        'ia_archiver',
    ];

    /**
     * Searches for a string in the user agent string.
     *
     * @param  array   $agents Array of strings to look for
     * @return boolean
     */
    protected static function find(array $agents) : bool
    {
        // If isset HTTP_USER_AGENT ?
        if (isset($_SERVER['HTTP_USER_AGENT'])) {

            // Loop through $agents array
            foreach ($agents as $agent) {

                // If current user agent == agents[agent] then return true
                if (stripos($_SERVER['HTTP_USER_AGENT'], $agent) !== false) {
                    return true;
                }
            }
        }

        // Else return false
        return false;
    }

    /**
     * Returns true if the user agent that made the request is identified as a mobile device.
     *
     * if (Agent::isMobile()) {
     *     // Do something...
     * }
     *
     * @return boolean
     */
    public static function isMobile() : bool
    {
        return Agent::find(Agent::$mobiles);
    }

    /**
     * Returns true if the user agent that made the request is identified as a robot/crawler.
     *
     * if (Agent::isRobot()) {
     *     // Do something...
     * }
     *
     * @return boolean
     */
    public static function isRobot() : bool
    {
        return Agent::find(Agent::$robots);
    }

    /**
     * Returns TRUE if the string you're looking for exists in the user agent string and FALSE if not.
     *
     * if (Agent::is('iphone')) {
     *     // Do something...
     * }
     *
     * if (Agent::is(array('iphone', 'ipod'))) {
     *     // Do something...
     * }
     *
     * @param  mixed   $device String or array of strings you're looking for
     * @return boolean
     */
    public static function is($device) : bool
    {
        return Agent::find((array) $device);
    }
}
