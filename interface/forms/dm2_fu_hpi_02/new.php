<?php

/**
 * dm2_fu_hpi_02 form
 *
 * @package   OpenEMR
 * @link      http://www.open-emr.org
 * @author    Brady Miller <brady.g.miller@gmail.com>
 * @author    Ralf Lukner <lukner@gmail.com>
 * @copyright Copyright (c) 2019 Brady Miller <brady.g.miller@gmail.com>
 * @copyright Copyright (c) 2021 Ralf Lukner <lukner@gmail.com>
 * @license   https://github.com/openemr/openemr/blob/master/LICENSE GNU General Public License 3
 */

require_once(__DIR__ . "/../../globals.php");
if (!empty($srcdir)) {
    /** @noinspection PhpIncludeInspection */
    require_once("$srcdir/api.inc");
    /** @noinspection PhpIncludeInspection */
    require_once("$srcdir/forms.inc");
}

require("C_FormDM2_FU_HPI_02.class.php");

$c = new C_FormDM2_FU_HPI_02();
echo $c->default_action();
