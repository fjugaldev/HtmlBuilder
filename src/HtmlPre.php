<?php
/*
 * Copyright 2008 Sven Sanzenbacher
 *
 * This file is part of the naucon package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Naucon\HtmlBuilder;

use Naucon\HtmlBuilder\HtmlElementUniversalAbstract;

/**
 * Html Pre Class
 * preformatted text
 *
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
class HtmlPre extends HtmlElementUniversalAbstract
{
    /**
     * @access      protected
     * @var         string                  html element tag
     */
    protected $tag = 'pre';

    /**
     * Constructor
     *
     * @param       string                  html element content
     */
    public function __construct($content=null)
    {
        $this->setContent($content);
    }
}