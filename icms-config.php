<?php /// Config Controller

	/// Set Time Zone
	date_default_timezone_set('Asia/Jakarta');

    /// Set Theme
    define('APP_THEME',  'example');

    // Set PHP Debug
    define('APP_ERROR_DISABLE', false);

    /// Other Important Config
    define('APP_PATH',  str_ireplace("\\","/",__DIR__) );

    