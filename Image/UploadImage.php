<?php

namespace Implementations\Image;

class UploadImage extends Upload{
	 protected $permitted = [
        'image/gif',
        'image/jpeg',
        'image/pjpeg',
        'image/png'
    ];

    public function __construct() {
    	parent::__construct($path);

    	$this->permitted = $permitted;
    }
}