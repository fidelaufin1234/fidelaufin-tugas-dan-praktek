<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Pattern</title>
    <style>
        .box {
            display: inline-block;
            width: 40px;
            height: 40px;
            border: 1px solid black;
            text-align: center;
            vertical-align: middle;
            line-height: 40px;
            margin: 2px;
        }
        .row {
            display: flex;
        }
    </style>
</head>
<body>
    <div id="pattern"></div>

    <script>
        function createPattern(rows) {
            const patternContainer = document.getElementById('pattern');
            
            for (let i = 1; i <= rows; i++) {
                const row = document.createElement('div');
                row.classList.add('row');
                
                for (let j = 1; j <= i; j++) {
                    const box = document.createElement('div');
                    box.classList.add('box');
                    box.innerHTML = j;
                    row.appendChild(box);
                }
                patternContainer.appendChild(row);
            }
        }

        createPattern(5); // You can change the number of rows here
    </script>
</body>
</html>