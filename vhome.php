<?php  
	/*comments, if any */ 
	//session_start(); 
	require_once("pageobj.php");
	class HomePage extends PageObj{
	
	
		//add if required

		function testObj(){
			echo "This is a test of HomePage.Obj!";
		}
		
		function htmlHead(){ //HTML head content. This is common to all UI pages. Can override as appropriate! param=$title, $titleimg, 						$cssfilename
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

		function slider(){
			$boxdata=array(); $noboxes=1;
			$content="<center><big><big>WELCOME TO EXPLORE JAPAN</big></big></center>";
			$boxdata[0]=array("boxid"=>1, "boxtype"=>"titleat", "stylename"=>"titleat", "content"=>"$content");

?>		
			<div style="background-image: url('image57.jpg'); background-size: cover; background-repeat:no-repeat;  height: 80vh; width: 101%; max-width:101%;  margin:-10px 0px 0px -10px; box-sizing:border-box;">
			<div  style="opacity:0.8;"> 
				<?php	$this->drawSection($boxdata, 0, 1); ?>
			</div></div> <!--end menubar-->
<?php

		}

		function slogan(){

			$boxdata=array(); $noboxes=5;
			$title="<center><big><big style=\"color:#ca6f1e ;\">Discover the Land of the Rising Sun</big></big></center>";
			$boxdata[0]=array("boxid"=>1, "boxtype"=>"title", "stylename"=>"title", "content"=>"$title");
			
			$contentl="<center><img src=\"image29.jpg\" alt=\"Visit Japan\" style=\" object-fit: cover; width:100%; height:550px; box-sizing: border-box;\"/></center> ";
			$boxdata[1]=array("boxid"=>2, "boxtype"=>"sloganimagebox", "stylename"=>"sloganimagebox", "content"=>"$contentl");

			$contentl1="<center> </BR>
			Are you ready for an unforgettable journey through Japan? </br></br> 
			Explore the rich culture, stunning landscapes, and unique experiences that this beautiful country has to offer.</br> 
			
			Whether you're a history enthusiast, a nature lover, a foodie, or an adventurer, Japan has something to offer you.</br></br>
			
			Start your adventure today!</center></br>
			 ";
			$boxdata[2]=array("boxid"=>3, "boxtype"=>"slogancontentbox", "stylename"=>"slogancontentbox", "content"=>"$contentl1");


?>		
			<div > <!--menubar-->
				<?php	$this->drawSection($boxdata, 0, 3); ?>
			</div> <!--end menubar-->
<?php

		}

		function smallBox(){
			$boxdata=array(); $noboxes=4;
			$title="<center><big><big>TIPS AND SERVICES</big></big></center>";
			$boxdata[0]=array("boxid"=>1, "boxtype"=>"title", "stylename"=>"title", "content"=>"$title");
			$content1="<center><img src=\"image3.jpg\" alt=\"Visit Japan\" style=\" object-fit: cover; width:100%; height:300px; box-sizing: border-box;\"/></center> 
						<center><big><big><p style=\"color:  #cb4335 ;\" >Plan Your Trip:</p></big></big></center>  
						<center><p align='justify'>Use our interactive tools to plan your dream vacation to Japan.
						Find the best places to visit, activities to enjoy, and accommodations to stay in.
						Let us help you create a personalized itinerary.</p></center>";
			$boxdata[1]=array("boxid"=>2, "boxtype"=>"smallbox", "stylename"=>"smallbox", "content"=>"$content1");
		
			$content2="<center><img src=\"image27.jpg\" alt=\"Visit Japan\" style=\" object-fit: cover; width:100%; height:300px; box-sizing: border-box;\"/></center>
						<center><big><big><p style=\"color:  #cb4335  ;\" >Travel Tips:</p></big></big></center> 
						<center><p align='justify'>Get insider tips on how to navigate Japan, cultural do's and don'ts, and essential travel information.
						Make the most of your visit with our expert guidance. </p></center>";
			$boxdata[2]=array("boxid"=>3, "boxtype"=>"smallbox", "stylename"=>"smallbox", "content"=>"$content2");
		
		
			$content3="<center><img src=\"image9.jpg\" alt=\"Visit Japan\" style=\" object-fit: cover; width:100%; height:300px; box-sizing: border-box;\"/></center>
						<center><big><big><p style=\"color: #cb4335  ;\" >Destination:</p></big></big></center> 
						<center><p align='justify'>Explore the wonders of Japan with our detailed destination guides. From the historic temples of Nara to the bustling streets of Osaka, uncover the beauty and cultural richness each city offers.  
						</p></center>";
			$boxdata[3]=array("boxid"=>4, "boxtype"=>"smallbox", "stylename"=>"smallbox", "content"=>"$content3");
?>
				<div> <!--page top-->
					<?php $this->drawSection($boxdata, 0, 1);?>
				</div> <!--end page top-->
		
				<div style="padding: 0% 4% 0% 4%  background-color:#FDFEFE; "> <!--page top-->
					<?php $this->drawSection($boxdata, 1, 4);?>
				</div> <!--end page top-->
<?php
		}

		function pageContent(){ 
			echo "<div style=\"width:101%; max-width:101%; height:auto; background-color:#FDFEFE; margin:-10px 0px 0px -10px; box-sizing:border-box;\">";
			$this-> slider();
			$this-> slogan();
			$this-> smallBox();
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

		function pageContent1(){
			$this-> slider();
			$this-> slogan();
			$this-> smallBox();
		}
		
		function pageBody1($msg){
			echo "<big><big><center><font face=\"Trebuchet MS\" color=\"#c0392b\" size=\"+3\">$msg</font></center></big></big>";
	
			echo "<!--body of the page begins!-->
			<body bgcolor=\" #fdfefe \">
				<div> <!--main-->";
					$this->pageTop(); 
					$this->pageContent();
					$this->pageFooter();			
				echo "</div> <!--end main-->
		</body>
	</html>";
		}
	}
?>