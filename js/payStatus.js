const ejecutartranssaciond="https://api.peak-pay.com/get-purchase-status-test";

function optionsGetPurchaseStatus (trans_id) {
    const optionPurchaseStatus ={
        method: 'POST',
        body: new URLSearchParams({merchant_id: 'sandbox-3d', password: 'B8yE3h18kg1419u', trans_id: trans_id,int_trans_id: trans_id})
    }
    return optionPurchaseStatus;
};



