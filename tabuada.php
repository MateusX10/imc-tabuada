<?php

echo "<<< tabuada >>>";

/* mostra a tabuada do 1 ao 10*/
for ($i=1; $i<=10; $i++){
    
    for ($j=1; $j<=10; $j++){
        $resultado = $i * $j;    

        echo "<br>$i x $j = $resultado";
}
}