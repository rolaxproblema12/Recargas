const cuenta = 'cuenta/4421001010';
const usuario = 'usuario/jcervantes.test';
const password = 'password/ws123456';
const options = {
    method: 'POST',
    body: new URLSearchParams({cuenta: '4421001010', usuario: 'jcervantes.test', password: 'ws123456'})
  };
const urlProducto = 'https://app.sivetel.com/ApiWS/obtenerProductos';
const urlSalgo = 'https://app.sivetel.com/ApiWS/consultarSaldos';
const urlServicios = 'https://app.sivetel.com/ApiWS/obtenerServicios';
const urlPines= "https://app.sivetel.com/ApiWS/obtenerPines";
const reservaRecarga = "https://app.sivetel.com/ApiWS/reservarTransaccion";
const ejecutartranssacion="https://app.sivetel.com/ApiWS/procesarTransaccion";
const consultarTransaccion= "https://app.sivetel.com/Api/consultarTransaccion";

async function obtenerProductos (){
    const respuesta = await fetch(urlProdcuto,options)
    const datos = await respuesta.json();
    console.log(datos)
}

async function consultarSaldos (){
    const respuesta = await fetch(urlSalgo,options)
    const datos = await respuesta.json()
    console.log(datos)
}

async function consultarServicios(){
    const respuesta = await fetch(urlServicios,options)
    const datos = await respuesta.json()
    console.log(datos)
}
async function consultarPines(){
    const respuesta = await fetch(urlPines,options)
    const datos = await respuesta.json()
    console.log(datos)
}
async function reservaRecarga(number,producto,monto,tipodepago){
    const respuesta = await fetch(reservaRecarga,options)
    const datos = await respuesta.json()
    console.log(datos)
}
async function ejecutartranssacion(idreserva)
{
    const respuesta = await fetch(ejecutartranssacion,options)
    const datos = await respuesta.json()
    console.log(datos)
}
async function consultarTransaccion(requestid)
{
    const respuesta = await fetch()
}

