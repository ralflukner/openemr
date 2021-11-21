<?php

/**
 * dm2_fu_labs_02 form
 *
 * @package   OpenEMR
 * @link      http://www.open-emr.org
 * @author    Brady Miller <brady.g.miller@gmail.com>
 * @author    Ralf Lukner <lukner@gmail.com>
 * @copyright Copyright (c) 2019 Brady Miller <brady.g.miller@gmail.com>
 * @copyright Copyright (c) 2021 Ralf Lukner <lukner@gmail.com>
 * @license   https://github.com/openemr/openemr/blob/master/LICENSE GNU General Public License 3
 */

use OpenEMR\Common\ORDataObject\ORDataObject;

define("EVENT_VEHICLE", 1);
define("EVENT_WORK_RELATED", 2);
define("EVENT_SLIP_FALL", 3);
define("EVENT_OTHER", 4);


/**
 * class FormDM2_FU_LABS_02
 *
 */
class FormDM2_FU_LABS_02 extends ORDataObject
{

    /**
     *
     * @access public
     */


    /**
     *
     * static
     */
    var $id;
    var $date;
    var $pid;
    var $user;
    var $groupname;
    var $authorized;
    var $activity;
    var $date_of_labs;
    var $hgb_a1c;
    var $ldl;
    var $serum_creatinine;
    var $egfr;
    var $albumin_creatinine_ratio;
    var $prev_labs_comments;

    /**
     * Constructor sets all Form attributes to their default value
     */

    function __construct($id = "", $_prefix = "")
    {
        if (is_numeric($id)) {
            $this->id = $id;
        } else {
            $id = "";
            $this->date = date("Y-m-d H:i:s");
        }

        $this->_table = "form_dm2_fu_labs_02";
        $this->activity = 1;
        $this->pid = $GLOBALS['pid'];
        if ($id != "") {
            $this->populate();
            //$this->date = $this->get_date();
        }
    }
    function populate()
    {
        parent::populate();
        //$this->temp_methods = parent::_load_enum("temp_locations",false);
    }

    function toString($html = false)
    {
        $string .= "\n"
            . "ID: " . $this->id . "\n";

        if ($html) {
            return nl2br($string);
        } else {
            return $string;
        }
    }
    function set_id($id)
    {
        if (!empty($id) && is_numeric($id)) {
            $this->id = $id;
        }
    }
    function get_id()
    {
        return $this->id;
    }
    function set_pid($pid)
    {
        if (!empty($pid) && is_numeric($pid)) {
            $this->pid = $pid;
        }
    }
    function get_pid()
    {
        return $this->pid;
    }
    function set_activity($tf)
    {
        if (!empty($tf) && is_numeric($tf)) {
            $this->activity = $tf;
        }
    }
    function get_activity()
    {
        return $this->activity;
    }

    function get_date()
    {
        return $this->date;
    }
    function set_date($dt)
    {
        if (!empty($dt)) {
            $this->date = $dt;
        }
    }
    function get_user()
    {
        return $this->user;
    }
    function set_user($u)
    {
        if (!empty($u)) {
            $this->user = $u;
        }
    }
    function get_date_of_labs()
    {
        return $this->date_of_labs;
    }
    function set_date_of_labs($data)
    {
        $this->date_of_labs = $data;
    }
    function get_hgb_a1c()
    {
        return $this->hgb_a1c;
    }
    function set_hgb_a1c($data)
    {
        if (!empty($data)) {
            $this->hgb_a1c = $data;
        }
    }
    function get_ldl()
    {
        return $this->ldl;
    }
    function set_ldl($data)
    {
        if (!empty($data)) {
            $this->ldl = $data;
        }
    }
    function get_serum_creatinine()
    {
        return $this->serum_creatinine;
    }
    function set_serum_creatinine($data)
    {
        if (!empty($data)) {
            $this->serum_creatinine = $data;
        }
    }
    function get_egfr()
    {
        return $this->egfr;
    }
    function set_egfr($data)
    {
        if (!empty($data)) {
            $this->egfr = $data;
        }
    }
    function get_albumin_creatinine_ratio()
    {
        return $this->albumin_creatinine_ratio;
    }
    function set_albumin_creatinine_ratio($data)
    {
        if (!empty($data)) {
            $this->albumin_creatinine_ratio = $data;
        }
    }
    /* prev_labs_comments */
    function get_prev_labs_comments()
    {
        return $this->prev_labs_comments;
    }
    function set_prev_labs_comments($data)
    {
        if (!empty($data)) {
            $this->prev_labs_comments = $data;
        }
    }

    function persist()
    {
        parent::persist();
    }
}   // end of Form
