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
    let filtro = document.getElementById('operadora');
    console.log(filtro)
    const respuesta = await fetch(urlProducto,options)
    const datos = await respuesta.json()
    
    let productos = '';
    datos.data.forEach(producto => {
        productos += `
            <tr>
                <td class="text-5 text-primary text-center align-middle">${producto.monto} <span class="text-1 text-muted d-block">Amount</span></td>
                <td class="text-3 text-center align-middle">${producto.nombre}<span class="text-1 text-muted d-block">Nombre</span></td>
                <td class="text-3 text-center align-middle">${producto.codigo}<span class="text-1 text-muted d-block">Codigo</span></td>
                <td class="text-1 text-muted align-middle">${producto.descripcion}</td>
                <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge Now</button></td>
            </tr>
        `;
    });
    document.getElementById('contenedor-planes').innerHTML = productos;

    console.log(datos)
    console.log(datos.status)
    console.log(datos.data)
    return true;
}

async function consultarSaldos (){
    const respuesta = await fetch(urlSalgo,options)
    const datos = await respuesta.json()
    console.log(datos)
}
/*
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
*/


const btnVerPlanes = document.getElementById('btnVerPlanes');

btnVerPlanes.addEventListener('click', () => {
	obtenerProductos();
});