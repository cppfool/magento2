<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

/**
 * System config image field backend model for Zend PDF generator
 */
namespace Magento\Backend\Model\Config\Backend\Image;

class Favicon extends \Magento\Backend\Model\Config\Backend\Image
{
    /**
     * The tail part of directory path for uploading
     *
     */
    const UPLOAD_DIR = 'favicon';

    /**
     * Return path to directory for upload file
     *
     * @return string
     * @throw \Magento\Framework\Model\Exception
     */
    protected function _getUploadDir()
    {
        return $this->_mediaDirectory->getAbsolutePath($this->_appendScopeInfo(self::UPLOAD_DIR));
    }

    /**
     * Makes a decision about whether to add info about the scope.
     *
     * @return boolean
     */
    protected function _addWhetherScopeInfo()
    {
        return true;
    }

    /**
     * Getter for allowed extensions of uploaded files.
     *
     * @return string[]
     */
    protected function _getAllowedExtensions()
    {
        return ['ico', 'png', 'gif', 'jpg', 'jpeg', 'apng', 'svg'];
    }
}
