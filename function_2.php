<style>
   span {
        color: red;
    }
    <?php
    function shop($data)
    {
        $data1="<span>$data</span>";
        $data2="&#9962;";
        return array($data1 , $data2);   
    }
    $temp="My Name Is";
    $res= shop("Punit");
    $output=$res[0].$res[1];
    echo "$temp $output";
    ?>
