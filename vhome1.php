<?php  
				/*comments, if any */ 
				//session_start(); 
				require_once("pageobj.php");
				class HomePage1 extends PageObj{
				
				
					//add if required

					function testObj(){
						echo "This is a test of HomePage1.Obj!";
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
					
					function pageBody($msg){
						echo "<strong><big><center><font face=\"Trebuchet MS\" color=\"#c0392b\" size=\"+3\">$msg</font></center></big></strong>";
				
						echo "<!--body of the page begins!-->
						<body bgcolor=\" #fdfefe \">
							<div> <!--main-->";
								$this->pageTop(); 
								$this->pageContent(2);
								$this->pageFooter();			
							echo "</div> <!--end main-->
					</body>
				</html>";
					}
				}
				?>