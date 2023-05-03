
/******************************CONSTANTES**********************************/
const cuenta = 'cuenta/4421001010';
const usuario = 'usuario/jcervantes.test';
const password = 'password/ws123456';
const btnVerPlanes = document.getElementById('btnVerPlanes');
const btnVerPlanesp = document.getElementById('btnVerPlanesP');
let requestid;
const urlProducto = 'https://app.sivetel.com/ApiWS/obtenerProductos';
const urlSalgo = 'https://app.sivetel.com/ApiWS/consultarSaldos';
const urlServicios = 'https://app.sivetel.com/ApiWS/obtenerServicios';
const urlPines= "https://app.sivetel.com/ApiWS/obtenerPines";
const reservaRecargad = "https://app.sivetel.com/ApiWS/reservarTransaccion";
const ejecutartranssaciond="https://app.sivetel.com/ApiWS/procesarTransaccion";
const consultarTransaccion= "https://app.sivetel.com/Api/consultarTransaccion";

const options = {
    method: 'POST',
    body: new URLSearchParams({cuenta: '4421001010', usuario: 'jcervantes.test', password: 'ws123456'})
  };

/**FUNCIONES*********/
function optionsReservaTrasaccion (numero, producto) {//**Funcion que crea las opciones para consumir el servicio de reservar una transacción en la api de recargas*/
    const optionNeReserva ={
        method: 'POST',
        body: new URLSearchParams({cuenta: '4421001010', usuario: 'jcervantes.test', password: 'ws123456',numero: numero, producto: producto})
    }
    return optionNeReserva;
};
function optionsprocesaTranssacion (requestid) {//**funciones que crea las opciones para procesar la transacción de la api de recargas hay que enviarle el id de la reserva para que pueda funcionar */
    const optionNeReserva ={
        method: 'POST',
        body: new URLSearchParams({cuenta: '4421001010', usuario: 'jcervantes.test', password: 'ws123456',requestid: requestid})
    }
    return optionNeReserva;
};

btnVerPlanesp.addEventListener('click', (event) => {/*Evento click para poder mostrar los datos de la api recarga con respecto a los planes que hay por compañia*/
    const compañia = document.getElementById('operadora').value;
    if(compañia != 'seleccione compañia'){
        obtenerProductosFiltro(compañia);
        event.preventDefault();
    }
    else {
        event.preventDefault();
        obtenerProductos();
    }

});
btnVerPlanes.addEventListener('click', () => {/*Se obtienen los productos (planes de recargas una con el boton que esta dentro del *Mostrar planes*)*/
	obtenerProductos();
});

async function obtenerProductos (){/*función que busca obtener los los productos de la api de recargas, ya consumida esta función por un evento click*/ 

    const respuesta = await fetch(urlProducto,options)/*se consume la api*/
    const datos = await respuesta.json()// se obtiene los productos
    /**se procesan los productos */
    let productos = '';
    await datos.data.forEach(producto => {
        productos += `
            <tr onclick="EjecutarDatos('${producto.codigo}','${producto.monto}')">
                <td class="text-5 text-primary text-center align-middle">${producto.monto} <span class="text-1 text-muted d-block">Amount</span></td>
                <td class="text-3 text-center align-middle">${producto.nombre}<span class="text-1 text-muted d-block">Nombre</span></td>
                <td class="text-3 text-center align-middle">${producto.codigo}<span class="text-1 text-muted d-block">Codigo</span></td>
                <td class="text-1 text-muted align-middle">${producto.descripcion}</td>
            </tr>
        `;

    });
    document.getElementById('contenedor-planes').innerHTML = productos;
    const termino = true;
    // console.log(datos)
    // console.log(datos.status)
    // console.log(datos.data)
    return termino;
}
async function obtenerProductosFiltro(operadora){
    if(operadora !=0 || plan !=0){
        const respuesta = await fetch(urlProducto,options)
        const datos = await respuesta.json()
        
        let productos = '';
        await datos.data.forEach(producto => {
            if(producto.nombre == operadora)
            {
                productos += `
                <tr onclick="EjecutarDatos('${producto.codigo}','${producto.monto}')">
                        <td class="text-5 text-primary text-center align-middle">${producto.monto} <span class="text-1 text-muted d-block">Amount</span></td>
                        <td class="text-3 text-center align-middl">${producto.nombre}<span class="text-1 text-muted d-block">Nombre</span></td>
                        <td class="text-3 text-center align-middle">${producto.codigo}<span class="text-1 text-muted d-block"></span></td>
                        <td class="text-1 text-muted align-middle">${producto.descripcion}</td>
                </tr>
            `;
            }

    
        });
        document.getElementById('contenedor-planes').innerHTML = productos;
        const termino = true;
        console.log(datos)
        console.log(datos.status)
        console.log(datos.data)
        return termino;
    }

}

async function consultarSaldos (){/*con esta función se consumen una api para obtener los saldos*/ 
    const respuesta = await fetch(urlSalgo,options)
    const datos = await respuesta.json()
    console.log(datos)
}

async function reservaRecarga(number,producto){//*importante funcion, el primer paso de la cadena de procesos*/
    const respuesta = await fetch(reservaRecargad,optionsReservaTrasaccion(number,producto))
    const datos = await respuesta.json()
    requestid = datos.data.requestid;
    return datos;
}

async function ejecutartranssacion(idreserva)
{ /*funcione para ejecutar la transacción*/
    const respuesta = await fetch(ejecutartranssaciond,optionsprocesaTranssacion(idreserva))
    const datos = await respuesta.json()
    return datos;
}

// function EjecutarDatos(codigo, monto){/*ejecutar monto de datos*/
//     codCharge  = document.getElementById('codeRecharge');
//     codMonto = document.getElementById('amount');
    
//     codMonto.value = monto;
//     codCharge.value = codigo;
//     console.log(monto);
//     console.log(codigo);
//     document.querySelector('#view-plans').setAttribute('style','display: none;');
//     document.querySelector('.modal-backdrop').classList.remove('modal-backdrop','fade','show');


    
// }
async function ejecutarRecarga(monto = 0 , codigo = 0){
    console.log('Moneto:',monto);
    console.log('Codigo:',codigo);
    const resultado= await reservaRecarga(numero,codigo);
    console.log(resultado)
    //requestid
    requestidd = resultado.data.requestid;
    console.log(requestidd)
}