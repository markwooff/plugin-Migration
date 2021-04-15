<?php
/**
 * Matomo - free/libre analytics platform
 *
 * @link https://matomo.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\Migration\Migrations;

use Piwik\Date;

class Request
{
    /**
     * @var int
     */
    public $sourceIdSite;

    /**
     * @var int
     */
    public $targetIdSite;

    /**
     * @var string
     */
    public $fromDate;

    /**
     * @var string
     */
    public $toDate;

    public function __construct()
    {
        $this->fromDate = '1991-08-06 00:00:00';
        $this->toDate = Date::now()->getDatetime();
    }
}
