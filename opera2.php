<html>
<body>

<?php
 
 $año= $_POST["año"];

if($año%4 == 0 && $año%100 == 0 && $año%400 != 0)
{
    echo "Has ingresado un año no bisiesto";
}
else if($año%4 == 0 && $año%100 == 0 && $año%400 == 0)
{
    echo "Has ingresado un año bisiesto";
}
else if($año%4 == 0){
    echo "Has ingresado un año bisiesto";
}
else{
    echo "Has ingresado un año no bisiesto";
}



?>
    
</body>
</html>
