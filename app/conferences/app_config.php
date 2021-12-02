<?php

	//application details
		$apps[$x]['name'] = "Conferences";
		$apps[$x]['uuid'] = "b81412e8-7253-91f4-e48e-42fc2c9a38d9";
		$apps[$x]['category'] = "Switch";
		$apps[$x]['subcategory'] = "";
		$apps[$x]['version'] = "1.0";
		$apps[$x]['license'] = "Mozilla Public License 1.1";
		$apps[$x]['url'] = "http://www.fusionpbx.com";
		$apps[$x]['description']['en-us'] = "Conferences is used to setup conference rooms with a name, description, and optional pin number.";
		$apps[$x]['description']['en-gb'] = "Conferences is used to setup conference rooms with a name, description, and optional pin number.";
		$apps[$x]['description']['ar-eg'] = "";
		$apps[$x]['description']['de-at'] = "Konferenzen wird verwendet, um Konferenzräume mit Namen, Beschreibung und optionaler PIN bereit zu stellen.";
		$apps[$x]['description']['de-ch'] = "";
		$apps[$x]['description']['de-de'] = "Konferenzen wird verwendet, um Konferenzräume mit Namen, Beschreibung und optionaler PIN bereit zu stellen.";
		$apps[$x]['description']['es-cl'] = "Las conferencias son usadas para configurar salas con un nombre, descripción y un número de acceso (opcional)";
		$apps[$x]['description']['es-mx'] = "";
		$apps[$x]['description']['fr-ca'] = "Les conferences sont utilises pour la configuration de chambres avec un nom, descrption et nom d'access (facultatif)";
		$apps[$x]['description']['fr-fr'] = "Les conferences servent à configurer des salles avec un nom, une description et un code pin facultatif";
		$apps[$x]['description']['he-il'] = "";
		$apps[$x]['description']['it-it'] = "";
		$apps[$x]['description']['nl-nl'] = "Conferenties worden gebruikt om gespreksruimtes op te zetten met een naam omschrijving en optionele PIN code.";
		$apps[$x]['description']['pl-pl'] = "";
		$apps[$x]['description']['pt-br'] = "";
		$apps[$x]['description']['pt-pt'] = "Conferências é usado para configurar salas de conferências com um nome, descrição e número de pin opcional.";
		$apps[$x]['description']['ro-ro'] = "";
		$apps[$x]['description']['ru-ru'] = "";
		$apps[$x]['description']['sv-se'] = "";
		$apps[$x]['description']['uk-ua'] = "";

	//destination details
		$y=0;
		$apps[$x]['destinations'][$y]['type'] = "sql";
		$apps[$x]['destinations'][$y]['label'] = "conferences";
		$apps[$x]['destinations'][$y]['name'] = "conferences";
		$apps[$x]['destinations'][$y]['where'] = "where domain_uuid = '\${domain_uuid}' and conference_enabled = 'true' ";
		$apps[$x]['destinations'][$y]['order_by'] = "conference_name asc";
		$apps[$x]['destinations'][$y]['field']['conference_uuid'] = "conference_uuid";
		$apps[$x]['destinations'][$y]['field']['name'] = "conference_name";
		$apps[$x]['destinations'][$y]['field']['destination'] = "conference_extension";
		$apps[$x]['destinations'][$y]['field']['extension'] = "conference_extension";
		$apps[$x]['destinations'][$y]['field']['description'] = "conference_description";
		$apps[$x]['destinations'][$y]['select_value']['dialplan'] = "transfer:\${destination} XML \${context}";
		$apps[$x]['destinations'][$y]['select_value']['ivr'] = "menu-exec-app:transfer \${destination} XML \${context}";
		$apps[$x]['destinations'][$y]['select_label'] = "\${destination} \${name} \${description}";

	//permission details
		$y=0;
		$apps[$x]['permissions'][$y]['name'] = "conference_view";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "9f2a8c08-3e65-c41c-a716-3b53d42bc4d4";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "user";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_add";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_edit";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "user";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_delete";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_user_view";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";;
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_user_add";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_user_edit";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_user_delete";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_email_address";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_destinations";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";


	//cache details
		$apps[$x]['cache']['key'] = "dialplan.\${domain_name}";

	//schema details
		$y=0;
		$apps[$x]['db'][$y]['table']['name'] = "v_conferences";
		$apps[$x]['db'][$y]['table']['parent'] = "";
		$z=0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_domains";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "domain_uuid";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "conference_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "dialplan_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_dialplans";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "dialplan_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "conference_name";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['search'] = 'true';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the conference name.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "conference_extension";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['search'] = 'true';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the conference extension number.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "conference_pin_number";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['search'] = 'true';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Optional pin number to secure access to the conference.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "conference_profile";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Conference Profile is a collection of settings for the conference.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "conference_email_address";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['search'] = 'true';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Optional email address for the conference.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "conference_accountcode";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Optional accountcode for the conference.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "conference_flags";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Optional conference flags. examples: mute|deaf|waste|moderator";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "conference_order";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the order number.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "conference_description";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['search'] = 'true';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the description.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "conference_enabled";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Select whether to enable or disable the conference.";

		$y++;
		$apps[$x]['db'][$y]['table']['name'] = "v_conference_users";
		$apps[$x]['db'][$y]['table']['parent'] = "v_conferences";
		$z=0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "conference_user_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_domains";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "conference_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_conferences";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "conference_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "user_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_users";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "user_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";

?>
