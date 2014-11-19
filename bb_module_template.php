<?php
/*
Copyright (C) 2012  Kermit Will Richardson, Brimbox LLC

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License Version 3 (�GNU GPL v3�)
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
@module_version = Core;
@maintain_state = Yes;
*/
?>

<?php
//it is good idea to check the permission 
$main->check_permission("bb_brimbox", array(3,4,5));

/* Begin State */
//it is necessary to retrieve the state to echo it back into the form
$main->retrieve($con, $array_state);
$arr_state = $main->load($module, $array_state);

/**** Handle State ****/

$main->update($array_state, $module, $arr_state);
/**** End State ****/

/**** Module Output ****/

/**** Begin Form ***/
//echos out the form called bb_form
$main->echo_form_begin();
//echos out the current module variable 
$main->echo_module_vars($module);

$main->echo_input("var6");
$main->echo_button("test", array("number"=>1,"label"=>"test"));


/**** Form Variables ****/

//echos out the state
$main->echo_state($array_state);
//form end
$main->echo_form_end();
/**** End Form ***/

/**** More Module Output ****/
?>