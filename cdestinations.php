<?php 
				/*Aug 19, 2023 (Sat). Author: YP@C2L3.
					Purpose: Controller file for vhome.php
					Version: 1.0
				*/

				require_once("vdestinations.php");
				
				//HomePage implementation begins
				//handling warnings, url data, meesages and input data sanitization
			 	$b=""; 
				$msg=""; //$flag=""; 
			 	
				if(isset($_GET['submit'])) $b=htmlentities($_GET['submit'], ENT_QUOTES); else $b="";
				if(isset($_GET['sname'])) $sname=htmlentities($_GET['sname'], ENT_QUOTES); else $sname="";
				if(isset($_GET['email'])) $email=htmlentities($_GET['email'], ENT_QUOTES); else $email="";
				//echo $b;
				//if(isset($_GET['flag'])) $flag=htmlentities($_GET['flag'], ENT_QUOTES); else $flag="";
				//if(isset($_GET['msg'])) $msg=htmlentities($_GET['msg'], ENT_QUOTES); else $msg=""; 
				//handling ends
		
				$dpobj= new DestinationPage(); //$dpobj->testObj();
				$title="Welcome to Tour Japan"; $titleimg=""; $cssfilename="./styles.css"; $cssmobile="stylesmobile.css";
				$data=array("title"=>"$title", "titleimg"=>"$titleimg", "cssfilename"=>"$cssfilename", "cssmobile"=>"$cssmobile");
				$dpobj->setPList($data);
				$dpobj->htmlHead();
				$link=$dpobj->connect();
                $rs=$dpobj->selectRecords($fields = array("*"), $tables = array("destination"), "");
				$rs1 = $dpobj->selectRecords($fields = array("*"), $tables = array("attraction"), " ");
                $link=$dpobj->closeLink();
				$dpobj->pageBody($msg,$rs,$rs1);
			?>