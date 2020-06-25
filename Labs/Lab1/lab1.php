Hello world!
 <?php 
 // TODO: add validation
$x = (double)$_GET['inputX']; 
$y = (double)$_GET['inputY']; 
$r = (double)$_GET['inputR']; 

function test ($x, $y, $r){
    $flag = 1;
    if ($x < 0){
        //when x < 0 : y ∈ [-r/2;0]
        if (($y > 0) or ($y < -$r/2) or (-$x > $r)) {$flag = 0;}
    }
    if ($x >= 0) {
        //if y < 0 then x^2 + y^2 < r^2 if y > 0 y < r/2 - x/2
        if (($y > 0) and ($x < $r)){
            if ($y > ($r/2 - $x/2)){$flag = 0;}
        }
        else{
                if (($x^2 + $y^2) > $r^2){$flag = 0;}
        }
    }
        return $flag;
    }
    
$fun = 'test';
echo $fun($x, $y, $r);

?>