<?php
$val=$_GET['selectvalue'];
$DOSAGESFORMS1 =array('0.4 mg/mL', '1 mg/mL',' 2 mg/0.4 mL');
$DOSAGESFORMS2 =array('Amoxil', 'Trimox',' Moxatag');
$DOSAGESFORMS3 =array('oral delayed release capsule (10 mg; 20 mg; 40 mg)',' oral delayed release tablet (20 mg)','oral powder for reconstitution, delayed release (10 mg; 2.5 mg)','oral suspension (2 mg/mL)');
$DOSAGESFORMS4 =array('Tessalon Perles','Tessalon', 'Zonatuss');

switch($val){
    case 'Amoxicillin':foreach($DOSAGESFORMS1  as $Amoxicillinval){
        echo"<option>$Amoxicillinval </option>";
    }
    break;
    case 'Omeprazole':foreach($DOSAGESFORMS2  as $Omeprazoleval){
        echo"<option> $Omeprazoleval </option>";
    }
    break;
    case 'FentanylPatch':foreach($DOSAGESFORMS3 as $FentanylPatchval){
        echo"<option> $FentanylPatchval </option>";
    }
    break;
    case 'NaloxoneInjection':foreach($DOSAGESFORMS4  as $NaloxoneInjectionval){
        echo"<option> $NaloxoneInjectionval</option>";
    }
    break;
    default:echo "No data has been Selected";
    break;
}
?>
