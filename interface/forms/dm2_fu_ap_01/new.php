<?php

/**
 * dm2_fu_ap_01 form
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
require_once("$srcdir/api.inc");
require_once("$srcdir/patient.inc");

function printarray($array)
{
    print '<table>';
    $headers = array_keys(reset($array));

    print '<tr>';
    foreach($headers as $header){
        print '<th>'.$header.'</th>';
    }
    print '<tr>';

    foreach($array as $row){
        print '<tr>';
        foreach($row as $col){
            print '<td>'.$col.'</td>';
        }
        print '</tr>';
    }
    print '</table>';
}

require("C_FormDM2_FU_AP_01.class.php");
if (is_numeric($pid)) {
    $result = getPatientData($pid, "fname,lname");
    printarray($result);
}
$c = new C_FormDM2_FU_AP_01();
echo $c->default_action();
