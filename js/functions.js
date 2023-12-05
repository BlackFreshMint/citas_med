

function ShowEditUser(Curp,Nombre,Apellido){

    document.getElementById('editCurp').innerText = Curp;
    document.getElementById('editNombre').value = Nombre;
    document.getElementById('editApellido').value = Apellido;

    document.getElementById('modalEdit').style.display = 'block';
}
function ShowDeleteUser(Curp){

    document.getElementById('delCURP').value = Curp;
    document.getElementById('modalErase').style.display = 'block';
}
function ShowCreateUser(Curp,Nombre,Apellido,Correo,Telefono,Direccion,Unidad_Medica){

    document.getElementById('addCURP').value = Curp;
    document.getElementById('addNOMBRE').value = Nombre;
    document.getElementById('addAPELLIDO').value = Apellido;
    document.getElementById('addCORREO').value = Correo;
    document.getElementById('addTELEFONO').value = Telefono;
    document.getElementById('addDIRECCION').value = Direccion;
    document.getElementById('addUMED').value = Unidad_Medica;


    document.getElementById('modalCreate').style.display = 'block';
}
function SaveEdit() {

    var Curp = document.getElementById('editCurp').innerText;
    var Nombre = document.getElementById('editNombre').value;
    var Apellido =  document.getElementById('editApellido').value;

    $.ajax({
        type: 'POST',
        url:'save_user_edit.php',

        data: {
            Curp,
            Nombre,
            Apellido
        },

        success: function(response) {
            alert('User correctly edited');
            document.getElementById('modalEdit').style.display = 'none';

            UpdateUserList();
        }
    });
};

function DeleteUser() {

    var Curp = document.getElementById('delCurp').value;

    $.ajax({
        type: 'POST',
        url: 'delete_user.php',

        data: {
            Curp:Curp
        },

        success: function(response) {
            alert('Data Correctyl errased');
            document.getElementById('modalErase').style.display = 'none';

            UpdateUserList();
        }
    });

}
function CreateUser() {

    var Curp = document.getElementById('addCURP').value;
    var Nombre = document.getElementById('addNOMBRE').value;
    var Apellido =  document.getElementById('addAPELLIDO').value;
    var Correo = document.getElementById('addCORREO').value;
    var Telefono = document.getElementById('addTELEFONO').value;
    var Direccion = document.getElementById('addDIRECCION').value;
    var Unidad_Medica = document.getElementById('addUMED').value;

    $.ajax({
        type: 'POST',
        url: 'php/create_user.php',
        data: {
            Curp: Curp,
            Nombre: Nombre,
            Apellido: Apellido,
            Correo: Correo,
            Telefono: Telefono,
            Direccion: Direccion,
            Unidad_Medica: Unidad_Medica
        },
        success: function(response) {
            alert('User Correctly Created');
            window.location.reload();
        },
        error: function(xhr, status, error) {
            console.log('AJAX request failed. Status: ' + status + ', Error: ' + error);
        }
    });

};



function UpdateUserList() {
    $.ajax({
        url: 'charge_users.php',
        type: 'GET',
        success: function(response){
            $('#table_users tbody').html(response);
        }
    });
};
