<?php
/*
 * jQuery File Upload Plugin PHP Example 5.14
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */
ignore_user_abort(true);
set_time_limit(0);

error_reporting(E_ALL | E_STRICT);
require('UploadHandler.php');
//Brax.Me
$upload_handler = new UploadHandler(null, true, null, "");
//$upload_handler = new UploadHandler();
