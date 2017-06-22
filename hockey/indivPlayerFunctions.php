<?php
function playerInfo($LastName){
    $info = dbQuery("
    SELECT *
    FROM hockey_1617
    WHERE LastName= :var1",
    array(
        "var1"=>$LastName)
    );
    return $info->fetch();
};

function displayPlayerInfo ($name){
    if($_REQUEST['name']==$name){
        $result = playerInfo($name);
        return $result;
    }
}
function playerInfo1516($LastName){
    $info = dbQuery("
    SELECT *
    FROM hockey_1516
    WHERE LastName= :var1",
    array(
        "var1"=>$LastName)
    );
    return $info->fetch();
};
function displayPlayerInfo1516 ($name){
    if($_REQUEST['name']==$name){
        $result = playerInfo1516($name);
        return $result;
    }
}
function playerTableContents($x){
    $info = $x;
    $yep =
        "
        <p>
        <b>Team city:</b> $info[Team]<br>
        <b>Position:</b> $info[Pos]<br>
        <b>Games played:</b> $info[GP]<br>
        <b>Time on ice:</b> $info[TOI]<br>
        <b>Goals scored for team:</b> $info[GF]<br>
        <b>Goals scored by team while player is on the ice per 60 minutes of ice time:</b> $info[GF60]<br>
        <b>Goals scored against team:</b> $info[GA]<br>
        <b>Goals scored against team while player is on the ice per 60 minutes of ice time:</b> $info[GA60]<br>
        <b>Percent of goals scored while player is on the ice that were scored by his team:</b> $info[GFp]%<br>
        <b>Shots for team:</b> $info[SF]<br>
        <b>Shots against team:</b> $info[SA]<br>
        <b>Team shooting percentage while player is on ice:</b> $info[Shp]%<br>
        <b>Team save percentage while player is on ice:</b> $info[Svp]%<br>
        <b>Shooting percentage + save percentage:</b> $info[PDO]<br>
        <b>Corsi for team while player is on the ice:</b> $info[CF]<br>
        <b>Corsi against team while player is on the ice:</b> $info[CA]<br>
        <b>Corsi for team while player is on the ice per 60 minutes of ice time:</b> $info[CF60]<br>
        <b>Corsi against team while player is on the ice per 60 minutes of ice time:</b> $info[CA60]<br>
        </p>";
    return $yep;
}


 ?>
