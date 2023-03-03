<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="input-group text-center mb-3" style="width:130px">
    <span class="input-group-text decrement-btn">-</span>
    <input type="text" name="quantity" class="form-control qty-input text-center" value="1">
    <span class="input-group-text increment-btn">+</span>
    </div>

    <script>
        $(document).ready(function(){
            $('.increment-btn').click(function(e){
                e.preventDefault();

                var inc_value=$('.qty-input').val();
                var value=parseInt(inc_value,10);
                value=isNaN(value) ? 0 :value;
                if(value<10){
                    value++;
                    $('.qty-input').val(value);
                }
            });

          
            $('.decrement-btn').click(function(e){
                e.preventDefault();

                var dec_value=$('.qty-input').val();
                var value=parseInt(dec_value,10);
                value=isNaN(value) ? 0 :value;
                if(value>1){
                    value--;
                    $('.qty-input').val(value);
                }
            });
        }):
        </script>
</body>
</html>