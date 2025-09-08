let currentStep = 1;

function showStep(step) {
    document.querySelectorAll('.step-content').forEach((element, index) => {
        element.style.display = (index + 1 === step) ? 'block' : 'none';
    });

    document.querySelectorAll('.step').forEach((element, index) => {
        element.classList.toggle('active', index + 1 === step);
    });

    currentStep = step;
}

function nextStep() {
    if (currentStep < 3) {
        showStep(currentStep + 1);
    }
}

function prevStep() {
    if (currentStep > 1) {
        showStep(currentStep - 1);
    }
}

document.addEventListener('DOMContentLoaded', () => {
    showStep(currentStep);
});
