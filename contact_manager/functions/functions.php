<?php




function is_active($menu){
	global $active;

	if($menu == $active){
		return 'active';
	}else{
		return '';
	}
}

function is_sub_active($sub){
	global $active_sub;

	if($sub == $active_sub){
		return 'active';
	}else{
		return '';
	}
}

