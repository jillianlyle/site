<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

  <script type = 'text/javascript'>

function ShowText(){
    $('.hiddentext').fadeIn();
}
function ChangeColor(){
    $.post('endpoint.php', {},function(Data){
            $('.hiddentext').html(Data);
    });
}

  </script>

<div>
    <a href='#' onclick='ShowText();'>click here</a>
    <a href='#' onclick='ChangeColor();'>click here</a>
</div>
<div class='hiddentext' style='display:none;'>
this is some text
</div>
