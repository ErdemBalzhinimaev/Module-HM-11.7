<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11.7 Практика</title>
    <style>
        .container {
            margin: 20px 200px
        }
        .title {
            font-weight: 700;
            font-size: 25px;
            text-align: left;
            margin-bottom: 10px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid #c8c8c8;
            margin: 20px 0;
            padding: 10px;
            height: 50px;
        }
        thead {
            background-color: #eee;
            font-size: 25px;
        }
        td {
            text-align: center;
            font-weight: 600;
            font-size: 20px;
        }
        p {
            font-size: 20px;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="container">
        <table>
            <caption class="title">Задание 1. Таблица истинности PHP</caption>
            <thead>
            <tr>
                <th>A</th>
                <th>B</th>
                <th>!A</th>
                <th>A || B</th>
                <th>A && B</th>
                <th>A xor B</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>0</td>
                <td>0</td>
                <td><?php var_dump(!$a0); ?></td>
                <td><?php var_dump($a0 || $b0); ?></td>
                <td><?php var_dump($a0 && $b0); ?></td>
                <td><?php var_dump($a0 xor $b0); ?></td>
            </tr>
            <tr>
                <td>0</td>
                <td>1</td>
                <td><?php var_dump(!$a0); ?></td>
                <td><?php var_dump($a0 || $b1); ?></td>
                <td><?php var_dump($a0 && $b1); ?></td>
                <td><?php var_dump($a0 xor $b1); ?></td>
            </tr>
            <tr>
                <td>1</td>
                <td>0</td>
                <td><?php var_dump(!$a1); ?></td>
                <td><?php var_dump($a1 || $b0); ?></td>
                <td><?php var_dump($a1 && $b0); ?></td>
                <td><?php var_dump($a1 xor $b0); ?></td>
            </tr>
            <tr>
                <td>1</td>
                <td>1</td>
                <td><?php var_dump(!$a1); ?></td>
                <td><?php var_dump($a1 || $b1); ?></td>
                <td><?php var_dump($a1 && $b1); ?></td>
                <td><?php var_dump($a1 xor $b1); ?></td>
            </tr>
            </tbody>
        </table>
        <table>
            <caption class="title">Задание 2. Гибкое сравнение в PHP</caption>
            <thead>
                <th></th>
                <th>true</th>
                <th>false</th>
                <th>1</th>
                <th>0</th>
                <th>-1</th>
                <th>"1"</th>
                <th>null</th>
                <th>"php"</th>
            </thead>
            <tbody>
            <tr>
                <th>true</th>
                <td><?php var_dump(true == true); ?></th>
                <td><?php var_dump(true == false); ?></td>
                <td><?php var_dump(true == 1); ?></td>
                <td><?php var_dump(true == 0); ?></td>
                <td><?php var_dump(true == -1); ?></td>
                <td><?php var_dump(true == '1'); ?></td>
                <td><?php var_dump(true == null); ?></td>
                <td><?php var_dump(true == 'php'); ?></td>
            </tr>
            <tr>
                <th>false</th>
                <td><?php var_dump(false == true); ?></td>
                <td><?php var_dump(false == false); ?></td>
                <td><?php var_dump(false == 1); ?></td>
                <td><?php var_dump(false == 0); ?></td>
                <td><?php var_dump(false == -1); ?></td>
                <td><?php var_dump(false == '1'); ?></td>
                <td><?php var_dump(false == null); ?></td>
                <td><?php var_dump(false == 'php'); ?></td>
            <tr>
                <th>false</th>                    
                <td><?php var_dump(false == true); ?></td>
                <td><?php var_dump(false == false); ?></td>
                <td><?php var_dump(false == 1); ?></td>
                <td><?php var_dump(false == 0); ?></td>
                <td><?php var_dump(false == -1); ?></td>
                <td><?php var_dump(false == '1'); ?></td>
                <td><?php var_dump(false == null); ?></td>
                <td><?php var_dump(false == 'php'); ?></td>
            </tr>
            <tr>
                <th>1</th>
                <td><?php var_dump(1 == true); ?></td>
                <td><?php var_dump(1 == false); ?></td>
                <td><?php var_dump(1 == 1); ?></td>
                <td><?php var_dump(1 == 0); ?></td>
                <td><?php var_dump(1 == -1); ?></td>
                <td><?php var_dump(1 == '1'); ?></td>
                <td><?php var_dump(1 == null); ?></td>
                <td><?php var_dump(1 == 'php'); ?></td>
            </tr>
            <tr>
                <th>0</th>
                <td><?php var_dump(0 == true); ?></td>
                <td><?php var_dump(0 == false); ?></td>
                <td><?php var_dump(0 == 1); ?></td>
                <td><?php var_dump(0 == 0); ?></td>
                <td><?php var_dump(0 == -1); ?></td>
                <td><?php var_dump(0 == '1'); ?></td>
                <td><?php var_dump(0 == null); ?></td>
                <td><?php var_dump(0 == 'php'); ?></td>
            </tr>
            <tr>
                <th>-1</th>
                <td><?php var_dump(-1 == true); ?></td>
                <td><?php var_dump(-1 == false); ?></td>
                <td><?php var_dump(-1 == 1); ?></td>
                <td><?php var_dump(-1 == 0); ?></td>
                <td><?php var_dump(-1 == -1); ?></td>
                <td><?php var_dump(-1 == '1'); ?></td>
                <td><?php var_dump(-1 == null); ?></td>
                <td><?php var_dump(-1 == 'php'); ?></td>
            </tr>
            <tr>
                <th>"1"</th>
                <td><?php var_dump('1' == true); ?></td>
                <td><?php var_dump('1' == false); ?></td>
                <td><?php var_dump('1' == 1); ?></td>
                <td><?php var_dump('1' == 0); ?></td>
                <td><?php var_dump('1' == -1); ?></td>
                <td><?php var_dump('1' == '1'); ?></td>
                <td><?php var_dump('1' == null); ?></td>
                <td><?php var_dump('1' == 'php'); ?></td>
            </tr>
            <tr>
                <th>null</th>
                <td><?php var_dump(null == true); ?></td>
                <td><?php var_dump(null == false); ?></td>
                <td><?php var_dump(null == 1); ?></td>
                <td><?php var_dump(null == 0); ?></td>
                <td><?php var_dump(null == -1); ?></td>                   
                <td><?php var_dump(null == '1'); ?></td>
                <td><?php var_dump(null == null); ?></td>
                <td><?php var_dump(null == 'php'); ?></td>
            </tr>
            <tr>
                <th>"php"</th>
                <td><?php var_dump('php' == true); ?></td>
                <td><?php var_dump('php' == false); ?></td>
                <td><?php var_dump('php' == 1); ?></td>
                <td><?php var_dump('php' == 0); ?></td>
                <td><?php var_dump('php' == -1); ?></td>
                <td><?php var_dump('php' == '1'); ?></td>
                <td><?php var_dump('php' == null); ?></td>
                <td><?php var_dump('php' == 'php'); ?></td>
            </tr>
            </tbody>
        </table>
        <table>
            <caption class="title">Задание 2. Жёсткое сравнение в PHP</caption>
            <thead>
            <tr>
                <th></th>
                <th>true</th>
                <th>false</th>
                <th>1</th>
                <th>0</th>
                <th>-1</th>
                <th>"1"</th>
                <th>null</th>
                <th>"php"</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>true</th>
                <td><?php var_dump(true === true); ?></th>
                <td><?php var_dump(true === false); ?></td>
                <td><?php var_dump(true === 1); ?></td>
                <td><?php var_dump(true === 0); ?></td>
                <td><?php var_dump(true === -1); ?></td>
                <td><?php var_dump(true === '1'); ?></td>
                <td><?php var_dump(true === null); ?></td>
                <td><?php var_dump(true === 'php'); ?></td>
            </tr>
            <tr>
                <th>false</th>
                <td><?php var_dump(false === true); ?></td>
                <td><?php var_dump(false === false); ?></td>
                <td><?php var_dump(false === 1); ?></td>
                <td><?php var_dump(false === 0); ?></td>
                <td><?php var_dump(false === -1); ?></td>
                <td><?php var_dump(false === '1'); ?></td>
                <td><?php var_dump(false === null); ?></td>
                <td><?php var_dump(false === 'php'); ?></td>
            </tr>
            <tr>
                <th>1</th>
                <td><?php var_dump(1 === true); ?></td>
                <td><?php var_dump(1 === false); ?></td>
                <td><?php var_dump(1 === 1); ?></td>
                <td><?php var_dump(1 === 0); ?></td>
                <td><?php var_dump(1 === -1); ?></td>
                <td><?php var_dump(1 === '1'); ?></td>
                <td><?php var_dump(1 === null); ?></td>
                <td><?php var_dump(1 === 'php'); ?></td>
            </tr>
            <tr>
                <th>0</th>
                <td><?php var_dump(0 === true); ?></td>
                <td><?php var_dump(0 === false); ?></td>
                <td><?php var_dump(0 === 1); ?></td>
                <td><?php var_dump(0 === 0); ?></td>
                <td><?php var_dump(0 === -1); ?></td>
                <td><?php var_dump(0 === '1'); ?></td>
                <td><?php var_dump(0 === null); ?></td>
                <td><?php var_dump(0 === 'php'); ?></td>
            </tr>
            <tr>
                <th>-1</th>
                <td><?php var_dump(-1 === true); ?></td>
                <td><?php var_dump(-1 === false); ?></td>
                <td><?php var_dump(-1 === 1); ?></td>
                <td><?php var_dump(-1 === 0); ?></td>
                <td><?php var_dump(-1 === -1); ?></td>
                <td><?php var_dump(-1 === '1'); ?></td>
                <td><?php var_dump(-1 === null); ?></td>
                <td><?php var_dump(-1 === 'php'); ?></td>
            </tr>
            <tr>
                <th>"1"</th>
                <td><?php var_dump('1' === true); ?></td>
                <td><?php var_dump('1' === false); ?></td>
                <td><?php var_dump('1' === 1); ?></td>
                <td><?php var_dump('1' === 0); ?></td>
                <td><?php var_dump('1' === -1); ?></td>
                <td><?php var_dump('1' === '1'); ?></td>
                <td><?php var_dump('1' === null); ?></td>
                <td><?php var_dump('1' === 'php'); ?></td>
            </tr>
            <tr>
                <th>null</th>
                <td><?php var_dump(null === true); ?></td>
                <td><?php var_dump(null === false); ?></td>
                <td><?php var_dump(null === 1); ?></td>
                <td><?php var_dump(null === 0); ?></td>
                <td><?php var_dump(null === -1); ?></td>
                <td><?php var_dump(null === '1'); ?></td>
                <td><?php var_dump(null === null); ?></td>
                <td><?php var_dump(null === 'php'); ?></td>
            </tr>
            <tr>
                <th>"php"</th>
                <td><?php var_dump('php' === true); ?></td>
                <td><?php var_dump('php' === false); ?></td>
                <td><?php var_dump('php' === 1); ?></td>
                <td><?php var_dump('php' === 0); ?></td>
                <td><?php var_dump('php' === -1); ?></td>
                <td><?php var_dump('php' === '1'); ?></td>
                <td><?php var_dump('php' === null); ?></td>
                <td><?php var_dump('php' === 'php'); ?></td>
            </tr>
            </tbody>
         </table>
    </div>
</body>
</html>
