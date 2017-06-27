<?php
function tableHeader($href,$input){
    echo'
    <th>
        <span class="word"><a href="hockey2.php?sort='.$href.'&sortPage=1">'.$input.'</a></span>
        </th>';
};
function pageNumbers($link,$number){
    $result ='
        <a href="/hockey/'.$link.'='.$number.'">'.$number.'</a>';
    return $result;
}

function getInfo($num){
    $info = dbQuery("
    SELECT *
    FROM hockey_1617
    LIMIT $num,50");
    return $info->fetchAll();
};

function tableContents($x,$nextPage,$y=50){
    $info = getInfo($x);
    $result = '';
    for ($i=0 ,$j=$x+1;$i<$y;$i++,$j++){
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
    $result .='
            </table>
            <div class="footer">
            <div class="nextButton"><form action="/hockey/hockey2.php?page='.$nextPage.'" method="post">
            <input type="submit" name="next" value="Next"></input>
            </form></div>
            <div class="allPages">
            <div class="pages"><span class="pagesText">PAGES:</span> <a href="/hockey/hockey.php">1</a></div>
            ';
    for($i=2;$i<=15;$i++){
        $result .= '<div class="pages">
            '.pageNumbers('hockey2.php?page',$i).'</div>';
        };
    return "$result </div>";
}
function displayResults(){
    for($i=1,$x=0,$y=2;$i<=14;$i++,$x=$x+50,$y++){
        if($_REQUEST['page']==$i){
            $table = tableContents($x,$y);
        };
    };
    if($_REQUEST['page']==15){
        $table = tableContents(700,1,31);
    };
    return $table;
}
function getInfoSearch($column){
    $search = dbQUery("
    SELECT DISTINCT $column
    FROM hockey_1617
    ORDER BY $column ASC");
    return $search->fetchAll();
};

function searchOptions($name,$input){
    $info=getInfoSearch($name);
    $hello = "$input - <br><select name=$name><option name=''></option>";
    foreach($info as $value){
        $hello .= "<option name='$value'>$value[$name]</option>";
    };
    $hello .= "</select><br>";
    return $hello;
}
