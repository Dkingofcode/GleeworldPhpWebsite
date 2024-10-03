const phoneNumber = '08033875224';
let currentIndex = null;

function copyPhoneNumber() {
    navigator.clipboard.writeText(phoneNumber).then(() => {
        alert('Phone number copied to clipboard');
        console.log("Phone number copied");
    }).catch((err) => {
        console.error('Failed to copy text: ', err);
    });
}

function handleChange(index) {
    currentIndex = index;
    document.querySelector('.nav-links').classList.remove('open'); // Close the menu
}

function toggleMenu() {
    document.querySelector('.nav-links').classList.toggle('open');
    console.log("Menu toggled");
}
