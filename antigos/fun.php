<?php

function select_files($dir, $select_name, $label = '', $curr_val = '', $mlength = 30) {
    if ($handle = opendir($dir)) {
    	$mydir = '';
        if ($label != '') $mydir .= '
        	<label for="'.$select_name.'">'.$label.'</label>';
        $mydir .= '
        	<select name="'.$select_name.'" id="'.$select_name.'">';
        $curr_val = (isset($_REQUEST[$select_name])) ? $_REQUEST[$select_name] : $curr_val;
        if ($curr_val == '') {
        	$mydir .= '
        	<option value="" selected="selected">...</option>';
        } else {
        	 $myditr .= '
        	 <option value="">...</option>';
        while (false !== ($file = readdir($handle))) {
            $files[] = $file;
        }
        closedir($handle);
        sort($files);
        $counter = 0;
        foreach ($files as $val) {
            if (is_file($dir.$val)) { // show only "real" files
                $mydir .= '
			<option value="'.$val.'"';
                if ($val == $curr_val) $mydir .= ' selected="selected"';
                $name = (strlen($val) > $char_length) ? substr($val, 0, $mlength).'...' : $val.'';
                $mydir .= '>'.$name.'</option>';
                $counter++;
            }
        }
        $mydir .= '
        	</select>';
    }
    if ($counter == 0) {
        $mydir = 'No files!';
    } else {
        return $mydir;
    }
}
?>