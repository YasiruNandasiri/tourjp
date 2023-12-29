<?php  
	/*comments, if any */ 
	//session_start(); 
	require_once("pageobj.php");
	class PlanYourTrip extends PageObj{
	
	
		//add if required
		function testObj(){
			echo "This is a test of PlanYourTrip.Obj!";
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

		function slogan(){

			$boxdata=array(); $noboxes=5;
			$title="<center></center>";
			$boxdata[0]=array("boxid"=>1, "boxtype"=>"title", "stylename"=>"title", "content"=>"$title");
			$contentl="<center><img src=\"image42.jpg\" alt=\"Visit Japan\" style=\" object-fit: cover; width:100%; height:100%; box-sizing: border-box;\"/></center> ";
			$boxdata[1]=array("boxid"=>2, "boxtype"=>"sloganimagebox", "stylename"=>"sloganimagebox", "content"=>"$contentl");

			$contentl1="</br></br></br><center>Use our itinerary builder to customize your trip.<br> Select destinations, activities, <br>and <br>accommodations that suit your preferences.</center></br>
			 ";
			$boxdata[2]=array("boxid"=>3, "boxtype"=>"slogancontentboxp", "stylename"=>"slogancontentboxp", "content"=>"$contentl1");


?>		
			<div > <!--menubar-->
				<?php	$this->drawSection($boxdata, 0, 3); ?>
			</div> <!--end menubar-->
<?php

		}

		function smallBox(){
			$boxdata=array(); $noboxes=4;
			$title="<center><big><big>PLAN YOUR TRIP</big></big></center>";
			$boxdata[0]=array("boxid"=>1, "boxtype"=>"title", "stylename"=>"title", "content"=>"$title");
			$content1="<center><img src=\"image51.jpg\" alt=\"Visit Japan\" style=\" object-fit: cover; width:100%; height:300px; box-sizing: border-box;\"/></center> <center><big><big><p style=\"color:   #ca6f1e   ;\" >Accommodations:</p></big></big></center> </BR> 
						<center><p align='justify'>Discover a range of hotels, traditional ryokans, and unique lodging options across Japan.</p></center>";
			$boxdata[1]=array("boxid"=>2, "boxtype"=>"smallbox", "stylename"=>"smallbox", "content"=>"$content1");
		
			$content2="<center><img src=\"image36.jpg\" alt=\"Visit Japan\" style=\" object-fit: cover; width:100%; height:300px; box-sizing: border-box;\"/></center> <center><big><big><p style=\"color:   #ca6f1e   ;\" >Activities:</p></big></big></center> </BR> 
						<center><p align='justify'>Explore a variety of experiences, from cultural workshops to outdoor adventures. </p></center>";
			$boxdata[2]=array("boxid"=>3, "boxtype"=>"smallbox", "stylename"=>"smallbox", "content"=>"$content2");
		
		
			$content3="<center><img src=\"image57.jpg\" alt=\"Visit Japan\" style=\" object-fit: cover; width:100%; height:300px; box-sizing: border-box;\"/></center> <center><big><big><p style=\"color:   #ca6f1e   ;\" >Transportation:</p></big></big></center> </BR> 
						<center><p align='justify'>Learn about transportation options in Japan, including the efficient rail system and local travel tips. 
						</p></center>";
			$boxdata[3]=array("boxid"=>4, "boxtype"=>"smallbox", "stylename"=>"smallbox", "content"=>"$content3");
?>
				<div> <!--page top-->
					<?php $this->drawSection($boxdata, 0, 1);?>
				</div> <!--end page top-->
		
				<div style="padding: 0% 4% 0% 4%"> <!--page top-->
					<?php $this->drawSection($boxdata, 1, 4);?>
				</div> <!--end page top-->
<?php
		}


		function slider(){
			$boxdata=array(); $noboxes=1;
			$content="<center><big><big> Create Your Itinerary </big></big></center>";
			$boxdata[0]=array("boxid"=>1, "boxtype"=>"titleat", "stylename"=>"titleat", "content"=>"$content");

?>		
			<div style="background-image: url('image15.jpg'); background-size: cover; background-repeat:no-repeat;  height: 80vh; width: 101%; max-width:101%;  margin:-10px 0px 0px -10px; box-sizing:border-box;">
			<div  style="opacity:0.8;"> 
				<?php	$this->drawSection($boxdata, 0, 1); ?>
			</div></div> <!--end menubar-->
<?php

		}

		function highlight($rs=array()) {

			//destinationDetails content


			$boxdata4 = array(); $noboxes = 3;
			$title="<center><big><big> HIGHLIGHTS </big></big></center>";
			$boxdata4[0]=array("boxid"=>2, "boxtype"=>"title", "stylename"=>"title", "content"=>"$title");

			?>
			<div> <!--title-->
				<?php $this->drawSection($boxdata4, 0, 1);?>
			</div> <!--end title-->
			<?php
			
			while ($row = $rs->fetch()) {
				$i=$row["hid"];
				$name = $row["name"];
				$image = $row["image"];
				$intro = $row["intro"];




				//echo $age=$row["age"]; echo "</BR>";
				//echo $attraction[0]["name"];

				$imagebox = "<center><img src=\"".$row["image"]. "\" alt=\"" . $row["name"] . "\" style=\"box-sizing: border-box; object-fit: cover; width:100%; height:550px; \"/></center></BR>";
				$bodycontent = "</BR></BR><center><big><big><p style=\"color:   #ca6f1e   ;\" >". $row["name"]." </p></big></big></BR> </center></BR>
					<center><p align='justify'>" . $row["intro"] . "</p></BR>
					
					" ;
				if($i%2==0){

					$boxdata4[1] = array("boxid" => 2, "boxtype" => "imagebox1", "stylename" => "imagebox1", "content" => $imagebox);
					$boxdata4[2] = array("boxid" => 3, "boxtype" => "contentbox1", "stylename" => "contentbox1", "content" => $bodycontent);

				}else{

					$boxdata4[2] = array("boxid" => 3, "boxtype" => "imagebox", "stylename" => "imagebox", "content" => $imagebox);
					$boxdata4[1] = array("boxid" => 2, "boxtype" => "contentbox", "stylename" => "contentbox", "content" => $bodycontent);

				}


				?>


				<?php $this->drawSection($boxdata4, 1, 3); ?>


				<?php

			}

		
		}

		function pageContent($rs=array()){ 
			echo "<div style=\"width:101%; max-width:101%; height:auto; background-color:#FDFEFE; margin:-10px 0px 0px -10px; box-sizing:border-box;\">";
			$this-> slider();
			$this-> slogan();
			$this-> smallBox();
			$this->highlight($rs);
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

		function pageBody($msg,$rs=array()){ 
			?>        
					<!--body of the page begins!-->
						<body bgcolor="#FDFEFE">
							<div id="main"> <!--main-->
								<div>
									<strong><big><center><font face="Trebuchet MS" color="#c0392b" size="+2"><?php echo $msg; ?></font></                    center></big></strong>
								</div>
								<?php
									$this->pageTop();  
									$this->pageContent($rs);
									$this->pageFooter();
								?>
							</div> <!--end main-->
						</body>
					</html>
			<?php
				}


		
	}
	?>