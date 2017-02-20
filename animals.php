<?php
# наш массив $zoo заданный пользователем
$zoo = array
 (
  "Africa" =>        array("Smildoon",              "Equus grevyi",            "Calotragus scoparius"), 
  "North America" => array("Stylinodon",            "Coryphodon",              "Embolotherium ergilense", "Mammuthus primigenius"),
  "South America" => array("Astrapotherium magnum", "Toxodon",                 "Thalassocnus",             "Mammuthus columbi"), 
  "Eurasia" =>       array("Platybelodon",          "Coelodonta antiquitatis"), 
  "Australia" =>     array("Palorchestes azael",    "Diprotodon")
 );
#в переменной $zoo1 храниться ассоциативный массив континент => слово из имени животного
$zoo1 = null;
# выводим наш массив на экран
echo "выводим наш массив zoo на экран";

echo "<hr><table border = \"10\">";
foreach($zoo as $continent => $ziv)
{
echo "<tr><td><b>$continent</b></td>";
  
  for ($i = 0; $i < count($ziv); $i ++)
  {
        echo "<td>".$ziv[$i]."</td>";
        
        $zoo1[$continent][] = $names[0]; ############################## формируем массив zoo1
        if ($names[1] == true) {$zoo1[$continent][] = $names[1];} ##### формируем массив zoo1
  }
 echo "</tr>\n";
}
echo "</table><hr>";
######################################################### конец вывода

######################################################### Создаем массив названий из имен с двумя словами zoo2
echo "Создаем массив названий из имен с двумя словами - zoo2";
echo "<hr><table border = \"10\">"; 

foreach($zoo as $continent => $ziv)
{

foreach($ziv as $name)
{
if (strpos ($name, " ") == true){
	$zoo2[$continent][] = $name;

	//echo $name;
} 
}
}
var_dump($zoo2);

echo "<hr>";
foreach ($zoo2 as $continent => $ziv) {
	foreach ($ziv as $name) {
		$names  = str_word_count($name, 1);    
		$zoo3[$continent][] = $names[0];              //Создаем два массива, в одном только первые слова zoo2, во втором вторые
		$zoo4[$continent][] = $names[1];

	}
}
echo "Печатаем два массива, в одном только первые слова zoo2, во втором вторые";
echo "<hr>";
print_r($zoo3);
echo "<hr>";
print_r($zoo4);
echo "<hr>";
//$result = array_merge($zoo3, $zoo4);

$keys = array_keys ($zoo3); //Создаем массив континентов
echo "<hr>";
echo count($zoo4);
print_r($keys);
echo "<hr>";



//print_r($result);

/*
# создаем массив fantazy = zoo3 + перемешаный zoo4 фантазийных животных
shuffle($zoo4);
print_r($zoo4);
echo count($zoo4);
echo "<hr>";

echo "*****";
var_dump($zoo3);
echo "*****";
foreach ($zoo3 as $continent => $fziv) 
{
	
	echo $fziv[0];
	echo $fziv[1];
	for ($i = 0;$i < count($fziv); $i ++;)
	{
		echo $fziv[$i]
	}
	}
}
echo "*****";
#$fz = $fziv[0];
#$sword = array_shift ($fziv);
#$fziv[] = $zoo4[$continent][0];
#foreach($fziv as $name)
#{
#	$fantazy[$continent][] = $zoo3[$continent][$fziv[0]] 
#{
#}

#$cont_arr
foreach ($zoo4 as $continent => $ziv1) {
    	$zoo4_lite[]=$ziv1[0];
}
print_r($zoo4_lite);
echo "<hr>";



# перезаписываем zoo3 массив

//var_dump($zoo5);

echo "<hr><table border = \"10\">";
foreach($zoo5 as $continent => $ziv)
{
echo "<tr><td><b>$continent</b></td>";
  
  for ($i = 0; $i < count($ziv); $i ++)
  {
        echo "<td>".$ziv[$i]."</td>";
        
        $zoo1[$continent][] = $names[0]; ############################## формируем массив zoo1
        if ($names[1] == true) {$zoo1[$continent][] = $names[1];} ##### формируем массив zoo1
  }
 echo "</tr>\n";
}
echo "</table><hr>";



$zoo[$continent] = $spisok; #### перезаписываем массив zoo на новый массив из имен с двумя словами
echo "</tr>\n";
echo "</table><hr>";
######################################################### конец вывода

######################################################### Выводим массив zoo1 названий из имен с одним словом 
echo "Выводим массив zoo1 названий из имен с одним словом";
echo "<hr><table border = \"10\">";
foreach($zoo1 as $continent => $ziv)
{
echo "<tr><td><b>$continent</b></td>";
  for ($i = 0; $i < count($ziv); $i ++)
  {
    echo "<td>".$ziv[$i]."</td>";
  }
echo "</tr>\n";
}
echo "</table><hr>";
######################################################### конец вывода

# ниже приведены примеры функции
print_r ($zoo);
#str_split;
$str = "Hello Friend";

$arr1 = str_split($str);
$arr2 = str_split($str, 3);

print_r($arr1);
echo "<hr>";
print_r($arr2);
echo "<hr>";
print_r($zoo1);
echo "<hr>";
*/


?>