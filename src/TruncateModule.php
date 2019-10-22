<?php
/**
 * Truncate module for Craft CMS 3.x
 *
 * Module to truncate text
 *
 * @link      https://www.everythingisfun.com
 * @copyright Copyright (c) 2019 Everything is Fun
 */

namespace modules\truncatemodule;

use modules\truncatemodule\twigextensions\TruncateModuleTwigExtension;

use Craft;
use craft\events\RegisterTemplateRootsEvent;
use craft\events\TemplateEvent;
use craft\i18n\PhpMessageSource;
use craft\web\View;

use yii\base\Event;
use yii\base\InvalidConfigException;
use yii\base\Module;

/**
 * Class TruncateModule
 *
 * @author    Everything is Fun
 * @package   TruncateModule
 * @since     1.0.0
 *
 */


class TruncateModule extends Module {
    // Static Properties
    // =========================================================================

    /**
     * @var TruncateModule
     */
    public static $instance;

    // Public Methods
    // ==============

    public function __construct($id, $parent = null, array $config = []) {
      parent::__construct($id, $parent, $config);
    }

    public function init() {
      Craft::$app->view->registerTwigExtension(new TruncateModuleTwigExtension());
    }

    // Protected Methods
    // ==================
}
