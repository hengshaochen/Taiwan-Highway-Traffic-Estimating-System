<?php
//$dbhost= "140.138.77.103";

$dbhost= "localhost";
$dbuser = 'BDSTeam24';
$dbpass = 'BDSTeam24@2015';
$dbname = 'BDSTeam24_DB';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');

mysql_query("SET NAMES 'UTF8'");
mysql_select_db($dbname);

// 處理時間 將時間推回前一個禮拜之資料
//$timeSplit = explode("/", $_POST["nowTime"]);
//$userDate = new DateTime('2015-06-29');
//echo $userDate->format('Y-m-d H:i:sP');


// timeSplit[0] = year  timeSplit[1] = month    timeSplitDay[0] = day
// timeSplit[0] = year  timeSplit[1] = month    diffTime = day - 7
$timeSplitDay = explode(" ", $timeSplit[2]);


		//echo $timeSplitDay[0] . " ";
		if( (int)$timeSplitDay[0] <= 7 )
		{
			$diffTime = (int)$timeSplitDay[0];	
		}
		else
		{
			//echo "> 7";
			$diffTime = (int)$timeSplitDay[0] - 7;	
			//echo "扣完後:" . $diffTime . " ";
			//echo $timeSplitDay[1];
		}

		if( $diffTime < 10)
		{
			$diffTime = "0" . $diffTime;
		}
//當前的
//$str = "select * from traffic where Start = \"".$_POST["start"]."\" && End = \"".$_POST["end"]."\" && Time = \"".$_POST["nowTime"] . "\" ";
//扣七天後的
//$str = "select * from traffic where Start = \"".$_POST["start"]."\" && End = \"".$_POST["end"]."\" && Time = \"". $timeSplit[0] . "/" . $timeSplit[1] . "/" . $diffTime . " " . $timeSplitDay[1] . "\" ";


//echo $str . " ";
//$result = mysql_query($str,$conn);

//$row = mysql_fetch_assoc($result);

// 判斷會經過的路段 by 孝影
  //echo 'current Unix timestamp: '.time().'<br>'; //當前的 Unix 時間戳
  //echo '今天日期是: '.date('Y-m-d');

  $inputTime = strtotime($_POST["nowTime"]);
  $finalTime = $inputTime - (24*60*60*7);
  //echo date('Y-m-d H:i:s',$finalTime);
  //echo date('Y/m/d H:i:s',$finalTime);


$startSplit = explode("-", $_POST["start"]);
$endSplit = explode("-", $_POST["end"]);
//echo "開始~~~" . $startSplit[0] . " " . $startSplit[1] ;
//echo "結束~~~" . $endSplit[0] . " " . $endSplit[1] ;


//$testArray = array('1-57','1-59','1-60','1-62');
$pathFinal = $_POST["pathFinal"];
$pathIndex = $_POST["pathIndex"];
$testSpeed = array();
$totalSpeed = 0;

//$PathSpeed = "select * from traffic where Start = \"".$testArray[0]."\" && End = \"".$testArray[1]."\" && Time = \"". $timeSplit[0] . "/" . $timeSplit[1] . "/" . $diffTime . " " . $timeSplitDay[1] . "\" ";
//$PathSpeed = "select * from traffic where Start = \"".$testArray[1]."\" && End = \"".$testArray[2]."\" && Time = \"". $timeSplit[0] . "/" . $timeSplit[1] . "/" . $diffTime . " " . $timeSplitDay[1] . "\" ";
//$PathSpeed = "select * from traffic where Start = \"".$testArray[2]."\" && End = \"".$testArray[3]."\" && Time = \"". $timeSplit[0] . "/" . $timeSplit[1] . "/" . $diffTime . " " . $timeSplitDay[1] . "\" ";

$pathIndex = (int)$pathIndex - 1;
		//echo $pathIndex . "@@";
for( $i=0 ; $i<$pathIndex ; $i++)
{
	$PathSpeed = "select * from traffic2 where Start = \"".$pathFinal[$i]."\" && End = \"".$pathFinal[$i + 1]."\" && Time = \"". date('Y/m/d H:i',$finalTime) . "\" " ;
	//$PathSpeed = "select * from traffic2 where Start = \"".$pathFinal[$i]."\" && End = \"".$pathFinal[$i + 1]."\" && Time = \"". $date('Y/m/d H:i:s',$finalTime) . "\" ";
	

	//echo $PathSpeed . " ";


		$testResult = mysql_query($PathSpeed,$conn);

		$testRow = mysql_fetch_assoc($testResult);
		$testSpeed[$i] = $testRow['Speed'];
		$totalSpeed = $totalSpeed + $testSpeed[$i];


		//echo $testSpeed[$i] . " ";
	//echo $PathSpeed . " ";
		//echo $testSpeed[$i] . "~~";
}


$totalSpeed = $totalSpeed / $pathIndex ;
$totalSpeed = round($totalSpeed,2);

//判斷是否為連續假期 若為連續假期 速度先扣10
if( date('Y/m/d',$inputTime) == "2015/01/01" || date('Y/m/d',$inputTime) == "2015/01/02" || date('Y/m/d',$inputTime) == "2015/01/03" || date('Y/m/d',$inputTime) == "2015/01/04")
{
	echo "為中華民國開國紀念日。";
	$totalSpeed = $totalSpeed * 0.8;
}
elseif( date('Y/m/d',$inputTime) == "2015/02/18" || date('Y/m/d',$inputTime) == "2015/02/19" || date('Y/m/d',$inputTime) == "2015/02/20" || date('Y/m/d',$inputTime) == "2015/02/21" || date('Y/m/d',$inputTime) == "2015/02/22" || date('Y/m/d',$inputTime) == "2015/02/23" )
{
	echo "為農曆除夕及春節假期。";
	$totalSpeed = $totalSpeed * 0.8;
}
elseif( date('Y/m/d',$inputTime) == "2015/02/27" || date('Y/m/d',$inputTime) == "2015/02/28" || date('Y/m/d',$inputTime) == "2015/03/01" )
{
	echo "為228和平紀念日。";
	$totalSpeed = $totalSpeed * 0.8;
}
elseif( date('Y/m/d',$inputTime) == "2015/04/03"  || date('Y/m/d',$inputTime) == "2015/04/04"  || date('Y/m/d',$inputTime) == "2015/04/05" || date('Y/m/d',$inputTime) == "2015/04/06" )
{
	echo "為兒童節及民族掃掃墓節。";
	$totalSpeed = $totalSpeed * 0.8;
}
elseif( date('Y/m/d',$inputTime) == "2015/05/01"  || date('Y/m/d',$inputTime) == "2015/05/02"  || date('Y/m/d',$inputTime) == "2015/05/03"  )
{
	echo "為勞動節。";
	$totalSpeed = $totalSpeed * 0.8;
}
elseif( date('Y/m/d',$inputTime) == "2015/06/19"  || date('Y/m/d',$inputTime) == "2015/06/20"  || date('Y/m/d',$inputTime) == "2015/06/21"  )
{
	echo "為端午節。";
	$totalSpeed = $totalSpeed * 0.8;
}
elseif( date('Y/m/d',$inputTime) == "2015/09/26"  || date('Y/m/d',$inputTime) == "2015/09/27"  || date('Y/m/d',$inputTime) == "2015/09/28"  )
{
	echo "為中秋節。";
	$totalSpeed = $totalSpeed * 0.8;
}
elseif( date('Y/m/d',$inputTime) == "2015/10/09"  || date('Y/m/d',$inputTime) == "2015/10/10"  || date('Y/m/d',$inputTime) == "2015/10/11"  )
{
	echo "為國慶日。";
	$totalSpeed = $totalSpeed * 0.8;
}

		//echo $totalSpeed . " ";

/*for( $i=0 ; $i<%testCount ; $i++)
{
	$testSpeed[$i] = $testSpeed[$i] 
}*/
//echo "@@@" . $testArray[0];

//if( $startSplit[0]  )

//while( $row = mysql_fetch_assoc($result) )
//{
        //echo "時間:".$totalSpeed . "     ";

		if( (int)$totalSpeed > 90 )
		{
			echo "預估路段平均行駛速度為：" . $totalSpeed . "km/hr。\n" . "依分析後判斷該時段 為非常適合出遊的時間！！";
		}
		elseif ( (int)$totalSpeed > 80 && (int)$totalSpeed < 90 )
		{
			echo "預估路段平均行駛速度為：" . $totalSpeed . "km/hr。\n" . "依分析後判斷該時段 為還不錯的出遊時間！";
		}
		elseif ( (int)$totalSpeed > 70 && (int)$totalSpeed < 80 )
		{
			echo "預估路段平均行駛速度為：" . $totalSpeed . "km/hr。\n" . "依分析後判斷該時段 為尚可的出遊時間。";
		}
		elseif ( (int)$totalSpeed > 60 && (int)$totalSpeed < 70 )
		{
			echo "預估路段平均行駛速度為：" . $totalSpeed . "km/hr。\n" . "依分析後判斷該時段 為可能會有些許雍塞。";
		}
		elseif ( (int)$totalSpeed == 0 )
		{
			echo "抱歉，目前資料庫沒有該路段之速度資訊。";
		}
		elseif ( (int)$totalSpeed < 60 )
		{
			echo "預估路段平均行駛速度為：" . $totalSpeed . "km/hr。\n" . "依分析後判斷該時段 為非常壅塞，不推薦此時間出遊...";
		}


//}
mysql_close($conn);

/*$js = getNowTime();
	
for($i=0;$i<10;$i++){
	//print_r(mysql_fetch_assoc($result));
	$row = mysql_fetch_assoc($result);
	//echo '<br><br><br>';
	echo "時間:".$row['Time']." 開始:".$row['Start']. "結束:".$row['End']. "方向:".$row['Direction']. "速度:".$row['Speed']. "</br>";
	echo $i;
}
mysql_close($conn);

echo $_POST["Text"];*/
?>