<?php
$zoo = array
    (
  "Africa" =>        array("Smilodon",              "Equus grevyi",            "Calotragus scoparius"), 
  "North America" => array("Stylinodon",            "Coryphodon",              "Embolotherium ergilense"),
  "South America" => array("Astrapotherium magnum", "Toxodon",                 "Thalassocnus"), 
  "Eurasia" =>       array("Platybelodon",          "Coelodonta antiquitatis"), 
  "Australia" =>     array("Palorchestes azael",    "Diprotodon")
  );

print_r ($zoo);
#echo count($animals); колличество элементов в массиве


echo "<hr><table border = \"10\">";
foreach($zoo as $continent=>$ziv)
{
echo "<tr><td><b>$continent</b></td>";
  for ($i = 0; $i < count($ziv); $i ++)
  {
    #if (preg_match ("/\w+ \w+/",$ziv[$i])) 
      {
        echo "<td>".$ziv[$i]."</td>";
      }
  }
echo "</tr>\n";

}
echo "</table><hr>";



echo "<hr><table border = \"10\">";
foreach($zoo as $continent=>$ziv)
{
$spisok = null;
echo "<tr><td><b>$continent</b></td>";
  for ($i = 0; $i < count($ziv); $i ++)
  {
    if (preg_match ("/\w+ \w+/",$ziv[$i])) 
      {
        echo "<td>".$ziv[$i]."</td>";
        $spisok[] = $ziv[$i];
      }
  }
$zoo[$continent] = $spisok;
echo "</tr>\n";
#echo "*";
#print_r($spisok);
#echo "*";
#echo $spisok;
#print_r($spisok);
}
echo "</table><hr>";
#$zoo['Africa']=$spisok;
#echo $zoo['Africa'][0];
print_r ($zoo);
?>