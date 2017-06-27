<?php
function getInfoFilter ($query){
    $info = dbQuery("
    SELECT *
    FROM hockey_1617
    $query
    ORDER BY LastName");
    return $info->fetchAll();
}


function filterTableContents($query){
    $info = getInfoFilter($query);
    $result = '';
    for ($i=0 ,$j=$i+1;$i<count($info);$i++,$j++){
        $result .= '
        <tr>
            <td class="numbers">'.$j.'</td>
            <td class="name"><a href="/hockey/indivPlayer.php?name='.$info[$i]['LastName'].'"><span class="Names">'.$info[$i]['FirstName'].'</span> '.$info[$i]['LastName'].'</a>
            </td>
            <td class="name">'.$info[$i]['Pos'].'</td>
            <td>'.$info[$i]['Team'].'</td>
            <td class="numbers">'.$info[$i]['GP'].'</td>
            <td class="numbers">'.$info[$i]['TOI'].'</td>
            <td class="numbers">'.$info[$i]['GF'].'</td>
            <td class="numbers">'.$info[$i]['GA'].'</td>
            <td class="numbers">'.$info[$i]['SF'].'</td>
            <td class="numbers">'.$info[$i]['SA'].'</td>
        </tr>';
    };
    return $result;
}
