<?php 
				/*Aug 19, 2023 (Sat). Author: YP@C2L3.
					Purpose: Controller file for vhome.php
					Version: 1.0
				*/

				require_once("vattraction.php");
				
				//HomePage implementation begins
				//handling warnings, url data, meesages and input data sanitization
			 	$b=""; 
				$msg=""; //$flag=""; 
				$did=0;
			 	
				if(isset($_GET['submit'])) $b=htmlentities($_GET['submit'], ENT_QUOTES); else $b="";
				if(isset($_GET['sname'])) $sname=htmlentities($_GET['sname'], ENT_QUOTES); else $sname="";
				if(isset($_GET['email'])) $email=htmlentities($_GET['email'], ENT_QUOTES); else $email="";
				if(isset($_GET['did'])) $did=htmlentities($_GET['did'], ENT_QUOTES); else $did=0;
				//echo $b;
				//if(isset($_GET['flag'])) $flag=htmlentities($_GET['flag'], ENT_QUOTES); else $flag="";
				//if(isset($_GET['msg'])) $msg=htmlentities($_GET['msg'], ENT_QUOTES); else $msg=""; 
				//handling ends
		
				$apobj= new AttractionPage(); //$apobj->testObj();
				$title="Welcome to Tour Japan"; $titleimg=""; $cssfilename="./styles.css"; $cssmobile="stylesmobile.css";
				$data=array("title"=>"$title", "titleimg"=>"$titleimg", "cssfilename"=>"$cssfilename", "cssmobile"=>"$cssmobile");
				$apobj->setPList($data);
				$apobj->htmlHead();
				$link=$apobj->connect();
                $rs=$apobj->selectRecords($fields = array("*"), $tables = array("destination"), "WHERE `did`= ".$did);
				$rs1 = $apobj->selectRecords($fields = array("*"), $tables = array("attraction"), "WHERE `did`= ".$did);
                $link=$apobj->closeLink();

				$apobj->pageBody($msg,$rs,$rs1);
			?>