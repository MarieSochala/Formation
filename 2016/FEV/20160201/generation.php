<?php

function generation ($age) {
if($age > 18){
	echo "tu es un adulte\n";
}

elseif ($age == 18){
	echo "tu es majeur\n";
}

elseif ($age <16){
echo "tu es un enfant\n";
}

else {
echo "c'est louche\n";
}
}

echo generation (12);
echo generation (0);
echo generation (18);
echo generation (35);
echo generation (true);
echo generation (array(0,1,2));
