/*CONSTANTES*/ 

const cuenta = 'cuenta/4421001010';
const usuario = 'usuario/jcervantes.test';
const password = 'password/ws123456';
const options = {
    method: 'POST',
    body: new URLSearchParams({cuenta: '4421001010', usuario: 'jcervantes.test', password: 'ws123456'})
  };

const reservaRecargad = "https://app.sivetel.com/ApiWS/reservarTransaccion";


/*-------------------------------FUNCIONES---------------------------------*/
function optionsReservaTrasaccion (numero, producto) {
    const optionNeReserva ={
        method: 'POST',
        body: new URLSearchParams({cuenta: '4421001010', usuario: 'jcervantes.test', password: 'ws123456',numero: numero, producto: producto})
    }
    return optionNeReserva;
};
function optionsprocesaTranssacion (requestid) {
    const optionNeReserva ={
        method: 'POST',
        body: new URLSearchParams({cuenta: '4421001010', usuario: 'jcervantes.test', password: 'ws123456',requestid: requestid})
    }
    return optionNeReserva;
};

async function reservaRecarga(number,producto){
    const respuesta = await fetch(reservaRecargad,optionsReservaTrasaccion(number,producto))
    const datos = await respuesta.json()
    requestid = datos.data.requestid;
    return datos;
}

async function ejecutarRecarga(monto, codigo,numero){
    if(respuesta)
    {
        console.log('Moneto:',monto);
        console.log('Codigo:',codigo);
        console.log('numero:',numero);
        const resultado= await reservaRecarga(numero,codigo);
        console.log(resultado)
        //requestid
        requestidd = resultado.data.requestid;
        console.log(requestidd);
        document.getElementById("requestid").value = requestidd;
        console.log('se inserto requestid');
        console.log('adios...');
        let formulario = document.getElementById('formData');
        formulario.submit();
    }
    else{
        alert("No se completo la recarga");
        location.href = "../index.html";
    }

}
