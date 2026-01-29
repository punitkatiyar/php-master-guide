# PHP DataType

> Scalar Data Types – store single values

> Compound Data Types – store multiple values

> Special Data Types – store special references or no value






```
print_r($_GET);
print_r($_POST);
print_r($_REQUEST);
extract($_REQUEST);
$demo=array("Admin","User","Gest","Hepler");

<form method="post">
        <p><input type="text" name="uname" placeholder="Enter Your Name"></p>
        <p><input type="submit" name="go" value="Dispaly Card"></p>
    </form>
    <br>
    <hr>
    <div class="container">
    <?php
    if(@$_POST['uname']==""){
        echo "<h1>Gest</h1>";
    }
    else{
        while($uname>=1)
        {
            echo "<div class='card'>$demo[$uname]</div>";
            $uname--;
        }
    }
    ?>
    </div>
    <div class="card">
        <h1><?php echo @$_POST['uname'];?></h1>
    </div>
```
