<?php
	session_start();

	$userid="";
	
	if(isset($_SESSION['userid'])) $userid = $_SESSION['userid'];

?>
<!doctype html>
<html>
    <style>
	    * { margin : 0; }
	    img{
            margin : 20px;
            width : 200px;
            height : 80px;
        }
        nav{
            position : fixed;
            height : 100%;
            width : 18%;
            float : left;
            background-color:#d5fefd;
        }
        #navigat li{
            list-style: none;
            cursor:pointer;
        }
        #navigat li:hover{
            transform : translate(20px);
        }
        #navigat li{
            margin-top : 20px;
            color : black;
            font-size : 17px;
        }
        #Menu {
            margin-top : 30px;
            height: 30px;
            width: 850px;
            background-color:#ffffff;
        }
        #Menu ul li {
            list-style: none;
            color: white;
            background-color: #2d2d2d;
            float: left;
            line-height: 30px;
            vertical-align: middle;
            text-align: center;
            cursor:pointer;
        }
        #Menu .menuLink {
            text-decoration:none;
            color: white;
            display: block;
            width: 150px;
            font-size: 12px;
            font-weight: bold;
            font-family: "Trebuchet MS", Dotum, Arial;
        }
        #Menu .menuLink:hover {
            color: white;
            background-color: #4d4d4d;
        }
        section{
            width : 82%;
            height : 100%;
            float : right;
        }
        #wrap {
            position:relative;
            width:1500px;
            height:1500px;
            left:50%;
            transform: translate(-50%, 0);
        }
        #wrap > div {
            width:600px;
            height:600px;
            border:1px solid #333;
            float:left;
            margin: 30px;
            box-sizing:border-box;
        }
        #wrap > div:nth-child(3) {
            clear:both;
        }
        #scheduler{
            background-color : black;
        }
        #notice{
            background-color : violet;
        }
        #calender{
            background-color : cyan;
        }
        table{
            margin-top: 50px;
        }
    </style>
</head>
<body>
	<nav>
		<p>
			<img onclick="window.open('home.html','_self')" src = 'logo.png' style="cursor: pointer;">
		</p>
		<ul id="navigat">
			<li onclick="window.open('home.html','_self')">?? HOME</li><br>

		<!-- ?? ???????? ??????/???????? -->
		<?php																		
			if(!$userid) {															
		?>
			<li onclick="window.open('login.html','_self')">?? ??????/???????? </li><br>

		<!-- ???????? ???? ???????? ?? ???????? -->
		<?php } else { ?>														
			<li>?? ???? ???? : <?php print "$userid" ?> </li><br>						
			<li onclick="window.open('logout.php','_self')">?? ???????? </li><br>
		<?php } ?>


		<!-- ?? ???????? ??????(alert ????????) -->
		<?php																			
			if(!$userid) {															
		?>
			<li onclick="alertFunction()">?? ???? ????</li><br>					
																							
		<!-- ???????? ???????? -->
		<?php } else { ?>															
			<li onclick="window.open('grade1.html','_self')">?? ???? ????</li><br>
		<?php } ?>


		<!-- ?? ???????? ??????(alert ????????) -->
		<?php																			
			if(!$userid) {															
		?>
			<li onclick="alertFunction()">?? ???? ????</li><br>		

		<!-- ???????? ???????? -->
		<?php } else { ?>	
			<li onclick="window.open('grades1.html','_self')">?? ???? ????</li><br>
		<?php } ?>


		<!-- ?? ???????? ??????(alert ????????) -->
		<?php																			
			if(!$userid) {															
		?>
			<li onclick="alertFunction()">?? 0?? ???? ????</li><br>						
																							
		<!-- ???????? ???????? -->
		<?php } else { ?>	
            <li onclick="window.open('zero_fee_m','_self')">?? 0?? ???? ????</li><br>
		<?php } ?>


		<!-- ?? ???????? ??????(alert ????????) -->
		<?php																			
			if(!$userid) {															
		?>
			<li onclick="alertFunction()">?? ???? ???? ????</li><br>					
																							
		<!-- ???????? ???????? -->
		<?php } else { ?>	
			<li onclick="window.open('lookup_fee.html','_self')">?? ???? ???? ????</li><br>
		<?php } ?>


		<!-- ?? ???????? ??????(alert ????????) -->
		<?php																			
			if(!$userid) {															
		?>
			<li onclick="alertFunction()">?? ???????? ????</li><br>
					
																							
		<!-- ???????? ???????? -->
		<?php } else { ?>	
            <li onclick="window.open('leave_page.html','_self')">?? ???????? ????</li><br>
		<?php } ?>


		<!-- ?? ???????? ??????(alert ????????) -->
		<?php																			
			if(!$userid) {															
		?>
			<li onclick="alertFunction()">?? ???? ?????? ????</li><br>
					
																							
		<!-- ???????? ???????? -->
		<?php } else { ?>	
			<li onclick="window.open('sugang.html','_self')">?? ???? ?????? ????</li><br>
		<?php } ?>

		</ul>
    	</nav>

	<section>

		<nav  id="Menu">
			<ul>
				<li onclick="window.open('grade1.html','_self')"><a class="menuLink">???? ????</a></li>
                    			<li onclick="window.open('grade3.html','_self')"><a class="menuLink" href="#">???? ????</a></li>
                     			<li onclick="window.open('grade4.html','_self')"><a class="menuLink" href="#">???? ????</a></li>
			</ul>
		</nav>
<?
 	$database = "PBL_DB";
 	$connect=mysql_connect('localhost','root', 'apmsetup')or die("mySQL ???? ???? Error!");
	mysql_select_db($database, $connect);
	$query = "select * from  ".$_SESSION['userid']."grade";
	$result = mysql_query($query,$connect);
	$sdtinfo=mysql_fetch_row($result);

	if(!($sdtinfo[1] == "")) {
		print '<form name="form" method="post" action="./submit.php">
		<p align=right><INPUT type="submit" value="????"></p>
		</form>

		<form name="form" method="post" action="./grade1.php">
		<p align=right><INPUT type="submit" value="????"></p>
		<table border=1 width=700 height=200 align=center>
			<tr>
			<td colspan=2 rowspan=5 align=center><img src="asd.jpg" width=100 height=150></td>
			<td colspan=2 align=center>????</td>
			<td colspan=3 align=center><INPUT type="text" size=20 name="name" value='.$sdtinfo[0].' disabled></td>
			<td colspan=2 align=center>????</td>
			<td colspan=3 align=center><INPUT type="text" size=20 name="num" value='.$sdtinfo[1].' disabled></td>
			</tr>

			<tr>
			<td colspan=2 align=center>????</td>
			<td colspan=3 align=center><INPUT type="text" size=20 name="gender" value='.$sdtinfo[2].' disabled></td>
			<td colspan=2 align=center>????????</td>
			<td colspan=3 align=center><INPUT type="text" size=20 name="register" value='.$sdtinfo[3].' disabled></td>
			</tr>

			<tr>
			<td colspan=2 align=center>????</td>
			<td colspan=3 align=center><INPUT type="text" size=20 name="school" value='.$sdtinfo[4].' disabled></td>
			<td colspan=2 align=center>????</td>
			<td colspan=3 align=center><INPUT type="text" size=20 name="major" value='.$sdtinfo[5].' disabled></td>
			</tr>

			<tr>
			<td colspan=2 align=center>????????</td>
			<td colspan=3 align=center><INPUT type="text" size=20 name="sort" value='.$sdtinfo[6].' disabled></td>
			<td colspan=2 align=center>????</td>
			<td colspan=3 align=center><INPUT type="text" size=20 name="grade" value='.$sdtinfo[7].' disabled></td>
			</tr>

			<tr>
			<td colspan=2 align=center>????</td>
			<td colspan=3 align=center><INPUT type="text" size=20 name="record" value='.$sdtinfo[8].' disabled></td>
			<td colspan=2 align=center>????????</td>
			<td colspan=3 align=center><INPUT type="text" size=20 name="lastrecord" value='.$sdtinfo[9].' disabled></td>
			</tr>

			<tr>
			<td align=center>????</td>
			<td align=center colspan=10><INPUT type="text" size=80 name="address" value='.$sdtinfo[10].' disabled></td>
			</tr>

			<tr>
			<td align=center>????????</td>
			<td align=center colspan=10><INPUT type="text" size=80 name="detailaddress" value='.$sdtinfo[11].' disabled></td>
			</tr>

			<tr>
			<td align=center>??????</td>
			<td align=center colspan=10><INPUT type="text" size=80 name="phone" value='.$sdtinfo[12].' disabled></td>
			</tr>

			<tr>
			<td align=center>??????</td>
			<td align=center colspan=10><INPUT type="text" size=80 name="subphone" value='.$sdtinfo[13].' disabled></td>
			</tr>

			<tr>
			<td align=center>??????</td>
			<td align=center colspan=10><INPUT type="text" size=80 name="mail" value='.$sdtinfo[14].' disabled></td>
			</tr>

		</table>
		</form>';
	}
	mysql_close($connect);
?>