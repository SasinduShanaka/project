function validateForm() {
    const name = document.getElementById('name').value;
    const description = document.getElementById('description').value;
    const effectiveDate = document.getElementById('effective_date').value;
    const expirationDate = document.getElementById('expiration_date').value;

    if (!name || !description || !effectiveDate || !expirationDate) {
        alert("All fields are required!");
        return false; 
    }

    if ( new Date(effectiveDate) >= new Date(expirationDate)) {
        alert("Expiration date must be later than the effective date.");
        return false;
    }

    return true; 
}