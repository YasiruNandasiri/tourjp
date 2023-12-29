<?php  
	/*comments, if any */ 
	//session_start(); 
	require_once("pageobj.php");
	class DestinationPage extends PageObj {
	
	
		//add if required
		function testObj(){
			echo "This is a test of destinations.Obj!";
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

			$boxdata=array(); $noboxes=2;
			$content="<center><big><big> DESTINATIONS </big></big></center>";
			$boxdata[0]=array("boxid"=>1, "boxtype"=>"titleat", "stylename"=>"titleat", "content"=>"$content");

?>		
			<div style="background-image: url('image4.jpg'); background-size: cover; background-repeat:no-repeat;  height: 80vh; width: 101%; max-width:101%;  margin:-10px 0px 0px -10px; box-sizing:border-box;">
			<div  style="opacity:0.8;"> 
				<?php	$this->drawSection($boxdata, 0, 1); ?>
			</div></div> <!--end menubar-->
<?php

			$title="<center><big><big style=\"color:#ca6f1e ;\">Discover Finest Travel Destinations in Japan</big></big></center>";
			$boxdata[1]=array("boxid"=>2, "boxtype"=>"title", "stylename"=>"title", "content"=>"$title");

?>		
			<div> <!--menubar-->
				<?php	$this->drawSection($boxdata, 1, 2); ?>
			</div> <!--end menubar-->
<?php

		}

		function destinationDetails($rs=array(),$rs1=array()) {
						
			//destinationDetails content
		
			
			$boxdata4 = array(); $noboxes = 2;
			$attractionsData = $rs1->fetchAll(PDO::FETCH_ASSOC);
			
			while ($row = $rs->fetch()) {
				$i=$row["did"];
				$name = $row["name"];
				$image = $row["image"];
				$intro = $row["intro"];
				$overview = $row["overview"];
				$attraction = array();
				
				 // Iterate over the array of attractionsData
				 foreach ($attractionsData as $row1) {
					if ($row1["did"] == $row["did"]) {
						$attraction[] = $row1;
					}
				}
			
			
				
				
		
				//echo $age=$row["age"]; echo "</BR>";
				//echo $attraction[0]["name"];
		
				$imagebox = "<center><img src=\"".$row["image"]. "\" alt=\"" . $row["name"] . "\" style=\"box-sizing: border-box; object-fit: cover; width:100%; height:550px; \"/></center></BR>";
				$bodycontent = "<center><big><big><p style=\"color:   #ca6f1e   ;\" >". $row["name"]." </p></big></big></BR> </center>
								<center><p align='justify'>" . $row["intro"] . "</p></BR>
								<p style=\"font-size:1.4em;\">Highlighted Tourist Attractions:</p>	</center>
								<center><ul style=\" text-align: justify;
									text-justify: inter-word;\">
										<li><b>".$attraction[0]["name"]."</b> - ".$attraction[0]["intro"]."</li>
										<li><b>".$attraction[1]["name"]."</b> - ".$attraction[1]["intro"]."</li>
										<li><b>".$attraction[2]["name"]."</b> - ".$attraction[2]["intro"]."</li>
					  				</ul> </center> <p align='right' > <a  style=\"text-decoration: none; color: #c0392b;\" href=\"cattraction.php?did=".$row["did"]."\">See More ...</a></p>
								" ;
				if($i%2==0){

					$boxdata4[0] = array("boxid" => 1, "boxtype" => "imagebox1", "stylename" => "imagebox1", "content" => $imagebox);
					$boxdata4[1] = array("boxid" => 2, "boxtype" => "contentbox1d", "stylename" => "contentbox1d", "content" => $bodycontent);

				}else{

					$boxdata4[1] = array("boxid" => 1, "boxtype" => "imagebox", "stylename" => "imagebox", "content" => $imagebox);
					$boxdata4[0] = array("boxid" => 2, "boxtype" => "contentboxd", "stylename" => "contentboxd", "content" => $bodycontent);

				}
				 						
				
			?>
				
				
					<?php $this->drawSection($boxdata4, 0, 2); ?>
					
				
			<?php
				
			}
				
		  
		  }

		  function pageContent($rs=array(),$rs1=array()){ 
			echo "<div style=\"width:101%; max-width:101%; height:auto; background-color:#FDFEFE; margin:-10px 0px 0px -10px; box-sizing:border-box;\">";
			$this->slider();
			$this->destinationDetails($rs,$rs1);
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

		function pageBody($msg,$rs=array(),$rs1=array()){ 
			?>        
					<!--body of the page begins!-->
						<body bgcolor="#FDFEFE">
							<div id="main"> <!--main-->
								<div>
									<strong><big><center><font face="Trebuchet MS" color="#c0392b" size="+2"><?php echo $msg; ?></font></                    center></big></strong>
								</div>
								<?php
									$this->pageTop();  
									$this->pageContent($rs,$rs1);
									$this->pageFooter();
								?>
							</div> <!--end main-->
						</body>
					</html>
			<?php
				}

		
	}

	?>