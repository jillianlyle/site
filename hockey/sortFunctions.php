<?php
function getInfoSort($column,$how,$num){
    $sort = dbQuery("
        SELECT *
        FROM hockey_1617
        ORDER BY $column $how, LastName
        LIMIT $num,50");
    return $sort->fetchAll();
}
function tableContentsSort($column,$how,$num,$end=50){
    $info = getInfoSort($column,$how,$num);
    $result = '';
    for ($i=0,$j=$num+1;$i<$end;$i++,$j++){
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
};
function footer($link,$nextPage){
    $result ='
        </table>
        <div class="footer"><div class="nextButton">
        <form action="/hockey/hockey2.php?sort='.$link.'&sortPage='.$nextPage.'" method="post">
        <input type="submit" name="next" value="Next"></input>
        </form></div>
        <div class="allPages">
        <div class="pages">PAGES: <a href="/hockey/hockey2.php?sort='.$link.'&sortPage=1">1</a></div>';
        for($i=2;$i<=15;$i++){
            $result .= "<div class='pages'>".pageNumbers('hockey2.php?sort='.$link.'&sortPage',$i)."</div>";
        };
    return "$result </div>";
};
function displayResultsSort($name,$column,$how){
    $result = '';
    if($_REQUEST['sort']==$name){
        for($i=1,$x=0,$z=2;$i<=14;$i++,$x=$x+50,$z++){
            if($_REQUEST['sortPage']==$i){
                $result .= tableContentsSort($column,$how,$x);
                $result .= footer($name,$z);
            };
        };
        if($_REQUEST['sortPage']==15){
            $result .= tableContentsSort($column,$how,700,31);
            $result.= footer($name,1);
        };
    };
    return $result;
}
