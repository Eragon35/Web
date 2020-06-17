Hello world!
 <?php 
$x = (int)$_GET['inputX']; 
$y = (int)$_GET['inputY']; 
$r = (int)$_GET['inputR']; 
$flag = true;
if ($x < 0){
    //when x < 0 : y ∈ [-r/2;0]
    if (($y > 0) or ($y < -$r/2)) $flag = false;
}
else {
    //if y < 0 then x^2 + y^2 < r^2 if y > 0 y < r/2 - x/2
    if (($y > 0) and ($x < $r)){
        if ($y < ($r/2 - $x/2)){}
        else $flag = false;
    }
    else{
        if ($x < $r/2){
            if ($x^2 + $y^2 > $r^2){$flag = false;}
        }
        else $flag = false;
    }
    
}
echo $flag;



?>