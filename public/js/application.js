// public/js/application.js
document.addEventListener('DOMContentLoaded', function () {
    function showStartButton(type) {
        const startButtonRecognition = document.getElementById('start-button-recognition');
        const startButtonReaccreditation = document.getElementById('start-button-reaccreditation');
        const recognitionReq = document.getElementById('recognition-requirements');
        const reaccreditationReq = document.getElementById('reaccreditation-requirements');

        if (type === 'recognition') {
            recognitionReq.classList.remove('hidden');
            reaccreditationReq.classList.add('hidden');
            startButtonRecognition.classList.remove('hidden');
            startButtonReaccreditation.classList.add('hidden');
        } else if (type === 'reaccreditation') {
            reaccreditationReq.classList.remove('hidden');
            recognitionReq.classList.add('hidden');
            startButtonReaccreditation.classList.remove('hidden');
            startButtonRecognition.classList.add('hidden');
        }

        const section = document.getElementById('requirements-section');
        section.scrollIntoView({ behavior: 'smooth' });

        startButtonRecognition.onclick = startButtonReaccreditation.onclick = function () {
            const modal = document.getElementById('privacy-modal');
            modal.classList.remove('hidden');

            let redirectUrl = "#";
            if (type === 'recognition') {
                redirectUrl = applicationRecognitionUrl; 
            } else if (type === 'reaccreditation') {
                redirectUrl = applicationReaccreditationUrl; 
            }

            const proceedButton = document.getElementById('proceed-button');
            proceedButton.onclick = function () {
                window.location.href = redirectUrl;
            };
        };
    }

    // Expose the function to the global scope
    window.showStartButton = showStartButton;
});
