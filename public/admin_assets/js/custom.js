//change payment status
function update_payment_status(id){
    var check = confirm('Are you sure?');
    var payment_status = jQuery('#payment_status').val();
    //alert(payment_status);
    if(check==true){
        window.location.href='/admin/update-payment-status/'+payment_status+'/'+id;
    }
}

//change order status
function update_order_status(id){
    var check = confirm('Are you sure?');
    var order_status = jQuery('#order_status').val();
    //alert(payment_status);
    if(check==true){
        window.location.href='/admin/update-order-status/'+order_status+'/'+id;
    }
}
