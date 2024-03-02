<style>
.card {
    width: 30%;
    height: 200px;
    float: left;
    margin: 1%;
    background: tomato;
    text-align: center;
}

.clr {
    clear: both;
}
</style>
<?php
function card($name,$office="Ducat India")
{
    echo "<div class='card'>$name <br> $office</div>";
}
card("Punit","Ducat india");
card("Ashu");
card("Amit");
card("vikash");


function shop($rs,$sc=10)
{
    echo $rs+$sc;
    echo '<hr>';
}
echo '<div class="clr"></div>';
shop(100);
shop(600);
shop(1200,15)


?>