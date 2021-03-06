<?php
$BEAUT_PATH = realpath(".")."/Services/COPage/syntax_highlight/php";
if (!isset ($BEAUT_PATH)) return;
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_caopenroad401 extends HFile{
   function HFile_caopenroad401(){
     $this->HFile();	
/*************************************/
// Beautifier Highlighting Configuration File 
// OpenROAD
/*************************************/
// Flags

$this->nocase            	= "1";
$this->notrim            	= "0";
$this->perl              	= "0";

// Colours

$this->colours        	= array("blue", "gray", "brown");
$this->quotecolour       	= "blue";
$this->blockcommentcolour	= "green";
$this->linecommentcolour 	= "green";

// Indent Strings

$this->indent            	= array();
$this->unindent          	= array();

// String characters and delimiters

$this->stringchars       	= array("'");
$this->delimiters        	= array();
$this->escchar           	= "";

// Comment settings

$this->linecommenton     	= array("");
$this->blockcommenton    	= array("/*");
$this->blockcommentoff   	= array("*/");

// Keywords (keyword mapping to colour number)

$this->keywords          	= array(
			"abort" => "1", 
			"all" => "1", 
			"alter" => "1", 
			"any" => "1", 
			"as" => "1", 
			"asc" => "1", 
			"at" => "1", 
			"avg" => "1", 
			"begin" => "1", 
			"between" => "1", 
			"by" => "1", 
			"byref" => "1", 
			"call" => "1", 
			"callframe" => "1", 
			"callproc" => "1", 
			"case" => "1", 
			"clear" => "1", 
			"close" => "1", 
			"commit" => "1", 
			"committed" => "1", 
			"connect" => "1", 
			"continue" => "1", 
			"copy" => "1", 
			"count" => "1", 
			"create" => "1", 
			"current" => "1", 
			"dbevent" => "1", 
			"declare" => "1", 
			"default" => "1", 
			"delete" => "1", 
			"deleterow" => "1", 
			"desc" => "1", 
			"direct" => "1", 
			"disconnect" => "1", 
			"distinct" => "1", 
			"do" => "1", 
			"drop" => "1", 
			"else" => "1", 
			"elseif" => "1", 
			"end" => "1", 
			"endcase" => "1", 
			"enddeclare" => "1", 
			"endfor" => "1", 
			"endif" => "1", 
			"endloop" => "1", 
			"endwhile" => "1", 
			"escape" => "1", 
			"execute" => "1", 
			"exists" => "1", 
			"exit" => "1", 
			"extclassevent" => "1", 
			"fetch" => "1", 
			"field" => "1", 
			"for" => "1", 
			"from" => "1", 
			"gotoframe" => "1", 
			"grant" => "1", 
			"group" => "1", 
			"having" => "1", 
			"if" => "1", 
			"immediate" => "1", 
			"in" => "1", 
			"index" => "1", 
			"initialize" => "1", 
			"inquire_ingres" => "1", 
			"inquire_sql" => "1", 
			"insert" => "1", 
			"insertrow" => "1", 
			"installation" => "1", 
			"integrity" => "1", 
			"into" => "1", 
			"is" => "1", 
			"join" => "1", 
			"key" => "1", 
			"like" => "1", 
			"link" => "1", 
			"lockmode" => "1", 
			"max" => "1", 
			"message" => "1", 
			"min" => "1", 
			"mode" => "1", 
			"modify" => "1", 
			"next" => "1", 
			"nextcase" => "1", 
			"noecho" => "1", 
			"not" => "1", 
			"of" => "1", 
			"on" => "1", 
			"only" => "1", 
			"open" => "1", 
			"openframe" => "1", 
			"order" => "1", 
			"permit" => "1", 
			"procedure" => "1", 
			"prompt" => "1", 
			"qualification" => "1", 
			"raise" => "1", 
			"read" => "1", 
			"register" => "1", 
			"relocate" => "1", 
			"remove" => "1", 
			"repeat" => "1", 
			"repeatable" => "1", 
			"repeated" => "1", 
			"resume" => "1", 
			"return" => "1", 
			"revoke" => "1", 
			"role" => "1", 
			"rollback" => "1", 
			"row" => "1", 
			"rule" => "1", 
			"save" => "1", 
			"savepoint" => "1", 
			"select" => "1", 
			"serializable" => "1", 
			"set" => "1", 
			"sleep" => "1", 
			"some" => "1", 
			"sum" => "1", 
			"system" => "1", 
			"table" => "1", 
			"then" => "1", 
			"to" => "1", 
			"transaction" => "1", 
			"uncommitted" => "1", 
			"union" => "1", 
			"unique" => "1", 
			"until" => "1", 
			"update" => "1", 
			"values" => "1", 
			"view" => "1", 
			"where" => "1", 
			"while" => "1", 
			"with" => "1", 
			"work" => "1", 
			"write" => "1", 
			"AND" => "3", 
			"FALSE" => "3", 
			"NULL" => "3", 
			"OR" => "3", 
			"TRUE" => "3", 
			"BF_BMP" => "4", 
			"BF_GIF" => "4", 
			"BF_SUNRASTER" => "4", 
			"BF_TIFF" => "4", 
			"BF_XBM" => "4", 
			"BF_WINDOWCURSOR" => "4", 
			"BF_WINDOWICON" => "4", 
			"CC_BACKGROUND" => "4", 
			"CC_BLACK" => "4", 
			"CC_BLUE" => "4", 
			"CC_BROWN" => "4", 
			"CC_CYAN" => "4", 
			"CC_FOREGROUND" => "4", 
			"CC_GRAY" => "4", 
			"CC_GREEN" => "4", 
			"CC_LIGHT_BLUE" => "4", 
			"CC_LIGHT_BROWN" => "4", 
			"CC_LIGHT_CYAN" => "4", 
			"CC_LIGHT_GRAY" => "4", 
			"CC_LIGHT_GREEN" => "4", 
			"CC_LIGHT_ORANGE" => "4", 
			"CC_LIGHT_PINK" => "4", 
			"CC_LIGHT_PURPLE" => "4", 
			"CC_LIGHT_RED" => "4", 
			"CC_LIGHT_YELLOW" => "4", 
			"CC_MAGENTA" => "4", 
			"CC_ORANGE" => "4", 
			"CC_PALE_BLUE" => "4", 
			"CC_PALE_BROWN" => "4", 
			"CC_PALE_CYAN" => "4", 
			"CC_PALE_GRAY" => "4", 
			"CC_PALE_GREEN" => "4", 
			"CC_PALE_ORANGE" => "4", 
			"CC_PALE_PINK" => "4", 
			"CC_PALE_PURPLE" => "4", 
			"CC_PALE_RED" => "4", 
			"CC_PALE_YELLOW" => "4", 
			"CC_PINK" => "4", 
			"CC_PURPLE" => "4", 
			"CC_RED" => "4", 
			"CC_WHITE" => "4", 
			"CC_YELLOW" => "4", 
			"CC_DEFAULT_1" => "4", 
			"CC_DEFAULT_2" => "4", 
			"CC_DEFAULT_3" => "4", 
			"CC_DEFAULT_4" => "4", 
			"CC_DEFAULT_5" => "4", 
			"CC_DEFAULT_6" => "4", 
			"CC_DEFAULT_7" => "4", 
			"CC_DEFAULT_8" => "4", 
			"CC_DEFAULT_9" => "4", 
			"CC_DEFAULT_10" => "4", 
			"CC_DEFAULT_11" => "4", 
			"CC_DEFAULT_12" => "4", 
			"CC_DEFAULT_13" => "4", 
			"CC_DEFAULT_14" => "4", 
			"CC_DEFAULT_15" => "4", 
			"CC_DEFAULT_16" => "4", 
			"CC_DEFAULT_17" => "4", 
			"CC_DEFAULT_18" => "4", 
			"CC_DEFAULT_19" => "4", 
			"CC_DEFAULT_20" => "4", 
			"CC_DEFAULT_21" => "4", 
			"CC_DEFAULT_22" => "4", 
			"CC_DEFAULT_23" => "4", 
			"CC_DEFAULT_24" => "4", 
			"CC_DEFAULT_25" => "4", 
			"CC_DEFAULT_26" => "4", 
			"CC_DEFAULT_27" => "4", 
			"CC_DEFAULT_28" => "4", 
			"CC_DEFAULT_29" => "4", 
			"CC_DEFAULT_30" => "4", 
			"CC_SYS_ACTIVEBORDER" => "4", 
			"CC_SYS_ACTIVECAPTION" => "4", 
			"CC_SYS_APPWORKSPACE" => "4", 
			"CC_SYS_BACKGROUND" => "4", 
			"CC_SYS_BTNFACE" => "4", 
			"CC_SYS_BTNSHADOW" => "4", 
			"CC_SYS_BTNTEXT" => "4", 
			"CC_SYS_CAPTIONTEXT" => "4", 
			"CC_SYS_GRAYTEXT" => "4", 
			"CC_SYS_HIGHLIGHT" => "4", 
			"CC_SYS_HIGHLIGHTTEXT" => "4", 
			"CC_SYS_INACTIVEBORDER" => "4", 
			"CC_SYS_INACTIVECAPTION" => "4", 
			"CC_SYS_INACTIVECAPTIONTEXT" => "4", 
			"CC_SYS_MENU" => "4", 
			"CC_SYS_MENUTEXT" => "4", 
			"CC_SYS_SCROLLBAR" => "4", 
			"CC_SYS_SHADOW" => "4", 
			"CC_SYS_WINDOW" => "4", 
			"CC_SYS_WINDOWFRAME" => "4", 
			"CC_SYS_WINDOWTEXT" => "4", 
			"CL_INVALIDVALUE" => "4", 
			"CP_NONE" => "4", 
			"CP_BOTH" => "4", 
			"CP_ROWS" => "4", 
			"CP_COLUMNS" => "4", 
			"CS_CLOSED" => "4", 
			"CS_CURRENT" => "4", 
			"CS_OPEN" => "4", 
			"CS_OPEN_CACHED" => "4", 
			"CS_NOCURRENT" => "4", 
			"CS_NO_MORE_ROWS" => "4", 
			"DC_BW" => "4", 
			"DC_COLOR" => "4", 
			"DP_CLIP_IMAGE" => "4", 
			"DP_AUTOSIZE_FIELD" => "4", 
			"DP_SCALE_IMAGE_HW" => "4", 
			"DP_SCALE_IMAGE_H" => "4", 
			"DP_SCALE_IMAGE_W" => "4", 
			"DS_CONNECTED" => "4", 
			"DS_DISABLED" => "4", 
			"DS_DISCONNECTED" => "4", 
			"DS_INGRES_DBMS" => "4", 
			"DS_INGRESDSK_DBMS" => "4", 
			"DS_NO_DBMS" => "4", 
			"DS_ORACLE_DBMS" => "4", 
			"DS_SQLSERVER_DBMS" => "4", 
			"DV_NULL" => "4", 
			"DV_STRING" => "4", 
			"DV_SYSTEM" => "4", 
			"EH_NEXT_HANDLER" => "4", 
			"EH_RESUME" => "4", 
			"EH_RETRY" => "4", 
			"ER_OK" => "4", 
			"ER_FAIL" => "4", 
			"ER_USER1" => "4", 
			"ER_USER2" => "4", 
			"ER_USER3" => "4", 
			"ER_USER4" => "4", 
			"ER_USER5" => "4", 
			"ER_USER6" => "4", 
			"ER_USER7" => "4", 
			"ER_USER8" => "4", 
			"ER_USER9" => "4", 
			"ER_USER10" => "4", 
			"ER_OUTOFRANGE" => "4", 
			"ER_ROWNOTFOUND" => "4", 
			"ER_NAMEEXISTS" => "4", 
			"EP_NONE" => "4", 
			"EP_INTERACTIVE" => "4", 
			"EP_OUTPUT" => "4", 
			"FA_BOTTOMCENTER" => "4", 
			"FA_BOTTOMLEFT" => "4", 
			"FA_BOTTOMRIGHT" => "4", 
			"FA_CENTER" => "4", 
			"FA_CENTERLEFT" => "4", 
			"FA_CENTERRIGHT" => "4", 
			"FA_DEFAULT" => "4", 
			"FA_NONE" => "4", 
			"FA_TOPCENTER" => "4", 
			"FA_TOPLEFT" => "4", 
			"FA_TOPRIGHT" => "4", 
			"FB_CHANGEABLE" => "4", 
			"FB_CLICKPOINT" => "4", 
			"FB_DIMMED" => "4", 
			"FB_DRAGBOX" => "4", 
			"FB_DRAGSEGMENT" => "4", 
			"FB_FLEXIBLE" => "4", 
			"FB_INVISIBLE" => "4", 
			"FB_LANDABLE" => "4", 
			"FB_MARKABLE" => "4", 
			"FB_MOVEABLE" => "4", 
			"FB_RESIZEABLE" => "4", 
			"FB_VISIBLE" => "4", 
			"FC_LOWER" => "4", 
			"FC_NONE" => "4", 
			"FC_UPPER" => "4", 
			"FM_QUERY" => "4", 
			"FM_READ" => "4", 
			"FM_UPDATE" => "4", 
			"FM_USER1" => "4", 
			"FM_USER2" => "4", 
			"FM_USER3" => "4", 
			"FO_DEFAULT" => "4", 
			"FO_VERTICAL" => "4", 
			"FO_HORIZONTAL" => "4", 
			"FP_BITMAP" => "4", 
			"FP_CLEAR" => "4", 
			"FP_CROSSHATCH" => "4", 
			"FP_DARKSHADE" => "4", 
			"FP_DEFAULT" => "4", 
			"FP_HORIZONTAL" => "4", 
			"FP_LIGHTSHADE" => "4", 
			"FP_SHADE" => "4", 
			"FP_SOLID" => "4", 
			"FP_VERTICAL" => "4", 
			"FT_NOSETVALUE" => "4", 
			"FT_SETVALUE" => "4", 
			"FT_TABTO" => "4", 
			"FT_TAKEFOCUS" => "4", 
			"GF_BOTTOM" => "4", 
			"GF_DEFAULT" => "4", 
			"GF_LEFT" => "4", 
			"GF_RIGHT" => "4", 
			"GF_TOP" => "4", 
			"GW_NO_DBMS" => "4", 
			"GW_INFORMIX_DBMS" => "4", 
			"HC_DOUBLEQUOTE" => "4", 
			"HC_QUOTE" => "4", 
			"HC_SPACE" => "4", 
			"HC_FORMFEED" => "4", 
			"HC_NEWLINE" => "4", 
			"HC_TAB" => "4", 
			"HV_CONTENTS" => "4", 
			"HV_CONTEXT" => "4", 
			"HV_HELPONHELP" => "4", 
			"HV_KEY" => "4", 
			"HV_QUIT" => "4", 
			"LS_DASH" => "4", 
			"LS_DASHDOT" => "4", 
			"LS_DASHDOTDOT" => "4", 
			"LS_DEFAULT" => "4", 
			"LS_DOT" => "4", 
			"LS_SOLID" => "4", 
			"LS_3D" => "4", 
			"LW_DEFAULT" => "4", 
			"LW_MAXIMUM" => "4", 
			"LW_MIDDLE" => "4", 
			"LW_MINIMUM" => "4", 
			"LW_NOLINE" => "4", 
			"LW_THICK" => "4", 
			"LW_THIN" => "4", 
			"LW_VERYTHICK" => "4", 
			"LW_VERYTHIN" => "4", 
			"LW_EXTRATHIN" => "4", 
			"MB_DISABLED" => "4", 
			"MB_ENABLED" => "4", 
			"MB_INVISIBLE" => "4", 
			"MT_ERROR" => "4", 
			"MT_NONE" => "4", 
			"MT_INFO" => "4", 
			"MT_WARNING" => "4", 
			"OP_APPEND" => "4", 
			"OP_NONE" => "4", 
			"OS_DEFAULT" => "4", 
			"OS_SHADOW" => "4", 
			"OS_SOLID" => "4", 
			"OS_3D" => "4", 
			"PU_CANCEL" => "4", 
			"PU_OK" => "4", 
			"QS_ACTIVE" => "4", 
			"QS_INACTIVE" => "4", 
			"QS_SETCOL" => "4", 
			"QY_ARRAY" => "4", 
			"QY_CACHE" => "4", 
			"QY_CURSOR" => "4", 
			"QY_DIRECT" => "4", 
			"RC_CHILDSELECTED" => "4", 
			"RC_DOWN" => "4", 
			"RC_END" => "4", 
			"RC_FIELDFREED" => "4", 
			"RC_FIELDORPHANED" => "4", 
			"RC_GROUPSELECT" => "4", 
			"RC_HOME" => "4", 
			"RC_LEFT" => "4", 
			"RC_MODECHANGED" => "4", 
			"RC_MOUSECLICK" => "4", 
			"RC_MOUSEDRAG" => "4", 
			"RC_NEXT" => "4", 
			"RC_NOTAPPLICABLE" => "4", 
			"RC_PAGEDOWN" => "4", 
			"RC_PAGEUP" => "4", 
			"RC_PARENTSELECTED" => "4", 
			"RC_PREVIOUS" => "4", 
			"RC_PROGRAM" => "4", 
			"RC_RESUME" => "4", 
			"RC_RETURN" => "4", 
			"RC_RIGHT" => "4", 
			"RC_ROWDELETED" => "4", 
			"RC_ROWINSERTED" => "4", 
			"RC_ROWSALLDELETED" => "4", 
			"RC_SELECT" => "4", 
			"RC_TFSCROLL" => "4", 
			"RC_TOGGLESELECT" => "4", 
			"RC_UP" => "4", 
			"RS_CHANGED" => "4", 
			"RS_DELETED" => "4", 
			"RS_NEW" => "4", 
			"RS_UNCHANGED" => "4", 
			"RS_UNDEFINED" => "4", 
			"SK_CLOSE" => "4", 
			"SK_COPY" => "4", 
			"SK_CUT" => "4", 
			"SK_DELETE" => "4", 
			"SK_DETAILS" => "4", 
			"SK_DUPLICATE" => "4", 
			"SK_FIND" => "4", 
			"SK_GO" => "4", 
			"SK_HELP" => "4", 
			"SK_NEXT" => "4", 
			"SK_NONE" => "4", 
			"SK_PASTE" => "4", 
			"SK_PROPS" => "4", 
			"SK_QUIT" => "4", 
			"SK_REDO" => "4", 
			"SK_SAVE" => "4", 
			"SK_TFDELETEALLROWS" => "4", 
			"SK_TFDELETEROW" => "4", 
			"SK_TFFIND" => "4", 
			"SK_TFINSERTROW" => "4", 
			"SK_UNDO" => "4", 
			"SP_APPSTARTING" => "4", 
			"SP_ARROW" => "4", 
			"SP_CROSS" => "4", 
			"SP_IBEAM" => "4", 
			"SP_ICON" => "4", 
			"SP_NO" => "4", 
			"SP_SIZE" => "4", 
			"SP_SIZENESW" => "4", 
			"SP_SIZENS" => "4", 
			"SP_SIZENWSE" => "4", 
			"SP_SIZEWE" => "4", 
			"SP_UPARROW" => "4", 
			"SP_WAIT" => "4", 
			"SY_NT" => "4", 
			"SY_UNIX" => "4", 
			"SY_VMS" => "4", 
			"SY_OS2" => "4", 
			"SY_MSDOS" => "4", 
			"SY_WIN95" => "4", 
			"TF_COURIER" => "4", 
			"TF_HELVETICA" => "4", 
			"TF_LUCIDA" => "4", 
			"TF_MENUDEFAULT" => "4", 
			"TF_NEWCENTURY" => "4", 
			"TF_SYSTEM" => "4", 
			"TF_TIMESROMAN" => "4", 
			"UE_DATAERROR" => "4", 
			"UE_EXITED" => "4", 
			"UE_NOTACTIVE" => "4", 
			"UE_PURGED" => "4", 
			"UE_RESUMED" => "4", 
			"UE_UNKNOWN" => "4", 
			"WI_MOTIF" => "4", 
			"WI_MSWIN32" => "4", 
			"WI_MSWINDOWS" => "4", 
			"WI_NONE" => "4", 
			"WI_PM" => "4", 
			"WP_FLOATING" => "4", 
			"WP_INTERACTIVE" => "4", 
			"WP_PARENTCENTERED" => "4", 
			"WP_PARENTRELATIVE" => "4", 
			"WP_SCREENCENTERED" => "4", 
			"WP_SCREENRELATIVE" => "4", 
			"WV_ICON" => "4", 
			"WV_INVISIBLE" => "4", 
			"WV_UNREALIZED" => "4", 
			"WV_VISIBLE" => "4");

// Special extensions

// Each category can specify a PHP function that returns an altered
// version of the keyword.
        
        

$this->linkscripts    	= array(
			"1" => "donothing", 
			"3" => "donothing", 
			"4" => "donothing");
}


function donothing($keywordin)
{
	return $keywordin;
}

}?>
