<?php
include_once("./Services/UIComponent/classes/class.ilUIHookPluginGUI.php");
include_once('class.ilConfirmDownloadPlugin.php');

class ilConfirmDownloadUIHookGUI extends ilUIHookPluginGUI
{
    /**
     * Get html for a user interface area
     *
     * @param
     * @param
     * @param array
     * @return array
     */
    function getHTML($a_comp, $a_part, $a_par = array())
    {
        if ($_GET['cmdClass'] == 'iltestexportgui') {
            if ($a_par["tpl_id"] === "Services/Table/tpl.table2.html" && $a_part == "template_get") {
                global $tpl;
                $pl = $this->getPluginObject();
                $this->plugin = new ilConfirmDownloadPlugin();
                if ($tpl) {
                    $tpl->addJavascript($pl->getDirectory() . "/js/confirmdownload.js");
                    $tpl->addOnLoadCode("$('#confirmdownload').confirmdownloadfn('" . $this->plugin->txt('title') . "', '" . $this->plugin->txt('text') . "', '" . $this->plugin->txt('confirmbutton') . "', '" . $this->plugin->txt('cancelbutton') . "');");
                }
            }
        }
        return array("mode" => ilUIHookPluginGUI::KEEP, "html" => "");
    }
}
?>
