<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Megújuló energiaforrás</title>
</head>
<body>
    <a href="index.php">Oldal</a>
    <div class="harmadikFeladat" style="max-width: 700px;
                                        width:100%;
                                        border: 1px solid black;
                                        /* margin: auto; */">
    <h1>Megújuló energiaforrás</h1>
    <p>Megújuló energiaforrásnak nevezzük az energiahordozók azon csoportját, amelyek emberi időléptékben képesek megújulni, azaz nem fogynak el, ellentétben a nem megújuló energiaforrásokkal. A megújuló energiaforrások a napenergia közvetlen termikus és fotoelektromos hasznosítása, a biomassza, szélenergia, vízenergia, a tenger hullámzásából kinyerhető energia, a geotermikus energia, valamint a Holddal összefüggésben az árapály energia. A geotermikus energia a Nappal való kapcsolat, a földfelszín Napból és a magmából származó energiaáram jelentős különbsége alapján sorolható a megújuló energiaforrások közé.</p>
    </div>

    <?php
    $asszociativTomb = array("EU-átlag" => "20", "Belgium" => "13", "Bulgária" => "16", "Dánia" => "30", "Németország" => "18", "Észtország" => "25", "Finnország" => "36");

    $euTablazat = "<table border='1'><tr><th>Ország</th><th>EU-cél 2020</th>";
    
    foreach ($asszociativTomb as $key => $value) {
        $euTablazat .= "
        <tr>
        <td>$key</td>
        <td>$value</td>
        </tr>";
    }
    $euTablazat .= `</table>`;

    echo $euTablazat;
    ?>
</body>
</html>