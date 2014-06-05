<?php
function makeOptions($array=array(), $sel="") {
$option_html = "";
	if(is_array($array)) {
		foreach($array as $t=>$k) {
			if($t!=$sel) { $option_html.='<option value="'.$t.'">'.$k.'</option>'; }
			else { $option_html.='<option value="'.$t.'" selected>'.$k.'</option>';}
		}
	}
	return $option_html;
}
if(isset($_POST)) {
$val = $_POST["something"]; //name of main select 
}
//How To Use This Function\\
//1.Create Array for options\\
$array = array("val1"=>"Option 1", "val2"=>"Option 2", "val3"=>"Option 3", "val4"=>"Option 4");
//or
$array["val1"] = "Option 1";
$array["val2"] = "Option 2";
$array["val3"] = "Option 3";
$array["val4"] = "Option 4";

//2.Build options\\
$optionsHTML = makeOptions($array, @$val);

//3.Append your options a select\\
?>
<form action="" method="post"><select name="something"><?=$optionsHTML;?></select><button type="submit" name="t">Submit</button></form>
<?php 
//if you submit this form, any selected option will still selected b/c of @$val at makeOptions($array, @$val) ;)
//Take Care 
?>
