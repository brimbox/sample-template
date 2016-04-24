<?php if (!defined('BASE_CHECK')) exit(); ?>
<?php
/*
Copyright (C) 2012  Kermit Will Richardson, Brimbox LLC

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License Version 3 (“GNU GPL v3”)
as published by the Free Software Foundation. 

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
See the GNU GPL v3 for more details. 

You should have received a copy of the GNU GPL v3 along with this program.
If not, see http://www.gnu.org/licenses/
*/

/* MODULE TEMPLATE */
/* The below is the minimum header needed to install a module */
/*
@module_name = bb_module_template;
@friendly_name = Template;
@interface = bb_brimbox;
@module_type = 3;
@module_version = 2.0;
*/
?>
<?php
//it is good idea to check the permission 
$main->check_permission(array("3_bb_brimbox","4_bb_brimbox","5_bb_brimbox"));

/**** Begin Form ***/
//echos out the form called bb_form
$main->echo_form_begin();
//echos out the current module variable 
$main->echo_module_vars();
//form end
$main->echo_form_end();
/**** End Form ***/
?>
