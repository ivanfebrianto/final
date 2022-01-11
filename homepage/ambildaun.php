<?php
    include '../assets/connect.php';

    $plant = $_GET['plant'];
    $daun = $conn->query("SELECT * FROM `condition` 
                            JOIN suggestion ON `condition`.`SymptomId` = suggestion.SymptomId 
                            WHERE suggestion.PlantId = $plant AND `condition`.`Symptom` LIKE '%daun%';");
?>

<option value="0">
    -- Gejala Daun --
</option>

<?php
    while($k = $daun->fetch_array()):
?> 
    
        <option value="<?= $k['SymptomId'] ?>"> 
            <?=$k['Symptom']?> 
        </option>;

<?php 
    endwhile; 
?>