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
                <th>CURP</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>CORREO</th>
                <th>TELEFONO</th>
                <th>DIRECCION</th>
                <th>UNIDAD MED</th>
            </tr>
        </thead>
        <tbody>
        </tbody>

    </table>

    <div id="modalEdit" style="display:none;">
    <h3 style="font-family:Calibri;">Edit User</h3>
        <form id="ShowEditUser">
            Curp: <span id="editCurp"></span><br>
            Nombre: <input type="text" id="editNombre"><br>
            Apellido: <input type="text" id="editApellido"><br>
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
            Curp: <input type="text" id="addCURP" name="Curp"><br>
            Nombre: <input type="text" id="addNOMBRE" name="Nombre"><br>
            Apellido: <input type="text" id="addAPELLIDO" name="Apellido"><br>
            Correo: <input type="text" id="addCORREO" name="Correo"><br>
            Telefono: <input type="text" id="addTELEFONO" name="Telefono"><br>
            Direccion: <input type="text" id="addDIRECCION" name="Direccion"><br>
            Unidad_Medica: <input type="text" id="addUMED" name="Unidad_Medica"><br>
            <button type="button" onclick="CreateUser()">Create User</button>
            </form>

    </div>

</body>
</html>


