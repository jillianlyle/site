<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

<script type='text/javascript'>

var Counter = 0;
var State = "stopped";
var lapNum = 1;
var lapCounter = 0;

 // stopped or started


function startStop(){
    if(State == 'stopped'){
        $('#StartStopButton').val("Stop");
        $('#reset').show();
        State = 'started';
        IncrementCounter();
    }
    else{
        $('#StartStopButton').val("Start");

        State = 'stopped';

    }
}
function IncrementCounter(){
    if(State == 'stopped'){
            //do nothing
    }
    else{
        Counter += .01;
        $('#Counter').html(Counter.toFixed(1));
        setTimeout(function(){IncrementCounter()},10);
    }

};

function reset(){
    if(State =='stopped'){
    Counter = 0;
    $('#Counter').html(Counter);
    }
    else{
        Counter=0;
        $('#Counter').html(Counter);
        State='stopped';
        $('#StartStopButton').val('Start')
    }
    $("#lapTable").empty();
    lapNum=1;
};

function lap(){
    if (State == 'stopped'){
    }
    else{
    $('#lapTable').append('lap '+lapNum++ +': '+Counter.toFixed(2)+'<br/>');
}
};

function generate(){
    var one = $('textarea#num1').val();
    var two = $('textarea#num2').val();
    var random = one + Math.floor(Math.random() * (two-one+1));
    $('#result').html(random);
}
//function random(min,max){
    //return Math.floor(Marth.random() * (max-min+1)+min)
//}

</script>



<style>
#counter{
    width:200px;
    background-color:#ddd;
    padding:10px;
}
#reset{
    display:none;
}
#lapTable{
    margin-top:10px;
}
</style>

<div id='content'>
    <div id='Counter'>
            0
    </div>
    <br/>
    <input id='StartStopButton' type='button' value='Start' onclick='startStop();'>
    <input type='button' id='lap' value='Lap' onclick='lap();'>
    <input type='button' id='reset' value='Reset' onclick='reset();'>
    </div>
    <div id='lapTable'>
    </div>
    <div id='inputs'>
        <textarea id='num1' placeholder='Number One'></textarea>
        <textarea id='num2' placeholder='Number Two'></textarea>
        <input type='button' id='generate' value='Submit' onclick='generate();'></input>
    </div>
    <div id='result'>

        random number:


    </div>
