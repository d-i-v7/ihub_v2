$(document).ready(function() {
    // Form submission and validation
    $(document).on('submit','#registrationForm', function(e) {
        e.preventDefault();
         // Here you can handle actual form submission logic (e.g., sending data to a server)
         let formData = new FormData(this);  
         formData.append('action','MentorReg');
         formData.append('MentorReg','ihub#44');
        // Show loading animation on the submit button
        $(".submit-btn").html("<img width='25px' src='load.gif' alt='searching...'>");

        setTimeout(() => {
            // Get input values
            const fullName = document.getElementById('fullName').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const email = document.getElementById('email').value.trim();
            const address = document.getElementById('address').value.trim();

            // Validate inputs
            let isValid = true;

            // Validate full name
            if (fullName === '') {
                document.getElementById('fullNameError').textContent = 'Magaca buuxa waa lama huraan';
                document.getElementById('fullName').style.borderColor = 'red';
                isValid = false;
            } else {
                document.getElementById('fullNameError').textContent = '';
                document.getElementById('fullName').style.borderColor = '';
            }

            // Validate phone number (with country code)
            const phoneRegex = /^\+?\d{9,14}$/; // 11 to 15 digits including country code
            if (!phoneRegex.test(phone)) {
                document.getElementById('phoneError').textContent = 'Fadlan geli lambarka saxda ah (e.g., +252612345678)';
                document.getElementById('phone').style.borderColor = 'red';
                isValid = false;
            } else {
                document.getElementById('phoneError').textContent = '';
                document.getElementById('phone').style.borderColor = '';
            }

            // Validate email
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                document.getElementById('emailError').textContent = 'Fadlan geli email sax ah';
                document.getElementById('email').style.borderColor = 'red';
                isValid = false;
            } else {
                document.getElementById('emailError').textContent = '';
                document.getElementById('email').style.borderColor = '';
            }

            // Validate address
            if (address === '') {
                document.getElementById('addressError').textContent = 'Cinwaanku waa lama huraan';
                document.getElementById('address').style.borderColor = 'red';
                isValid = false;
            } else {
                document.getElementById('addressError').textContent = '';
                document.getElementById('address').style.borderColor = '';
            }

            // Submit the form if valid
            if (isValid) {
                $(".submit-btn").html("<img width='25px' src='load.gif' alt='Submitting...'>")
                $.ajax({
                    type: 'POST',
                    url: 'api',
                    data: formData,
                    processData:false,
                    contentType:false,
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Guul!',
                                text: response.message,
                            });
                            document.getElementById('registrationForm').reset(); // Reset form after submission
                        } else if(response.status === 'error') {
                            Swal.fire({
                                icon: 'error',
                                title: 'Qalad!',
                                text: response.message,
                            });
                        }
                        $(".submit-btn").html("Gudbi"); // Reset button text after submission
                    }
                });
            } else {
                $(".submit-btn").html("Gudbi"); // Reset button text if validation fails
            }
        }, 100); // Simulate form processing delay
    });

    // Automatically add country code to phone number based on user's location
    window.onload = function() {
        fetch('https://ipapi.co/json/')
            .then(response => response.json())
            .then(data => {
                const countryCode = data.country_calling_code || '+252'; // Default to Somalia if location fails
                const phoneInput = document.getElementById('phone');

                // Only add the country code if it's not already included
                if (!phoneInput.value.startsWith('+')) {
                    phoneInput.value = countryCode + '';
                }
            })
            .catch(error => {
                console.log('Could not fetch location, defaulting to Somalia code:', error);
                document.getElementById('phone').value = '+252'; // Default to Somalia if fetch fails
            });
    };
}); 