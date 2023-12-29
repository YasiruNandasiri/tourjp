<?php
/*comments, if any
*/

//session_start();
require_once("pageobj.php");

class AboutPage extends PageObj{
	//add if required
	
	function testObj(){
	  echo "This is a test of HomePageObj!";
	}
	
	function htmlHead(){ //HTML head content. This is common to all UI pages. Can override as appropriate! param=$title, $titleimg, $cssfilename
		$this->setMetaOnHtmlHead();
		echo "<!--setting required internal styles for the -->
		<style>
			/*.about{ background-color:#ecf0f1; width: 100%; height:500px; }	 		
			@media only screen and (max-width: 450px){
				.about{ background-color:#ecf0f1; width: 100%; height:510px; }
			}*/
			
			.fa{ padding: 10px; font-size: 20px; width: 30px; text-align: center; text-decoration: none; margin: 3px 1px; }			
		   .fa:hover{ opacity: 0.7; }

		   .fa-facebook{ background: #3B5998; color: white; }
		   .fa-youtube{ background: #bb0000; color: white; }
		   .fa-instagram{ background: #125688; color: white; }
		</style>
		
   </head>"; 
  }
  



function aboutCompany(){

	$boxdata=array(); $noboxes=5;
	$title="<center><big><big>ABOUT US</big></big></center>";
	$boxdata[0]=array("boxid"=>1, "boxtype"=>"title", "stylename"=>"title", "content"=>"$title");
	
	$contentl="<center><img src=\"image9.jpg\" alt=\"Visit Japan\" style=\" object-fit: cover; width:100%; height:550px; box-sizing: border-box;\"/></center> ";
	$boxdata[1]=array("boxid"=>2, "boxtype"=>"sloganimagebox", "stylename"=>"sloganimagebox", "content"=>"$contentl");

	$contentl1="<center><big><big><p style=\"color:   #ca6f1e   ;\" >Company Overview:</p></big></big></center> </BR> 
				</br><center><big>Welcome to OSAKA, </big></BR></BR><p align='justify'>
				 Your gateway to discovering the beauty and wonders of Japan.
				 Founded with a passion for travel and a commitment to providing unparalleled experiences, we take pride in curating exceptional journeys that capture the essence of Japan's rich culture, history, and natural splendor. With a team of dedicated professionals, we strive to make your visit to Japan not just a trip but a lifelong memory.</p></center></br>
	 ";
	$boxdata[2]=array("boxid"=>3, "boxtype"=>"contentbox", "stylename"=>"contentbox", "content"=>"$contentl1");


?>		
	<div > <!--menubar-->
		<?php	$this->drawSection($boxdata, 0, 3); ?>
	</div> <!--end menubar-->
<?php

}

function smallBox(){
	$boxdata=array(); $noboxes=4;
	$title="<center><big><big>COMPANY STATEMENTS</big></big></center>";
	$boxdata[0]=array("boxid"=>1, "boxtype"=>"title", "stylename"=>"title", "content"=>"$title");
	$content1="<center><big><big><p style=\"color:   #ca6f1e   ;\" >Vision:</p></big></big></center> </BR> 
				<center><p align='justify'>Our vision is to be the premier provider of immersive and authentic travel experiences in Japan. We aspire to be the bridge that connects travelers with the diverse tapestry of Japan, fostering a deep appreciation for its traditions, landscapes, and people. Through our journeys, we aim to inspire a sense of wonder and cultural enrichment, creating memories that last a lifetime.</p></center>";
	$boxdata[1]=array("boxid"=>2, "boxtype"=>"smallboxab", "stylename"=>"smallboxab", "content"=>"$content1");

	$content2="<center><big><big><p style=\"color:   #ca6f1e   ;\" >Mission:</p></big></big></center> </BR> 
				<center><p align='justify'>Our mission is to exceed the expectations of every traveler by crafting meticulously planned and personalized journeys that showcase the best of Japan. We are committed to delivering exceptional service, fostering cultural understanding, and promoting sustainable travel practices. We strive to make every journey with us a seamless and enriching adventure.</p></center>";
	$boxdata[2]=array("boxid"=>3, "boxtype"=>"smallboxab", "stylename"=>"smallboxab", "content"=>"$content2");


	$content3="<center><big><big><p style=\"color:   #ca6f1e   ;\" >Standards:</p></big></big></center> </BR> 
				<center><p align='justify'>We uphold a standard of excellence in service, ensuring that every aspect of your travel experience is meticulously planned and executed. From itinerary customization to on-the-ground support, our commitment to excellence is unwavering.</BR>We are dedicated to preserving and promoting the cultural integrity of Japan.
				</p></center>";
	$boxdata[3]=array("boxid"=>4, "boxtype"=>"smallboxab", "stylename"=>"smallboxab", "content"=>"$content3");
?>
		<div> <!--page top-->
			<?php $this->drawSection($boxdata, 0, 1);?>
		</div> <!--end page top-->

		<div style="padding: 0% 4% 0% 4%"> <!--page top-->
			<?php $this->drawSection($boxdata, 1, 4);?>
		</div> <!--end page top-->
<?php
}

function bodycontent(){

	$boxdata=array(); $noboxes=5;
	$title="<center><big><big>THE FOUNDERS</big></big></center>";
	$boxdata[0]=array("boxid"=>1, "boxtype"=>"title", "stylename"=>"title", "content"=>"$title");
	$contentl="<center><img src=\"pfounder1.jpg\" alt=\"Founder\" style=\" width:Auto; height:550px; box-sizing: border-box \"/></center> ";
	$boxdata[1]=array("boxid"=>2, "boxtype"=>"imagebox", "stylename"=>"imagebox", "content"=>"$contentl");

	$contentl1="<center><big><big><p style=\"color:   #ca6f1e   ;\" >Person One</p></big></big></center> </BR>
				<center><h3 style=\"color: #566573 ;\" >Co-Founder</h3></center> </BR>
				<center><p align='justify'>Individuals have been professionals in their respective fields, with expertise in diverse roles. They have served as specialists in various domains, contributing to the success of organizations. Whether in legal, corporate, or other sectors, they have been instrumental in the growth and development of their respective companies.</p></center>
				 ";
	$boxdata[2]=array("boxid"=>3, "boxtype"=>"contentbox", "stylename"=>"contentbox", "content"=>"$contentl1");

	//lowercontent
	
	$contentl="<center><img src=\"pfounder2.jpg\" alt=\"Founder\" style=\"  width:Auto; height:550px; box-sizing: border-box \"/></center> ";
	$boxdata[3]=array("boxid"=>4, "boxtype"=>"imagebox1", "stylename"=>"imagebox1", "content"=>"$contentl");

	$contentl1="<center><big><big><p style=\"color:   #ca6f1e   ;\" >Person Two</p></big></big></center> </BR>
				<center><h3 style=\"color: #566573 ;\" >Co-Founder</h3></center> </BR>
				<center><p align='justify'>Individuals have been professionals in their respective fields, with expertise in diverse roles. They have served as specialists in various domains, contributing to the success of organizations. Whether in legal, corporate, or other sectors, they have been instrumental in the growth and development of their respective companies.</p></center>
				 ";
	$boxdata[4]=array("boxid"=>5, "boxtype"=>"contentbox1", "stylename"=>"contentbox1", "content"=>"$contentl1");

	?>
	<div> <!--page top-->
		<?php $this->drawSection($boxdata, 0, 5);?>
	</div> <!--end page top-->
<?php

}

function pageContent($productrs=array()){ 
	echo "<div style=\"width:101%; max-width:101%; height:auto; background-color:#FDFEFE; margin:-10px 0px 0px -10px; box-sizing:border-box;\">";
	$this-> aboutCompany();
	$this-> smallBox();
	$this-> bodycontent();
	echo "</div>";     
}

function pageTop(){
	echo "<div style=\"width:101%; max-width:101%; height:200px; max-height:200px; background-color:#F1948A; margin:-10px 0px 0px -10px; box-sizing:border-box;\">";
		parent::pageTop();
	echo "</div>";
}

function pageFooter(){ 
	echo "<div style=\"width:101%; max-width:101%; height:auto; background-color:#FDFEFE; margin:-10px 0px 0px -10px; box-sizing:border-box;\">";
		parent::pageFooter();
	echo "</div>";
}

function pageBody($msg){ 
	?>        
			<!--body of the page begins!-->
				<body bgcolor="#FDFEFE">
					<div id="main"> <!--main-->
						<div>
							<strong><big><center><font face="Trebuchet MS" color="#c0392b" size="+2"><?php echo $msg; ?></font></                    center></big></strong>
						</div>
						<?php
							$this->pageTop();  
							$this->pageContent();
							$this->pageFooter();
						?>
					</div> <!--end main-->
				</body>
			</html>
	<?php
		}
  

}
?>


