function validateForm() {
    
    // Get form inputs
    var admin_id = document.getElementById('admin_id').value;

    var admin_name = document.getElementById('admin_name').value;

    var admin_username = document.getElementById('admin_username').value;

    // Check if Admin ID contains only numbers
    if (!/^\d+$/.test(admin_id)) {
        
        alert("Invalid Admin ID. Only numbers are allowed.");
        return false; // Prevent form submission if invalid
    }

    // Check if Admin Name contains only alphabetic characters
    if (!/^[a-zA-Z]+$/.test(admin_name)) {
        alert("Invalid Admin Name. Only letters are allowed.");
        return false; // Prevent form submission if invalid
    }

    // Check if Admin Username contains spaces
    if (/\s/.test(admin_username)) {
        alert("Invalid Username. No spaces allowed.");
        return false; // Prevent form submission if invalid
    }

    // If all validations pass, allow form submission
    return true;
    }