<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Assignment</title>
   
<body style="background-color:yellow" >
    <form method="POST">
        
        Enter a string to check MD5 function: <input type="text" name="string1"> 
        <input type="submit" name="submit1" value="submit"> <br><br>

        Enter a number to check number_format: <input type="number" name="string2"> 
        <input type="submit" name="submit2" value="submit"> <br><br>

        Enter a string to check Ord(): <input type="text" name="string3"> 
        <input type="submit" name="submit3" value="submit"> <br><br>

        Enter a string to check Rtrim(): <input type="text" name="string4"> 
        <input type="submit" name="submit4" value="submit"> <br><br>

        Enter a string to check Str_replace():<input type="text" name="string5"> 
        give string to replace: <input type="text" name="string_5">
        give new string to replace: <input type="text" name="strings_5">
        <input type="submit" name="submit5" value="submit"> <br><br> 

        Enter a string to check Str_len(): <input type="text" name="string6"> 
        <input type="submit" name="submit6" value="submit"> <br><br>

        Enter a string to check Strcasecmp(): <input type="text" name="string7"> 
        Enter second string yo compare:<input type="text" name="string_7">
        <input type="submit" name="submit7" value="submit">  <br><br>
        

        Enter a string to check Strrpos(): <input type="text" name="string8"> 
         Enter string to find:<input type="text" name="string_8">
        <input type="submit" name="submit8" value="submit"> <br><br>

        Enter a string to check Substr(): <input type="text" name="string9"> 
        Enter a number to return a part of string:<input type="number" name="number_9">
        <input type="submit" name="submit9" value="submit"> <br><br>

        Enter a string to check Strtolower(): <input type="text" name="string10"> 
        <input type="submit" name="submit10" value="submit"> <br><br>

        Enter a string to check Bintohex(): <input type="text" name="string11"> 
        <input type="submit" name="submit11" value="submit"> <br><br>

        Enter a string to check chop(): <input type="text" name="string12"> 
        Enter specific string to chop: <input type="text" name="string_12"> 
        <input type="submit" name="submit12" value="submit"> <br><br>
        
        
    </form>
    <p>
    <?php
           if(isset($_POST['submit1'])){
               $input1=$_POST['string1'];
               echo md5($input1);
           }
           if(isset($_POST['submit2'])){
                 $input2=$_POST['string2'];
                 echo number_format($input2);
            }
            if(isset($_POST['submit3'])){
                $input3=$_POST['string3'];
                echo ord("$input3");
           }
           if(isset($_POST['submit4'])){
                $input4=$_POST['string4'];
                echo rtrim($input4);
            }
            if(isset($_POST['submit5'])){
                $input5=$_POST['string5'];
                $inputtext1=$_POST['string_5'];
                $inputtext2=$_POST['strings_5'];
                echo(str_replace("$inputtext1","$inputtext2","$input5"));
            }
            if(isset($_POST['submit6'])){
                $input6=$_POST['string6'];
                echo strlen($input6);

            }
            if(isset($_POST['submit7'])){
                $input1=$_POST['string7'];
                $input2=$_POST['string_7'];
                echo strcasecmp("$input1","$input2");
            }
            if(isset($_POST['submit8'])){
                $input1=$_POST['string8'];
                $input2=$_POST['string_8'];
                echo strpos("$input1","$input2");

            }
            if(isset($_POST['submit9'])){
                $input1=$_POST['string9'];
                $input2=$_POST['number_9'];
                echo(substr($input1,$input2));
            }
            if(isset($_POST['submit10'])){
                $input10=$_POST['string10'];
                echo strtolower("$input10");
            }
            if(isset($_POST['submit11'])){
                $input11=$_POST['string11'];
                echo(bin2hex("$input11"));
            }
            if(isset($_POST['submit12'])){
                $input1=$_POST['string12'];
                $input2=$_POST['string_12'];
                echo chop($input1,"$input2");
            }
        ?>
    </p>
    </div>
</body>
</html>