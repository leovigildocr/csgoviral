<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
		
	{  echo '<body style="background-color: #f7f7f7; font-family: sans-serif; ">
			<div style="width:56%; height:auto; margin-right: 22%; margin-left: 22%; margin-top:35%;">
				<img src="../images/unreachable.png" style="width:50px; height:50px; float: left;"> <br> <br> <br>
				<p style="float: left;">
					<h3 style="color: #716f6f;">This site can\'t be accessible on Mobile Devices .</h3> <br>
					<p style="color:#969696">Try connecting website from Desktop <br> <br>
					ERR_NOT_SUPPORTED_DEVICE</p>
				</p>
			</div>
		</body>
		' ;
	}
else{

session_start();
if(!isset($_SESSION['steamid']))
{ 
	/*session_start();*/
	echo '<script type="text/javascript">
                    alert("Please Login To continue !");
                    window.location="../";
                    </script> ';
	
}
else
{
	
}


?>


<?php

 require('../steamauth/steamauth.php');
 require('../steamauth/userInfo.php');
 require("../db_connect.php") ;



?>

<!DOCTYPE html>
<html>
<head>
	<title>CSGOVIRAL-More Cases</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="../images/logo.png" rel="icon" type="image/icon">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/template.css">
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<link rel="stylesheet" type="text/css" href="../css/create case.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="../js/notification.js"></script>
	<!--css fot div styles-->

	<link rel="stylesheet" type="text/css" href="../css/div_style_pistol.css">
	

	<!--[/end css linking]-->
	<style type="text/css">
		html {
			height: 73%;
		}
		body {
			background-color: #181818;
			height: 73%;
			min-height: 1000px ! important ; 
			background: radial-gradient(#363636, #181818);
		}
		#main {
			height: 108%;
			position: static;
			overflow-y: hidden;
			
		}
		
		#backdrop {
			width: 100%;
			height: auto;
			opacity: 0.1;
			

		}
		@font-face {
		    font-family: HandelGotDBol;
		    src: url(../font/HANDGOTL.TTF);
		}
		@font-face {
		    font-family: HandelGotDBol2;
		    src: url(../font/HandelGotDBol.ttf);
		}
		.logout {
		    background-color: black;
		    color: white;
		    border: 0px;
		    margin-top: 78px;
		    margin-left: 5px;
		    cursor: pointer;
		}
		.steamlogo {
		    margin-top: -22px;
		    margin-left: 7px;
		}


		/* The Modal (background) */
		.modal {
		    display: none; /* Hidden by default */
		    position: fixed; /* Stay in place */
		    z-index: -1; /* Sit on top */
		    padding-top: 250px; /* Location of the box */
		    left: 0;
		    top: 0;
		    width: 100%; /* Full width */
		    height: 100%; /* Full height */
		    overflow: auto; /* Enable scroll if needed */
		    background-color: rgb(0,0,0); /* Fallback color */
		    background-color: rgba(0,0,0,0.8); /* Black w/ opacity */
		}

		/* Modal Content */
		.modal-content {
		    position: relative;
		    background-color: rgba(0,0,0,0.97);
		    margin: auto;
		    padding: 0;
		    border: 1px solid #888;
		    width: 80%;
		    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
		    -webkit-animation-name: animatetop;
		    -webkit-animation-duration: 0.4s;
		    animation-name: animatetop;
		    animation-duration: 0.4s;
		

		}

		/* Add Animation */
		@-webkit-keyframes animatetop {
		    from {top:-300px; opacity:0} 
		    to {top:0; opacity:1}
		}

		@keyframes animatetop {
		    from {top:-300px; opacity:0}
		    to {top:0; opacity:1}
		}

		.modal-header {
		    padding: 2px 16px;
		    margin-top: 8px;
		    margin-bottom :20px;
		  
		}

		.modal-body {padding: 2px 16px;}

		.modal-footer {
		    padding: 2px 16px;
		    margin-bottom: 10px;
		    text-align: center;
		    /*background-color: #5cb85c;*/
		   
		}
		

		input[type=text] {
		    background-color: rgba(255,255,255,0.5);
		   
		}
		

		input[type=text]:focus {
		    background-color: rgba(13,235,176,0.2);
		    border: 2px solid #0debb0;
		    color: #0debb0;
		}

		#filter{
			color :white;
			font-family: HandelGotDBol ;
			font-size: 20px;
			position: absolute;
			margin-top: -39%;
			margin-left: 74%;
		}

			.gng_bk
		{
			color :white ; font-style: italic; position:absolute; top:27%; left:6%; width:auto;
		}

		@media only screen and (min-device-width: 720px) and (max-device-width: 1280px) {
   
	
			.gng_bk
			{
				color :white ; font-style: italic; position:absolute;top: 36%; left:6%; width:auto;
			}

		}

	</style>
</head>
<body style="position: relative;  min-width: 1100px; top:0px;">
  <?php  include("../headers/header_more.php");?>

	<div id="main">
		<img id="backdrop" src="../images/backdrop.png">
	</div>


	 <div class="gng_bk">
			<a href="../" alt="Back to Home Page !"><span style="display: inline; float: left; " class="fav_font">Home</span></a>
			<span style="display: inline; float:left;">&nbsp; &#8680; &nbsp;</span> 
			<span style="display: inline; float:left;" class="fav_font">Pistol Cases</span>
		</div>

	
	
	<div id="cases_all" style="margin-top:50px;">
		<div id="container_pistol">
			<?php

				$servername = "";
				$username = "";
				$password = "";
				$database = "sell_case_db" ;

				$con = new mysqli($servername ,$username,$password,$database);
				$sql = " SELECT * FROM sell_case WHERE case_type='pistol' ; " ;
				$result = $con->query($sql) ;

				if ($result->num_rows > 0) 
				{

					
					echo '<div style="width:100%; height:auto;">
					<ul style="display:flex ; flex-wrap: wrap ; width:100% ; height:auto ; padding-bottom:5% ;">';
    					while ($row=mysqli_fetch_array($result))
				    {	

				    
				    		 echo '
						          <li style="text-align:center; align:center; padding:20px ;">
						        <a href="../case_buy/case_open.php?id='.$row['sell_case_id'].'">
						           
						            	<div class="pistol_maincontainer">	
											<img src="'.$row['skinOfCase'].'" class="pistol_container_skinImage">
	 
					 						<div class="case_box" >
												    <div id="case-name" class="fav_font">';

													    if(strlen($row['case_name'])>10 )
													    	echo substr($row['case_name'],0, 10).'..' ;
													    else
													    	echo $row['case_name'] ; 

													    echo '</div>
												  	<div id="case-price" class="fav_font" >
												  		<span style="color: #3add08; margin-right:8px;  display: inline; float: left; width: 10px;">$</span>
												  		<span style="margin-left: -20px; display: inline; float: right; width: 80px ; text-align:left ;">'.$row['case_price'].'</span>
												  	</div>
												    <span class="bym fav_font" >By<br></span>
												    <span class="byme fav_font">';
													    
													    if(strlen($row['person_name'])>15 )
													    	echo substr($row['person_name'],0, 15).'..' ;
													    else
													    	echo $row['person_name'] ;
													    
													    echo '</span>

												    <img src="../case images/Pistol Only.png" class="pistol_pic">

												    <svg  id="pistol_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="87%" viewBox="3.334 4.833 449.667 492.667" enable-background="new 3.334 4.833 449.667 492.667" xml:space="preserve" style="fill: '.$row['case_color'].'; position: absolute; margin-left: 15%; margin-top:-12px; z-index: 1 ; opacity:0.3;" >

													<path d="M450.75,382.25l-4.75-1.5l-38.5-87c8.25-16-27.5-17-27.5-17c-1.5-6-5-7.25-5-7.25l-0.5-2.5l5.75,0.5l3,1.5
														c22.5-6.75,20.75-26.75,20.75-26.75l-2.25-2.75l5-174l3.25-3c2.5-13.5-9.75-24.75-9.75-24.75l-3-14.75l-27.75-0.75l-5.25,5l-0.5,7.5
														h-2.5v-16.5L362.5,12l-2.5-0.25l0.75-5L358.5,6l-27.75,1l-0.5,6.25l1.5,0.5l-0.25,9l-3.5,1l-0.5,10.75l-188,0.5l-3-1l-1.5-9.5l-2-2
														l-0.75-10.25L134,10.5l-1.25-2.75c-14-5.75-27.5,1-27.5,1l-0.5,2.25L102,15.75l2.75,3.5l-1.5,15.25l-2.75,0.25l-0.25-7.25l-4.5-4.75
														L73,23.5h-6.25L63.25,38c-10,12.5-9.5,23-9.5,23l3.75,3.5l3.75,174L58.5,241C58.25,263.5,79,268,79,268l3.125-1.875l6,0.5L83,272.25
														l-0.375,2.125c-30.25,3-29.375,13.125-29.375,13.125l0.75,4.25L10.75,378c-4-0.25-5.75,4.25-5.75,4.25
														c-1.75,12.5,5.5,19.25,5.5,19.25l-0.5,5l2,4.25L24.25,412l9.5,46.75c2.5,14.5,19.75,16,19.75,16c5.25,5.25,8.25,0.25,8.25,0.25H113
														l2,1.75l43.25,17.5c18.5,5,141,1.25,141,1.25l42-18.5l53.25,0.25c5.25,6,7.75-0.25,7.75-0.25c16.5,0.25,21-13.25,21-13.25l9-49.75
														H442c3.75-0.5,4-8.25,4-8.25C456,392,450.75,382.25,450.75,382.25z M287.433,269.186c0.074,0.362-2.907,3.961-3.07,4.186
														c-0.749,1.023-1.553,1.74-2.861,1.843c-0.43,0.033-1.135-0.347-1.25-0.347h-93.956c-2.282,0.566-4.824,1.566-6.787,0.359
														c-1.888-1.16-3.496-5.261-3.56-5.5c-1.778-0.49-1.775-3.322,0.303-3.266c1.169,0.031,2.307,0.266,3.442,0.5h2.558
														c0.325,0,0.593,0.081,0.818,0.207c0.143-0.014,0.28-0.034,0.432-0.034h96.75c0.12,0,0.223,0.024,0.337,0.033
														c0.014-0.001,0.023-0.005,0.038-0.005c2.449-0.057,4.879-0.868,7.321-0.332C289.431,267.154,288.861,269.361,287.433,269.186z"/>
																						</svg>

													 
													 <img src="../images/case back.png" class="case_back">
													 <div class="dp-border circle pistol_dp_container">
												                        <div class="dp circle pistol_dp" >
												                            <img src="'.$row['avatar'].'" title="Seller Avatar" alt="Image" />
												                        </div>
												                    </div>

											</div>
										</div>
								</a>
						        </li>';

				    		
				    }
    				

				    echo '</ul></div>';
				}
				else {
    					echo "<div class='fav_font no_case '>No Case Found</div>";
				}

				$con->close();

			?>

			
		</div>
		
	</div>

	
	
	<!--include footer here later on-->
	<footer style="background-color: black; min-height: 50px; padding-top: 100px;  padding-bottom: 20px; position: absolute; width: 100%; top: 93%; right: 0; bottom: -10%; left: 0; color: white; z-index: 1010; background: linear-gradient(rgba(0,0,0,0) 5%, black 55%);">
		<svg width="50px" height="50px" style="margin-left: 30px;">
			<image xlink:href="../logoheader.svg" width="50" height="50"/>
		</svg>
		<article>
			<span class="Hfont">CSGOVIRAL.COM © 2018 <a href="../terms and service.php" target="_blank"> Terms of Service</a></span>
			<p class="Bfont"><br>You can open various cases on our website CS:GO at best prices.</p>
			<p class="Bfont"><br>All trades work in the automatic mode via Steam bots.</p>
		</article>
		<img id="chat_icon" src="../images/chat_icon.PNG" style="margin-left: 30px;">
	</footer>
	
	<script type="text/javascript" src="../	js/translate.js"></script>	
	<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>





</body>
</html>
	<?php } ?>