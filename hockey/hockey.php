<?php
include('config/init.php');

echo "
<head>
    <link rel='stylesheet' href='/hockey/hockey.css'>
    </head>
    <body>
    <a href='/hockey/hockey.php'>reset</a>
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


if(isset($_REQUEST['page'])){
    displayResults($_REQUEST,$result);
}
elseif(isset($_REQUEST['sort'])){
    displayResultsSort('player','LastName','ASC',$_REQUEST);
    displayResultsSort('pos','Pos','ASC',$_REQUEST);
    displayResultsSort('team','Team','ASC',$_REQUEST);
    displayResultsSort('gp','GP','DESC',$_REQUEST);
    displayResultsSort('toi','TOI','DESC',$_REQUEST);
    displayResultsSort('gf','GF','DESC',$_REQUEST);
    displayResultsSort('ga','GA','DESC',$_REQUEST);
    displayResultsSort('sf','SF','DESC',$_REQUEST);
    displayResultsSort('sa','SA','DESC',$_REQUEST);
}
else{
    echo tableContents(0,49,2);
}

echo "


<form action='' method='post'>
search: <input type='text' name='search'>
<input type='submit' name='submit'>
</form>";

 ?>
