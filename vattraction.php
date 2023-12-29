<?php  
	/*comments, if any */ 
	//session_start(); 
	require_once("pageobj.php");
	class AttractionPage extends PageObj {


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
	


		function details($rs=array(),$rs1=array()) {
						
			//destinationDetails content
		
			
			$boxdata4 = array(); $noboxes = 2;
			
			while ($row = $rs->fetch()) {
				
				$name = $row["name"];
				$image = $row["image"];
				$intro = $row["intro"];
				$overview = $row["overview"];
				$attraction = array();
				
				$boxdata=array(); $noboxes=3;
				
				$title="<center><big><big> ".$row["name"]." </big></big></center>";
				$boxdata[0]=array("boxid"=>1, "boxtype"=>"titleat", "stylename"=>"titleat", "content"=>"$title");
				
				$title="<center><big><big> ATTRACTIONS </big></big></center>";
				$boxdata[1]=array("boxid"=>2, "boxtype"=>"title", "stylename"=>"title", "content"=>"$title");

				echo "<div style=\"background-image: url('" . $row["image"] . "'); background-size: cover; background-repeat: no-repeat; height: 80vh; width: 101%; max-width: 101%; margin: -10px 0px 0px -10px; box-sizing: border-box;\">";
				?>		
			<div  style="opacity:0.8;"> 
				<?php	$this->drawSection($boxdata, 0, 1); ?>
			</div></div> <!--end menubar-->
			<div> <!--menubar-->
				<?php	$this->drawSection($boxdata, 1, 2); ?>
			</div> <!--end menubar-->
<?php

			
				while ($row1 = $rs1->fetch()) {
					
					$i=$row1["aid"];					
					
					
					//echo $age=$row["age"]; echo "</BR>";
					//echo $attraction[0]["name"];
					
					$imagebox = "<center><img src=\"".$row1["image"]. "\" alt=\"" . $row1["name"] . "\" style=\"box-sizing: border-box; object-fit: cover; width:100%; height:550px; \"/></center></BR>";
					$bodycontent = " <center><big><big><p style=\"color:   #ca6f1e   ;\" >". $row1["name"]." </p></big></big></BR> </center>
									<center><p align='justify'><big><big>" . $row1["intro"] . "</big></big></p></BR>
									<p align='justify'>" . $row1["overview"] . "</p>	</center>
									
									" ;
					if($i%2==0){

						$boxdata4[0] = array("boxid" => 1, "boxtype" => "imagebox1", "stylename" => "imagebox1", "content" => $imagebox);
						$boxdata4[1] = array("boxid" => 2, "boxtype" => "contentbox1", "stylename" => "contentbox1", "content" => $bodycontent);

					}else{

						$boxdata4[1] = array("boxid" => 1, "boxtype" => "imagebox", "stylename" => "imagebox", "content" => $imagebox);
						$boxdata4[0] = array("boxid" => 2, "boxtype" => "contentbox", "stylename" => "contentbox", "content" => $bodycontent);

					}
				


?>										
						<?php $this->drawSection($boxdata4, 0, 2); ?>
<?php
				
				}
			}
			
			
			
		  
		  }

		  function pageContent($rs=array(),$rs1=array()){ 
			echo "<div style=\"width:101%; max-width:101%; height:auto; background-color:#FDFEFE; margin:-10px 0px 0px -10px; box-sizing:border-box;\">";
			$this->details($rs,$rs1);
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