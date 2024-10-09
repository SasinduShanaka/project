// Form Validation
function validateForm() {
    
    const pname = document.forms["packageForm"]["pname"].value;
    const ptype = document.forms["packageForm"]["ptype"].value;
    const description = document.forms["packageForm"]["description"].value;
    const mcoverage = document.forms["packageForm"]["mcoverage"].value;
    const payInterval = document.forms["packageForm"]["pay_interval"].value;
    const premiumAmount = document.forms["packageForm"]["premium_amount"].value;
    const regulation = document.forms["packageForm"]["regulation"].value;
    const basicAmount = document.forms["packageForm"]["basic_amount"].value;

    if (!pname || !ptype || !description || !mcoverage || !payInterval || !premiumAmount || !regulation || !basicAmount) {
        alert("All fields must be filled out.");
        return false;
    }

    if (mcoverage < 0) {
        alert("Maximum Coverage cannot be negative.");
        return false;
    }

    if (payInterval < 0) {
        alert("Payment Interval cannot be negative.");
        return false;
    }

    if (premiumAmount < 0) {
        alert("Premium Amount cannot be negative.");
        return false;
    }
    
    if (basicAmount < 0) {
        alert("Basic Amount cannot be negative.");
        return false;
    }

    if (parseFloat(basicAmount) >= parseFloat(premiumAmount)) {
        alert("Basic amount must be less than the premium amount.");
        return false;
    }

    return true;
}

document.getElementById("packageForm").addEventListener("input", function() {

    const allFieldsFilled = Array.from(document.forms["packageForm"].elements).every(input => input.value.trim() !== "");

    document.getElementById("btn").disabled = !allFieldsFilled;
});
