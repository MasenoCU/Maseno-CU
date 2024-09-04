const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

document.addEventListener("DOMContentLoaded", function() {
    // Check URL parameters to set the initial state
    const urlParams = new URLSearchParams(window.location.search);
    const mode = urlParams.get('mode');

    if (mode === 'login') {
        container.classList.remove("sign-up-mode");
    } else {
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
    const inputs = $(step).find('input[required]');

    // Clear previous error messages and highlighting
    $(step).find('.error-message').remove();
    inputs.removeClass('input-error');
    inputs.css('border-color', ''); // Reset border color
    inputs.css('color', ''); // Reset text color

    inputs.each(function() {
        if (!this.checkValidity()) {
            // Highlight the input with an error
            $(this).addClass('input-error');
            // Highlight the input with an error by changing the border color and text color
            $(this).css('border-color', 'red');
            $(this).css('color', 'red');

            // Show a small error message
            const errorMessage = "Invalid input here.";
            $(this).after(`<span class="error-message" style="color: red; font-size: 0.9em;">${errorMessage}</span>`);

            isValid = false;
            return false; // Break the loop
        }
    });

    if (isValid && $(step).hasClass('step-4')) {
        const password = $('input[name="password"]').val();
        const confirmPassword = $('input[name="confirm_password"]').val();
        if (password !== confirmPassword) {
            
            passwordInput.addClass('input-error');
            passwordInput.after('<span class="error-message" style="color: red; font-size: 0.9em;">Passwords do not match!</span>');
            
            isValid = false;
        }
    }

    return isValid;
}
