<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fenntarthatóság</title>
</head>
<body>
    <?php
    $elsoSzint = "Ökoszisztéma";
    $masodikSzint = "Társadalom";
    $harmadikSzint = "Gazdaság";
    $negyedik = "Pénz";

    $fogyasztas = array("több, mint amit a természet újratermelni képes","a természet újratermelő kapacitásával azonos mértékű","kevesebb, mint amit a természet újratermelni képes");
    $környezet  = array("a környezet pusztul","környezeti egyensúly","a környezet megújul");
    $fenntarthatóság = array("nem fenntartható","fenntartható, nem változó állapot","fenntartható fejlődés");
    $cimek = array("A megújuló erőforrások fogyasztása","A környezet helyzete","Fenntarthatóság")
    ?>
    <div class="elsoFeladat">
        <h1>A fenntarthatóság szintjei</h1>
        <img src="Képernyőkép 2024-03-11 122945.png" alt="" style="float: left;">
        <ul>
            <li><?php echo $elsoSzint ?></li>
            <li><?php echo $masodikSzint ?></li>
            <li><?php echo $harmadikSzint ?></li>
            <li><?php echo $negyedik ?></li>
        </ul>
    </div>  

    <div class="masodikFeladat">
        <?php
        $szoveg = '<table border="1" style="width:100%">
            <tr>';
        for ($i = 0; $i < count($cimek); $i++){
            $szoveg .= '<th>'.$cimek[$i].'</th>';
        }
        $szoveg .= '</tr>';

        $szoveg .= '<tr>';
        $szoveg .= '<td>'.$fogyasztas[0].'</td>';
        $szoveg .= '<td>'.$környezet[0].'</td>';
        $szoveg .= '<td>'.$fenntarthatóság[0].'</td>';
        $szoveg .= '</tr>';

        $szoveg .= '<tr>';
        $szoveg .= '<td>'.$fogyasztas[1].'</td>';
        $szoveg .= '<td>'.$környezet[1].'</td>';
        $szoveg .= '<td>'.$fenntarthatóság[1].'</td>';
        $szoveg .= '</tr>';

        $szoveg .= '<tr>';
        $szoveg .= '<td>'.$fogyasztas[2].'</td>';
        $szoveg .= '<td>'.$környezet[2].'</td>';
        $szoveg .= '<td>'.$fenntarthatóság[2].'</td>';
        $szoveg .= '</tr></table>';
        echo $szoveg;

        for ($i=0; $i < count($fenntarthatóság); $i++) { 
            echo $cimek[$i]. " ";
            echo $fogyasztas[$i]. " ";
            echo $környezet[$i]. " ";
            echo $fenntarthatóság[$i]. " ";
        }
        ?>
    </div>

    <div class="harmadikFeladat">
        <a href="megujoloEnergia.php">Oldal</a>
    </div>

    <style>
        .masodikFeladat{
            margin-top: 150px;
            width: 100%;
            max-width: 500px;
        }
    </style>
</body>
</html>