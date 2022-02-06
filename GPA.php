<html>

    <head>
        <title>AboHamza GPA</title>
        <style>
            body{
                background-color: gray;

            }
            #t{
                margin-left: 150px;

            }
            #t th {
                width: 250px; ;

            }
            #t input{
                width: 250px;
                height: 30px;

            }
            #t1{
              margin-left: 150px;  

            }
            #t1 th{
                color: white;
                width: 200px;
                height: 50px;

            }
            #t1 input {

                width: 160px;
                height: 50px;
            }
            .btn{
                width: 80px;
                height: 40px;
                border-radius: 20px;
                color:white;
                background-color: black;
                margin-left: 290px;
            }
            .m1{
                width: 100px;

            }


        </style> 
    </head>
    <body>
        <img class="m1" src="aiu.png"/>
        <img  class="m1" style="margin-left: 650px;" src="nuss.png"/>
        <h1 style="margin-left:100px ;" >الاتحاد الوطني لطلبة سورية/فرع الجامعة العربية الدولية</h1>
        <h2 style="margin-left:400px ;" >لحساب المعدل التراكمي</h2>
        <form action="GPA.php" method="POST">

            <br><br><br><br>
        <table   id="t" border="5" >
            <tr>
                <th>المعدل التركمي</th>
                <th>عدد الساعات المجتازة</th>

            </tr>
            <tr>
                <td><input type="text" name="gpa" value='<?php  if(isset($_POST['submit'])){echo $_POST['gpa'];} ?>' > </td>
                <td><input type="number" name="gpah" value='<?php  if(isset($_POST['submit'])){echo $_POST['gpah'];} ?>'  > </td>
            </tr>
        </table>
        <br>
        <br>

            <table border="3" id="t1" >
                <tr>
                    <th>المادة 1</th>
                    <td><input type="text" name="n1" placeholder="العلامة" value='<?php  if(isset($_POST['submit'])){echo $_POST['n1'];} ?>' ></td>
                    <td><input type="text" name="h1" placeholder="الساعات" value='<?php  if(isset($_POST['submit'])){echo $_POST['h1'];} ?>' ></td>
                </tr>
                <tr>
                    <th>المادة 2</th>
                    <td><input type="text" name="n2" placeholder="العلامة" value='<?php  if(isset($_POST['submit'])){echo $_POST['n2'];} ?>' ></td>
                    <td><input type="text" name="h2" placeholder="الساعات" value='<?php  if(isset($_POST['submit'])){echo $_POST['h2'];} ?>' ></td>
                </tr>    
                <tr>
                    <th>المادة 3</th>
                    <td><input type="text" name="n3" placeholder="العلامة" value='<?php  if(isset($_POST['submit'])){echo $_POST['n3'];} ?>' ></td>
                    <td><input type="text" name="h3" placeholder="الساعات" value='<?php  if(isset($_POST['submit'])){echo $_POST['h3'];} ?>' ></td>
                </tr>
                <tr>
                    <th>المادة 4</th>
                    <td><input type="text" name="n4" placeholder="العلامة" value='<?php  if(isset($_POST['submit'])){echo $_POST['n4'];} ?>' ></td>
                    <td><input type="text" name="h4" placeholder="الساعات" value='<?php  if(isset($_POST['submit'])){echo $_POST['h4'];} ?>' ></td>
                </tr>
                <tr>
                    <th>المادة 5</th>
                    <td><input type="text" name="n5" placeholder="العلامة" value='<?php  if(isset($_POST['submit'])){echo $_POST['n5'];} ?>' ></td>
                    <td><input type="text" name="h5" placeholder="الساعات" value='<?php  if(isset($_POST['submit'])){echo $_POST['h5'];} ?>' ></td>
                </tr>
                <tr>
                    <th>المادة 6</th>
                    <td><input type="text" name="n6" placeholder="العلامة" value='<?php  if(isset($_POST['submit'])){echo $_POST['n6'];} ?>' ></td>
                    <td><input type="text" name="h6" placeholder="الساعات" value='<?php  if(isset($_POST['submit'])){echo $_POST['h6'];} ?>' ></td>
                </tr>
                <tr>
                    <th>المادة 7</th>
                    <td><input type="text" name="n7" placeholder="العلامة" value='<?php  if(isset($_POST['submit'])){echo $_POST['n7'];} ?>' ></td>
                    <td><input type="text" name="h7" placeholder="الساعات" value='<?php  if(isset($_POST['submit'])){echo $_POST['h7'];} ?>' ></td>
                </tr>
            </table>
                <br><br><br>
             <input type="submit" name="submit" value="احسب" class="btn" > 
             <input  type="reset" value="اعادة" style="background-color: black; width: 80px; color: white; height: 40px; border-radius: 20px; ">   

        </form>
        <script>

        if(window.history.replaceState){
        window.history.replaceState(null,null,window.location.href);

        }
        </script>  
      
      
<?php
    if(isset($_POST['submit'])){
        if(!empty($_POST['gpa']) and !empty($_POST['gpah']) ){

        $gpa=$_POST['gpa'];
        $gpah=$_POST['gpah'];

        $n1=$_POST['n1'];
        $n2=$_POST['n2'];
        $n3=$_POST['n3'];
        $n4=$_POST['n4'];
        $n5=$_POST['n5'];
        $n6=$_POST['n6'];
        $n7=$_POST['n7'];



        $h1=$_POST['h1'];
        $h2=$_POST['h2'];
        $h3=$_POST['h3'];
        $h4=$_POST['h4'];
        $h5=$_POST['h5'];
        $h6=$_POST['h6'];
        $h7=$_POST['h7'];




        if($h1==null){
            $h1=0;
        }
        if($h2==null){
            $h2=0;
        }if($h3==null){
            $h3=0;
        }if($h4==null){
            $h4=0;
        }
        if($h5==null){
            $h5=0;
        }if($h6==null){
            $h6=0;
        }

        if($h7==null){
            $h7=0;
        }

        if($n1==null){
            $n1=0;
        }
        if($n2==null){
            $n2=0;
        }if($n3==null){
            $n3=0;
        }if($n4==null){
            $n4=0;
        }
        if($n5==null){
            $n5=0;
        }if($n6==null){
            $n6=0;
        }
        if($n7==null){
            $n7=0;
        }

        $x=$gpa*$gpah+$n1*$h1+$n2*$h2+$n3*$h3+$n4*$h4+$n5*$h5+$n6*$h6+$n7*$h7;
        $totalhours=$gpah+$h1+$h2+$h4+$h3+$h5+$h6+$h7;
        
        
        
        $totalgpa=$x/$totalhours;



        echo "<h1> المعدل التراكمي الجديد: <input type='text' style='background-color: gray; color:white; width:150px;height:40px;'  value ='".$totalgpa."' onfocus='this.blur();' ></h1><br>";
        echo "<h1>عدد الساعات الكلي الجديد:<input type='text' style='background-color: gray;color:white;width:150px;height:40px;' value ='".$totalhours."' onfocus='this.blur();' > </h1>";




    }}


?>


<br><br><br>
<p>BY MUHAMMAD ALZABIBI</p>



</body>

</html>

