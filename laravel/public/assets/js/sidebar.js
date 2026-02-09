function toggleSidebar() {
    const sidebar = document.getElementById("sidebar");
    sidebar.classList.toggle("closed");
}
function toggleAnswer(button) {
    const answerCard = button.nextElementSibling;
    const icon = button.querySelector(".material-icons");
    const text = button.querySelector(".btn-text");

    if (answerCard.style.display === "block") {
        answerCard.style.display = "none";
        icon.textContent = "visibility";
        text.textContent = "Show Answer";
    } else {
        answerCard.style.display = "block";
        icon.textContent = "visibility_off";
        text.textContent = "Hide Answer";
    }
}
