<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
class arwmstome{
  function arwm()
  {
$ab=(int)readline("enter a value");
$a=$ab;
$i=0;  
while($a>0)
{
$v=$a%10;

$aa[$i]=$v;
$a=(int)($a/10);
$i++;
}
$s=sizeof($aa);
$v=$s;
for($i=0;$i<$s;$i++)
{
  $aa[$i]=$aa[$i]**$v;
}
$i=array_sum($aa);
if($i==$ab)
{
    echo"value is arwmstome";
}
else
{
    echo"not a arwmstone";
}
}
}
class cource
{
  function cou()
  {
echo"cources details \n cources available \n press  1. python \n press 2 java \n press 3 c programing\n press 4 sql \npress 5 dot net\n";
$ch=(int)readline("which cource details you want to know :");
if($ch==1)
{
    echo"\n cource name python \n cource price 6000 \n faculty name afnan \n no of classes 45 \n ";
}
else if($ch==2)
{
    echo"\n cource name java \n cource price 70000 \n faculty name afnan \n no of classes 45 \n";
}
else if($ch==3)
{
    echo"\n cource name c programing \n cource price 80000 \n faculty name afnan \n no of classes 45 \n";
}
else if($ch==4)
{
    echo"\ncource name sql  \n cource price 10000 \n faculty name afnan \n no of classes 45 \n";
}
else if($ch==5)
{
echo"\n dot net cource name \n cource price 50000 \n faculty name afnan \n no of classes 45 \n";
}
else
{
    echo"enter a valid option";
}
  }
}
$bb=new cource(); 
$aa=new arwmstome();
$ch=readline("enter your choice : "); 
if($ch=="arwmstome")
{
$aa->arwm();
}
else if($ch=="cource")
{
$bb->cou();
}
?>
</body>
</html>

