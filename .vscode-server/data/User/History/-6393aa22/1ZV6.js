document.getElementById('filter_manufacturer_id').addEventListener('change', function() {
    let manufacturerId = this.value || this.options(this.selectedIndex).value;
})