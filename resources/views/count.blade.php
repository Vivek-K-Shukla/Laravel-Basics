<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        div{
            width:20%;
            margin:auto;
        }
        input,button{
            display:inline-block;
            padding:10px;
        }
    </style>
    <title>Document</title>
</head>
<body>
     <!-- To show Message -->
     @if (session('status'))
            <h6 class="alert alert-success">{{session('status')}}</h6>
            @endif

    <form action="counter-add" method="POST">
        @csrf
        <button type="submit" id="subtract">-</button>
        <input type="number" name="counter" value="0">
        <button type="submit" id="add">+</button>
    </form>


    <script>
        let btnAdd=document.querySelector('#add');
        let btnSubtract=document.querySelector('#subtract');
        let input=document.querySelector('input');

        btnAdd.addEventListener('click',()=>{
            input.value=parseInt(input.value)+1;
        });
        btnSubtract.addEventListener('click',()=>{
            input.value=parseInt(input.value)-1;
        });
    </script>    
</body>
</html>