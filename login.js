function submitForm() {
    // Get form values
    var name = document.getElementById("name").value;
    var address = document.getElementById("address").value;
    var phone_number = document.getElementById("phone_number").value;
    var num_ambulances = document.getElementById("num_ambulances").value;

    // Display submitted data (you can replace this with sending data to the server)
    alert("Thank you for registering!\n\nName: " + name );
}
