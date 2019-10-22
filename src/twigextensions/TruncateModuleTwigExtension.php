<?php
/**
* Truncate module for Craft CMS 3.x
*
* Module to truncate text
*
* @link      https://www.everythingisfun.com
* @copyright Copyright (c) 2019 Everything is Fun
*/

namespace modules\truncatemodule\twigextensions;

use modules\truncatemodule\TruncateModule;

use Craft;

/**
 * @author    Everything is Fun
 * @package   TruncateModule
 * @since     1.0.0
 */
class TruncateModuleTwigExtension extends \Twig_Extension {
 
  // Public Methods
  // ==============

  public function getName() {
    return 'TruncateModule';
  }

 
  public function getFilters() {
    return [
      new \Twig_SimpleFilter('truncate', [$this, 'truncateFunc']),
    ];
  }

 
  public function getFunctions() {
    return [
      new \Twig_SimpleFunction('truncate', [$this, 'truncateFunc']),
    ];
  }


  public function truncateFunc($text = null, $limit = 160, $separator = '…') {
    $result = (strlen($text) > $limit) ? rtrim(substr(strip_tags($text), 0, $limit), ' .,;:!?/\"') . $separator : $text;
    return $result;
  }
}
