<?php
include_once("./Services/UIComponent/classes/class.ilUserInterfaceHookPlugin.php");

class ilConfirmDownloadPlugin extends ilUserInterfaceHookPlugin
{
	function getPluginName()
	{
		return "ConfirmDownload";
	}

}

?>
