document.getElementById('filter_manufacturer_id').addEventListener('change', function() {
    let manufacturerId = this.value || '';
    window.location.href = window.location.href.split("?")[0] + "?manufacturer_id=" + manufacturerId;
})