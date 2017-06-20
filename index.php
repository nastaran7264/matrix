<?php

include "matrix.class.php";

$arr1= [
        [5, 2, 3],
		[4, 10, 6],		
	    [7, 8, 9]
	   ];
		
$arr2= [
        [5, 2, 1],
		[2, 5, 3],
		[7, 4, 3]
	
	   ];
$matCls = new matrix;

$sum= $matCls->sumMat($arr1, $arr2);

echo"sum"."</br>"."</br>";
// برای نمایش
echo $matCls->showMat($sum);

 echo"</br>"."<hr>";
//-----------------------------------------------------
 echo"different"."</br>"."</br>";

$diff= $matCls->diffMat($arr1, $arr2);

echo $matCls->showMat($diff);
 echo"</br>"."<hr>";
 //-----------------------------------------------------
  echo"zarb"."</br>"."</br>";

$zarb= $matCls->zarbMat($arr1, $arr2);

echo $matCls->showMat($zarb);
 
 echo"</br>"."<hr>";
 //---------------------------------------------------
   echo"taghsim"."</br>"."</br>";

$taghsim= $matCls->taghsimMat($arr1, $arr2);

echo $matCls->showMat($taghsim);
 
 echo"</br>"."<hr>";
 
  //====================================================================
  echo"shift-left"."</br>"."</br>";
 
 $left= $matCls->shiftLeft($arr1);
 
echo $matCls->showMat($left);

 echo"</br>"."<hr>";
 
 //-------------------------------------------------
 
  echo"shift-right"."</br>"."</br>";

 $right= $matCls->shiftRight($arr1);
 
echo $matCls->showMat($right);
 
 echo"</br>"."<hr>";
 
 //---------------------------------------------
 
  echo"shift-top"."</br>"."</br>";
 
 $top= $matCls->shiftTop($arr1);
 
 echo $matCls->showMat($top);
 
 echo"</br>"."<hr>";
 //------------------------------------------------

  echo"shift-down"."</br>"."</br>";

 $down= $matCls->shiftDown($arr1);
 
echo $matCls->showMat($down);
 
 echo"</br>"."<hr>";
 
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
 echo"</br>"."<hr>";

 //----------------------------------------------------------
 //دترمینان
 
   echo"determinan"."</br>"."</br>";
   
     if($rows==3)echo $determinan= $matCls->determinan3($arr1);
else
	 if($rows==2)echo $determinan= $matCls->determinan2($arr1);
else
	 if($rows==1)echo $determinan= $matCls->determinan1($arr1);
 
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
 echo"</br>"."<hr>";
 
 //----------------------------------------------------------
 //معکوس
   echo"reverse"."</br>"."</br>";

 $inverse= $matCls->inverse($arr1);

echo $matCls->showMat($inverse);
 
 echo"</br>"."<hr>";