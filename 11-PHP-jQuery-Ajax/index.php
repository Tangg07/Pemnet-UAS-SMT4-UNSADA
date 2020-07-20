<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pertemuan 11 - Pemrograman Internet</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</head>
<body>
    <form action="simpan.php" method="POST">
        <h2>Tambah Data</h2>
        <table>
            <tr>
                <td> Nama </td>
                <td>: <input type="text" name="nama"></td>
            </tr>
            <tr valign="top">
                <td> Alamat </td>
                <td>: <textarea name="alamat" class="textalamat"></textarea></td>
            </tr>
            <tr>
                <td> Umur </td>
                <td>: <input type="text" name="umur"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <hr>
    <div id="content">
    
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            loadData();
            $('form').on('submit', function(e){
                e.preventDefault();
                $.ajax({
                    type : $(this).attr('method'),
                    url : $(this).attr('action'),
                    data : $(this).serialize(),
                    success : function(){
                        loadData();
                        resetForm();
                    }
                });
            });
        });

        function loadData(){
            $.get('data.php', function(data){
                $('#content').html(data)
                $('.hapusData').click(function(e){
                    e.preventDefault();
                    $.ajax({
                        type : 'get',
                        url : $(this).attr('href'),
                        success : function(){
                            loadData();
                        }
                    });
                });

                $('.updateData').click(function(e){
                    e.preventDefault();
                    $('[name=nama]').val($(this).attr('nama'));
                    $('[name=alamat]').val($(this).attr('alamat'));
                    $('[name=umur]').val($(this).attr('umur'));
                    $('form').attr('action', $(this).attr('href'));
                    });
                });
        }

        function resetForm(){
            $('[type=text]').val('');
            $('.textalamat').val('');
            $('[name=nama]').focus();
            $('form').attr('action', 'simpan.php');
        }

    </script>
</body>
</html>