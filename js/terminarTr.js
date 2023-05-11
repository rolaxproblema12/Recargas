/*CONSTANTES*/ 
const cuenta = 'cuenta/4421001010';
const usuario = 'usuario/jcervantes.test';
const password = 'password/ws123456';
const options = {
    method: 'POST',
    body: new URLSearchParams({cuenta: '4421001010', usuario: 'jcervantes.test', password: 'ws123456'})
  };

const ejecutartranssaciond="https://app.sivetel.com/ApiWS/procesarTransaccion";
/*FUNCIONES */ 
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
    
    document.getElementById("ResponseCodeTransaccion").value = datos.error

    sessionStorage.setItem('success', datos.status);
    sessionStorage.setItem('error', datos.error);
    sessionStorage.setItem('message', datos.message);

    let formulario = document.getElementById('form-codigos');
    formulario.submit();
}

function terminarProceso(){
    let formulario = document.getElementById('form-codigos');
    formulario.submit();
}