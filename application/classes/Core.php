<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Core class for OC common, contains commons functions and helpers
 *
 * @package    OC
 * @category   Core
 * @author     Chema <chema@open-classifieds.com>
 * @copyright  (c) 2009-2013 Open Classifieds Team
 * @license    GPL v3
 */

class Core {

    /**
     * Shortcut to load a group of configs
     * @param type $group
     * @return array 
     */
    public static function config($group)
    {
        return Kohana::$config->load($group);
    }

    /**
     * shortcut for the query method $_GET
     * @param  [type] $key     [description]
     * @param  [type] $default [description]
     * @return [type]          [description]
     */
    public static function get($key,$default=NULL)
    {
    	return (isset($_GET[$key]))?$_GET[$key]:$default;
    }

    /**
     * shortcut for $_POST[]
     * @param  [type] $key     [description]
     * @param  [type] $default [description]
     * @return [type]          [description]
     */
    public static function post($key,$default=NULL)
    {
        return (isset($_POST[$key]))?$_POST[$key]:$default;
    }

    /**
     * shortcut to get or post
     * @param  [type] $key     [description]
     * @param  [type] $default [description]
     * @return [type]          [description]
     */
    public static function request($key,$default=NULL)
    {
        return (Core::post($key)!==NULL)?Core::post($key):Core::get($key,$default);
    }

    /**
     * shortcut for $_COOKIE[]
     * @param  [type] $key     [description]
     * @param  [type] $default [description]
     * @return [type]          [description]
     */
    public static function cookie($key,$default=NULL)
    {
        return (isset($_COOKIE[$key]))?$_COOKIE[$key]:$default;
    }

    /**
     * shortcut for the cache instance
     * 
     * @param   string  $name       name of the cache
     * @param   mixed   $data       data to cache
     * @param   integer $lifetime   number of seconds the cache is valid for, if 0 delete cache
     * @return  mixed    for getting
     * @return  boolean  for setting
     */
    public static function cache($name, $data = NULL, $lifetime = NULL)
    {
        //deletes the cache
        if ($lifetime===0)
            return Cache::instance()->delete($name);

        //in development we do not store or read we always return null
        if (Kohana::$environment == Kohana::DEVELOPMENT)
            return NULL;

        //no data provided we read
        if ($data===NULL)
            return Cache::instance()->get($name);
        //saves data
        else
            return Cache::instance()->set($name,$data, $lifetime);
    }

    /**
     * deletes all the cache + theme temp files
     * @return [type] [description]
     */
    public static function delete_cache()
    {
        Cache::instance()->delete_all();
    }



    /**
     * gets the html content from a URL
     * @param  string $url
     * @param  integer $timeout seconds to timeout the request
     * @return string on success, false on errors
     * @return string      
     */
    public static function curl_get_contents($url, $timeout = 30)
    {
        $c = curl_init(); if ($c === FALSE) return FALSE;
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($c, CURLOPT_URL, $url);
        curl_setopt($c, CURLOPT_TIMEOUT,$timeout); 
        curl_setopt($c, CURLOPT_REFERER, URL::current());
        // curl_setopt($c, CURLOPT_FOLLOWLOCATION, TRUE);
        // $contents = curl_exec($c);
        $contents = core::curl_exec_follow($c);


        if( ! curl_errno($c))
        {
            curl_close($c);
            return ($contents)? $contents : FALSE;
        }
        else 
            return FALSE;
            //throw new Kohana_Exception('Curl '.$url.' error: ' . curl_error($c));
    }

    /**
     * [curl_exec_follow description] http://us2.php.net/manual/en/function.curl-setopt.php#102121
     * @param  curl  $ch          handler
     * @param  integer $maxredirect hoe many redirects we allow
     * @return contents
     */
    public static function curl_exec_follow($ch, $maxredirect = 5) 
    { 
        //using normal curl redirect
        if (ini_get('open_basedir') == '' AND ini_get('safe_mode' == 'Off')) 
        { 
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, $maxredirect > 0); 
            curl_setopt($ch, CURLOPT_MAXREDIRS, $maxredirect); 
        } 
        //using safemode...WTF!
        else 
        { 
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, FALSE); 
            if ($maxredirect > 0) 
            { 
                $newurl = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL); 

                $rch = curl_copy_handle($ch); 
                curl_setopt($rch, CURLOPT_HEADER, TRUE); 
                curl_setopt($rch, CURLOPT_NOBODY, TRUE); 
                curl_setopt($rch, CURLOPT_FORBID_REUSE, FALSE); 
                curl_setopt($rch, CURLOPT_RETURNTRANSFER, TRUE); 

                do 
                { 
                    curl_setopt($rch, CURLOPT_URL, $newurl); 
                    $header = curl_exec($rch); 
                    if (curl_errno($rch))
                        $code = 0; 
                    else 
                    { 
                        $code = curl_getinfo($rch, CURLINFO_HTTP_CODE); 
                        if ($code == 301 OR $code == 302) 
                        { 
                            preg_match('/Location:(.*?)\n/', $header, $matches); 
                            $newurl = trim(array_pop($matches)); 
                        }
                        else 
                            $code = 0; 
                    } 
                } 
                while ($code AND --$maxredirect); 

                curl_close($rch); 

                if (!$maxredirect) 
                { 
                    if ($maxredirect === NULL) 
                        trigger_error('Too many redirects. When following redirects, libcurl hit the maximum amount.', E_USER_WARNING); 
                    else  
                        $maxredirect = 0; 

                    return FALSE; 
                } 

                curl_setopt($ch, CURLOPT_URL, $newurl); 
            } 
        } 

        return curl_exec($ch); 
    } 

    
    /**
     * prints the QR code script from the view
     * @param $url is the URL for your QRCode
     * @param $size in pixels for image
     * @param $EC_level Error Correction Level
     * @param $margin around image
     * @return string HTML or false in case not loaded
     */
    public static function generate_qr($url = NULL, $size ='150',$EC_level='L',$margin='0')
    {
        $url = ($url == NULL)?URL::current():$url;
        $url = urlencode($url);
        return '<img src="//chart.googleapis.com/chart?chs='.$size.'x'.$size.'&cht=qr&chld='.$EC_level.'|'.$margin.'&chl='.$url.'" alt="QR code" width="'.$size.'" height="'.$size.'"/>';
    }

    
    /**
     * checks if URL is using HTTPS
     * we use this since Core::is_HTTPS() checks that the server has a real SSL certificate installed.
     * @return boolean 
     */
    public static function is_HTTPS()
    {
        return (strpos(URL::base(),'https://')===0) ? TRUE : FALSE;
    }


} //end core

/**
 * Common functions
 */


/**
 *
 * Dies and var_dumps
 * @param any $var
 */
function d($var)
{
	die(var_dump($var));
}
