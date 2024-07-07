const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

document.addEventListener("DOMContentLoaded", function() {
    document.querySelector('.signin-signup').scrollTop = 0;
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

        // Slide out current step to the left
        currentStep.addClass('slide-out-left');
        setTimeout(function() {
            currentStep.hide().removeClass('slide-out-left');
        }, 500); 

        // Slide in next step from the right
        nextStep.show();
        nextStep.addClass('slide-in-right');
        setTimeout(function() {
            nextStep.removeClass('slide-in-right');
        }, 500); 
    });

    $('.back-btn').on('click', function() {
        var currentStep = $(this).closest('.step');
        var prevStep = currentStep.prev('.step');

        // Slide out current step to the right
        currentStep.addClass('slide-out-right');
        setTimeout(function() {
            currentStep.hide().removeClass('slide-out-right');
        }, 500); 

        // Slide in previous step from the left
        prevStep.show();
        prevStep.addClass('slide-in-left');
        setTimeout(function() {
            prevStep.removeClass('slide-in-left');
        }, 500); 
    });

    $('.ministry-btn').on('click', function() {
        // Remove 'active' class from all ministry buttons and add to the clicked button
        $('.ministry-btn').removeClass('active');
        $(this).addClass('active');

        // Set the hidden input field for ministry
        $('#ministry').val($(this).data('value'));
    });

    $('.eve-team-btn').on('click', function() {
        // Remove 'active' class from all eve team buttons and add to the clicked button
        $('.eve-team-btn').removeClass('active');
        $(this).addClass('active');

        // Set the hidden input field for eve team
        $('#eve_team').val($(this).data('value'));
    });

    $('.yos .eve-team-btn').on('click', function() {
        // Remove 'active' class from all year of study buttons and add to the clicked button
        $('.yos .eve-team-btn').removeClass('active');
        $(this).addClass('active');

        // Set the hidden input field for year of study
        $('#year_of_study').val($(this).data('value'));
    });
});
