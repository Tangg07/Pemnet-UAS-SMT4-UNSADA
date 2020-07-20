<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JQuery</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
  </script>
</head>
<body>
    <h3>Alert</h3>
    <script>
        $(document).ready(function(){
            $("#alert").click(function(){
                alert("Selamat Datang Di Website Kami.");
            });
        });
    </script>
    <a href="http://www.unsada.ac.id/" id="alert"><button>UNSADA</button></a>
    <br><br>

    <h3>Fade OUT</h3>
    <script>
    $(document).ready(function(){
        setTimeout(function(){
            $(".fadeout").fadeOut(function(){
            $(".fadeout").remove();
        });
        }, 5000);
    });
    </script>
    <p class="fadeout"> Text akan menghilang Dalam 5 Detik </p>
    <br>

    <h3>Double Click</h3>
    <script>
        $(document).ready(function(){
            $(".btnClick").dblclick(function(){
                $(".textClick").css({ color: "red"});
            });
        });
    </script>
    <button class="btnClick">Ganti Warna</button>
    <p class="textClick">Klik 2x Tombol Ganti Warna untuk mengganti warna text ini</p>
    <br>

    <h3> Animate</h3>
    <script> 
        $(document).ready(function(){
            $(".btnAnimate").click(function(){
                $(".divAnimate").animate({left: "250px"}, "slow");
            });
        });
    </script> 
    <button class="btnAnimate">Start Animation</button>
    <div style="background:#98bf21;height:100px;width:100px;position:absolute;" class="divAnimate"></div>
    <br><br><br><br><br><br><br>

    <h3>Even Selector, ODD</h3>
    <script>
        $(document).ready(function(){
            $("tr:odd").addClass("ganjil");
            $("tr:even").addClass("genap");
            $("th").parent().addClass("tbheading");
        });
    </script>
    <style type="text/css">
        .ganjil{ background-color: #cccccc ; }
        .genap{ background-color: #eeeeee ; }
        .tbheading{ background-color: #ffccdd ; }
    </style>
    <table border="1">
        <tr>
            <th>Company</th>
            <th>Country</th>
        </tr>
        <tr>
            <td>Alfreds Futterkiste</td>
            <td>Germany</td>
        </tr>
        <tr>
            <td>Berglunds snabbköp</td>
            <td>Sweden</td>
        </tr>
        <tr>
            <td>Centro comercial Moctezuma</td>
            <td>Mexico</td>
        </tr>
        <tr>
            <td>Ernst Handel</td>
            <td>Austria</td>
        </tr>
        <tr>
            <td>Island Trading</td>
            <td>UK</td>
        </tr>
    </table>
</body>
</html>


<?php
// cara mengakses MySQL menggunakan mysqli extension
$mysqli = new mysqli ("unsadahost", "admin", "rahasia", "dbkampus");
$result = $mysqli->query("SELECT * FROM prodi");
$row = $result->fetch_assoc();

?>