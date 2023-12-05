<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/functions.js"></script>
    <link rel="stylesheet" href="../css/crud_styles.css">
</head>
<body>

    <table id="table_users" border=2>
        <thead>
            <tr>
                <th>ID</th>
                <th>ROL</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                <th>ACTIONS</th>
            </tr>
        </thead>
        <tbody>
        </tbody>

    </table>

    <div id="modalEdit" style="display:none;">
    <h3 style="font-family:Calibri;">Edit User</h3>
        <form id="ShowEditUser">
            ID USER: <span id="editID"></span><br>
            ID ROL: <input type="text" id="editIdRol"><br>
            USERNAME: <input type="text" id="editUsername"><br>
            <button type="button" onclick="SaveEdit()">Save</button>
        </form>

    </div>

    <div id="modalErase" style="display:none;">
        <h3 style=font-family:Calibri;>Erase User</h3>
            <form id="ShowDeletUser">
                ID USER: <input type="text" id="delID" name='ID_USER'><br>
                <button type="button" onclick="DeleteUser()">Confirm Delete</button>
            </form>

    </div>

    <div id="modalCreate" style="display:none;">
        <h3 style="font-family:Calibry">Create User</h3>
            <form id="ShowCreateIUser">
            ID USER: <span id="addID" name="ID_USER"></span><br>
            ID ROL: <input type="text" id="addIdRol" name="ID_ROL"><br>
            USERNAME: <input type="text" id="addUsername" name="USERNAME"><br>
            PASSWORD: <input type="text" id="addPass" name="PASSWORD"><br>
            <button type="button" onclick="CreateUser()">Create User</button>
            </form>

    </div>

</body>
</html>


