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

	
	<link rel="stylesheet" type="text/css" href="../css/div_style_knife.css">
	
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
<?php
	include("../headers/header_more.php");
	?>

	<div id="main">
		<img id="backdrop" src="../images/backdrop.png">
	</div>

<div class="gng_bk">
			<a href="../" alt="Back to Home Page !"><span style="display: inline; float: left; " class="fav_font">Home</span></a>
			<span style="display: inline; float:left;">&nbsp; &#8680; &nbsp;</span> 
			<span style="display: inline; float:left;" class="fav_font">Knife Cases</span>
		</div>
	
	
	<div id="cases_all" style="margin-top:50px;">
		<div id="container_knife">
			<?php

				$servername = "";
				$username = "";
				$password = "";
				$database = "sell_case_db" ;

				function get_string_between($string, $start, $end){
				    $string = ' ' . $string;
				    $ini = strpos($string, $start);
				    if ($ini == 0) return '';
				    $ini += strlen($start);
				    $len = strpos($string, $end, $ini) - $ini;
				    return substr($string, $ini, $len);
				}

				$con = new mysqli($servername ,$username,$password,$database);
				$sql = " SELECT * FROM sell_case WHERE case_type='knife' ; " ;
				$result = $con->query($sql) ;

				if ($result->num_rows > 0) 
				{

					
					echo '<div style="width:100%; height:auto; ">
					<ul style="display:flex ; flex-wrap: wrap ; width:100% ; height:auto ; padding-bottom:5% ;">';
    				
					while ($row=mysqli_fetch_array($result))
				    {	
				    		 echo '
						       	  <li style="text-align:center; align:center; padding:20px ;">
						            	<a href="../case_buy/case_open.php?id='.$row['sell_case_id'].'">
						            		<div class="knife_maincontainer">	
												<img src="'.$row['skinOfCase'].'" class="knife_container_skinImage">
	 
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
													    <span  class="byme fav_font">';
													    
													    if(strlen($row['person_name'])>15 )
													    	echo substr($row['person_name'],0, 15).'..' ;
													    else
													    	echo $row['person_name'] ;
													    
													    echo '</span>

													    <img src="../case images/Knife Only.png" class="knife_pic">

													    <svg  id="all_case_color" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80%" height="67%" viewBox="2.084 1.333 492.584 363.25" enable-background="new 2.084 1.333 492.584 363.25" xml:space="preserve" style="fill: '.$row['case_color'].'; position: absolute; margin-left: 16%; margin-top:6%; z-index: 1; opacity:0.3;  -webkit-filter: drop-shadow(-5px -1px 15px rgba('.get_string_between($row['case_color'] , '(' , ')').', 0.8)); filter: drop-shadow(-5px -1px 15px rgba('.get_string_between($row['case_color'] , '(' , ')').', 0.9));" >

														<path d="M451,160.001l18.5,2.5l18.5-4.5l6-151.5l-341-5l1.5,131.5l31.5,3.667v2.667l-30.333-2.333L10.333,156.334
														L18,284.001l-15,6.666l0.667,10.334l30.667,5L42,303.667l8,0.666c6,4.666,92.333,23,92.333,23l10-1.666
														c6.333,5.668,9.333,1.334,9.333,1.334C169,337.667,285,348.333,285,348.333c4.333-0.666,18,9.334,18,9.334l40,6.668l25.666-8.668
														c3-6.666,18-9,18-9c19-1.332,24-8,24-8h5l2.334-3.332l9.332-0.668l18.334-11H456l19-6.666l3-3.334l0.665-9.332L466,299.667
														l4.5-134.333l-40.5-3.833v-3.5L451,160.001z M388.5,157.985c-1.962-0.031-3.837-0.486-5.723-0.89
														c-0.227,0.09-0.482,0.145-0.777,0.14c-6.689-0.09-13.312-1.159-20-1.25c-0.786-0.011-1.328-0.395-1.633-0.918
														c-5.374-0.448-10.757-0.794-16.116-1.389c-14.604-1.621-29.379-1.842-43.932-3.766c-2.674-0.353-5.344-0.772-8.016-1.179
														c-6.241,0.019-12.435-0.105-18.67-0.474c-3.743-0.221-7.503-0.5-11.01-1.836c-1.828-0.119-3.656-0.268-5.487-0.464
														c-7.003-0.754-13.93-1.597-20.978-1.782c-5.787-0.152-11.552-0.34-17.188-1.763c-2.479-0.626-1.427-4.453,1.055-3.826
														c6.992,1.765,14.146,1.39,21.283,1.793c6.518,0.368,12.978,1.401,19.478,1.972c0.406,0.036,15.487,0.475,21.813,1.154
														c3.17,0.34,6.323,0.794,9.474,1.261c0.394-0.001,2.017,0.128,2.313,0.34c2.568,0.381,5.138,0.758,7.716,1.073
														c7.593,0.925,15.242,1.105,22.869,1.617c7.086,0.476,14.092,1.469,21.158,2.099c7.645,0.68,15.302,1.42,22.947,2.03
														c3.77,0.3,7.547,0.424,11.315,0.719c2.771,0.217,5.287,1.327,8.106,1.372C391.057,154.057,391.061,158.025,388.5,157.985z"/>
																						
														</svg>

														 
														 <img src="../images/case back.png" class="case_back">
														 <div class="dp-border circle knife_dp_container" >
													                        <div class="dp circle knife_dp" >
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