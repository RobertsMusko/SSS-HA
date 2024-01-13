document.getElementById('filter_manufacturer_id').addEventListener('change', function() {
    let manufacturerId = this.value || '';
    window.location.href = window.location.href.split("?")[0] + "?manufacturer_id=" + manufacturerId;
})

document.querySelectorAll('.btn-delete').forEach((button) =>{
    button.addEventListener('click', function(event){
        event.preventDefault()
        if(confirm('Are you sure?')){
            let action = this.getAttribute('href')
            let form = document.getElementById('form-delete')
            form.setAttribute('action', action)
            form.submit()
        }
    })
})


document.querySelectorAll('.btn-delete-details').forEach((button) => {
    button.addEventListener('click', function (event) {
        event.preventDefault();
        if (confirm('Are you sure?')) {
            let action = this.getAttribute('href');
            let form = document.getElementById('form-delete');
            form.setAttribute('action', action);

            // Add the following line to redirect to cars.index after deletion
            form.addEventListener('submit', function () {
                window.location.href = '{{ route('cars.index') }}'
            });

            form.submit();
        }
    });
});
