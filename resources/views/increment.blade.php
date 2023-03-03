<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter</title>
    
    <script src="jquery.js"></script>
    <script>
     var i;
     $(function(){
        $('.plus').click(function(){
            i=parseInt($('.st').val());
            i=i+1;
            $('.st').val(i);
        })

        $('.minus').click(function(){
            i=parseInt($('.st').val());
            i=i-1;
            if(i==-1){
                i=0;
            }
            $('.st').val(i);
        })
     })
    </script>
</head>
<body>
        <div class="main">
            <input type="button" value="+" class="plus">
            <input type="number" class="st" size="5" value="0">
            <input type="button" value="-" class="minus">
        </div>
</body>
</html>