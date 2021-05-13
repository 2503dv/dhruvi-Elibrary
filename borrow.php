<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 90%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        .bb {
            background-color: green;
            border: 2px solid black;
            color: white;
            padding: 5px 10px;
            text-align: center;
            display: inline-block;
            font-size: 20px;
            margin: 10px 30px;
            cursor: pointer;
        }

        body {
            margin: 0;
            font-family: arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav .icon {
            display: none;
        }

        @media screen and (max-width: 600px) {
            .topnav a:not(:first-child) {
                display: none;
            }

            .topnav a.icon {
                float: right;
                display: block;
            }
        }
    </style>
</head>

<body>

    <br>
    <div class="topnav" id="myTopnav">
        <a href="borrow_history.php">My borrow history</a>
    </div>

    <center>
        <table>
            <br><br>
            <center>
                <caption><b>available books in our store</b></caption>
            </center><br><br>
            <tr>
                <th>sr no.</th>
                <th>book name</th>
                <th>borrow book</th>
            <tr>
                <td>1.</td>
                <td>Wings of fire</td>
                <td><a href="checkout.html"><button class="bb">borrow</button></a></td>
            </tr>
            <tr>
                <td>2.</td>
                <td>The three mistakes of my life</td>
                <td><a href="checkout.html"><button class="bb">borrow</button></a></td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Lord of the rings</td>
                <td><a href="checkout.html"><button class="bb">borrow</button></a></td>
            </tr>
            <tr>
                <td>4.</td>
                <td>My name is memory</td>
                <td><a href="checkout.html"><button class="bb">borrow</button></a></td>
            </tr>
            <tr>
                <td>5.</td>
                <td>Harry potter</td>
                <td><a href="checkout.html"><button class="bb">borrow</button></a></td>
            </tr>
        </table>
    </center>
</body>

</html>