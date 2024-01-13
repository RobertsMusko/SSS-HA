document.getElementById('filter_manufacturer_id').addEventListener('change', function() {
    let manufacturerId = this.value || '';
    window.location.href = window.location.href.split("?")[0] + "?manufacturer_id=" + manufacturerId;
})

document.querySelectorAll('.btn-delete').forEach((button) =>{
    button.addEventListener('click', function(event){
        event.preventDefault()
        alert('Are you sure you want to delete this entry?')
    })
})