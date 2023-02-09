window.addEventListener("load", function () {
    // const checkbox = document.getElementById('boletin_info');
    // if(checkbox){

    //     checkbox.addEventListener('change', (event) => {
    //         if (event.currentTarget.checked) {
    //             document.getElementById('boletin_info').value = 1;
    //         } else {
    //             document.getElementById('boletin_info').value = 0;
    //         }
    //     })
    // }

    // Temporizador de los mensajes alerts
    const alert = document.getElementById('alert');
    if(alert){
        alert.style.display = "block";
        setTimeout(function(){ 
            alert.style.display = "none"
        }, 4000);
    }

    // Validación del campo Roles
    $('input[type="checkbox"]').on('change', function() {
        $('input[name="' + this.name + '"]').not(this).prop('checked', false);
    });
    
    
});
