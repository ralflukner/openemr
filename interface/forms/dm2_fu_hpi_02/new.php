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
    /** @noinspection PhpIncludeInspection */
    require_once("$srcdir/patient.inc");
    /** @noinspection PhpIncludeInspection */
    require_once("$srcdir/lists.inc");
}
require("C_FormDM2_FU_HPI_02.class.php");

/* Explore getting information about previous encounter forms of this type */
/* using encounters.php lines ~385 and following as template to learn from */

if (isset($pid)) {
    $sqlBindArray = array();
    $query = "SELECT id FROM form_encounter WHERE pid=$pid";
    $res4 = sqlStatement($query, $sqlBindArray);

    while($result4 = sqlFetchArray($res4)){
        $raw_encounter_date = '';

        $raw_encounter_date = date("Y-m-d", strtotime($result4["date"]));
        $encounter_date = date("D F jS", strtotime($result4["date"]));

    }
}

$c = new C_FormDM2_FU_HPI_02();
echo $c->default_action();
