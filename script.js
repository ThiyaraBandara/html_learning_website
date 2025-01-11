// script.js

function checkAnswer(element, correctAnswer, selectedOption) {
    // Clear previous results
    const options = element.parentElement.children;
    for (let option of options) {
        option.classList.remove('correct', 'wrong');
    }

    // Display result message
    const resultMessage = element.parentElement.nextElementSibling;

    // Check if the selected option is correct
    if (selectedOption === correctAnswer) {
        element.classList.add('correct');
        resultMessage.textContent = "Correct Answer!";
        resultMessage.style.color = "green";
    } else {
        element.classList.add('wrong');
        resultMessage.textContent = "Wrong Answer! Correct answer is: " + correctAnswer;
        resultMessage.style.color = "red";
    }
    resultMessage.style.display = "block"; // Show result message
}