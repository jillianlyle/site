<?php
include('config/init.php');

echo "
<head>
    <link rel='stylesheet' href='/hockey/hockey.css'>
    </head>
    <body>
    <h1><div class='stats'>NHL Skater Stats 2016-2017</div>
    <div class='reset'><a href='/hockey/hockey2.php'>reset</a></div></h1>
        <table>
            <tr class='tableHeader'>
                <th> <span class='word'>Rank</th>";

tableHeader('player','Player');
tableHeader('pos','Position');
tableHeader('team','Team City');
tableHeader('gp','Games Played');
tableHeader('toi','Time on Ice');
tableHeader('gf','Goals For');
tableHeader('ga','Goals Against');
tableHeader('sf','Shots For');
tableHeader('sa','Shots Against');
echo '</tr>';

$display = '';

if(isset($_REQUEST['page'])){
    $display .= displayResults();
}
elseif(isset($_REQUEST['sort'])){
    $display .= displayResultsSort('player','LastName','ASC');
    $display .= displayResultsSort('pos','Pos','ASC');
    $display .= displayResultsSort('team','Team','ASC');
    $display .= displayResultsSort('gp','GP','DESC');
    $display .= displayResultsSort('toi','TOI','DESC');
    $display .= displayResultsSort('gf','GF','DESC');
    $display .= displayResultsSort('ga','GA','DESC');
    $display .= displayResultsSort('sf','SF','DESC');
    $display .= displayResultsSort('sa','SA','DESC');

}

elseif(isset($_REQUEST['filter'])){
    if (empty($_REQUEST['Pos']) && empty($_REQUEST['Team']) && empty($_REQUEST['GP'])){
        echo tableContents(0,2);
    }
    $filter =array(
        (isset($_REQUEST['Pos'], $_REQUEST['Team'], $_REQUEST['GP']) ? filterTableContents("WHERE Pos='$_REQUEST[Pos]' AND Team='$_REQUEST[Team]' AND GP='$_REQUEST[GP]'") : displayResults()),
        (isset($_REQUEST['Pos'],  $_REQUEST['Team']) ? filterTableContents("WHERE Pos='$_REQUEST[Pos]' AND Team='$_REQUEST[Team]'") : ''),
        (isset($_REQUEST['Pos'], $_REQUEST['GP']) ? filterTableContents("WHERE Pos='$_REQUEST[Pos]' AND GP='$_REQUEST[GP]'") : ''),
        (isset($_REQUEST['GP'], $_REQUEST['Team']) ?  filterTableContents("WHERE GP='$_REQUEST[GP]' AND Team='$_REQUEST[Team]'"): ''),
        (isset($_REQUEST['Pos']) ? filterTableContents("WHERE Pos='$_REQUEST[Pos]' ") : ''),
        (isset($_REQUEST['Team']) ? filterTableContents("WHERE Team='$_REQUEST[Team]' ") : ''),
        (isset($_REQUEST['GP']) ? filterTableContents("WHERE GP='$_REQUEST[GP]' ") : '')
    );
        foreach($filter as $value){
            if($value !== ''){
                echo ''.$value.'</table>';
            break;
            }
        }
}
else{
    $display .= tableContents(0,2);
}

echo $display;

echo"<div class='filter'>FILTERS:
<form action='/hockey/hockey2.php?filter' method='post'>
".searchOptions('Team','TEAM')."
".searchOptions('Pos','POSITION')."
".searchOptions('GP','GAMES PLAYED')."
<input type='submit' name='submit'>
</form></div>";


 ?>
