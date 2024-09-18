const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");
const admissionNumberInput = document.querySelector('#step1-admission-number');
const loginError = document.getElementById('loginError');


// // Listen for changes to the admission number field
// admissionNumberInput.addEventListener('blur', function() {
//     const admissionNumber = admissionNumberInput.value.trim();

//     if (admissionNumber) {
//         checkAdmissionNumber(admissionNumber);
//     }
// });

// function checkAdmissionNumber(admissionNumber) {
//     $.ajax({
//         url: '../../../mucuwebsitegithub/backend/endpoints/check_admission_number.php',  // Adjust this path based on your file structure
//         type: 'POST',
//         data: { admission_number: admissionNumber },
//         dataType: 'json',
//         success: function(response) {
//             console.log("AJAX Success:", response)
//             if (response.exists) {
//                 alert('The admission number already exists. Please use a different one.');
//                 admissionNumberInput.value = '';
//                 $('.step-1 .next-btn').prop('disabled', true);
//             }else{
//                 $('.step-1 .next-btn').prop('disabled', false);
//             }
//         },
//         error: function(xhr, status, error) {
//             console.error("AJAX Error:", status, error);
//             alert('An error occurred while checking the admission number.');
//         }
//     });
// }

document.addEventListener("DOMContentLoaded", function() {
    const urlParams = new URLSearchParams(window.location.search);
    const mode = urlParams.get('mode');
    const schoolIdInput = document.getElementById('schoolId');

    schoolIdInput.addEventListener('change', function(event) {
        const file = event.target.files[0];
        const maxSize = 2 * 1024 * 1024;
        const allowedTypes = ['image/jpeg', 'image/png'];

        if (file) {
            if (file.size > maxSize) {
                alert("The file size exceeds the allowed limit of 2MB.");
                schoolIdInput.value = '';
                return;
            }

            if (!allowedTypes.includes(file.type)) {
                alert("Error: Only JPEG and PNG files are allowed.");
                schoolIdInput.value = '';
                return;
            }
        }
    });

    if (mode === 'login') {
        container.classList.remove("sign-up-mode");
    } else if (mode === 'signup') {
        container.classList.add("sign-up-mode");
    }
});

sign_up_btn.addEventListener("click", () => {
    container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
    container.classList.remove("sign-up-mode");
});

// to reveal steps
$(document).ready(function() {
    $('.next-btn').on('click', function() {
        var currentStep = $(this).closest('.step');
        var nextStep = currentStep.next('.step');

        let admissionNumber = $('#step1-admission-number').val();
        console.log("Admission Number before submission: " + admissionNumber);

        if (validateStep(currentStep)) {
            // Sliding out current step to the left
            currentStep.addClass('slide-out-left');
            setTimeout(function() {
                currentStep.hide().removeClass('slide-out-left');
            }, 500); 

            // Sliding in next step from the right
            nextStep.show();
            nextStep.addClass('slide-in-right');
            setTimeout(function() {
                nextStep.removeClass('slide-in-right');
            }, 500); 
        }
    });

    $('.back-btn').on('click', function() {
        var currentStep = $(this).closest('.step');
        var prevStep = currentStep.prev('.step');

        // Slide out current step to the right
        currentStep.addClass('slide-out-right');
        setTimeout(function() {
            currentStep.hide().removeClass('slide-out-right');
        }, 500); 

        // Sliding in previous step from the left
        prevStep.show();
        prevStep.addClass('slide-in-left');
        setTimeout(function() {
            prevStep.removeClass('slide-in-left');
        }, 500); 
    });

    $('.ministry-btn').on('click', function() {
        // Toggle 'active' class on clicked button
        $(this).toggleClass('active');

        // Update the hidden input field for ministry
        updateMinistryField();
    });

    $('.eve-team-btn').on('click', function() {
        // Removes 'active' class from all eve team buttons and add to the clicked button
        $('.eve-team-btn').removeClass('active');
        $(this).addClass('active');

        // Set the hidden input field for eve team
        $('#eve_team').val($(this).data('value'));
    });

    $('.yos .eve-team-btn').on('click', function() {
        // Removes 'active' class from all year of study buttons and add to the clicked button
        $('.yos .eve-team-btn').removeClass('active');
        $(this).addClass('active');

        // Set the hidden input field for year of study
        $('#year_of_study').val($(this).data('value'));
    });

    function updateMinistryField() {
        const selectedMinistries = $('.ministry-btn.active').map(function() {
            return $(this).data('value');
        }).get().join(', ');

        $('#ministry').val(selectedMinistries);
    }
});

function validateStep(step) {
    let isValid = true;

    // Patterns for validation
    const namePattern = /^[A-Za-z]+(?:\s[A-Za-z]+){1,}$/;
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const coursePattern = /^[A-Za-z\s.,]+$/;
    const admissionNumberPattern = /^[A-Za-z0-9]+\/[A-Za-z0-9]+\/[A-Za-z0-9]+$/;
    const phonePattern = /^\d{10}$/;

    // Get the input values
    const username = $('input[name="username"]').val();
    const email = $('input[name="email"]').val();
    const course = $('input[name="course"]').val();
    let admissionNumber = $('#step1-admission-number').val();
    console.log("Admission Number: " + admissionNumber);
    const phoneNumber = $('input[name="phone_number"]').val();


    // Print them out in the console
    console.log("Username: " + username);
    console.log("Email: " + email);
    console.log("Course: " + course);
    console.log("Admission Number: " + admissionNumber);
    console.log("Phone Number: " + phoneNumber);

    // Validation for Name
    if (!namePattern.test(username)) {
        alert('Please enter your valid full names (letters and spaces only).');
        isValid = false;
        return isValid;
    }

    // Validation for Email
    if (!emailPattern.test(email)) {
        alert('Please enter a valid email address.');
        isValid = false;
        return isValid;
    }

    // Validation for Course
    if (!coursePattern.test(course)) {
        alert('Please enter a valid course (letters, spaces, commas, and periods only).');
        isValid = false;
        return isValid;
    }

    // Validation for Admission Number
    if (!admissionNumberPattern.test(admissionNumber)) {
        console.log(admissionNumber)
        alert('Please enter a valid admission number (letters, numbers, and slashes only).');
        isValid = false;
        return isValid;
    }

    // Validation for Phone Number
    if (!phonePattern.test(phoneNumber)) {
        alert('Please enter a valid phone number (10 digits only).');
        isValid = false;
        return isValid;
    }

    return isValid;
}


if (loginError){
    setTimeout(function() {
        loginError.classList.add('fade-out');
        setTimeout(function(){
            loginError.style.display = 'none';
        }, 1000);
    }, 3000);
}
