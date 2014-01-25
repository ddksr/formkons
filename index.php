<?php

include_once 'formkons.php';

$form = new Formkons(array("method"=>"post"));


$name = $form->add_element("input", "name", array("type"=>"text"));
$name->set_label("Name");
$name->set_validation(array('required'));

$submit = $form->add_element("input", "submit", array("type"=>"submit"));


if($form->submitted_and_valid()) {
	echo "Form was submitted\n";
	var_dump($_POST);
}
else {
	
	echo $form->html();
	//include_once 'form_view.php';
}
