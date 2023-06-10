<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
    <title>Assessment 3 - Kintan Fahira</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="style.css" type="text/css" media="screen">
</head>

<body>
    <div id="tabs">
        <ul>
            <li><a href="#dataTab">DataTable</a></li>
            <li><a href="#formTab">Form Tambah</a></li>
            <li><a href="#updateTab">Update</a></li>
        </ul>
        <div id="dataTab">
            <table id="users" class="display">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once 'koneksi.php';
                    $sql  = "SELECT * FROM users";
                    $result    = mysqli_query($db_connect, $sql);
                    ?>

                </tbody>
            </table>
        </div>
        <div id="formTab">
            <div class="input_container">
                <form name="formValidation" id="formValidation" method="post" action="create.php">
                    <div class="input-row">
                        <input type="text" name="username" placeholder="Name*" required>
                    </div>
                    <div class="input-row">
                        <input type="email" name="email" placeholder="Email*" required>
                    </div>
                    <div class="input-row">
                        <input type="text" name="no_handphone" placeholder="Phone*" required>
                    </div>
                    <div class="input-row">
                        <textarea name="address" placeholder="Address*" required></textarea>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
        <div id="updateTab">
            <div class="input_container">
                <form name="formValidation" id="formValidation" method="post" action="update.php">
                <div class="input-row">
                        <input type="text" name="id_user" placeholder="ID User*" required>
                    </div>
                <div class="input-row">
                        <input type="text" name="username" placeholder="Name*" required>
                    </div>
                    <div class="input-row">
                        <input type="email" name="email" placeholder="Email*" required>
                    </div>
                    <div class="input-row">
                        <input type="text" name="no_handphone" placeholder="Phone*" required>
                    </div>
                    <div class="input-row">
                        <textarea name="address" placeholder="Address*" required></textarea>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script type="text/javascript" src="custom.js" media="screen"></script>

    <script>
        $(document).ready(function() {
            $("#tabs").tabs();

            // Inisialisasi DataTable dengan AJAX call
            $('#users').DataTable()
            $.ajax({
                url: "http://localhost/WEB/assessment3/data.php",
                type: "GET",
                dataType: "json",
                success: function(data) {
                    $.each(data, function(i, users) {
                        var row = $("<tr>");
                        $("<td>").text(users.username).appendTo(row);
                        $("<td>").text(users.email).appendTo(row);
                        $("<td>").text(users.no_handphone).appendTo(row);
                        $("<td>").text(users.address).appendTo(row);
                        $("#users tbody").append(row);
                    });
                }
            });
        });
    </script>
</body>

</html>