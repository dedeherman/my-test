<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>
    <script>
        function Pattern(N) {
        let element_value = 1;
        let i = 0;
        while(i < N){
            if(i % 2 == 0){
            for(let f = element_value; f < element_value + N; f++){
                document.write("X"+" ");
            }
            element_value += N;
            } else {for(let k = element_value + N - 1;k > element_value - 1; k--){
                    document.write("O"+" ");
                    }
                element_value += N;
            }
            document.write("<br>");
            i = i + 1;
        }
        }
        let N = 7;
        if(N % 2 == 0){
            document.write("Harus bilangan ganjil");
        } else {
            Pattern(N);
            }

    </script>
</body>
</html>