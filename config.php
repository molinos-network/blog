<?php

    define('LOGMD_POSTS_DIRECTORY', 'posts');
    define('LOGMD_POST_HEADER_DELIM', '++++');
    define('LOGMD_THEME_NAME', 'blog');
    define('LOGMD_AUTH', 'admin');

    define('LOGMD_HTML_TITLE', 'Blog · molinos.network');
    define('LOGMD_HEADER_TITLE', 'molinos.network');
    define('LOGMD_HEADER_SUBTITLE', 'Historias de Urbit, de molinos.network, y de toda la comunidad de habla hispana que forma parte de Urbit.');
    define('LOGMD_FOOTER_LINK', 1);
    define('LOGMD_POSTS_SORT_BY_1', 'TIME'); // can be 'TIME', 'TITLE' or whatever you are using in your posts headers, but it HAS TO BE UPPERCASED, here!
    define('LOGMD_POSTS_SORT_BY_1_ASC', 0); // ascending (1) or descending (0)
    define('LOGMD_POSTS_SORT_BY_2', 'TIME'); // can be 'TIME', 'TITLE' or whatever you are using in your posts headers, but it HAS TO BE UPPERCASED, here!
    define('LOGMD_POSTS_SORT_BY_2_ASC', 1); // ascending (1) or descending (0)
    
    // pagination
    define('LOGMD_POSTS_PER_PAGE', 999);
    define('LOGMD_PAGINATION_PREV', '&ltrif;');
    define('LOGMD_PAGINATION_NEXT', '&rtrif;');
    
    define('LOGMD_ROBOTS', '');
    define('LOGMD_SAFE_MODE', 1);

    define('LOGMD_DEBUG_MODE', 1);

    define('LOGMD_IMAGE_RESIZE_WIDTH', '960'); // target maximum pixel width of the images
    define('LOGMD_IMAGE_RESIZE_QUALITY_JPG', '90'); // should be between 80 (okay) and 100 (very high)
    define('LOGMD_IMAGE_RESIZE_QUALITY_PNG', '8'); // should be between 0 (no compression) and 9 (high compression)


    //    |  DON'T  |
    //    |  TOUCH  |
    //    V  THIS!  V


    //// INTERNAL CONFIG

    // paths
    define('LOGMD_SEP', DIRECTORY_SEPARATOR);
    define('LOGMD_THEME', 'themes' . LOGMD_SEP . LOGMD_THEME_NAME . LOGMD_SEP);
    define('LOGMD_POSTS_DIR_PATH', LOGMD_POSTS_DIRECTORY . LOGMD_SEP);

    // apply debug mode
    ini_set('display_errors', LOGMD_DEBUG_MODE ? 1 : 0);
    ini_set('display_startup_errors', LOGMD_DEBUG_MODE ? 1 : 0);
    error_reporting( LOGMD_DEBUG_MODE ? E_ALL : 0);

?>