<?php
class Run
{
    public static function indexOfLongestRun($str)
    {
        $search=array();
        $dup=array();
        $prev='';
        $size=0;
        $pos=0;
        $maxsize=0;
        $mpos=0;
        
        if(strlen($str)> 0){
            $split=str_split($str,1);
            
           foreach($split as $k=> $s){
              if($s==$prev)
              {
                  $size++;
                  if($size>$maxsize){
                  $maxsize=$size;
                      $mpos=$pos;
                  }
                  
                  
              }else{
                  $size=0;
                  $pos=$k;
              }
              $prev=$s;
               
           }
            
            
        }
        
        return $mpos;
    }
}

echo Run::indexOfLongestRun('abbcccddddcccbba');
?>