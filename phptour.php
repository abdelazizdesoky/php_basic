<!--=================================php-===============================-->
<?php
// cookies------------------------------------------------------------
 setcookie("zero","test",time()+3600,"/");
setcookie("groups","friend",time()+(86400*10),"/","localhost",false,true);
//-----------------------------------------------------------------------
$conct = "PHP";                                      
$home = "MyPage " . $conct;                                 
$heading = "My Page First " . $conct;                  
$brif ="My First Page " . $conct . "php languse ";      
$languages = "<ul>";                                   
$languages .= "<li>php</li>";                       
$languages .= "<li>html</li>";                       
$languages .= "<li>css</li>";                        
$languages .= "</ul>";  
?>
<!--=================================html-===============================-->
<!DOCTYPE HTML>
<html>
    <head>
    <title><?php echo $home; ?></title>
        <style>
            body{background:#222;
            color:azure}
            h3{color:cornflowerblue}
            h4{color:aquamarine}
            
            .farm {
                background:#555;
                border:2px solid #999;
                font-size:1.5em;
                color: beige
            }
        </style>
    </head>
<body>
    <h1><?php echo $heading; ?></h1>
    <h3><?php echo time()+86400+rand(5000,100000) ;?></h3>
    <p><?php echo $brif; ?></p>
    <?php echo $languages ?>


<?php
 /*====================== PHP ================================*/
    echo "<h1 style='color:'>" . "LEARN_PHP" . "</h1>";
//--------------------------variable-========================== //
echo "<h3 >" . "variable" . "</h3>";
//---------------------------------------------------------------
//string -----------------------------------------------------------------
$var1 = "ahmed";  
echo $var1 ." "; echo var_dump($var1) . " "; echo gettype($var1) . "<br>";
//integer------------------------------------------------------------------
$var2 = 100;  
echo $var2 . " " . var_dump($var2) . " " . gettype($var2) . "<br>";
//boolean-----------------------------------------------------------------
$var3 = false;
echo $var3 ." "; echo var_dump($var3) . " "; echo gettype($var3) . "<br>";
//float-------------------------------------------------------------------
$var4 = 10.5; 
echo $var4 ." "; echo var_dump($var4) . " "; echo gettype($var4) . "<br>";
// array------------------------------------------------------------------
$var5 = array("name" => "ahmed" ,                    
              "age" => 23,                           
              "class" => "php",                    
             );
echo var_dump($var5) . " "; echo gettype($var5)  . "<br>";
//null-----------------------------------------------------------------
$var6 = null; 
echo $var6 ." "; echo var_dump($var6) . " "; echo gettype($var6) . "<br>";

//-------------------------------------------------- //
class book {                                         //
    function book(){                                 //
        $this->genre = "adventure";                  //
    }                                                //
}                                                    //
//-------------------------------------------------- //
//object----------------------------------------------------------------
$var7 = new book();                                  
echo var_dump($var7) . " "; echo gettype($var7) . "<br>";
//resource--------------------------------------------------------------
$var8 = fopen('ali.txt','r');
 echo var_dump($var8) . " "; echo gettype($var8) . "<br>";
    
//==========================constants==========================//
  echo " <h3 >" . "constans" . "</h3>";
 //--------------------------------------------------------------
define("FIRST_NAME","ahmed");    
echo FIRST_NAME . "<br>";
define("FIRST1_NAME","ali",true); 
echo FIRST1_NAME . "<br>";
const  LAST_NAME ="yasser";   
echo LAST_NAME . "<br>";
echo PHP_INT_MAX . "<br>";
echo __FILE__;
    
//===============================IF,elseif,else=====================//  
 echo " <h3 >" . "IF,elseif,else" . "</h3>";
//--------------------------------------------------------------------
$num1 = 100;
$num2 = 200;
if ($num1 > $num2){               //one condition
    echo "yas " . $num1 . " larger then " . $num2;  //code run  if  one condition is true
    
}  elseif($num1 == $num2){       //two condition                     
    echo "yas " . $num1 . " Is equal " . $num2;    //code run  if  two condition is true
}
    else  {
    echo "no " . $num1 . " larger then " . $num2;   //code run  if condition is false
} 
//===========================Arithmetic operators===============//
  echo " <h3>" . "Arithmetic" . "</h3>";  
  //--------------------------------------------------------------
    $num_1 = 100;
    $num_2 = 20;
    $num_3 = 400;
    
//(+)additon
    echo $num_1 + $num_2 + $num_3 . "<br>";
//(-)subtraction
    echo $num_1 - $num_2 + $num_3 . "<br>";
//(*)multipliction
    echo $num_1 * $num_2 - $num_3 . "<br>";
//(/)division
    echo $num_1 / $num_2 . "<br>";
//(%)modulus    
   echo $num_1 % $num_2 + 2 . "<br>"; 
 //=========================Assignment operators==============
   echo " <h3>" . "Assignment" . "</h3>";
 //-----------------------------------------------------------
   $num_1 += $num_2;
   $num_1 .="number";
    echo $num_1 . "<br>";
    $currency = 100;
    $currency *=16;  // var = var_value * 16
    $currency .="L.E";
    echo $currency . "<br>";
//=============================comparison operators=============// 
   echo " <h3>" . "comparison" . "</h3>"; 
//---------------------------------------------------------------
    /* 
    (==) equals - value
    (!=)(<>)  not equals
    (===) identical - value & type
    (!==) not identical
    (< & <= & > & >=) less & less than or Equal & larger & lager or equal
    */
$com_1 = 100;
$com_2 = 100;
    echo gettype($com_1) . " --- " . gettype($com_2) . "<br>";
if ($com_1 !== $com_2)   {
    echo "True";
} else{
    echo "false";
}
    // examble-------------------------------------------
   
        $sitelang = "AR";
    
    if($sitelang == "Eng"){
        $long_1 = "hallo ";
        $long_2 = "world";
    }elseif ($sitelang == "AR"){
        $long_1 = "اهلا ";
        $long_2 = "بالعالم";
    }else{
        $long_1 = "unknown ";
        $long_2 = "lang";
    }


//==============================icrement_decrement===================== 
     echo " <h3>" . "icrement_decrement" . "</h3>"; 
 //--------------------------------------------------------------------
 /* 
 (++$var) pre increment
 ($var++) post increment
 (--$var) pre decrement
 ($var--) post decrement
 */  
    $icre_1 = 10; 
    
    echo ++$icre_1 . "<br>"; //11
    echo --$icre_1 . "<br>"; //10
    echo ++$icre_1 . "<br>"; //11
    echo $icre_1-- . "<br>"; //11
    echo $icre_1-- . "<br>"; //10
    
//==============================logical operatores==================== 
     echo " <h3>" . "logical operatores " . "</h3>"; 
 //--------------------------------------------------------------------
 /* 
(and &&) condition 1 and condition 2 and condition 3 
(Xor) one condition is true but not all  
(or ||) one condition is true or all
(!) not 
 */
    $log_1 = 10 ;
    $log_2 = 20 ;
    $log_3 = "no" ;
    
    if ($log_1 > 5 || $log_2 > 15 || $log_3 === "yas"){
        echo "acccept A";
    }elseif($log_1 <5 and $log_2 >=20 and $log_3 === "yas"){
       echo "acccept B";
    }else{
        echo "reject";
    }
    
    $log_4 = true && false;
    $log_5 = true and false;
    var_dump($log_4 , $log_5);

    
    //=====================Error control operatores========================= 
     echo " <h3>" . "Error control operatores " . "</h3>";
     //--------------------------------------------------------------------
 /*
 (@) esc error
 (die("massge") )
 */   
 //$file =  @ fopen("ali.txt" , "r") or die("this file not found");
    
 //===========================For loop ========================
echo " <h3>" . "For loop " . "</h3>"; 
    //---------------------------------------------------------
 /*
 for (expression1; expression1; expression1;){
 statement to execute;
 }
 */
   for ($x = 1 ; $x <= 5 ; $x++) {
       echo $x;
   }
    //other examle
    
    $x = 1;
    for(;;){
       if($x >= 6){
           break;
       }
        echo $x;
        $x++;
    }
    
 //===========================while loop ====================
echo " <h3>" . "while loop " . "</h3>"; 
    //--------------------------------------------------------
     
 /*
 var = ;
 while (expression){
 statement to execute;
 var++;
 }
 */
    $i = 1;
    while ($i <= 5){
        echo $i;
        $i++;
    }
    //other examle
    $i =1;
     while ($i <= 5):
        echo $i;
        $i++;
    endwhile;
    
     //===========================do while loop ==================
echo " <h3>" . " do while loop " . "</h3>"; 
    //-------------------------------------------------------------
 /*
 var = ;
 do{
  statement to execute;
 var++;
 }
 while (expression);
 */
    $i = 1;
    do{
       echo $i;
        $i++; 
    }
    while ($i <= 5);
//other examle     
$ar = array("htmal","css","js","php","msql");
 $a = 0;
    do{
    echo $ar[$a];
    $a++;
    }while($a < count($ar))
        ;
 //===========================foreach======================
echo " <h3>" . " Foreach " . "</h3>"; 
//---------------------------------------------------------    
/*
1- foreach($array as $value){
//code; //
}
2- foreach($array as $key =>$value){
//code;//
}
*/
    $arr1 = array("html*","css*","js*","php*","mysql*");
    foreach($arr1 as $ech){
        echo $ech . "<br>";
    }
    $arr2 = array("html*" =>"first",
                  "css*" =>"sacend",
                  "js*" =>"theerd",
                  "php*" =>"foure");
    foreach($arr2 as $key => $ech){
        echo $key . $ech . "<br>";
    }
     //===========================function==================
echo " <h3>" . " Function " . "</h3>"; 
//----------------------------------------------------------    
/*
function identifier (arguments1,arguments2,...){
//function body//
}
*/
    function say(){
        echo"hallo world";
    }
//function with arguments
    function con($i,$ss){
        for ( ;$i<=$ss ; $i++){
            echo $i;
        }
    }
  say();
  echo "<br>";
  con(2,20);
    echo "<br>";
    
 // function with Return-------------------------------------
    function num($num){
        $res = $num * $num ;
        return $res;  //stop execute anything
    }
   echo gettype(num(11));
   echo num(11);
    
 // function with arguments =defulit value----------------------------
    function age($name,$age ="unkuwn",$skill=5){
        return $name . " is age  " . $age . " your skill is " . $skill;
    }
   echo age("ahmed",3,6) . "<br>";
    
    
function recursion($a){
    if ($a <= 20) {
        echo $a;
        recursion($a + 1);
    }
}
   recursion(5) . "<br>";
    
echo rand(1,1000 );  
    
    
/*
[1]indexed arrays 
$arrays name = array(elment1,elment2,...);

*/  echo "<h4> indexed arrays </h4> " . "<br>";
    
  $worker = array("ali","ahmed","hassen",array(1,2,3,4,5,6),"mohamed","osama") ;
    echo $worker[2] . "<br>";
    $worker[2] = "osama" . "<br>";
    echo "<pre>";
    print_r ($worker);
    echo"</pre>" . "<br>";
    
    //examle array use foreach------------------------------------
    $workes = array("ali","ahmed","hassen",null,"mohamed") ;  
    echo "Number Array = " . count($workes);
    echo "<ul>";
    foreach ($workes as $work){
        echo "<li>" . $work . "</li>";
    }
    echo "</ul>";

   //examble array use for ----------------------------------------
    $work_name = array("ali","ahmed","hassen","osama","mohamed") ; 
    echo "<ul>";
    for ($coun = 0 ; $coun < count($work_name) ; $coun++){
        echo "<li>" . $work_name[$coun]  . "</li>";
    }
    echo "</ul>";
 /*   
[2] array associative  
$arrays name = array(key1 => "value",
                     key2 => "value",
                     key3 => "value",
                      ...);    
*/ echo "<h4> array associative </h4>" . "<br>";
   
     $workers_n = array(
         "ali"     => "20%",
         10.6      => "10%",
         true      => "true",
         false     => "false",
         null      => "null",
         "ahmed"   => "100%",
         "hassen"  => "50%",
         "osama"    =>"40%",
         "mohamed" => "60%") ; 
    
    $workers_n["ashraf"]="77%";
    
    echo "Number Array = " . count($workers_n);
    echo "<ul>";
    foreach ($workers_n as $key => $value){
        echo "<li>" . $key . " => " . $value . "</li>";
    }
    echo "</ul>";
    
     /*   
[3] array multidimensional  
$arrays name  = array(elment1,elment2,...),
                array(elment1,elment2,...),
                array(elment1,elment2,...),
                      ...);    
*/ echo "<h4> array  multidimensional </h4>" . "<br>";
    
    $computer = array(
           array("hard","ram","MB"),
           array("cd","disk","lcd"),
           array("keybourd","mouse"),
           array("pen","tab","sound"),
    );
        
    echo "<pre>" ;
    print_r  ($computer) ;
    echo "</pre>";
    echo $computer[2][1];
    
  /*$arrays name  = "key"  => array(elment1,elment2,...),
                    "key"  => array(elment1,elment2,...),
                    "key"   => array(elment1,array(elament1,elment2,....)),
                      ...);   
    */
  
       $computer = array(
           "one pic" => array("hard","ram","MB"),
           "two pic" => array("cd","disk","lcd"),
           "three pic" =>array("keybourd","mouse"),
           "four pic" =>array("pen","tab",array("10%","20%","30%","40%","50%",array(1=>"60%",
                                                                                    2=>"70%",
                                                                                    3=>"80%",
                                                                                    4=>"90%",
                                                                                    5=>"100%") )),
    );
        
    echo "<pre>" ;
    print_r  ($computer) ;
    echo "</pre>";
    echo $computer["one pic"][2];   
        
   //examle ------------------------------------------------------------------     
        $computer = array(
           "one pic" => array("hard","ram","MB"),
           "two pic" => array("cd","disk","lcd"),
           "three pic" =>array("keybourd","mouse"),
           "four pic" =>array("pen","tab"),
    );
        
    
            
    foreach($computer as $key => $value){
        echo  "<span>" . $key . "<span>"  . "<br>" ;
           foreach($value  as $val){
           echo $val ."<br>" ;
           }
    }
    
   
 // array Mathodes  ----------------------------------------------------------------------
// in_array(Needle,hatstak,type)//(elament , arrayName ,true/false (===) identical - value & type)

                      
echo "<h4> array Methodes </h4>" . "<br>";
    $array =array("html","css","js","php","mysql","bootstrap");
    
    if(in_array("php",$array,true)){
        echo "yas in array" ;
    }else{
        echo "no in array";
    }
 //--------------------------------------------------
// array_search(Needle,hatstak,type)//(elament , arrayName ,true/false (===) identical - value & type)
  echo "<br>";  
if(array_search("PHP",$array,true)){
        echo "yas in array" ;
    }else{
        echo "no in array" ;
    }
    
      echo "<br>";    
 echo array_search("mysql",$array);  
      echo "<br>";  
    //-------------------------------------------------------------
  // array_key_exists(Needle,hatstak,type)//(elament , arrayName)
    $array =array("html","css","three" => "js","php","mysql","bootstrap");
  echo array_key_exists("three",$array);    
//----------------------remove / add items--------------------------------------------    
    //array_push(array,value1.value2.value3,....) add items End
   //array_unshift(array,value1.value2.value3,....) add items Strat
   //array_pop(array)  remove items End
   //array_shift(array)  remove items start
  $array =array("html","css", "js","php","mysql","bootstrap");  
    
    array_push($array,"end item","end2item");
    array_unshift($array,"start items" , "start2 items");
    array_pop($array);
    array_shift($array);
    
  echo"<pre>";
   print_r($array);
 echo "</pre>"; 
    //sort -----indexed array
    //sort(arrayName, sort_type)  
    //rsort(arrayName, sort_type)
   $array =array("html","css", "js",20,30,"php","mysql","bootstrap");
    
 rsort($array);
  sort($array);
  echo"<pre>";
   print_r($array);
 echo "</pre>";
    
//sort -----associative array
    //Asort(arrayName, sort_type)  
    //Arsort(arrayName, sort_type)
   $array =array("html" => "good",
                 "css"  => "high", 
                 "js"   => "low",
                 "php"  => "notgood",
                 "mysql"=> 10
                 );
    

 arsort($array,SORT_STRING);
  echo"<pre>";
   print_r($array);
 echo "</pre>";   
    //reverse / shuffle array-----------------
    //array_reverse($array,preserve)
    // shuffle($array)
     $array =array("html","css", "js","php","mysql","bootstrap");
    
 $test = array_reverse($array,true);
  echo"<pre>";
   print_r($test);
 echo "</pre>";   
 // shuffle($array)
$number = range(1,20);
    shuffle($number);
    foreach($number as $num){
        echo $num ;
    }
    
 //array fill ---------------
    //array_fill(index,number , value );
    
    $array = array_fill(2,5,"array");
    
    echo"<pre>";
   print_r($array);
 echo "</pre>";
    //array_fill(index,number , array_fill(index,number , value ));
      $array = array_fill(2,5,array_fill(1,3,"array"));
    
    echo"<pre>";
   print_r($array);
 echo "</pre>";
    
    //array_sum------------------
    // array_sum(array);
echo ($array = array_sum($array =array(1,2.5,"ali",4,50)));

    //array_rand(array,namber);----------------
 echo "<br>";   
   $array =array("ahmed","osama","mohamed","ali","hessen","kaled","ppppp");
  $arrkey=  array_rand($array ,2);
  echo $arrkey[0];
  echo $array[$arrkey[0]];
    
  //array unique--------------------
    // array_unique($array);
   $array = array("ahmed","osama","mohamed","ali","hessen","kaled","kaled","kaled","kaled","ppppp"); 
    
    $arrunique = array_unique($array);
    echo"<pre>";
   print_r($arrunique);
    
  echo "</pre>";  
//===========================string ==================
echo " <h3>" . "string  " . "</h3>"; 
//===========================string explode==================
echo " <h4>" . "string explode " . "</h4>"; 
//---------------------------------------------------------- 
    // explode ("seprator",$string,limit number elments array)

    $str="i,am,love,my,php,so,cool";  //string 
    echo $str;
    $arr = explode(",",$str); 
    
  echo"<pre>";
  print_r($arr);
  echo "</pre>"; 
    
 $arr = explode(",",$str,3);
    
  echo"<pre>";
  print_r($arr);
  echo "</pre>"; 
      
     $arr = explode(",",$str,-3);
    
  echo"<pre>";
  print_r($arr);
  echo "</pre>"; 
    
    //examle---------------------------------------------------
    $css = "style color footer main";
    echo $css;
    $arrcss = explode(" ",$css);
    echo "<pre>";
    print_r($arrcss);
    echo "</pre>";
    foreach($arrcss as $ar_css){
        echo "<link rel = 'css" . $ar_css . "' rel='stylesheet'> ";
    }
//===========================string implode==================
echo " <h4>" . "string implode " . "</h4>"; 
//---------------------------------------------------------- 
    // implode ("seprator",$string)   
    // join ("seprator",$string)  
    
   $arr = array("html","css","javascript","php");
    $str_arr = implode(" --  ",$arr);
    echo $str_arr;
   //===========================string str_split ,chunk_split ==================
echo " <h4>" . "string /str_split ,chunk_split" . "</h4>"; 
//----------------------------------------------------------  
    //$string = Str_split($string ,length);
    $str = "i love my php";
   $str_r = str_split($str,3);
    echo $str;
    echo "<pre>";
    print_r($str_r);
    echo "</pre>";
    
    //$string = Chunk_split($string ,length{default 76 }, end );
     $str = "i love my php";
   $str_r = chunk_split($str,3,"@");
    echo $str . "<br>";
    echo ($str_r);
    
    $str_arr = explode("@",$str_r );
    echo "<pre>";
    print_r($str_arr);
    echo"</pre>";

 //===========================string replace str_replace==================
echo " <h4>" . "string replace str_replace" . "</h4>"; 
//---------------------------------------------------------- -----------
    // $string = str_replace(search,replace , string ,count);
    $str = "i love my php and this php cool";
    $str = str_replace("php","JS",$str,$co);
    $str =  str_replace(array("i ","php","cool"),array("you ","css","verymach"),$str,$co);
    
    echo $str . "<br>";
    echo "count replace is " . $co;
    $str_arr = explode(" ",$str);
    echo "<pre>";
    print_r($str_arr);
    echo"</pre>";
 //===========================string str_repeat ==================
echo " <h4>" . "string Str_repeat ,shuffle ,strlen" . "</h4>"; 
//---------------------------------------------------------- ----------- 
  // $string = srt_repeat($string , number repeat);
  // $string = str_shuffle($string);
  // $string = strlen($string);
    $str = "osama";
    $str2 = str_repeat($str,5);
    echo $str2 . "<br>";
    $str2 = Str_shuffle($str);
    echo $str2  . "<br>";
    $str2 = strlen($str);
    echo $str2  . "<br>";
//===========================string  string addslashes strip_tags ==================
echo " <h4>" . "string addslashes strip_tags" . "</h4>"; 
//---------------------------------------------------------- ----------- 
  //     $string = addslashes($string);
  //    $string = stripslashes($string);
  //    $string  = strip_tags($string ,allaw);
    $str = "i will get 6 o'clock";
    $str = addslashes($str);
    echo $str . "<br>";
    $str = stripslashes($str); 
    echo $str . "<br>";
    $str = "i <b>love </b> <i>php</i> got to <a href='php.net'>php.net</a>";
    echo $str . "<br>";
    $str = strip_tags($str,"<i>");
    echo $str ."<br>";
   
    
   //===========================string strtolower strtoupper ==================
echo " <h4>" . "string astring strtolower strtoupper " . "</h4>"; 
//---------------------------------------------------------- ---------
    /* $string = strtolower($string);
    $string = strtoupper($string);
      $string = lcfirst($string);
      $strng = ucfirst($string);
     $string = ucwords($string);
    */
   $str = "I Love My PHP and this php cool";
    $str = strtolower($str);
     echo $str ."<br>";
     $str = strtoupper($str);
     echo $str ."<br>";
      $str = lcfirst($str);
     echo $str ."<br>";
    $str = ucfirst($str);
     echo $str ."<br>";
     $str = strtolower($str);
     echo $str ."<br>";
     $str = ucwords($str);
     echo $str ."<br>";
  //===========================string trim==================
echo " <h4>" . "string trim" . "</h4>"; 
//---------------------------------------------------------- ---------
   // trim($string, charlist)
   // Ltrim - Rtrim
    //---\n newline
    //-----\t tab
    //----\0 null
    //-----\r carriage tab
    //-----\x0B vertical tab
    //----"" spacs
    $str = "  I love php ";
    echo var_dump ($str) . "<br>";
    $str = "\x0B \x0b \x0b i love php \x0b";
     echo var_dump ($str) . "<br>";
    $str_trim = trim($str);
    echo var_dump($str_trim) . "<br>";
       $str_trim = ltrim($str);
    echo var_dump($str_trim) . "<br>";
       $str_trim = rtrim($str);
    echo var_dump($str_trim) . "<br>";
    $str = "i love php ";
      $str_trim = trim($str,"ilo php");
    echo var_dump($str_trim) . "<br>";
//===========================string str_word_count ==================
echo " <h4>" . "string str_word_count" . "</h4>"; 
//---------------------------------------------------------- ---------
    // str_word_count($string ,format[optional],charlist[optional]);
    $str = "i love php  & and javascript";
    
    echo $str . "<br>";
    $str_co = str_word_count ($str ,1,"&");
    echo "<pre>";
    print_r ($str_co);
    echo "</pre>";
    //===========================string parse_str ==================
echo " <h4>" . "string parse_str \ nl2br " . "</h4>"; 
//---------------------------------------------------------- ---------
    // parse_str($string ,array);
$str = "name=osama&age=32&year=2015&id=234+s=dd";
    parse_str($str);
    echo $name . "<br>";
    parse_str($str,$str_arr);
    echo "<pre>";
    print_r($str_arr);
    echo "</pre>";
    
  //nl2br(string ,false\true)  
  $str = "I love my \n PHP and \n JS" ; 
  echo $str . "<br>";
   echo  nl2br($str);
 
//===========================string strpos,stripos,strrpos  ==================
echo " <h4>" . "string strpos,stripos,strrpos " . "</h4>"; 
//---------------------------------------------------------- ---------
    // strpos($string ,find , offset [optinal])
    // stripos($string ,find , offset [optinal])
    // strrpos($string ,find , offset [optinal])
    
    $str = "i love php so much because php javascript"; 
    echo  "strpos" . strpos($str,"php") . "<br>";
    echo   "stripos" . stripos($str,"PhP",10) . "<br>";
    echo   "strrpos" . strrpos($str,"php") . "<br>";
  
//===========================string strstr,stristr,strchr ==================
echo " <h4>" . "string strstr,stristr,strchr " . "</h4>"; 
//---------------------------------------------------------- ---------
    // strstr($string ,search , befor_search [optinal]defuelt false)
    // stristr($string ,search , befor_search [optinal])
    //  alise strchr($string ,search , befor_search [optinal])
    
       $str = "i love php so much because php javascript"; 
    echo   strstr($str,"php",true) . "<br>";
    echo    stristr($str,"PhP") . "<br>";
    echo   strrchr($str,"php") . "<br>";
    
    
//===========================string strcmp strncmp strrev ==================
echo " <h4>" . "string strcmp strncmp strrev " . "</h4>"; 
//---------------------------------------------------------- ---------  
    
     //strcmp ($string1,$string2)
     //strncmp ($string1,$string2,length)
    //strrev($string)
    $str1 = "phppp"; $str2 = "php";
    echo  strcmp($str1,$str2) ."<br>";
    echo  strncmp($str1,$str2,2) ."<br>";
    echo strrev("osama");
    
//===========================string substr ==================
echo " <h4>" . "string  => substr " . "</h4>"; 
//---------------------------------------------------------- ---------   
   //substr($string ,strat offset,length) 
    
    $str_3 = "I love my php so much";
    
    echo substr($str_3,10,7);
    echo substr($str_3,-4,4);
    
//===========================string substr substr_compare ==================
echo " <h4>" . "string  => substr_count substr_compare  " . "</h4>"; 
//---------------------------------------------------------- ---------   
   //substr_con_count($string ,substring ,start,length) 
    
    $str= "I Love My PHP So Much And PHP Love javascript and PHP too";
    echo substr_count($str,"PHP",1,strlen($str)-1) . "<br>";
    
    //substr_compare($string ,$string2,start postion,length,case);
    $str1="hallo osama";
    $str2="Osama";
    echo substr_compare($str1,$str2,7,5,true);
    
//===========================string substr substr_compare ==================
echo " <h3>" . "contral structure include require   " . "</h3>"; 
//---------------------------------------------------------- ---------  
    include "conect.php"; //contune code with warning
   echo $cont ;
    
   require "conect.php"; //not contune code with warning
    echo $cont ;
    
    
//===========================string substr substr_compare ==================
echo " <h3>" . "switch " . "</h3>"; 
//---------------------------------------------------------- --------- 
    /*
      switch (){
      
      case "expression 1":
      //coding;
      break;
      
       case "expression 2":
      //coding;
      break;
      
      default:
      //coding;
      }
      */
    
   $age="oprea";
       switch($age){
           case "google":
               echo "you are google";
               break;
            case "oprea":
               echo "you are oprea";
               break;
             case "firfox":
               echo "you are firfox";
               break;
                
           default:
               echo "no browser";
       }
    
//===========================file system ==================
echo " <h1>" . "file system " . "</h1>"; 
//---------------------------------------------------------- --------- 
    //dirname(__file__)
    echo dirname(__file__) . "<br />" ;
  
    //-----------------------------------------------
    //file_exists($file)  
    //file_put_contents($file,"write in file")
    
  $file ="ali2.txt";
    if (file_exists($file)){
        echo "file is exist " . $file . "<br />" ; 
        file_put_contents($file,"hallo my file");
    }else {
        echo "not found" . "<br />";
         file_put_contents($file,"hallo my file 2");
    }
    
   //-------------------------------------------------- 
    //is_writable($file)
   $file ="ali2.txt";
    if (is_writable($file)){
        echo "file is writable " . $file  . "<br />" ; 
        file_put_contents($file,"hallo my file writable");
    }else {
        echo "not writable"  . "<br />";
         file_put_contents($file,"hallo my file 2 writeable");
    }
     
  //--------------------------------
    //mkdir("$dir") create dir(folder)
    //rndir ("$dir) delet dir(folder)
    //is_dir("$dir") check found dir
    
    $dir = "osama";
     if(is_dir($dir)){
          rmdir($dir); 
         echo "the dir delet" . "<br>";
     }else{
         mkdir($dir);
       
         echo "the dir is created " . "<br>";
         
     }
  //--------------------------------------
    //dirname (__file__,cd..b////,,,,,,,,,,,,,,,)
    //basename(path,suffex)
    
    echo __file__ . "<br>";
    echo dirname(__file__ ,2) . "<br>";
    echo __dir__ . "<br>";
   echo basename(__file__ ,".php");
     
  //trining filesystem-----------------------------  
    echo "<h5> traning file system </h5>";
    //---------------------------------------------
   
    if (is_dir(__dir__ . "/../php")){
        echo "directory is exist";
    }else{
        mkdir(__dir__ . "/../php");
    }
    
     $dir = __dir__ ."/../php/";
    
    if (file_exists($dir . "index.php")){
        echo "file is exists";
    }else{
        
        file_put_contents($dir . 'index.php',"hallo");
    }
    
     $file = $dir .'index.php' ;

    chmod($file,0444);
    
    
if(is_writable($file)){
    echo "file can't writable";

}else{
    chmod($file,0755);
    file_put_contents($file,"<?php echo 'good job for your coding ';");
}
    include $file;
    
  //-------------------------------------------------
    //file_put_contents(file,data,mode,context)
    //mode:[FILE_APPEND---LOCK_EX---FILE_USE_INCLUDE_PATH]
    file_put_contents("test.php"," echo 'test5'; ");
    include "test.php";
    echo "<br>";
    // file_get_contents(path ,inclued path,contaxt,offset,max_length)
   echo  file_get_contents("http://localhost/php",false,null,9,9);
     echo "<br>";
    //-----------------------------------------------------
    //copy(oldfile,newfile)
    //rename(oldfile,newfile)
    copy ('test.php','test_new.php');
    if (!copy("test.php","test_new.php")){
        echo "not copy";
    }else{
        echo "coped";
    }
     echo "<br>";
 
    function copyme($extention){
        $orgainal = __FILE__;
        return copy($orgainal,$orgainal . "." .$extention);
    }
    
    copyme("bak");
    rename ('test.php','test_new.php');
     //------------------------------------------------------
    //pathinfo(path,option)
    
    $path = pathinfo(__FILE__);
    echo "<pre>";
    print_r($path);
    echo "</pre>";
    
    echo $path["filename"] . "<br>";
    
    if ($path["basename"] === "index.php"){
        echo "path good";
    }
    //------------------------------------------------------
    //unlink (filename,context);
    //rmdir (filename);
    unlink("ali2.txt");
   
   $file = "test_new.php";
    chmod($file,0444);
    if (is_writable($file) and file_exists($file)){
        unlink($file);
    }else{
        if (file_exists($file)){
         echo "sorry";
            chmod($file,0755);
        }
        
    }
  
  //-------------------------------------------------------------
    //scandir(dir,sort,context);
    $file = __DIR__; 
   $di = scandir($file,SCANDIR_SORT_NONE);
    echo "<pre>";
   print_r($di);
    echo "</pre>";
  //---------------------------------------------------------------
    /*
    fopen  (file name,mode , include_path , context);
    fread(file handel , length);
    fwrite(file handel ,string , length);
    fseek(file handel , offset ,whence);(SEEK_SET/SEEK_CUR/SEEK_END)
    fclose(file_handel, )
    
mode==> r : read only /starting form  first  file/ file must be exist
        r+: read and write/starting form  first  file/ file must be exist
        w : write only/open +clear the content +create file if not found
        w+: write and /read open +clear the content +create file if not found
        a :write only open & write to end file +create file if not found
        a+:write and read open & write to end file +create file if not found
        x :write only  create  new file +file must not exist
        x+:write and read open create new file +file must not exist
    
    */
    
   
$file = "cc.txt";
    
$file_ha = fopen($file,"r+"); 
 $file = fread  ($file_ha,filesize($file)); 
    
  echo $file;
        
fseek($file_ha,4,SEEK_SET);
    
fwrite($file_ha,"e");
    
fseek($file_ha,-5,SEEK_END);
    
 fwrite($file_ha,"*"); 
    
 fclose($file_ha);
    
  //--------------------------------------------------------------------
    echo "<h3> Globals </h3>";
    //-------------------------------------------------------------
    
    $GLOBALS['name'] = "GLOBAL NAME";
    
    function test(){
        $name = "FUNCTION NAME" . "<br>";
        echo $name;
       echo $GLOBALS['name'];
    }
    
   test(); 
    
   //--------------------------------------------------------------------
    echo "<h3> $_SERVER </h3>";
    //------------------------------------------------------------- 
    echo $_SERVER['SERVER_NAME'] . "<br>";
    echo $_SERVER['PHP_SELF'] . "<br>";
    echo $_SERVER['SERVER_ADDR'] . "<br>";
    echo $_SERVER['QUERY_STRING'] . "<br>";
   //echo $_SERVER['HTTP_REFERER'] . "<br>";
    echo $_SERVER['SERVER_PORT'] . "<br>";
       
    echo $_SERVER['REQUEST_TIME'] . "<br>";
       echo $_SERVER['REQUEST_TIME_FLOAT'] . "<br>";
       echo $_SERVER['HTTP_CONNECTION'] . "<br>";
       echo $_SERVER['SERVER_ADMIN'] . "<br>";
       echo $_SERVER['SCRIPT_FILENAME'] . "<br>";
       echo $_SERVER['SERVER_SIGNATURE'] . "<br>";
       //--------------------------------------------------------------------
    echo "<h3> \$_GET \$_POST \$_REQUEST  </h3>";
    //------------------------------------------------------------- 
    echo '<form action = "control.php " method= "post">';
    echo '<input type ="name" name="name"> <br>';
    echo '<input type ="password" name="password"> <br>';
    echo '<input type ="submit" value="login">';
    echo "</form>";
    /*-----------------contral.php-------------------------------------------
    <?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $array_user = array("osama","ali","ahmed");
     $data = $_REQUEST['name'];
    
if (in_array($data,$array_user)){
    
    echo "wellcome " . $data . " in contral admin";
    
}else{
    
 echo "sorry not found";   
}
       
}else{
    
  echo "sorry ";  
}
    
 echo  "<br>" . "<br>" . "<hr>";
 echo $_SERVER['SERVER_SIGNATURE'] . "<br>";    
    
    ?>
    */
 //--------------------------------------------------------------------
    echo "<h3> COOKIES  </h3>";
 //-------------------------------------------------------------  
   /* setcookie("name","value",expire,path,domin,secure,http only);
   
    */
    if(count($_COOKIE)>0){
        echo "yes have cookies";
    }else{
      echo  "sorry not support";
    }
    //--------------------
     echo "<Pre>";
    print_r ($_COOKIE);
    echo "</pre>";
   //-------------------  
   /*---------------------examble-------------------------------------
 <?php
$maincolor = "#fff";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
   $maincolor=  $_POST['color'];
   setcookie("background",$maincolor,time()+3600,'/') ;
}
if (isset($_COOKIE['background'])){
    $div = $_COOKIE['background'];
}else{
    $div = $maincolor;
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> cookies </title>
    <style>
    div {
        margin : 50px auto ;
        text-align: center;
        }
     .col{
         height: 300px;
         border:5px solid #999;
         background: <?php echo $div; ?>
        }
    </style>
    </head>
    <body>
        <div class="main">
            <form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "POST">
                <input type ="color"  name = "color">
                <input type ="submit" value = "ok">
                </form>
                <div class = "col" >
                 <?php echo $div; ?>
                </div>
            </div>
    </body>
</html>
---------------------end examble ----------------------------------*/
    
 //--------------------------------------------------------------------
    echo " <h3> Session  </h3>";
 //-------------------------------------------------------------    
    //session();
    //session_unset();
    //session_destroy();
    
    @session_start();
    $_SESSION['name'] = 'osama';
    $_SESSION['food'] = 'pizza';
    $page = "page1.php";
   if (file_exists($page)) {
       echo "<a href= 'page1.php' >page1</a>";
   }else{ 
       //--------------page2--------------------------
    file_put_contents($page,"
    <?php 
    session_start(); 
    echo \$_SESSION['name'];
     \$_SESSION['name'] = 'ahmed';
        if (file_exists('page3.php')) {
             echo '<a href= \"page3.php\" >page2</a>';
        }else{ 
            file_put_contents('page3.php','
            //--------------------------page3 ---------------
             <?php 
               session_start(); 
               echo \$_SESSION[\'name\'] .\"  in page3\";
               ?> ');
        echo '<a href= \"page3.php\" >page2</a>';   
        }
    
    ?> ");
    echo "<a href= 'page1.php' >page1</a>";   
   }
  //--------------------------------------------------------------------
    echo " <h3> functions  </h3>";
 //---------------------------------------------------------------------       
    echo " <h4> sleep \usleep \time_sleep_until  </h4>";
    /*
    sleep(seconds);
    usleep(micro-seconds);
    time_sleep_until (time()+5)
    */
    $exam = "test";
    //sleep(5); //5 sec
    //usleep(2500000); //2.5 sec
    echo $exam;
    //exambl---------------------------------
    function time_sleep (){
    if (file_exists("osama.txt")){
        echo "file found";
    }  else{
    // sleep (0);
        time_sleep();
    }}
 echo  time_sleep();   
  //-----------------------------------------------
      echo " <h4> exit  </h4>";
     // exit("massges"); end run script php
     //die ("massage") ; end run script php
//-----------------------------------------------
      echo " <h4> uniqid  </h4>"; 
   //uniqid(prefix,more_entropy) ;
    $random = uniqid('script_1',true);
    echo $random ."<br>";
    var_dump($random);
    
//-----------------------------------------------
      echo " <h3> filter  </h3>";     
//-------------------------------------------------
    echo "<form action='show.php' method='POST'>";
    echo  "<input type='text' name='test'><hr>";
    echo "<input type='submit' value='send'><br>";
    echo "</form>";
    //------------------------------------
    echo "<h6> list filter</h6>";
    foreach(filter_list() as $list){
        echo $list . "<br>";
    }
 /*  ---------------show.php------------
<?php

$input = $_POST['test'];
//sanitize-------------------------
 $input_f = filter_var($input,FILTER_SANITIZE_NUMBER_INT); 
//validate------------------------
if (filter_var($input_f ,FILTER_VALIDATE_INT) !== FALSE){
   echo "good  " . $input_f ;
}else{
   echo "bad  "  . $input_f ; 
}
*/
 //---------------------------------------------   
    echo " <h3> Date - Time  </h3>";   
  //--------------------------------------------  
   // date (format , timestamp);
    
echo time() . "<br>" ;//time unix 
echo date('y-m-d') . "<br>";
echo date_default_timezone_set('Africa/Cairo') . "<br>"; //set to cario timezon
echo date('y-m-d h:i:s') . "<br>"; 
echo "NEXT Month:  " . date('d-m-y h:i:s', time()+(30*24*60*60))  . "<br>";   
echo date('Y-M-Dth') ."<br>";   
 echo "Copyright To Elzero &copy; 2010-" . date('Y') . "<br>";   
 echo date('Y-M-dS') ."<br>";     
  //------------------examl------------------------------
    echo date("l jS \of F Y h:i:s A ") . "<br>";
    echo date ("l d-M-Y h:i:S A ",time()+(6*30*24*60*60)) . "<br>";
  // ---------------strtotime(data,timpestamp[now])------------- 
   $time  = strtotime('+2 week'); // now or  +1 /day /week /month /year
    echo date ('Y-m-d', $time) . "<br>";
    
    $time  = strtotime('next day'); //or  next /day /week /month /year
    echo date ('Y-m-d', $time) . "<br>";  
    
    //-----------------Php.ini--------------------------------------
    echo " <h3>Php.ini  </h3>";   
  //----------------------------------------------------------------
   error_reporting(0);
    $num = 100;
    echo $num;
    //-----------------Php.ini--------------------------------------
    echo " <h3>END </h3>";   
  //---------------------------------------------------------------- 
    
    
    
    ?>  
    
   <!--.....html---------------------------------------------------------------------------------->
    <h3>...Html</h3>
    <!--function-->
    <?php
    function getticket($nam,$age){
    
        $ticket = rand(1000,10000);
        if ($age >= 30 ){
            $mag = " yas yor name " . $nam ;
            $mag .= " your age " . $age  . "your tickt " . $ticket;
            
        }else{
            $mag = " no your name " . $nam ;
            $mag .= " your age " . $age  ;
        }
        return $mag;
    }
    function fram($fr){
        $id="<div class= 'farm'>" . $fr . "</div>";
        return $id;
    }
    ?>
    <!--END function-->
    <select>
    <?php for ($year = 1900; $year<=2020 ;$year++){
    echo "<option value='$year'>" . $year . "</option>";
     }  ?>
    </select>
    <h5><?php echo $long_1 . $long_2 ?></h5>
    <?php echo fram(getticket("osama",33)); ?> 
    </body>
</html>