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
$p = NULL; // Initialize previous dm2_fu_hp_02 encounter form object
if (isset($pid)&&isset($encounter)) {
    // Find the previous encounter
    $sqlBindArray = array();
    $query = "SELECT * FROM form_encounter WHERE pid=$pid AND encounter<$encounter ORDER BY id DESC";
    $prev_enc_rec_set = sqlStatement($query, $sqlBindArray);
    $prevEncExists = false;
    $encounter_date = '';
    $encounter_no = 0;
    if($prev_enc = sqlFetchArray($prev_enc_rec_set)){
        $prevEncExists = true;
        $encounter_date = date("Y-m-d", strtotime($prev_enc["date"]));
        $encounter_no = $prev_enc['encounter'];
    }

    // if there is a previous encounter,
    // check if it has a dm2_fu_hp_02 form

/*
    // Retrieve previous dm2_fu_hp_02 encounter form object
    $p = new FormDM2_FU_HPI_02($encounter_no);

    // Display the previous form data
    echo '<h2>Previous Form Data</h2>';
    echo '<h3>Date</h3>';
    echo $p->get_date() . '<p>';*/
}

$c = new C_FormDM2_FU_HPI_02();
echo $c->default_action();
