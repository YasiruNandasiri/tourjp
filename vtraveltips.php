<?php  
		/*comments, if any */ 
		//session_start(); 
		require_once("pageobj.php");
		class TravelTips extends PageObj{
		
		
			//add if required
			function testObj(){
				echo "This is a test of TravelTips.Obj!";
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
                $content="<center><big><big>TRAVEL TIPS</big></big></center>";
                $boxdata[0]=array("boxid"=>1, "boxtype"=>"titleat", "stylename"=>"titleat", "content"=>"$content");
    
    ?>		
                <div style="background-image: url('image46.jpg'); background-size: cover; background-repeat:no-repeat;  height: 80vh; width: 101%; max-width:101%;  margin:-10px 0px 0px -10px; box-sizing:border-box;">
                <div  style="opacity:0.8;"> 
                    <?php	$this->drawSection($boxdata, 0, 1); ?>
                </div></div> <!--end menubar-->
    <?php
    
            }
            
            function smallboxtt(){
                $boxdata=array(); $noboxes=7;
                
                $content1="<center><big><big><p style=\"color:   #ca6f1e   ;\" >Language:</p></big></big></center> </BR> 
				<center><p align='justify'>While Japanese is the official language, many people in tourist areas speak English. Learn a few basic Japanese phrases to enhance your interactions with locals.</p></center>";
                $boxdata[1]=array("boxid"=>2, "boxtype"=>"smallboxtt", "stylename"=>"smallboxtt", "content"=>"$content1");
                $content2="<center><big><big><p style=\"color:   #ca6f1e   ;\" >Currency:</p></big></big></center> </BR> 
				<center><p align='justify'>The official currency is the Japanese yen (JPY). Currency exchange services are widely available, especially at airports and banks. Credit cards are widely accepted in urban areas. </p></center>";
                $boxdata[2]=array("boxid"=>3, "boxtype"=>"smallboxtt", "stylename"=>"smallboxtt", "content"=>"$content2");
                $content3="<center><big><big><p style=\"color:   #ca6f1e   ;\" >Japan Rail Pass:</p></big></big></center> </BR> 
				<center><p align='justify'>The Japan Rail Pass is a cost-effective option for tourists. It provides unlimited travel on most JR trains, including the Shinkansen (bullet train). Purchase it before arriving in Japan. 
				</p></center>";
                $boxdata[3]=array("boxid"=>4, "boxtype"=>"smallboxtt", "stylename"=>"smallboxtt", "content"=>"$content3");
                $content1="<center><big><big><p style=\"color:   #ca6f1e   ;\" >Hotels and Ryokans:</p></big></big></center> </BR> 
				<center><p align='justify'>Choose between Western-style hotels and traditional Japanese inns (ryokans). Experience Japanese hospitality and customs in a ryokan for a unique stay.</p></center>";
                $boxdata[4]=array("boxid"=>5, "boxtype"=>"smallboxtt", "stylename"=>"smallboxtt", "content"=>"$content1");
                $content2="<center><big><big><p style=\"color:   #ca6f1e   ;\" >Bowing and Greetings:</p></big></big></center> </BR> 
				<center><p align='justify'>Bowing is a common gesture of respect. A slight bow is appropriate in most situations. Greetings often involve a bow and a polite phrase like \"Konnichiwa\" (hello). </p></center>";
                $boxdata[5]=array("boxid"=>6, "boxtype"=>"smallboxtt", "stylename"=>"smallboxtt", "content"=>"$content2");
                $content3="<center><big><big><p style=\"color:   #ca6f1e   ;\" >Local Cuisine:</p></big></big></center> </BR> 
				<center><p align='justify'>Explore the diverse Japanese cuisine, from sushi and ramen to tempura and kaiseki. Don't miss the opportunity to try local specialties.
				</p></center>";
                $boxdata[6]=array("boxid"=>7, "boxtype"=>"smallboxtt", "stylename"=>"smallboxtt", "content"=>"$content3");
                ?>
                
                <div style="padding: 0% 4% 0% 4%"> <!--page top-->
                    <?php $this->drawSection($boxdata, 1, 7);?>
                </div> <!--end page top-->
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
                $this-> smallboxtt();
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