<?php
$checkName = $_REQUEST["namefororder"];
$checkEmail = $_REQUEST["useremail"];
if (($checkName == "") || ($checkEmail == "")) header("Location:tickets.html"); 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lake Ukickee Soccer - Tickets</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js">
</script>

<style type="text/css" media="screen, projection">

body {font-family:"Comic Sans MS", cursive;
      color:white;
	  margin-top:20px;
	  background-color:#090;
	  margin-left:3%;
	  margin-right:3%;
	   background-image:url(Images/grassy.jpg); 
	 background-repeat:repeat-y;
	  background-size:100%;
	 
}
img {vertical-align:middle;}
img.headi {border-style:groove;
           border-color:#6C6;
		   border-width:thick;
}

#container {
	 
	 background-repeat:repeat-y;
	  background-size:100%;
	 
	  font-size:medium;
	  height:auto;
	  width:100%;
	  display:block;
}

#titleh {
	 font-size: x-large;
	 color:#063;
	
	 border-color:#9aff9a;
	 border-width:thick;
	 border-style:solid;
	 width:54%;
	 margin-left:23%;
	 margin-right:23%;
     margin-top: 0px;
	 height:100%;
	 /* gradient */
/* http://gradients.glrzad.com/ */
background-image: linear-gradient(bottom, rgb(11,97,31) 4%, rgb(243,255,242) 52%, rgb(36,171,110) 76%);
background-image: -o-linear-gradient(bottom, rgb(11,97,31) 4%, rgb(243,255,242) 52%, rgb(36,171,110) 76%);
background-image: -moz-linear-gradient(bottom, rgb(11,97,31) 4%, rgb(243,255,242) 52%, rgb(36,171,110) 76%);
background-image: -webkit-linear-gradient(bottom, rgb(11,97,31) 4%, rgb(243,255,242) 52%, rgb(36,171,110) 76%);
background-image: -ms-linear-gradient(bottom, rgb(11,97,31) 4%, rgb(243,255,242) 52%, rgb(36,171,110) 76%);

background-image: -webkit-gradient(
	linear,
	left bottom,
	left top,
	color-stop(0.04, rgb(11,97,31)),
	color-stop(0.52, rgb(243,255,242)),
	color-stop(0.76, rgb(36,171,110))
);
	 
}
.sponsors {text-decoration:none; color:#98fb98;
}
#header {	
	 text-align:center;
	 height:135px;
	 display:block;
	 
}
#hi1 {
	float:left;
	width:25%; 
}
#hi2 {float:right;
      width:25%;}



#navi {float:left; width:20%; display:block;
   
}
	#tickets{
		font-size: small;
	}
a {width:100%; text-align:left;}
img.ia {padding-right:1%;}
.buttona {text-decoration:none;  
		  
		  font-size:small;
          display: block;
		  color:#006400;
		


padding:1%;
border-radius:30px;
-webkit-border-radius:30px;
-moz-border-radius:30px; /* Old Firefox */


/* gradient */
/* http://gradients.glrzad.com/ */
background-image: linear-gradient(bottom, rgb(11,97,31) 4%, rgb(243,255,242) 52%, rgb(36,171,110) 76%);
background-image: -o-linear-gradient(bottom, rgb(11,97,31) 4%, rgb(243,255,242) 52%, rgb(36,171,110) 76%);
background-image: -moz-linear-gradient(bottom, rgb(11,97,31) 4%, rgb(243,255,242) 52%, rgb(36,171,110) 76%);
background-image: -webkit-linear-gradient(bottom, rgb(11,97,31) 4%, rgb(243,255,242) 52%, rgb(36,171,110) 76%);
background-image: -ms-linear-gradient(bottom, rgb(11,97,31) 4%, rgb(243,255,242) 52%, rgb(36,171,110) 76%);

background-image: -webkit-gradient(
	linear,
	left bottom,
	left top,
	color-stop(0.04, rgb(11,97,31)),
	color-stop(0.52, rgb(243,255,242)),
	color-stop(0.76, rgb(36,171,110))
);

		
}
#content {width:58%;

display:block;
margin-left:23%;
margin-right:19%;
 border-style:dotted;
	  border-color:white;
	  border-width:thin;
}
#aside {
	float:right;
	text-align:center;
	width:12%;
	display:block;
	  border-left-color:#98fb98;
	 border-left-width:medium;
	 border-left-style:solid;
	 padding-left:2%;
	
}
#footer {width:100%; text-align:center;}

.bo {font-weight:900;}
.large {font-size:20px;}
.padr {padding-right:5%;}
</style>
<script>
function validateFormData(theform){
	// we should validate the form data BEFORE passing to the php server script....
	return true;
}
</script>
</head>
<body>

<div id="header">
<div id="hi1">
<img class="headi" src="Images/soccerplayer.png"/>
</div>
<div id="hi2">
<img class="headi" src="Images/lake.jpg">
</div>
<div id="titleh">
<br/>LAKE UKICKEE<br/>
SOCCER
</div>
</div>  <!-- header -->
<br/><br/><br/>
<div id="container">
<div id="content"> <!-- should stay in the middle -->
<!-- NOTE:  WE NOW NEED TO SPECIFY A METHOD !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
	<?php
		
	
	
		
	echo 'Thank you,' . $_POST['namefororder'] . ' for purchasing Lake Ukickee Soccer tickets!' . '<br/>';
	echo 'Below plase find a summary of your order:' . '<br/><br/>';
	?>
	
	<div id="tickets">
		<?php
	
	
		
	$total=0;
		$totalPurchase=0;
	for ($ctr=1; $ctr < 8; $ctr++) 
	{
			
		
		$chbx = 'game' . $ctr;
			if (isset($_REQUEST["$chbx"]))
			{ // checkbox is checked
			  
			   if("$chbx" == 'game1')
				{
					$priceG1 = $_POST['March31price'];
					$QtyG1 = $_POST['March31qty'];
						
						$total = $priceG1 * $QtyG1;
					
					
					echo 'Game:' . $_POST['game1'] . ' #tickets: ' . $QtyG1 = $_POST['March31qty'] . ' price peer ticket ' . $_POST['March31price'] . ' subtotal of $: ' . number_format($total,2) . '<br/><br/>';	
				}
				
				if("$chbx" == 'game2')
				{
					$priceG2 = $_POST['April1price'];
					$QtyG2 = $_POST['April1qty'];
						
						$total = $priceG2 * $QtyG2;
					
					
					echo 'Game:' . $_POST['game2'] . ' #tickets: ' . $QtyG2 = $_POST['April1qty'] . ' price peer ticket ' . $_POST['April1price'] . ' subtotal of $: ' . number_format($total,2) . '<br/><br/>';	
					
				}
				
				
				if("$chbx" == 'game3')
				{
					$priceG3 = $_POST['April8price'];
					$QtyG3 = $_POST['April8qty'];
						
						$total = $priceG3 * $QtyG3;
					
					
					echo 'Game:' . $_POST['game3'] . ' #tickets: ' . $_POST['April8qty'] . ' price peer ticket ' . $_POST['April8price'] . ' subtotal of $: ' . number_format($total,2) . '<br/><br/>';	
					
				}
				
				if("$chbx" == 'game4')
				{
					$priceG4 = $_POST['April14price'];
					$QtyG4 = $_POST['April14qty'];
						
						$total = $priceG4 * $QtyG4;
					
					
					echo 'Game:' . $_POST['game4'] . ' #tickets: ' . $_POST['April14qty'] . ' price peer ticket ' . $_POST['April14price'] . ' subtotal of $: ' . number_format($total,2) . '<br/><br/>';	
					
				}
				
				if("$chbx" == 'game5')
				{
					$priceG5 = $_POST['April18price'];
					$QtyG5 = $_POST['April18qty'];
						
						$total = $priceG5 * $QtyG5;
					
					
					echo 'Game:' . $_POST['game5'] . ' #tickets: ' . $_POST['April18qty'] . ' price peer ticket ' . $_POST['April18price'] . ' subtotal of $: ' . number_format($total,2) . '<br/><br/>';
					
				}
				
				if("$chbx" == 'game6')
				{
					$priceG6 = $_POST['April21price'];
					$QtyG6 = $_POST['April21qty'];
						
						$total = $priceG6 * $QtyG6;
					
					
				echo 'Game:' . $_POST['game6'] . ' #tickets: ' . $_POST['April21qty'] . ' price peer ticket ' . $_POST['April21price'] . ' subtotal of $: ' . number_format($total,2) . '<br/><br/>';
					
				}
				
				if("$chbx" == 'game7')
				{
					$priceG7 = $_POST['April29price'];
					$QtyG7 = $_POST['April29qty'];
						
						$total = $priceG7 * $QtyG7;
										
					echo 'Game:' . $_POST['game7'] . ' #tickets: ' . $_POST['April29qty'] . ' price peer ticket ' . $_POST['April29price'] . ' subtotal of $: ' . number_format($total,2) . '<br/><br/>';				
				}
				
			}
				$totalPurchase += $total;
				$total = 0;
		 }
				echo 'For a grand total of: $' . $totalPurchase . '<br/>';
				echo 'Tickets will be held in box office until one hour before game time!  ' . '<br/><br/>';
				echo 'A reminder will be sent to you at email address ' . $_POST['useremail'] . '<br/><br/>';
	
	
	 ?>	
		</div>
</div>

<br/><br/>
</div>  <!-- container -->

</body>
</html>
