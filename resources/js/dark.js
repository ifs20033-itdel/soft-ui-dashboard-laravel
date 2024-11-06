// Mendapatkan elemen button untuk toggle dark mode
const toggleModeButton = document.getElementById('toggle-mode');

// Mendapatkan elemen body
const body = document.body;

// Mendengarkan event klik pada button
toggleModeButton.addEventListener('click', () => {
    // Toggle class 'dark-mode' pada body
    body.classList.toggle('dark-mode');
});
