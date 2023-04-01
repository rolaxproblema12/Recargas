const cuenta = 'cuenta/4421001010';
const usuario = 'usuario/jcervantes.test';
const password = 'password/ws123456';
const options = {
    method: 'POST',
    body: new URLSearchParams({cuenta: '4421001010', usuario: 'jcervantes.test', password: 'ws123456'})
  };
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

let requestid;
const urlProducto = 'https://app.sivetel.com/ApiWS/obtenerProductos';
const urlSalgo = 'https://app.sivetel.com/ApiWS/consultarSaldos';
const urlServicios = 'https://app.sivetel.com/ApiWS/obtenerServicios';
const urlPines= "https://app.sivetel.com/ApiWS/obtenerPines";
const reservaRecargad = "https://app.sivetel.com/ApiWS/reservarTransaccion";
const ejecutartranssacion="https://app.sivetel.com/ApiWS/procesarTransaccion";
const consultarTransaccion= "https://app.sivetel.com/Api/consultarTransaccion";

async function obtenerProductos (){

    const respuesta = await fetch(urlProducto,options)
    const datos = await respuesta.json()
    
    let productos = '';
    let planes = '<option value="seleccione el plan">seleccione el plan</option>';
    await datos.data.forEach(producto => {
        productos += `
            <tr>
                <td class="text-5 text-primary text-center align-middle">${producto.monto} <span class="text-1 text-muted d-block">Amount</span></td>
                <td class="text-3 text-center align-middle">${producto.nombre}<span class="text-1 text-muted d-block">Nombre</span></td>
                <td class="text-3 text-center align-middle">${producto.codigo}<span class="text-1 text-muted d-block">Codigo</span></td>
                <td class="text-1 text-muted align-middle">${producto.descripcion}</td>
                <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge Now</button></td>
            </tr>
        `;
        planes += `
            <option value=${producto.nombre}>${producto.nombre}</option>
        `;

    });
    document.getElementById('contenedor-planes').innerHTML = productos;
    document.getElementById('selectRecharge').innerHTML = planes;
    const termino = true;
    console.log(datos)
    console.log(datos.status)
    console.log(datos.data)
    return termino;
}
async function obtenerProductosFiltro(operadora = 0, plan = 0){
    if(operadora !=0 || plan !=0){
        const respuesta = await fetch(urlProducto,options)
        const datos = await respuesta.json()
        
        let productos = '';
        let planes = '<option value="seleccione el plan">seleccione el plan</option>';
        await datos.data.forEach(producto => {
            if(producto.nombre == plan || producto.nombre == operadora)
            {
                productos += `
                <tr>
                    <td class="text-5 text-primary text-center align-middle">${producto.monto} <span class="text-1 text-muted d-block">Amount</span></td>
                    <td class="text-3 text-center align-middle">${producto.nombre}<span class="text-1 text-muted d-block">Nombre</span></td>
                    <td class="text-3 text-center align-middle">${producto.codigo}<span class="text-1 text-muted d-block">Codigo</span></td>
                    <td class="text-1 text-muted align-middle">${producto.descripcion}</td>
                    <td class="align-middle"><button class="btn btn-sm btn-outline-primary shadow-none text-nowrap" type="submit">Recharge Now</button></td>
                </tr>
            `;
            planes += `
                <option value=${producto.nombre}>${producto.nombre}</option>
            `;
            }

    
        });
        document.getElementById('contenedor-planes').innerHTML = productos;
        document.getElementById('selectRecharge').innerHTML = planes;
        const termino = true;
        console.log(datos)
        console.log(datos.status)
        console.log(datos.data)
        return termino;
    }

}

async function consultarSaldos (){
    const respuesta = await fetch(urlSalgo,options)
    const datos = await respuesta.json()
    console.log(datos)
}

// async function consultarServicios(){
//     const respuesta = await fetch(urlServicios,options)
//     const datos = await respuesta.json()
//     console.log(datos)
// }
// async function consultarPines(){
//     const respuesta = await fetch(urlPines,options)
//     const datos = await respuesta.json()
//     console.log(datos)
// }
async function reservaRecarga(number,producto){
    const respuesta = await fetch(reservaRecargad,optionsReservaTrasaccion(number,producto))
    const datos = await respuesta.json()
    requestid = datos.data.requestid;
    return datos;
}
// async function ejecutartransaccionpostPago(requestid)
// {
//     const respuesta = await ejecutartranssacion(requestid)
//     return respuesta;
// }
// async function ejecutartranssacion(idreserva)
// {
//     const respuesta = await fetch(ejecutartranssacion,optionsprocesaTranssacion(idreserva))
//     const datos = await respuesta.json()
//     return datos
// }
// async function consultarTransaccion(requestid)
// {
//     const respuesta = await fetch(consultarTransaccion,optionsprocesaTranssacion(requestid))
//     const datos = await respuesta.json()
//     return datos
// }



const btnVerPlanes = document.getElementById('btnVerPlanes');
const btnVerPlanesp = document.getElementById('btnVerPlanesP');

btnVerPlanesp.addEventListener('click', () => {
    const plan = document.getElementById('selectRecharge').value;
    const compañia = document.getElementById('operadora').value;
    if(plan != 'seleccione el plan' || compañia != 'seleccione compañia'){
        obtenerProductosFiltro();
    }
    else {
        obtenerProductos();
    }

});
btnVerPlanes.addEventListener('click', () => {
	obtenerProductos();
});
async function ejecutarRecarga(){
    const numero = document.querySelector('#mobileNumber').value;
    const producto = 'TEL010';
    const resultado= await reservaRecarga(numero,producto);
    console.log(resultado)
    //requestid
    const response =  resultado.data.requestid;
    document.getElementById('requestid').value = response;
    //monto 
    console.log(response)

    let produc = '1000';
    document.getElementById('amount').value = produc;

    let formulario = document.getElementById('recharge-bill');
    formulario.submit();
}