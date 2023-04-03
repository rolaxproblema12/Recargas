const cuenta = 'cuenta/4421001010';
const usuario = 'usuario/jcervantes.test';
const password = 'password/ws123456';
const options = {
    method: 'POST',
    body: new URLSearchParams({cuenta: '4421001010', usuario: 'jcervantes.test', password: 'ws123456'})
  };

const ejecutartranssaciond="https://app.sivetel.com/ApiWS/procesarTransaccion";

function optionsprocesaTranssacion (requestid) {
    const optionNeReserva ={
        method: 'POST',
        body: new URLSearchParams({cuenta: '4421001010', usuario: 'jcervantes.test', password: 'ws123456',requestid: requestid})
    }
    return optionNeReserva;
};

async function ejecutartranssacion(idreserva)
{
    const respuesta = await fetch(ejecutartranssaciond,optionsprocesaTranssacion(idreserva))
    const datos = await respuesta.json()
    
    console.log(datos);
    console.log(datos.error);
    document.getElementById("ResponseCodeTransaccion").value = datos.error
    //return datos;
    let formulario = document.getElementById('form-codigos');
    formulario.submit();
}