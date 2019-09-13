<table class="w3-table-all w3-hoverable">

<tr>
        <th>Name</th>
        <th>Year 2015</th>
        <th>Year 2016</th>
        <th>Year 2017</th>
        <th>Year 2018</th>
        <th>Year 2019</th>
 </tr>
    <?php 

    //print_r($dataPointsWithName);
    $countData = 0;
    foreach($dataPoints as $data)
    {
    ?>
    <tr>
        <td><?php echo $dataPointsWithName[$countData++] ?></td>
        <?php foreach($data as $points)
        {
            

        ?>

        <td><?php echo $points["y"]; ?></td>
        <?php }?>
        </tr>
    <?php }
    ?>
</table>