<?php


    class matrix
    {
			
		public function showMat($matrixParameter)
		{
			$rows = count($matrixParameter);
            $columns = count($matrixParameter[0]);
			$out="";
			for ($i = 0; $i < $rows; $i++) {
				for ($j = 0; $j < $columns; $j++) {
					$out .= $matrixParameter[$i][$j] ." &nbsp; " ;
				}
				$out.= "<br/>";
			}
			
			
			return $out;
		}
		
		
		
		
		
		public function shiftLeft($mat1)
        {
            $rows = count($mat1);
            $columns = count($mat1[0]);
			
			$temp;

            for ($i = 0; $i < $rows; $i++) {
				$temp=$mat1[$i][0];
                for ($j = 1; $j<$columns; $j++) {

                   $mat1[$i][$j-1]=$mat1[$i][$j] ;
                }
				$mat1[$i][$columns-1]=$temp;
				
            }

            return $mat1;
        }
		
		//------------------------------------------------------
		
		
		 public function shiftRight($mat1)
        {
            $rows = count($mat1);
            $columns = count($mat1[0]);
			
			$temp;

            for ($i = 0; $i < $rows; $i++) {
				$temp=$mat1[$i][$columns-1];
                for ($j = $columns-2; $j >=0; $j--) {

                   $mat1[$i][$j+1]=$mat1[$i][$j] ;
                }
				$mat1[$i][0]=$temp;
				
            }

            return $mat1;
        }
		
		//---------------------------------------------------
		
			 public function shiftTop($mat1)
        {
            $rows = count($mat1);
            $columns = count($mat1[0]);
			
			$temp;

            for ($j = 0; $j < $columns; $j++) {
				$temp=$mat1[0][$j];
                for ($i = 1; $i < $rows; $i++) {

                   $mat1[$i-1][$j]=$mat1[$i][$j] ;
                }
				$mat1[$i-1][$j]=$temp;
				
            }

            return $mat1;
        }
		
		//----------------------------------------------------
		
			 public function shiftDown($mat1)
        {
            $rows = count($mat1);
            $columns = count($mat1[0]);
			
			$temp;
			

            for ($j = 0; $j < $columns; $j++) {
				$temp=$mat1[$rows-1][$j];
                for ($i = $rows-2; $i >=0; $i--) {

                   $mat1[$i+1][$j]=$mat1[$i][$j] ;
                }
				$mat1[0][$j]=$temp;
				
            }

            return $mat1;
        }
		
		
	//=============================================================================================	
	
		
        public function sumMat($mat1,$mat2)
        {
            $rows = count($mat1);
            $columns = count($mat1[0]);

			$rows2 = count($mat2);
            $columns2 = count($mat2[0]);
			
			if($rows !=$rows2 OR  $columns!= $columns2)
			{
				return false;
			}

            for ($i = 0; $i < $rows; $i++) {
                for ($j = 0; $j < $columns; $j++) {

                    $temp[$i][$j]=$mat1[$i][$j] + $mat2[$i][$j];
                }
            }

            return $temp;
        }
		
		
	//--------------------------------------------	
		
		public function diffMat($mat1,$mat2)
        {
            $rows = count($mat1);
            $columns = count($mat1[0]);

			$rows2 = count($mat2);
            $columns2 = count($mat2[0]);
			
			if($rows !=$rows2 OR  $columns!= $columns2)
			{
				return false;
			}

            for ($i = 0; $i < $rows; $i++) {
                for ($j = 0; $j < $columns; $j++) {

                    $temp[$i][$j]=$mat1[$i][$j] - $mat2[$i][$j];
                }
            }

            return $temp;
        }
		
		
		
		//-----------------------------------------------------
		
		public function zarbMat($mat1,$mat2)
        {
            $rows = count($mat1);
            $columns = count($mat1[0]);

			$rows2 = count($mat2);
            $columns2 = count($mat2[0]);
			
			if($rows !=$rows2 OR  $columns!= $columns2)
			{
				return false;
			}

            for ($i = 0; $i < $rows; $i++)
			{
                for ($j = 0; $j < $columns; $j++)
				{

					// $temp[$i][$j]=$mat1[$i][$j] * $mat2[$i][$j];
					 if($rows==2 && $rows2==2 && $columns==2 && $columns2==2 )
					 {					 
						$temp[0][0]=$mat1[0][0] * $mat2[0][0] + $mat1[0][1] * $mat2[1][0];
						$temp[0][1]=$mat1[0][0] * $mat2[0][1] + $mat1[0][1] * $mat2[1][1];
						$temp[1][0]=$mat1[1][0] * $mat2[0][0] + $mat1[1][1] * $mat2[1][0];
						$temp[1][1]=$mat1[1][0] * $mat2[0][1] + $mat1[1][1] * $mat2[1][1];
						
						
					 }
					  else if($rows==3 && $rows2==3 && $columns==3 && $columns2==3)
					 {
						 $temp[0][0]=$mat1[0][0] * $mat2[0][0] + $mat1[0][1] * $mat2[1][0] + $mat1[0][2] * $mat2[2][0];
						 $temp[0][1]=$mat1[0][0] * $mat2[0][1] + $mat1[0][1] * $mat2[1][1] + $mat1[0][2] * $mat2[2][1];
						 $temp[0][2]=$mat1[0][0] * $mat2[0][2] + $mat1[0][1] * $mat2[1][2] + $mat1[0][2] * $mat2[2][2];
						 $temp[1][0]=$mat1[1][0] * $mat2[0][0] + $mat1[1][1] * $mat2[1][0] + $mat1[1][2] * $mat2[2][0];
						 $temp[1][1]=$mat1[1][0] * $mat2[0][1] + $mat1[1][1] * $mat2[1][1] + $mat1[1][2] * $mat2[2][1];
						 $temp[1][2]=$mat1[1][0] * $mat2[0][2] + $mat1[1][1] * $mat2[1][2] + $mat1[1][2] * $mat2[2][2];
						 $temp[2][0]=$mat1[2][0] * $mat2[0][0] + $mat1[2][1] * $mat2[1][0] + $mat1[2][2] * $mat2[2][0];
						 $temp[2][1]=$mat1[2][0] * $mat2[0][1] + $mat1[2][1] * $mat2[1][1] + $mat1[2][2] * $mat2[2][1];
						 $temp[2][2]=$mat1[2][0] * $mat2[0][2] + $mat1[2][1] * $mat2[1][2] + $mat1[2][2] * $mat2[2][2];
						 
					 }
                }
            }

            return $temp;
        }
		
		
		//------------------------------------------------------
		
		
		public function taghsimMat($mat1,$mat2)
        {
            $rows = count($mat1);
            $columns = count($mat1[0]);

			$rows2 = count($mat2);
            $columns2 = count($mat2[0]);
			
			if($rows !=$rows2 OR  $columns!= $columns2)
			{
				return false;
			}

            for ($i = 0; $i < $rows; $i++) {
                for ($j = 0; $j < $columns; $j++) {

                    $temp[$i][$j]=$mat1[$i][$j] / $mat2[$i][$j];
                }
            }

            return $temp;
        }
		
	
	//====================================================================================================
	  //اینو اصلاح کن
	  
	  	 public function flipHorizantal($mat1)
        {
            $rows = count($mat1);
            $columns = count($mat1[0]);
			
			$temp=$mat1[$rows][$columns ];

            for ($i = 1; $i < $rows; $i++) {
				
                for ($j = 0; $j < $columns; $j++) {

                   $temp[$i][$columns-$j-1]=$mat1[$i][$j] ;
                }
				
				
            }

            return $temp;
        }
		
		//============================================================================================
		//ترانهاده
		
		function tranahadeh($mat1)
        {
            $rows = count($mat1);
            $columns = count($mat1[0]);

            for ($i = 0; $i < $rows; $i++) {

                for ($j = 0; $j < $columns; $j++) {
                    $temp[$j][$i] = $mat1[$i][$j];
                }
            }

            return $temp;
        }
		
		//-------------------------------------------------------
		
		//دترمینان
		
		   function determinan1($mat)
           {
			$rows = count($mat);
			$columns = count($mat[0]);
			
				return $mat[0][0];	
           }
		   
		   
		   
		   function determinan2($mat)
           {
			$rows = count($mat);
			$columns = count($mat[0]);
						
			   return $mat[0][0] * $mat[1][1] - $mat[0][1] * $mat[1][0] ;
				     
          }
		
		
		
		
		 function determinan3($mat)
         {
			$rows = count($mat);
			$columns = count($mat[0]);
			
           return   $mat[0][0] * $mat[1][1] * $mat[2][2] +
					$mat[0][1] * $mat[1][2] * $mat[2][0] +
					$mat[0][2] * $mat[1][0] * $mat[2][1] -
					$mat[0][2] * $mat[1][1] * $mat[2][0] -
					$mat[0][1] * $mat[1][0] * $mat[2][2] -
					$mat[0][0] * $mat[1][2] * $mat[2][1];
						
         }
		
		
		//معکوس
	    function inverse($mat)
        {
            $rows = count($mat);
            if ($rows == 2) {
				
		    $tmp = 1 / $this->determinan2($mat);

            $temp[0][0] = $tmp * $mat[1][1];
            $temp[0][1] = $tmp * -1*$mat[0][1];
            $temp[1][0] = $tmp * -1*$mat[1][0];
            $temp[1][1] = $tmp * $mat[0][0];


            return $temp;
             
            } 
			else
				if ($rows == 3) {
				
				 if($this->determinan3($mat)==0)
                $tmp=0;
            else
                $tmp= 1 / $this->determinan3($mat);

            $temp[0][0] = $tmp * ( $mat[2][2] * $mat[1][1] - $mat[2][1] * $mat[1][2] );
            $temp[0][1] = $tmp * ( $mat[2][2] * $mat[0][1] - $mat[2][1] * $mat[0][2]  ) * -1;
            $temp[0][2] = $tmp * ( $mat[1][2] * $mat[0][1] - $mat[1][1] * $mat[0][2] );
            $temp[1][0] = $tmp * ( $mat[2][2] * $mat[1][0] - $mat[2][0] * $mat[1][2]  ) * -1;
            $temp[1][1] = $tmp * ( $mat[2][2] * $mat[0][0] - $mat[2][0] * $mat[0][2] );
            $temp[1][2] = $tmp * ( $mat[1][2] * $mat[0][0] - $mat[1][0] * $mat[0][2]  ) * -1;
            $temp[2][0] = $tmp * ( $mat[2][1] * $mat[1][0] - $mat[2][0] * $mat[1][1] );
            $temp[2][1] = $tmp * ( $mat[2][1] * $mat[0][0] - $mat[2][0] * $mat[0][1]  ) * -1;
            $temp[2][2] = $tmp * ( $mat[1][1] * $mat[0][0] - $mat[1][0] * $mat[0][1] );

            return $temp;
          
            }
            return false;

        }
		
    }