<!DOCTYPE HTML>
<!--
	Miniport by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>旅遊路況一點通 | 預估您最佳出遊時間，遠離塞車</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>


		<!-- cal -->  
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
		<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body>

		<!-- Nav -->
			<nav id="nav">
				<ul class="container">
					<li><a href="#about">About</a></li>
					<li><a href="#getstart">GetStart</a></li>
					<li><a href="#professor">Team</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>

		<!-- Home -->
			<div class="wrapper style1 first">
				<article class="container" id="about">
					<div class="row">
						<div class="4u">
							<span class="image fit"><img src="images/logo.png" alt="" /></span>
						</div>
						<div class="8u">
							<header>
								<h2> <strong>旅遊路況一點通</strong> | 預估您最佳出遊時間，遠離塞車</h2>
							</header>
							<p>本網頁將提供使用者<strong> 最佳旅遊日期 </strong>之推薦。透過歷史的國道交通流量資訊以及旅遊人潮的推估，能讓使用者遠離塞車人潮。參考資料由 <a href="http://1968.freeway.gov.tw/">高速公路局</a> 提供。
							</p>
							<a href="#getstart" class="button big scrolly">Try now</a>
						</div>
					</div>
				</article>
			</div>

		<!-- getstart -->
			<div class="wrapper style2">
				<article id="getstart">
					<header>
						<h2>開始進行旅遊時機預測</h2></p>
					</header>


					<Script>

var highLen = [
	0.9,0.9,0.9,0.9,0.9,0.9,1,1.8,1.8,1.8,1.8,1.8,1.8,1.8,1.8,1.8,1.8,1.8,1.8,2,2.7,2.7,2.7,2.7,2.7,2.7,2.7,2.7,2.7,2.7,
	2.7,2.7,2.7,3,3.6,3.6,3.6,3.6,3.6,3.6,3.6,4,4.5,4.5,4.5,4.5,4.5,5,5.4,5.4,5.4,5.4,5.4,5.4,5.4,5.4,5.4,5.4,5.4,5.4,
	5.4,5.4,5.4,5.4,5.4,5.4,5.4,6,6.3,6.3,6.3,6.3,6.3,6.3,6.3,6.3,7,7.2,7.2,7.2,7.2,7.2,0.9,0.9,1,1.8,1.8,1.8,1.8,1.8,1.8,
	1.8,1.8,1.8,1.8,1.8,2,2.7,2.7,2.7,2.7,2.7,2.7,2.7,3,3.6,3.6,3.6,3.6,3.6,3.6,3.6,3.6,3.6,3.6,4,4.5,4.5,4.5,4.5,5,5.4,5.4,
	5.4,5.4,5.4,5.4,5.4,5.4,5.4,5.4,5.4,5.4,5.4,5.4,5.4,5.4,5.4,5.4,5.4,5.4,5.4,5.4,5.4,5.4,5.4,6,6.3,6.3,6.3,6.3,7,7.2,
	7.2,7.2,7.2,7.2,7.2,7.2,7.2,
	2,2,2,2,2,2,2,4,4,4,4,4,4,1.8,1.8,1.8,1.8,1.8,1.8,1.8,5.4,5.4,5.4,5.4,5.4,5.4,5.4,5.4,6,6,6,6,6,6,7,7,7,7,7,7,7,7];
	
var highOne = [
	 0, 1, 2, 3, 4, 5, 6, 7, 8, 9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,
	40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,
	80,81 ];
	
var NodeOne = [ 0,6,19,33,41,47,67,76 ];
		
var highThree = [
	82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,
	115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,
	144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159 ];
	
var NodeThree = [ 0,84,96,104,115,120,146,151 ];

var nodeTwo = [ 0, 163, 0, 166 ];
var nodeFour = [ 0, 170, 0, 168 ];
var nodeFive = 173;
var node3and5 = 87;
var nodeSix = 180;
var node3and6 = 125;
var nodeEight = [ 0, 190, 0, 192 ];
var nodeTen = [ 0, 195, 0, 198 ];

var pos = [
	1,1,1,1,1,1,1,1,1,1,
	1,1,1,1,1,1,1,1,1,1,
	1,1,1,1,1,1,1,1,1,1,
	1,1,1,1,1,1,1,1,1,1,
	1,1,1,1,1,1,1,1,1,1,
	1,1,1,1,1,1,1,1,1,1,
	1,1,1,1,1,1,1,1,1,1,
	1,1,1,1,1,1,1,1,1,1,
	1,1,3,3,3,3,3,3,3,3,
	3,3,3,3,3,3,3,3,3,3,
	3,3,3,3,3,3,3,3,3,3,
	3,3,3,3,3,3,3,3,3,3,
	3,3,3,3,3,3,3,3,3,3,
	3,3,3,3,3,3,3,3,3,3,
	3,3,3,3,3,3,3,3,3,3,
	3,3,3,3,3,3,3,3,3,3,
	2,2,2,2,2,2,2,4,4,4,
	4,4,4,5,5,5,5,5,5,5,
	6,6,6,6,6,6,6,6,8,8,
	8,8,8,8,10,10,10,10,10,10
	,10,10 ];
	
var Trans = [ 
   "1-0",   "1-1",   "1-2",   "1-5",   "1-6",  "1-10",  "1-11",  "1-13",  "1-15",  "1-17",
  "1-23",  "1-25",  "1-27",  "1-32",  "1-33",  "1-35",  "1-36",  "1-41",  "1-49",  "1-52",
  "1-55",  "1-57",  "1-59",  "1-60",  "1-62",  "1-65",  "1-67",  "1-69",  "1-71",  "1-83",
  "1-86",  "1-91",  "1-95",  "1-99", "1-110", "1-125", "1-132", "1-140", "1-150", "1-159",
 "1-160", "1-165", "1-168", "1-174", "1-178", "1-181", "1-189", "1-192", "1-198", "1-207",
 "1-211", "1-220", "1-229", "1-230", "1-235", "1-240", "1-243", "1-250", "1-257", "1-264",
 "1-270", "1-272", "1-284", "1-288", "1-299", "1-303", "1-311", "1-315", "1-319", "1-327",
 "1-330", "1-335", "1-338", "1-342", "1-349", "1-356", "1-362", "1-367", "1-369", "1-370",
 "1-371", "1-372",   "7-0",   "7-2",  "7-10",  "7-12", 	"7-14",  "7-16",  "7-16",  "7-20",
  "7-25",  "7-26",  "7-31",  "7-35",  "7-42",  "7-50",  "7-54",  "7-62",  "7-68",  "7-76",
  "7-79",  "7-90",  "7-96",  "7-98", "7-100", "7-103", "7-109", "7-115", "7-119", "7-124",
 "7-130", "7-134", "7-144", "7-156", "7-164", "7-169", "7-172", "7-176", "7-182", "7-191",
 "7-196", "7-202", "7-207", "7-209", "7-211", "7-214", "7-217", "7-222", "7-224", "7-228",
 "7-231", "7-237", "7-243", "7-260", "7-269", "7-276", "7-279", "7-290", "7-297", "7-300",
 "7-311", "7-319", "7-322",	"7-329", "7-334", "7-340", "7-346", "7-350", "7-357", "7-363",
 "7-369", "7-383", "7-391", "7-400", "7-407", "7-415", "7-421", "7-424", "7-400", "7-431",
   "6-0",	"6-1",   "6-4",   "6-8",  "6-11",  "6-18",  "6-20",	  "8-0",   "8-2",	"8-9",
  "8-11",  "8-14",  "8-17",	  "9-0",   "9-4",  "9-14",	"9-30",  "9-38",  "9-47",  "9-54",
  "10-0",  "10-3", 	"10-5",	"10-17", "10-25", "10-29", "10-34",	"10-37",  "11-0",  "11-2",
  "11-6",  "11-9", "11-14", "11-15",  "12-0",  "12-1",	"12-6",	"12-13", "12-19", "12-22",
 "12-25", "12-33" ];	

var path = new Array(128);
var pathIndex = 0;
var pathFinal = new Array(128);

function progress(){
	pathIndex = 0;
	
	
	// input 1-1 10-1
	var start = Trans.indexOf( document.form0.select0.value );
	var end = Trans.indexOf( document.form1.select1.value );
	
	Algorithm( start, end );
	
	for( var i = 0; i < pathIndex; i++ )
		pathFinal[ i ] = Trans[ path[ i ] ] + " ";

					        var nowTime = time.value;
							var NewArrayTime = new Array();
							var NewArrayTime = nowTime.split(" ");


					        //var URLs="/traffic/recieve.php";
					        var URLs="http://140.138.77.103/BDSTeam24/traffic/recieve.php";
					        $.ajax
					        ({
					                     url: URLs,
					                     data: { start : start , end : end , nowTime : nowTime , pathFinal : pathFinal , pathIndex : pathIndex },
					                     type:"POST",
					                     success: function(msg)
					                     {
					                         alert( msg );
					                     },

					                     error:function(xhr, ajaxOptions, thrownError){ 
					                         alert(xhr.status); 
					                         alert(thrownError); 
					                      }
					                 })/*
					        .done(function( msg ) {
					            alert( "Data Saved: " + msg );
					        })*/;
}


function Algorithm( start, end ){
	Find( start, end );
	path[ pathIndex++ ] = end;
}
//最後要加入end

function Find( start, end ){
	if( (pos[ start ] == 1 || pos[ start ] == 3) && (pos[ end ] == 1 || pos[ end ] == 3 ) ){
		FindBy1and3( start, end ); // OK
	}else if( pos[ start ] == pos[ end ] ){ // 同一條
		if( pos[ start ] == 5 || pos[ start ] == 6 )
			highSpecial( pos[ start ], start, end );
		else{ // 2,4,8,10
			highRow( highLen[ start ], start, end );
		}
	}else if( (pos[ start ] == 1 || pos[ start ] == 3) ){ // 起點是1or3
		var newEnd;
		var newStart;
		// to 5 or 6
		if( pos[ end ] == 5 || pos[ end ] == 6 ){
			if( pos[ end ] == 5 ){
				newEnd = node3and5
				newStart = nodeFive;
			}else{
				newEnd = node3and6;
				newStart = nodeSix;
			}
			FindBy1and3( start, newEnd );
			path[ pathIndex++ ] = newEnd;
			highSpecial( pos[ end ], newStart, end );
		}else{ // to 2,4,8,10
			if( pos[ start ] == 1 )
				newEnd = NodeOne[ highLen[ end ] ];
			else
				newEnd = NodeThree[ highLen[ end ] ];
			
			FindByOnly1orOnly3( start, newEnd );
			path[ pathIndex++ ] = newEnd;
		
			if( pos[ end ] == 2 ){
				newStart = nodeTwo[ pos[ start ] ];
			}else if( pos[ end ] == 4 )
				newStart = nodeFour[ pos[ start ] ];
			else if( pos[ end ] == 8 )
				newStart = nodeEight[ pos[ start ] ];
			else if( pos[ end ] == 10 )
				newStart = nodeTen[ pos[ start ] ];
				
			highRow( highLen[ end ], newStart, end );
		}
	}else if( (pos[ start ] == 5 || pos[ start ] == 6) ){ // 5 ｏｒ　６　轉到其他非同條的
		var newEnd;
		var newStart;
		if( pos[ start ] == 5 ){
			newStart = node3and5;
			newEnd = nodeFive;
		}else{
			newStart = node3and6;
			newEnd = nodeSix;
		}
			
		highSpecial( pos[ start ], start, newEnd );
		path[ pathIndex++ ] = newEnd;
		Find( newStart, end );
	}else{ // 起點2,4,8,10  轉到其他非同條的
		var newStart;
		var newEnd;
		if( pos[ end ] == 1 || pos[ end ] == 3 ){
			if( pos[ start ] == 2 )
				newEnd = nodeTwo[ pos[ end ] ];
			else if( pos[ start ] == 4 )
				newEnd = nodeFour[ pos[ end ] ];
			else if( pos[ start ] == 8 )
				newEnd = nodeEight[ pos[ end ] ];
			else if( pos[ start ] == 10 )
				newEnd = nodeTen[ pos[ end ] ];
			
			highRow( highLen[ start ], start, newEnd );
			path[ pathIndex++ ] = newEnd;
		
			if( pos[ end ] == 1 )
				newStart = NodeOne[ highLen[ start ] ];
			else
				newStart = NodeThree[ highLen[ start ] ];
			
			FindBy1and3( newStart, end );
		}else{ // 到非1,3 固定從3號接
			if( pos[ start ] == 2 )
				newEnd = nodeTwo[ 3 ];
			else if( pos[ start ] == 4 )
				newEnd = nodeFour[ 3 ];
			else if( pos[ start ] == 8 )
				newEnd = nodeEight[ 3 ];
			else if( pos[ start ] == 10 )
				newEnd = nodeTen[ 3 ];
				
			highRow( highLen[ start ], start, newEnd );
			path[ pathIndex++ ] = newEnd;
			
			newStart = NodeThree[ highLen[ start ] ];
			Find( newStart, end );
		}
	}
}
// 固定為一條路
function FindBy1and3( start, end ){
	// special case 不同國道但在同Node區間
	if( (highLen[ end ] - highLen[ start ]) == 0 && (highLen[ end ] - Math.floor( highLen[ end ] )) != 0 && pos[ start ] != pos[ end ] ){
		// 大於等於1都從上轉 好點就是選 1 3 5 6 7 走
		var midLen;
		if( highLen[ start ] >= 1 ){
			midLen = Math.floor( highLen[ start ] );
		}else{
			midLen = Math.ceil( highLen[ start ] );
		}
		
		var newStart;
		if( pos[ start ]  == 1 )
			newStart = NodeOne[ midLen ];
		else if( pos[ start ] == 3 )
			newStart = NodeThree[ midLen ];
		
		FindByOnly1orOnly3( start, newStart ); 
		FindBy1and3( newStart, end );// 回到差距0的case
	}else if( Math.floor( Math.abs( highLen[ end ] - highLen[ start ] ) ) == 0 ){
		if( pos[ start ] == pos[ end ] ){
			FindByOnly1orOnly3( start, end );
		}else{
			var midLen;
			if( highLen[ end ] > highLen[ start ] ){
				midLen = Math.ceil( highLen[ start ] );
			}else{
				midLen = Math.floor( highLen[ start ] );
			}
			
			var newStart;
			if( pos[ start ] == 1 ){
				FindByOnly1orOnly3( start, NodeOne[ midLen ] );// highOne[ start ] to NodeOne[ midLen ]
				path[ pathIndex++ ] = NodeOne[ midLen ];
				highRowByNodeToNode( midLen, 1 );
				newStart = NodeThree[ midLen ];
			}else if( pos[ start ] == 3 ){
				FindByOnly1orOnly3( start, NodeThree[ midLen ] );// highOne[ start ] to NodeOne[ midLen ]
				path[ pathIndex++ ] = NodeThree[ midLen ];
				highRowByNodeToNode( midLen, 3 );
				newStart = NodeOne[ midLen ];
			}
			FindBy1and3( newStart, end ); // 遞迴到同條高速公路的case
		}
	}else{
		var midLen;
		if( highLen[ end ] > highLen[ start ] ){
			midLen = Math.floor( highLen[ end ] );
		}else{
			midLen = Math.ceil( highLen[ end ] );
		}
		var newStart;
		if( pos[ start ] == 1 )
			newStart = NodeOne[ midLen ];
		else if( pos[ start ] == 3 )
			newStart = NodeThree[ midLen ];
		
		FindByOnly1orOnly3( start, newStart ); // 直走到最接近終點的Node
		FindBy1and3( newStart, end ); // 遞迴到差距0的case
	}
} 

function FindByOnly1orOnly3( start, end ){
	if( pos[ start ] == 1 ){ // highOne[ start ] to highOne[ end ]
		var index = highOne.indexOf( start );
		var endIndex = highOne.indexOf( end );
		if( index <= endIndex ){
		for( ; index < endIndex; index++ ){
				path[ pathIndex++ ] = highOne[ index ];
			}
		}else{
			for( ; index > endIndex; index-- ){
				path[ pathIndex++ ] = highOne[ index ];
			}
		}
	}else if( pos[ start ] == 3 ){// highThree[ start ] to highThree[ end ]
		var index = highThree.indexOf( start );
		var endIndex = highThree.indexOf( end );
		if( index <= endIndex ){
			for( ; index < endIndex; index++ ){
				path[ pathIndex++ ] = highThree[ index ];
			}
		}else{
			for( ; index > endIndex; index-- ){
				path[ pathIndex++ ] = highThree[ index ];
			}
		}
	}
}

// 橫的 固定 1-3 OR 3-1專用
function highRowByNodeToNode( highIndex, startHighIndex ){
	if( highIndex == 2 || highIndex == 4 || highIndex == 6|| highIndex == 7 ){	
		var newStart;
		var newEnd;
		if( startHighIndex == 1 ){
			switch (highIndex) {
			case 2:
				newStart = nodeTwo[ 1 ];
				newEnd = nodeTwo[ 3 ];
				break;
			case 4:
				newStart = nodeFour[ 1 ];
				newEnd = nodeFour[ 3 ];
				break;
			case 6:
				newStart = nodeEight[ 1 ];
				newEnd = nodeEight[ 3 ];
				break;
			case 7:
				newStart = nodeTen[ 1 ];
				newEnd = nodeTen[ 3 ];
				break;
			}
		}else if( startHighIndex == 3 ){
			switch (highIndex) {
			case 2:
				newStart = nodeTwo[ 3 ];
				newEnd = nodeTwo[ 1 ];
				break;
			case 4:
				newStart = nodeFour[ 3 ];
				newEnd = nodeFour[ 1 ];
				break;
			case 6:
				newStart = nodeEight[ 3 ];
				newEnd = nodeEight[ 1 ];
				break;
			case 7:
				newStart = nodeTen[ 3 ];
				newEnd = nodeTen[ 1 ];
				break;
			}
		}
		highRow( highIndex, newStart, newEnd );
		path[ pathIndex++ ] = newEnd;
	}
}

//橫的 不含5號跟6號( 這function裡面6號指8號 7號指10號 )	
function highRow( highIndex, start, end ){
	var highTwo = [ 160, 161, 162, 163, 164, 165, 166 ];
	var highFour = [ 167, 168, 169, 170, 171, 172 ];
	var highSix = [ 188, 189, 190, 191, 192, 193 ];
	var highSeven = [ 194, 195, 196, 197, 198, 199, 200, 201 ];
	
	switch (highIndex) {
    case 2:
		var index = highTwo.indexOf( start );
		var endIndex = highTwo.indexOf( end );
		if( index <= endIndex ){
			for( ; index < endIndex; index++ ){
				path[ pathIndex++ ] = highTwo[ index ];
			}
		}else{
			for( ; index > endIndex; index-- ){
				path[ pathIndex++ ] = highTwo[ index ];
			}
		}
        break;
    case 4:
        var index = highFour.indexOf( start );
		var endIndex = highFour.indexOf( end );
		if( index <= endIndex ){
			for( ; index < endIndex; index++ ){
				path[ pathIndex++ ] = highFour[ index ];
			}
		}else{
			for( ; index > endIndex; index-- ){
				path[ pathIndex++ ] = highFour[ index ];
			}
		}
        break;
    case 6:
        var index = highSix.indexOf( start );
		var endIndex = highSix.indexOf( end );
		if( index <= endIndex ){
			for( ; index < endIndex; index++ ){
				path[ pathIndex++ ] = highSix[ index ];
			}
		}else{
			for( ; index > endIndex; index-- ){
				path[ pathIndex++ ] = highSix[ index ];
			}
		}
        break;
	case 7:
	    var index = highSeven.indexOf( start );
		var endIndex = highSeven.indexOf( end );
		if( index <= endIndex ){
			for( ; index < endIndex; index++ ){
				path[ pathIndex++ ] = highSeven[ index ];
			}
		}else{
			for( ; index > endIndex; index-- ){
				path[ pathIndex++ ] = highSeven[ index ];
			}
		}
		break;
	}
}

// 5號6號 只連3號	
function highSpecial( highIndex, start, end ){
	var highFive = [ 173, 174, 175, 176, 177, 178, 179 ];
	var nodeSix = [ 180, 181, 182 ,183, 184, 185, 186, 187 ];
	
	if( highIndex == 5 ){
		var index = highFive.indexOf( start );
		var endIndex = highFive.indexOf( end );
		if( index <= endIndex ){
			for( ; index < endIndex; index++ ){
				path[ pathIndex++ ] = highFive[ index ];
			}
		}else{
			for( ; index > endIndex; index-- ){
				path[ pathIndex++ ] = highFive[ index ];
			}
		}
	}else if( highIndex == 6 ){
		var index = nodeSix.indexOf( start );
		var endIndex = nodeSix.indexOf( end );
		if( index <= endIndex ){
			for( ; index < endIndex; index++ ){
				path[ pathIndex++ ] = nodeSix[ index ];
			}
		}else{
			for( ; index > endIndex; index-- ){
				path[ pathIndex++ ] = nodeSix[ index ];
			}
		}
	}
}


					       function enter(){
					 
					        var nowTime = time.value;
								var NewArrayTime = new Array();
								var NewArrayTime = nowTime.split(" ");

								//測試array傳遞
								var testArray = new Array("1-57","1-59","1-60","1-62");
								var testCount = 3;

					        //alert(nowTime);
					        start = document.form0.select0.value;
					        end = document.form1.select1.value;
					        //alert(start);
					        //alert(end);
					/*
					        if( nowTime == '2015/06/20')
					        {
					         alert("test");
					        }
					*/
					        var URLs="/traffic/recieve.php";
					        $.ajax
					        ({
					                     url: URLs,
					                     data: { start : start , end : end , nowTime : nowTime , testArray : testArray , testCount : testCount },
					                     type:"POST",
					                     success: function(msg)
					                     {
					                         alert( msg );
					                     },

					                     error:function(xhr, ajaxOptions, thrownError){ 
					                         alert(xhr.status); 
					                         alert(thrownError); 
					                      }
					                 })/*
					        .done(function( msg ) {
					            alert( "Data Saved: " + msg );
					        })*/;
					       }
</Script>


						<div class="row">
							<div class="4u">
								<section class="box style1">
									<span class="icon featured fa-camera-retro"></span>
									<h3>請輸入出發地</h3>
							<form name="form0">
							<select name="select0" >
							<option value="-1">請選擇</option>
							<optgroup selected="true" label="國道一號"> 
							<option value="1-0">基隆端</option>
							<option value="1-1">基隆</option>
							<option value="1-2">八堵</option>
							<option value="1-5">大華系統</option>
							<option value="1-6">五堵</option>
							<option value="1-10">汐止</option>
							<option value="1-11">汐止系統</option>
							<option value="1-13">汐止端</option>
							<option value="1-15">東湖</option>
							<option value="1-17">內湖</option>
							<option value="1-23">圓山</option>
							<option value="1-25">台北</option>
							<option value="1-27">三重</option>
							<option value="1-32">五股轉接道</option>
							<option value="1-33">五股</option>
							<option value="1-35">高公局</option>
							<option value="1-36">泰山轉接道</option>
							<option value="1-41">林口</option>
							<option value="1-49">桃園</option>
							<option value="1-52">機場系統</option>
							<option value="1-55">中壢服務區</option>
							<option value="1-57">內壢</option>
							<option value="1-59">中壢轉接一</option>
							<option value="1-60">中壢轉接二</option>
							<option value="1-62">中壢</option>
							<option value="1-65">平鎮系統</option>
							<option value="1-67">幼獅</option>
							<option value="1-69">楊梅</option>
							<option value="1-71">楊梅端</option>
							<option value="1-83">湖口</option>
							<option value="1-86">湖口服務區</option>
							<option value="1-91">竹北</option>
							<option value="1-95">新竹</option>
							<option value="1-99">新竹系統</option>
							<option value="1-110">頭份</option>
							<option value="1-125">頭屋</option>
							<option value="1-132">苗栗</option>
							<option value="1-140">銅鑼</option>
							<option value="1-150">三義</option>
							<option value="1-159">泰安服務區</option>
							<option value="1-160">后里</option>
							<option value="1-165">台中系統</option>
							<option value="1-168">豐原</option>
							<option value="1-174">大雅</option>
							<option value="1-178">台中</option>
							<option value="1-181">南屯</option>
							<option value="1-189">王田</option>
							<option value="1-192">彰化系統</option>
							<option value="1-198">彰化</option>
							<option value="1-207">埔鹽系統</option>
							<option value="1-211">員林</option>
							<option value="1-220">北斗</option>
							<option value="1-229">西螺服務區</option>
							<option value="1-230">西螺</option>
							<option value="1-235">虎尾</option>
							<option value="1-240">斗南</option>
							<option value="1-243">雲林系統</option>
							<option value="1-250">大林</option>
							<option value="1-257">民雄</option>
							<option value="1-264">嘉義</option>
							<option value="1-270">水上</option>
							<option value="1-272">嘉義系統</option>
							<option value="1-284">新營服務區</option>
							<option value="1-288">新營</option>
							<option value="1-299">下營系統</option>
							<option value="1-303">麻豆</option>
							<option value="1-311">安定</option>
							<option value="1-315">台南系統</option>
							<option value="1-319">永康</option>
							<option value="1-327">台南</option>
							<option value="1-330">仁德系統</option>
							<option value="1-335">仁德服務區</option>
							<option value="1-338">路竹</option>
							<option value="1-342">高科</option>
							<option value="1-349">岡山</option>
							<option value="1-356">楠梓</option>
							<option value="1-362">鼎金系統</option>
							<option value="1-367">高雄</option>
							<option value="1-369">瑞隆路</option>
							<option value="1-370">五甲系統</option>
							<option value="1-371">五甲</option>
							<option value="1-372">高雄端</option>
							<optgroup label="國道二號"> 
							<option value="6-0">桃園機場</option>
							<option value="6-1">大園</option>
							<option value="6-4">大竹</option>
							<option value="6-8">機場系統</option>
							<option value="6-11">南桃園</option>
							<option value="6-18">大湳</option>
							<option value="6-20">鶯歌系統</option>
							<optgroup label="國道三號"> 
							<option value="7-0">基金</option>
							<option value="7-2">瑪東系統</option>
							<option value="7-10">汐止系統</option>
							<option value="7-12">新台五路</option>
							<option value="7-14">南港</option>
							<option value="7-16">南港系統</option>
							<option value="7-16">南深路</option>
							<option value="7-20">木柵</option>
							<option value="7-25">木柵休息站</option>
							<option value="7-26">新店</option>
							<option value="7-31">安坑</option>
							<option value="7-35">中和</option>
							<option value="7-42">土城</option>
							<option value="7-50">三鶯</option>
							<option value="7-54">鶯歌系統</option>
							<option value="7-62">大溪</option>
							<option value="7-68">龍潭</option>
							<option value="7-76">關西服務區</option>
							<option value="7-79">關西</option>
							<option value="7-90">竹林</option>
							<option value="7-96">寶山休息站</option>
							<option value="7-98">寶山</option>
							<option value="7-100">新竹系統</option>
							<option value="7-103">茄苳</option>
							<option value="7-109">香山</option>
							<option value="7-115">西濱</option>
							<option value="7-119">竹南</option>
							<option value="7-124">大山</option>
							<option value="7-130">後龍</option>
							<option value="7-134">西湖服務區</option>
							<option value="7-144">通宵</option>
							<option value="7-156">苑裡</option>
							<option value="7-164">大甲</option>
							<option value="7-169">中港系統</option>
							<option value="7-172">清水服務區</option>
							<option value="7-176">沙鹿</option>
							<option value="7-182">龍井</option>
							<option value="7-191">和美</option>
							<option value="7-196">彰化系統</option>
							<option value="7-202">快官</option>
							<option value="7-207">烏日</option>
							<option value="7-209">中投</option>
							<option value="7-211">霧峰</option>
							<option value="7-214">霧峰系統</option>
							<option value="7-217">草屯</option>
							<option value="7-222">中興系統</option>
							<option value="7-224">中興</option>
							<option value="7-228">南投</option>
							<option value="7-231">南投服務區</option>
							<option value="7-237">名間</option>
							<option value="7-243">竹山</option>
							<option value="7-260">斗六</option>
							<option value="7-269">古坑系統</option>
							<option value="7-276">古坑服務區</option>
							<option value="7-279">梅山</option>
							<option value="7-290">竹崎</option>
							<option value="7-297">中埔</option>
							<option value="7-300">水上</option>
							<option value="7-311">白河</option>
							<option value="7-319">車山服務區</option>
							<option value="7-322">柳營</option>
							<option value="7-329">烏山頭</option>
							<option value="7-334">官田系統</option>
							<option value="7-340">善化</option>
							<option value="7-346">新化系統</option>
							<option value="7-350">新化休息站</option>
							<option value="7-357">關廟</option>
							<option value="7-363">關廟服務區</option>
							<option value="7-369">田寮</option>
							<option value="7-383">燕巢系統</option>
							<option value="7-391">九如</option>
							<option value="7-400">長治</option>
							<option value="7-407">麟洛</option>
							<option value="7-415">竹田系統</option>
							<option value="7-421">崁頂</option>
							<option value="7-424">南州</option>
							<option value="7-400">林邊</option>
							<option value="7-431">大鵬灣端</option>
							<optgroup label="國道四號"> 
							<option value="8-0">清水端</option>
							<option value="8-2">中港系統</option>
							<option value="8-9">神岡</option>
							<option value="8-11">台中系統</option>
							<option value="8-14">后豐</option>
							<option value="8-17">豐原端</option>
							<optgroup label="國道五號"> 
							<option value="9-0">南港系統</option>
							<option value="9-4">石碇</option>
							<option value="9-14">坪林行控</option>
							<option value="9-30">頭城</option>
							<option value="9-38">宜蘭</option>
							<option value="9-47">羅東</option>
							<option value="9-54">蘇澳</option>
							<optgroup label="國道六號"> 
							<option value="10-0">霧峰系統</option>
							<option value="10-3">舊正</option>
							<option value="10-5">草東屯</option>
							<option value="10-17">國姓</option>
							<option value="10-25">北山</option>
							<option value="10-29">愛蘭</option>
							<option value="10-34">埔里</option>
							<option value="10-37">埔里端</option>
							<optgroup label="國道八號"> 
							<option value="11-0">台南端</option>
							<option value="11-2">新吉</option>
							<option value="11-6">台南系統</option>
							<option value="11-9">新市</option>
							<option value="11-14">新化系統</option>
							<option value="11-15">新化端</option>
							<optgroup label="國道十號"> 
							<option value="12-0">左營端</option>
							<option value="12-1">鼎金系統</option>
							<option value="12-6">仁武</option>
							<option value="12-13">燕巢</option>
							<option value="12-19">燕巢系統</option>
							<option value="12-22">嶺口</option>
							<option value="12-25">里港</option>
							<option value="12-33">旗山端</option>
							</select>
							</form>
							</section>
							</div>


							<div class="4u">
								<section class="box style1">
									<span class="icon featured fa-camera-retro"></span>
									<h3>請輸入目的地</h3>
							<form name="form1">
							<select name="select1" >
							<option value="-1">請選擇</option>
							<optgroup selected="true" label="國道一號"> 
							<option value="1-0">基隆端</option>
							<option value="1-1">基隆</option>
							<option value="1-2">八堵</option>
							<option value="1-5">大華系統</option>
							<option value="1-6">五堵</option>
							<option value="1-10">汐止</option>
							<option value="1-11">汐止系統</option>
							<option value="1-13">汐止端</option>
							<option value="1-15">東湖</option>
							<option value="1-17">內湖</option>
							<option value="1-23">圓山</option>
							<option value="1-25">台北</option>
							<option value="1-27">三重</option>
							<option value="1-32">五股轉接道</option>
							<option value="1-33">五股</option>
							<option value="1-35">高公局</option>
							<option value="1-36">泰山轉接道</option>
							<option value="1-41">林口</option>
							<option value="1-49">桃園</option>
							<option value="1-52">機場系統</option>
							<option value="1-55">中壢服務區</option>
							<option value="1-57">內壢</option>
							<option value="1-59">中壢轉接一</option>
							<option value="1-60">中壢轉接二</option>
							<option value="1-62">中壢</option>
							<option value="1-65">平鎮系統</option>
							<option value="1-67">幼獅</option>
							<option value="1-69">楊梅</option>
							<option value="1-71">楊梅端</option>
							<option value="1-83">湖口</option>
							<option value="1-86">湖口服務區</option>
							<option value="1-91">竹北</option>
							<option value="1-95">新竹</option>
							<option value="1-99">新竹系統</option>
							<option value="1-110">頭份</option>
							<option value="1-125">頭屋</option>
							<option value="1-132">苗栗</option>
							<option value="1-140">銅鑼</option>
							<option value="1-150">三義</option>
							<option value="1-159">泰安服務區</option>
							<option value="1-160">后里</option>
							<option value="1-165">台中系統</option>
							<option value="1-168">豐原</option>
							<option value="1-174">大雅</option>
							<option value="1-178">台中</option>
							<option value="1-181">南屯</option>
							<option value="1-189">王田</option>
							<option value="1-192">彰化系統</option>
							<option value="1-198">彰化</option>
							<option value="1-207">埔鹽系統</option>
							<option value="1-211">員林</option>
							<option value="1-220">北斗</option>
							<option value="1-229">西螺服務區</option>
							<option value="1-230">西螺</option>
							<option value="1-235">虎尾</option>
							<option value="1-240">斗南</option>
							<option value="1-243">雲林系統</option>
							<option value="1-250">大林</option>
							<option value="1-257">民雄</option>
							<option value="1-264">嘉義</option>
							<option value="1-270">水上</option>
							<option value="1-272">嘉義系統</option>
							<option value="1-284">新營服務區</option>
							<option value="1-288">新營</option>
							<option value="1-299">下營系統</option>
							<option value="1-303">麻豆</option>
							<option value="1-311">安定</option>
							<option value="1-315">台南系統</option>
							<option value="1-319">永康</option>
							<option value="1-327">台南</option>
							<option value="1-330">仁德系統</option>
							<option value="1-335">仁德服務區</option>
							<option value="1-338">路竹</option>
							<option value="1-342">高科</option>
							<option value="1-349">岡山</option>
							<option value="1-356">楠梓</option>
							<option value="1-362">鼎金系統</option>
							<option value="1-367">高雄</option>
							<option value="1-369">瑞隆路</option>
							<option value="1-370">五甲系統</option>
							<option value="1-371">五甲</option>
							<option value="1-372">高雄端</option>
							<optgroup label="國道二號"> 
							<option value="6-0">桃園機場</option>
							<option value="6-1">大園</option>
							<option value="6-4">大竹</option>
							<option value="6-8">機場系統</option>
							<option value="6-11">南桃園</option>
							<option value="6-18">大湳</option>
							<option value="6-20">鶯歌系統</option>
							<optgroup label="國道三號"> 
							<option value="7-0">基金</option>
							<option value="7-2">瑪東系統</option>
							<option value="7-10">汐止系統</option>
							<option value="7-12">新台五路</option>
							<option value="7-14">南港</option>
							<option value="7-16">南港系統</option>
							<option value="7-16">南深路</option>
							<option value="7-20">木柵</option>
							<option value="7-25">木柵休息站</option>
							<option value="7-26">新店</option>
							<option value="7-31">安坑</option>
							<option value="7-35">中和</option>
							<option value="7-42">土城</option>
							<option value="7-50">三鶯</option>
							<option value="7-54">鶯歌系統</option>
							<option value="7-62">大溪</option>
							<option value="7-68">龍潭</option>
							<option value="7-76">關西服務區</option>
							<option value="7-79">關西</option>
							<option value="7-90">竹林</option>
							<option value="7-96">寶山休息站</option>
							<option value="7-98">寶山</option>
							<option value="7-100">新竹系統</option>
							<option value="7-103">茄苳</option>
							<option value="7-109">香山</option>
							<option value="7-115">西濱</option>
							<option value="7-119">竹南</option>
							<option value="7-124">大山</option>
							<option value="7-130">後龍</option>
							<option value="7-134">西湖服務區</option>
							<option value="7-144">通宵</option>
							<option value="7-156">苑裡</option>
							<option value="7-164">大甲</option>
							<option value="7-169">中港系統</option>
							<option value="7-172">清水服務區</option>
							<option value="7-176">沙鹿</option>
							<option value="7-182">龍井</option>
							<option value="7-191">和美</option>
							<option value="7-196">彰化系統</option>
							<option value="7-202">快官</option>
							<option value="7-207">烏日</option>
							<option value="7-209">中投</option>
							<option value="7-211">霧峰</option>
							<option value="7-214">霧峰系統</option>
							<option value="7-217">草屯</option>
							<option value="7-222">中興系統</option>
							<option value="7-224">中興</option>
							<option value="7-228">南投</option>
							<option value="7-231">南投服務區</option>
							<option value="7-237">名間</option>
							<option value="7-243">竹山</option>
							<option value="7-260">斗六</option>
							<option value="7-269">古坑系統</option>
							<option value="7-276">古坑服務區</option>
							<option value="7-279">梅山</option>
							<option value="7-290">竹崎</option>
							<option value="7-297">中埔</option>
							<option value="7-300">水上</option>
							<option value="7-311">白河</option>
							<option value="7-319">車山服務區</option>
							<option value="7-322">柳營</option>
							<option value="7-329">烏山頭</option>
							<option value="7-334">官田系統</option>
							<option value="7-340">善化</option>
							<option value="7-346">新化系統</option>
							<option value="7-350">新化休息站</option>
							<option value="7-357">關廟</option>
							<option value="7-363">關廟服務區</option>
							<option value="7-369">田寮</option>
							<option value="7-383">燕巢系統</option>
							<option value="7-391">九如</option>
							<option value="7-400">長治</option>
							<option value="7-407">麟洛</option>
							<option value="7-415">竹田系統</option>
							<option value="7-421">崁頂</option>
							<option value="7-424">南州</option>
							<option value="7-400">林邊</option>
							<option value="7-431">大鵬灣端</option>
							<optgroup label="國道四號"> 
							<option value="8-0">清水端</option>
							<option value="8-2">中港系統</option>
							<option value="8-9">神岡</option>
							<option value="8-11">台中系統</option>
							<option value="8-14">后豐</option>
							<option value="8-17">豐原端</option>
							<optgroup label="國道五號"> 
							<option value="9-0">南港系統</option>
							<option value="9-4">石碇</option>
							<option value="9-14">坪林行控</option>
							<option value="9-30">頭城</option>
							<option value="9-38">宜蘭</option>
							<option value="9-47">羅東</option>
							<option value="9-54">蘇澳</option>
							<optgroup label="國道六號"> 
							<option value="10-0">霧峰系統</option>
							<option value="10-3">舊正</option>
							<option value="10-5">草東屯</option>
							<option value="10-17">國姓</option>
							<option value="10-25">北山</option>
							<option value="10-29">愛蘭</option>
							<option value="10-34">埔里</option>
							<option value="10-37">埔里端</option>
							<optgroup label="國道八號"> 
							<option value="11-0">台南端</option>
							<option value="11-2">新吉</option>
							<option value="11-6">台南系統</option>
							<option value="11-9">新市</option>
							<option value="11-14">新化系統</option>
							<option value="11-15">新化端</option>
							<optgroup label="國道十號"> 
							<option value="12-0">左營端</option>
							<option value="12-1">鼎金系統</option>
							<option value="12-6">仁武</option>
							<option value="12-13">燕巢</option>
							<option value="12-19">燕巢系統</option>
							<option value="12-22">嶺口</option>
							<option value="12-25">里港</option>
							<option value="12-33">旗山端</option>
							</select>
							</form>
							</section>
							</div>



							<div class="4u">
								<section class="box style1">
									<span class="icon featured fa-camera-retro"></span>
									<h3>請輸入出發日期</h3>
									<form method=POST action="" id="form2">
									<input type="text" name="time" id="time" value="YYYY/MM/DD hh:mm">
									</form>
							</section>
							</div>
					</div>

					<footer>
						<input id="starButton" onclick="progress()" type="button" value="Enter" class="button big scrolly"/>
					</footer>
						</div>


				</article>
			</div>

		<!-- Professor -->
			<div class="wrapper style3">
				<article id="professor">
					<header>
						<h2>關於我們團隊</h2>
					</header>
										<div class="container">
						<div class="row">
							<div class="4u">
								<section class="box style1">
									<span class="icon featured fa-comments-o"></span>
									<h3>楊適豪</h3>
									<p>(1)	撰寫爬蟲抓取高速公路局路況資訊</p>
									<p>(2)	將資料置入MYSQL之指定TABLE中</p>
								</section>
							</div>
							<div class="4u">
								<section class="box style1">
									<span class="icon featured fa-camera-retro"></span>
									<h3>陳恒劭</h3>
									<p>(1)  網頁介面及各項目整合</p>
									<p>(2)	連續假期加權、推薦依據及預估計算</p> 
								</section>
							</div>
							<div class="4u">
								<section class="box style1">
									<span class="icon featured fa-thumbs-o-up"></span>
									<h3>簡孝穎</h3>
									<p>(1)  路徑規劃</p>
									<p>(2)  判斷起點終點沿途路徑</p>
								</section>
							</div>

						</div>
					</div>

					<footer>
						<a href="#contact" class="button big scrolly">Get in touch with our team</a>
					</footer>
				</article>
			</div>

		<!-- Contact -->
			<div class="wrapper style4">
				<article id="contact" class="container 75%">
					<header>
						<h2>聯絡我們</h2>
						<p>歡迎隨時透過下面表格與我們團隊進行聯繫，我們將會盡快回復。</p>
					</header>
					<div>
						<div class="row">
							<div class="12u">
								<form method="post" action="#">
									<div>
										<div class="row">
											<div class="6u">
												<input type="text" name="name" id="name" placeholder="Name" />
											</div>
											<div class="6u">
												<input type="text" name="email" id="email" placeholder="Email" />
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<input type="text" name="subject" id="subject" placeholder="Subject" />
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<textarea name="message" id="message" placeholder="Message"></textarea>
											</div>
										</div>
										<div class="row 200%">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" value="Send Message" /></li>
													<li><input type="reset" value="Clear Form" class="alt" /></li>
												</ul>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<hr />
								<h3>Find me on ...</h3>
								<ul class="social">
									<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
									<li><a href="#" class="icon fa-tumblr"><span class="label">Tumblr</span></a></li>
									<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
									<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
									<!--
									<li><a href="#" class="icon fa-rss"><span>RSS</span></a></li>
									<li><a href="#" class="icon fa-instagram"><span>Instagram</span></a></li>
									<li><a href="#" class="icon fa-foursquare"><span>Foursquare</span></a></li>
									<li><a href="#" class="icon fa-skype"><span>Skype</span></a></li>
									<li><a href="#" class="icon fa-soundcloud"><span>Soundcloud</span></a></li>
									<li><a href="#" class="icon fa-youtube"><span>YouTube</span></a></li>
									<li><a href="#" class="icon fa-blogger"><span>Blogger</span></a></li>
									<li><a href="#" class="icon fa-flickr"><span>Flickr</span></a></li>
									<li><a href="#" class="icon fa-vimeo"><span>Vimeo</span></a></li>
									-->
								</ul>
								<hr />
							</div>
						</div>
					</div>
					<footer>
						<ul id="copyright">
							<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>
				</article>
			</div>

	</body>
</html>