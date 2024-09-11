<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * getcount_about Model Action
     * @return Value
     */
	function getcount_about(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM about";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

}
