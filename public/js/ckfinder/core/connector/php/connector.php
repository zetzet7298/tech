<?php
/*
 * CKFinder
 * ========
 * https://ckeditor.com/ckeditor-4/ckfinder/
 * Copyright (c) 2007-2019, CKSource - Frederico Knabben. All rights reserved.
 *
 * The software, this file and its contents are subject to the CKFinder
 * License. Please read the license.txt file before using, installing, copying,
 * modifying or distribute this file or part of its contents. The contents of
 * this file is part of the Source Code of CKFinder.
 */
// echo __DIR__ . '/vendor/autoload.php';

// require_once '/var/www/public/js/ckfinder/core/connector/php/vendor/autoload.php';
require_once '/var/www/vendor/autoload.php';
// Lấy danh sách các class đã được autoload
// $declaredClasses = get_declared_classes();

// // Kiểm tra xem class CKFinder có tồn tại trong danh sách không
// if (in_array('CKSource\CKFinder\CKFinder', $declaredClasses)) {
//     echo "CKFinder class is loaded.\n";
// } else {
//     echo "CKFinder class is not loaded.\n";
// }

// // In ra tất cả các class đã được autoload
// echo "Declared classes:\n";
// print_r($declaredClasses);

use CKSource\CKFinder\CKFinder;

require __DIR__ . '/../../../config.php';

// print_r(new CKFinder(__DIR__ . '/../../../config.php'));
// print_r($config);
// echo "123";

// exit();
$ckfinder = new CKFinder(__DIR__ . '/../../../config.php');
echo "<pre>";
print_r($ckfinder);
echo "</pre>";
$ckfinder->run();
