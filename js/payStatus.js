const url = "https://api.peak-pay.com/get-purchase-status";

function optionsGetPurchaseStatus () {
    //const form = new FormData(document.getElementById("formulario1"));
    //const datos = { "merchant_id":form.get("merchant_id"), "password":form.get("password"),"trans_id": form.get("trans_id"), "int_trans_id":form.get("int_trans_id"),"website_id": form.get("website_id") };
    //console.log(datos); 

    const optionPurchaseStatus = {
        method: 'POST',
        mode: 'no-cors',
        body: datos
    }
    /**
     *         Headers: {
          'Content-Type': 'application/x-www-form-urlencoded'
        },
    */
    return optionPurchaseStatus;
};

async function obtenerRespuesta(){
  /*
  fetch(url, optionsGetPurchaseStatus())
  .then(response => response.text())
  .then(body => {
    console.log(body)
  })
  .catch(err => console.error(err));
  */
    /*
    fetch('https://api.peak-pay.com/get-purchase-status', optionsGetPurchaseStatus())
    .then(response => response)
    .then(response => console.log(response))
    .catch(err => console.error(err));
    */
    const request = async () => {
      const response = await fetch(url,optionsGetPurchaseStatus());
      if (response.ok) {
        const text = await response.text();
        return text;
      } else {
       return 'Error al obtener la respuesta';
      }
    }
    console.log(request());
}

/*
function getRespuestaaa(){
    const data = "merchant_id=sandbox&password=RZIuVE3NySIP9fQ&trans_id=1681960472&int_trans_id=1681960472&website_id=sandbox";

    const xhr = new XMLHttpRequest();
    xhr.withCredentials = true;
    
    xhr.addEventListener("readystatechange", function () {
      if (this.readyState === this.DONE) {
        console.log(this.responseText);
      }
    });
    
    xhr.open("POST", "https://api.peak-pay.com/get-purchase-status", true);
    xhr.send(data);
}
*/