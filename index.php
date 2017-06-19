<?php

include "matrix.class.php";

$arr1= [
        [1, 2, 3],
		[4, 10, 6],
		[7, 8, 9], 
		
	   ];
		
$arr2= [
        [4, 1, 3],
		[2, 5, 2],
		[7, 4, 3]
	
	   ];
$matCls = new matrix;

$sum= $matCls->sumMat($arr1, $arr2);

echo"sum"."</br>"."</br>";
// برای نمایش
 $rows = count($sum);
 $columns = count($sum[0]);
 
 for ($i = 0; $i < $rows; $i++)
 {
	for ($j = 0; $j < $columns; $j++) 
	{

		echo $sum[$i][$j] ." &nbsp; " ;
	}
	echo "<br/>";
 }
 

 echo"<hr>";
//-----------------------------------------------------

 
 echo"different"."</br>"."</br>";

$diff= $matCls->diffMat($arr1, $arr2);


// برای نمایش

 for ($i = 0; $i < $rows; $i++)
 {
	for ($j = 0; $j < $columns; $j++) 
	{

		echo $diff[$i][$j] ." &nbsp; " ;
	}
	echo "<br/>";
 }
 echo"<hr>";
 //-----------------------------------------------------

 
  echo"zarb"."</br>"."</br>";

$zarb= $matCls->zarbMat($arr1, $arr2);


// برای نمایش

 for ($i = 0; $i < $rows; $i++)
 {
	for ($j = 0; $j < $columns; $j++) 
	{

		echo $zarb[$i][$j] ." &nbsp; " ;
	}
	echo "<br/>";
 }
 
 echo"<hr>";
 //---------------------------------------------------
 
   echo"taghsim"."</br>"."</br>";

$taghsim= $matCls->taghsimMat($arr1, $arr2);


// برای نمایش

 for ($i = 0; $i < $rows; $i++)
 {
	for ($j = 0; $j < $columns; $j++) 
	{

		echo $taghsim[$i][$j] ." &nbsp; " ;
	}
	echo "<br/>";
 }
 
 echo "<hr>";
 

 
  //====================================================================
  echo"shift-left";
  echo"</br>"."</br>";
 
 $left= $matCls->shiftLeft($arr1);

 
  $rows = count($arr1);
  $columns = count($arr1[0]);
 
 for ($i = 0; $i < $rows; $i++)
 {
	for ($j = 0; $j < $columns; $j++) 
	{

		echo $left[$i][$j] ." &nbsp; " ;
	}
	echo "<br/>";
 }
 
 echo"</br>";
 echo "<hr>";


 
 //-------------------------------------------------
 
  echo"shift-right";
  echo"</br>"."</br>";
 
 $right= $matCls->shiftRight($arr1);

 
  $rows = count($arr1);
  $columns = count($arr1[0]);
 
 for ($i = 0; $i < $rows; $i++)
 {
	for ($j = 0; $j < $columns; $j++) 
	{

		echo $right[$i][$j] ." &nbsp; " ;
	}
	echo "<br/>";
 }
 
 echo"</br>";
 echo "<hr>";
 
 //---------------------------------------------
 
  echo"shift-top";
  echo"</br>"."</br>";
 
 $top= $matCls->shiftTop($arr1);

 
  $rows = count($arr1);
  $columns = count($arr1[0]);
 
 for ($i = 0; $i < $rows; $i++)
 {
	for ($j = 0; $j < $columns; $j++) 
	{

		echo $top[$i][$j] ." &nbsp; " ;
	}
	echo "<br/>";
 }
 
 echo"</br>";
 echo "<hr>";
 //------------------------------------------------

  echo"shift-down";
  echo"</br>"."</br>";
 
 $down= $matCls->shiftDown($arr1);

 
  $rows = count($arr1);
  $columns = count($arr1[0]);
 
 for ($i = 0; $i < $rows; $i++)
 {
	for ($j = 0; $j < $columns; $j++) 
	{

		echo $down[$i][$j] ." &nbsp; " ;
	}
	echo "<br/>";
 }
 
 echo"</br>";
 echo "<hr>";

 
 //=============================================================================
 //ترانهاده
 
   echo"tranahadeh";
  echo"</br>"."</br>";
 
 $tranahadeh= $matCls->tranahadeh($arr1);

 
  $rows = count($arr1);
  $columns = count($arr1[0]);
 
 for ($i = 0; $i < $rows; $i++)
 {
	for ($j = 0; $j < $columns; $j++) 
	{

		echo $tranahadeh[$i][$j] ." &nbsp; " ;
	}
	echo "<br/>";
 }
 
 echo"</br>";
 echo "<hr>";
 //----------------------------------------------------------
 //دترمینان
 
   echo"determinan";
  echo"</br>"."</br>";
 
     if($rows==3)echo $determinan= $matCls->determinan3($arr1);
else
	 if($rows==2)echo $determinan= $matCls->determinan2($arr1);
else
	 if($rows==1)echo $determinan= $matCls->determinan1($arr1);


 echo"</br>";
 echo "<hr>";
 
 //----------------------------------------------------------
 //معکوس
   echo"reverse";
  echo"</br>"."</br>";
 
 $inverse= $matCls->inverse($arr1);

 
  $rows = count($arr1);
  $columns = count($arr1[0]);
 
 for ($i = 0; $i < $rows; $i++)
 {
	for ($j = 0; $j < $columns; $j++) 
	{

		echo $inverse[$i][$j] ." &nbsp; " ;
	}
	echo "<br/>";
 }
 
 echo"</br>";
 echo "<hr>";
 
  
 //=========================================================================
 //اینو اصلاح کن
 /*
   echo"move-left";
  echo"</br>"."</br>";
 
 $moveL= $matCls->flipHorizantal($arr1);

 
  $rows = count($arr1);
  $columns = count($arr1[0]);
 
 for ($i = 0; $i < $rows; $i++)
 {
	for ($j = 0; $j < $columns; $j++) 
	{

		echo $moveL[$i][$j] ." &nbsp; " ;
	}
	echo "<br/>";
 }
 
 echo"</br>";
 echo "<hr>";
 */
 