// Form Validation
document.getElementById("packageForm").addEventListener("submit", function(event) {
    // Prevent form submission
    event.preventDefault();

    // Get values from the form fields
    const packageName = document.querySelector('input[name="pname"]').value.trim();
    const packageType = document.querySelector('select[name="ptype"]').value;
    const description = document.querySelector('textarea[name="description"]').value.trim();
    const maxCoverage = parseFloat(document.querySelector('input[name="mcoverage"]').value);
    const paymentInterval = parseInt(document.querySelector('input[name="pay_interval"]').value);
    const premiumAmount = parseFloat(document.querySelector('input[name="premium_amount"]').value);
    const regulation = document.querySelector('textarea[name="regulation"]').value.trim();
    const basicAmount = parseFloat(document.querySelector('input[name="basic_amount"]').value);

    // Validation checks
    if (!packageName) {
        alert("Package Name is required.");
        return;
    }
    if (!packageType) {
        alert("Please select a Package Type.");
        return;
    }
    if (!description) {
        alert("Package Description is required.");
        return;
    }
    if (isNaN(maxCoverage) || maxCoverage <= 0) {
        alert("Maximum Coverage Limit must be a positive number.");
        return;
    }
    if (isNaN(paymentInterval) || paymentInterval <= 0) {
        alert("Payment Interval must be a positive integer.");
        return;
    }
    if (isNaN(premiumAmount) || premiumAmount < 0) {
        alert("Premium Amount must be a positive number.");
        return;
    }
    if (!regulation) {
        alert("Regulation is required.");
        return;
    }
    if (isNaN(basicAmount) || basicAmount < 0) {
        alert("Basic Amount must be a positive number.");
        return;
    }

    // If all checks pass, submit the form
    this.submit(); // this refers to the form element
});
