const url = "https://api.peak-pay.com/get-purchase-status";

function optionsGetPurchaseStatus () {
    const form = new FormData(document.getElementById("formulario1"));

    const datos = [ form.get("merchant_id"), form.get("password"), form.get("trans_id"), form.get("int_trans_id"), form.get("website_id") ];
    //console.log(datos); 

    const optionPurchaseStatus = {
        method: 'POST',
        mode: 'no-cors',
        body: form
    }
    return optionPurchaseStatus;
};

async function obtenerRespuesta(){
    const response = await fetch(url ,optionsGetPurchaseStatus());
    console.log(response); 
    const datos = await response.text();
    console.log(datos); 

}