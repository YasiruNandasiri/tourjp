<?php
/*October 09, 2023 (Mon). Author: YP@C2L3.
  Purpose: Page class of yFramework 2.0R2023. 
  Version: 2.0
*/

//require_once("genobj.php");
require_once("boxobj.php");

class PageObj extends GenObj{
  //properties list, if applicable
  
  function testObj(){
	  echo "This is a test of PageObj!";
	}
	
	function setMetaOnHtmlHead(){
		$title=$this->getData("title"); $titleimg=$this->getData("titleimg"); $cssfilename=$this->getData("cssfilename"); $cssmobile=$this->getData("cssmobile");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php echo $title; ?></title>
		<link rel="icon" type="image/x-icon" href="<?php echo $titleimg; ?>">
		 
	 	<!-- tablet stylesheet -->
	 	<!--<link rel="stylesheet" media="(max-width:800px) and (min-width:451px)" href="tablet.css">-->
		<!-- main stylesheet-->
		<link rel="stylesheet" href="<?php echo $cssfilename; ?>">
		<!-- smartphone stylesheet -->
	 	<link rel="stylesheet" media="(max-width:450px)" href="<?php echo $cssmobile; ?>">
	 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
	}
	
	function htmlHead(){ //HTML head content. This is common to all UI pages. Can override as appropriate! param=$title, $titleimg, $cssfilename
		$this->setMetaOnHtmlHead();
?>	 	
	 	<style>
	 		/*styling common to the entire website*/
	 	</style>
	 	
	</head>
<?php
  }
  
  function drawSection($boxdata=array(), $start, $stop){
  	$bobj=array();
  	
		//$start=0; $stop=3;
		for($i=$start; $i<$stop; $i++){
			$bobj[$i]=new BoxObj();
			$bobj[$i]->setPList($boxdata[$i]);
			$bobj[$i]->draw();
		}	
  }

  function searchBar(){    
	$boxdata=array(); $noboxes=1;    
	  $searchform="<form name=\"search\" method=\"GET\" action=\"chome.php\">
									  <p><input type=\"text\" placeholder=\"Search anything on this site..\" name=\"search\" style=\"padding: 10px; width:70%; box-sizing: border-box; font-size: 1em;\">
									  <input name=\"submit\" type=\"submit\" value=\"Search\" style=\"width:15%; padding: 10px; box-sizing: border-box; font-size: 1em; cursor: pointer;\"></p>
								  </form>";
	  $boxdata[0]=array("boxid"=>1, "boxtype"=>"searchbar", "stylename"=>"searchbar", "content"=>"$searchform");
?>      
	<div>
		  <?php    $this->drawSection($boxdata, 0, 2); ?>
	  </div>

<?php
}
  
  function menuBar(){
  	//menubar

	  	$boxdata1=array(); $noboxes=3;

		$logobox="<a href=\"chome.php\"><img src=\"logo1.jpg\" alt=\"Hela Rasa Osaka\" style=\"box-sizing: border-box; height: 150px; width: auto;\"/></a>";
		$boxdata1[0]=array("boxid"=>1, "boxtype"=>"logobox", "stylename"=>"logobox", "content"=>"$logobox");

		$menudata="<center></BR><b>
			&emsp;<a style=\"text-decoration: none; color: inherit;\" href=\"chome.php\">Home</a>
			&emsp;<a style=\"text-decoration: none; color: inherit;\" href=\"cdestinations.php\">Destinations</a>
			&emsp;<a style=\"text-decoration: none; color: inherit;\" href=\"cplanyourtrip.php\">Plan Your Trip</a>
			&emsp;<a style=\"text-decoration: none; color: inherit;\" href=\"ctraveltips.php\">Travel Tips</a>
			&emsp;<a style=\"text-decoration: none; color: inherit;\" href=\"cabout.php\">About</a>
			
			&emsp;<a href=\"ccontact.php\"  style=\"text-decoration: none; color: inherit;\">Contact Us</a></b></center>";
		$boxdata1[1]=array("boxid"=>2, "boxtype"=>"menubox", "stylename"=>"menubox", "content"=>"$menudata");

		
?>		
		<div> <!--menubar-->
			<?php	$this->drawSection($boxdata1, 0, 2); 
					$this->searchBar();	?>
		</div> <!--end menubar-->
<?php
  }
  
  function leftMenu(){
  	//leftmenu
		$boxdata2=array(); $noboxes=1;
		$menudata1="<a style=\"text-decoration: none;\" href=\"http://localhost/slgems/chome.php\">Home</a>
					</BR><a style=\"text-decoration: none;\" href=\"http://www.C2L3.org/\">Other Gemstones</a>";
		$boxdata2[0]=array("boxid"=>1, "boxtype"=>"sidemenu", "stylename"=>"sidemenu", "content"=>"$menudata1");
?>		
		<div> <!--left menu-->
			<?php	$this->drawSection($boxdata2, 0, 1); ?>
		</div> <!--end leftmenu-->
<?php
  }
  
  function rightMenu(){
  	//rightmenu
		$boxdata3=array(); $noboxes=1;
		$menudata2="<center><a href=\"http://www.C2L3.org/\"><img src=\"Green Sapphire.jpg\" alt=\"slgems\" style=\"width:45%; height:45%;\"/></a></center>";
		$boxdata3[0]=array("boxid"=>1, "boxtype"=>"sidemenu1", "stylename"=>"sidemenu1", "content"=>"$menudata2");
?>		
		<div> <!--right menu-->
			<?php	$this->drawSection($boxdata3, 0, 1); ?>
		</div> <!--end rightmenu-->
<?php
  }

  function topBar(){
	$boxdata=array(); $noboxes=1;
	$topbar="<center>&emsp;&emsp; <a href=\"https://www.facebook.com/OlifairLanka\" target=\"_blank\" class=\"fa fa-facebook\"></a><a href=\"#\" class=\"fa fa-youtube\"></a><a href=\"https://instagram.com/olifairsl\" target=\"_blank\" class=\"fa fa-instagram\"></a>          
		&emsp;&emsp; <a style=\"color:#fdfefe; text-decoration: none;\" href=\"./chome.php#contact\">+94 112 345 6890 | info@info.com</a>          
		&emsp;&emsp;&emsp;&emsp;<a href=\"http://localhost/olees/index.php\"><img src=\"resources\sinbw.png\" alt=\"sinbtn\" style=\"width:110px; height:20px;\"/></a>
		<a href=\"http://localhost/olees/index.php\"><img src=\"resources\\enbw.png\" alt=\"enbtn\" style=\"width:110px; height:20px;\"/></a>
		&emsp;&emsp;
		<a href=\"http://localhost/olees/index.php\"><img src=\"resources\myaccountbw.png\" alt=\"myaccountbtn\" style=\"width:110px; height:20px;\"/></a>
		<a href=\"clogin.php\"><img src=\"resources\loginbw.png\" alt=\"loginbtn\" style=\"width:110px; height:20px;\"/></a>
		<a href=\"http://localhost/olees/index.php\"><img src=\"resources\cartbw.png\" alt=\"cartbtn\" style=\"width:110px; height:20px;\"/></a>
		</center>";
	$boxdata[0]=array("boxid"=>1, "boxtype"=>"topbar", "stylename"=>"topbar", "content"=>"$topbar");
?>      
  	<div style="background-color: #17202a;"> <!--topbar-->
		<?php    $this->drawSection($boxdata, 0, 1); ?>
	</div> <!--end topbar-->
<?php
}
  
  
  function pageTop(){
  	
?>
		<div> <!--page top-->
			<?php	
				$this->topBar();
				$this->menuBar();
				//$this->drawSection($boxdata, 0, 3); 		
						//$this->leftMenu();
						//$this->rightMenu();
			?>
		</div> <!--end page top-->
<?php
  }
  
 /* function pageContent($pid){
  	//body content
  	$boxdata4=array(); $noboxes=1;
  	$link=$this->connect();
  	$rs=$this->selectRecords($fields=array("*"), $tables=array("page"), " WHERE pid=$pid");
		while($row=$rs->fetch()){
			$pcontent=$row["pcontent"]; 
			//echo $age=$row["age"]; echo "</BR>";
		
			$bodycontent="$pcontent"; $footergems="";
			$bodycontent=$bodycontent. $footergems;
			$boxdata4[0]=array("boxid"=>1, "boxtype"=>"bodycontent", "stylename"=>"bodycontent", "content"=>"$bodycontent");
?>		
			<div> <!--body content-->
				<?php	$this->drawSection($boxdata4, 0, 1); ?>
			</div> <!--end body content-->
<?php
		}
		$link=$this->closeLink();
  }*/

  
  function pageFooter(){
  	//footer
		$boxdata=array(); $noboxes=5;
		$boxdata[0]=array("boxid"=>1, "boxtype"=>"sitemapabout", "stylename"=>"sitemapabout", "content"=>"<a style=\"text-decoration: none; color:#fdfefe \" href=\"chome.php\">&emsp;&emsp; Home</a></BR></BR>
            <a style=\"text-decoration: none; color:#fdfefe \" href=\"cdestinations.php\">&emsp;&emsp; Destinations</a></BR></BR>
            <a style=\"text-decoration: none; color:#fdfefe \" href=\"cplanyourtrip.php\">&emsp;&emsp; Plan Your Trip</a></BR></BR>
            <a style=\"text-decoration: none; color:#fdfefe \" href=\"ctraveltips.php\">&emsp;&emsp; Travel Tips</a></BR></BR>
            <a style=\"text-decoration: none; color:#fdfefe \" href=\"cabout.php\">&emsp;&emsp; About</a></BR></BR>
            <a style=\"text-decoration: none; color:#fdfefe \" href=\"ccontact.php\">&emsp;&emsp; Contact Us</a>");
		$contactbox="<center><big><strong>Hela Rasa Osaka (Pvt.) Ltd.</strong></big></BR></BR>1/41, Cardinal Cooray Mw, Dikowita, Hendala, 11300, Wattala, Sri Lanka.</BR></BR>+94 112 948 533 </BR>+94 711 397 922</BR></BR>info@info.cominfo.Osaka@gmail.com</BR>www.Osaka.com </BR></BR><a href=\"#\" class=\"fa fa-facebook\"></a><a href=\"#\" class=\"fa fa-youtube\"></a><a href=\"#\" class=\"fa fa-instagram\"></a></center>";
		$boxdata[1]=array("boxid"=>2, "boxtype"=>"sitemapmain", "stylename"=>"sitemapmain", "content"=>"$contactbox");
		$signupform="<form name=\"subscribe\" method=\"GET\" style=\" box-sizing: border-box;\" action=\"chome.php\">
                                        <p><input type=\"text\" placeholder=\"Your Name\" name=\"sname\" size=\"20\" style=\" width: 65%; box-sizing: border-box; padding: 10px;  font-size: 1em;\"></p>
                                        <p><input type=\"text\" placeholder=\"Your E-mail\" name=\"email\" size=\"20\" style=\" width: 65%; box-sizing: border-box; padding: 10px;  font-size: 1em;\"></p>
                                        <p><input name=\"submit\" type=\"submit\" value=\"Subscribe\" style=\" width: 65%; box-sizing: border-box; padding: 10px;  background: white; color: #e74c3c; border-radius: 0px;  border: none; font-size: 1em; cursor: pointer;\"></p>
                                    </form>";
		$signupbox="<center><big>Sign up for our newsletter</big></BR>$signupform</center>";
		$boxdata[2]=array("boxid"=>3, "boxtype"=>"sitemapsignup", "stylename"=>"sitemapsignup", "content"=>"$signupbox");
		$boxdata[3]=array("boxid"=>4, "boxtype"=>"copyrightbox", "stylename"=>"copyrightbox", "content"=>"<center>Privacy Policy</center></BR><center>&copy;2023 Hela Rasa Osaka (Pvt.) Ltd. All rights reserved. <a style=\"color: #fdfefe ; text-decoration:none\" href=\"http://www.C2L3.org/\">Powered by yF20l0 of C2L3.org</a></center>");
		//$boxdata[4]=array("boxid"=>5, "boxtype"=>"copyrightbox", "stylename"=>"copyrightbox", "content"=>"");	
?>  	
  		<div> <!--page footer-->
			<?php	$this->drawSection($boxdata, 0, 4); ?>
		</div> <!--end page footer-->
<?php
  }
}
?>

<?php //echo "Testing of the Page class"; ?>

