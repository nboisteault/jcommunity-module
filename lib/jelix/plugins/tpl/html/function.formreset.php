<?php
/* comments & extra-whitespaces have been removed by jBuildTools*/
/**
* @package    jelix
* @subpackage jtpl_plugin
* @author     Dominique Papin
* @copyright  2007 Dominique Papin
* @link        http://www.jelix.org
* @licence    GNU Lesser General Public Licence see LICENCE file or http://www.gnu.org/licenses/lgpl.html
*/
function jtpl_function_html_formreset($tpl)
{
	if($ctrl = $tpl->_privateVars['__form']->getReset()){
		if($tpl->_privateVars['__form']->isActivated($ctrl->ref))
			$tpl->_privateVars['__formbuilder']->outputControl($ctrl);
	}
}