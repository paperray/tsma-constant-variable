<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/

define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/* CDN Constant Variable */

/*
|--------------------------------------------------------------------------
| Base URL for streaming
|--------------------------------------------------------------------------
|
| url on which all the video streaming should be pointing into
| WITH a trailing slash:
|
*/
define('CDN_STREAMING_URL', 'rtmp://cdn.members.teamskeet.com/membersteamskeet/');

/*
|--------------------------------------------------------------------------
| Download Base URL
|--------------------------------------------------------------------------
|
| url on which all file downloads should be pointing into
| WITH a trailing slash:
|
*/
define('CDN_DOWNLOAD_BASE_URL', 'http://cdn.download.teamskeet.com/');

/*
|--------------------------------------------------------------------------
| Images Base URL
|--------------------------------------------------------------------------
|
| url on which all images should be pointing into
| WITH a trailing slash:
|
*/
define('CDN_IMAGE_BASE_URL', 'http://cdn.teamskeetimages.com/');

/*
|--------------------------------------------------------------------------
| Token ValidFor
|--------------------------------------------------------------------------
|
| used in downloads links, controls how long a token is valid
|
*/
define('CDN_TOKEN_VALIDATOR', 1800);

/*
|--------------------------------------------------------------------------
| Download Token
|--------------------------------------------------------------------------
|
| used in downloads links, used in encrypting the hash value of the download links
|
*/
define('CDN_HASH_SECRET', 'secret');

/*
|--------------------------------------------------------------------------
| Download Property Name
|--------------------------------------------------------------------------
|
| identifier of the download url in the CDN, used in encrypting the download links
|
*/
define('CDN_DL_PROPERTY_NAME', 'cdn.download.teamskeet.com');

/*
|--------------------------------------------------------------------------
| Trailer Property Name
|--------------------------------------------------------------------------
|
| identifier of the trailer url in the CDN, used in encrypting the trailer links
|
*/
define('CDN_TRAILERS_PROPERTY_NAME', 'cdn.trailers.teamskeet.com');

/*
|--------------------------------------------------------------------------
| For Streaming Trailers
|--------------------------------------------------------------------------
|
| url on which all the trailer tour video streaming should be pointing into
|
*/
define('CDN_TOUR_STREAMING_URL', 'rtmp://cdn.tours.teamskeet.com/toursteamskeet/');

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ', 							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE', 					'ab');
define('FOPEN_READ_WRITE_CREATE', 				'a+b');
define('FOPEN_WRITE_CREATE_STRICT', 			'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');

/* my own constants */
define('MYFAVTYPE_GIRLS', 'pornstar');
define('MYFAVTYPE_SCENES', 'scene');
define('MYFAVTYPE_PICS', 'pictures');
define('MYFAVTYPE_SCREENCAPS', 'screencaps');
define('MYFAVTYPE_FULL', 'full');

/* End of file constants.php */
/* Location: ./system/application/config/constants.php */