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
    console.log('Moneto:',monto);
    console.log('Codigo:',codigo);
    console.log('numero:',numero);
    const resultado= await reservaRecarga(numero,codigo);
    console.log(resultado)
    //Trans id
    document.getElementById("transid").value = document.getElementById("numero").value + generarIdtransaction();

    //requestid
    requestidd = resultado.data.requestid;
    console.log(requestidd);
    document.getElementById("requestid").value = requestidd;
    console.log('se inserto requestid');
    console.log('adios...');
    let formulario = document.getElementById('formData');
    formulario.submit();
}

function generarIdtransaction(){
	let fecha = new Date();
    let hora = {
        dd: fecha.getDate(),
        mm: fecha.getMonth() + 1,
        yy: fecha.getFullYear().toString().slice(-2),
		hr: fecha.getHours(),
		mm: fecha.getMinutes(),
		sc: fecha.getSeconds()   
    }
    let rol = `${hora.dd}${hora.mm}${hora.yy}${hora.hr}${hora.mm}${hora.sc}`
	return(parseInt(rol.replace(" ","")));
}

