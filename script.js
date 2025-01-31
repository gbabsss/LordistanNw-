
function handleLogin(event) {
    event.preventDefault();
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Simulated login validation (use a real backend for production)
    if (username === "admin" && password === "1234") {
        alert('Giriş Başarılı!');
        window.location.href = 'dashboard.html';
    } else {
        const errorMessage = document.getElementById('error-message');
        errorMessage.classList.remove('hidden');
    }
}
