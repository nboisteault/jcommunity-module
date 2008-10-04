<?php
/* comments & extra-whitespaces have been removed by jBuildTools*/
/**
* @package    jelix
* @subpackage jtpl_plugin
* @author     Laurent Jouanneau
* @copyright  2007 Laurent Jouanneau
* @link        http://www.jelix.org
* @licence    GNU Lesser General Public Licence see LICENCE file or http://www.gnu.org/licenses/lgpl.html
*/
function jtpl_function_html_formsubmit($tpl, $ctrlname='')
{
	if($ctrlname ==''){
		if(isset($tpl->_privateVars['__submitref']) && $tpl->_privateVars['__submitref'] != ''){
			$ctrlname = $tpl->_privateVars['__submitref'];
			$ctrl = $tpl->_privateVars['__submit'];
		}else{
			$ctrls = $tpl->_privateVars['__form']->getSubmits();
			reset($ctrls);
			$ctrlname = key($ctrls);
			$ctrl = current($ctrls);
		}
	}else{
		$ctrls = $tpl->_privateVars['__form']->getSubmits();
		$ctrl = $ctrls[$ctrlname];
	}
	if($tpl->_privateVars['__form']->isActivated($ctrlname)){
		$tpl->_privateVars['__displayed_submits'][$ctrlname] = true;
		$tpl->_privateVars['__formbuilder']->outputControl($ctrl);
	}
}