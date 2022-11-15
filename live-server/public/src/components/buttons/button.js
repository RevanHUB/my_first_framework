// this is a quick example of how to combine frontend and backend in this framework

document.getElementById("theme").addEventListener('click', () => {
    if (document.getElementById("theme").value === 'light') {
        location.assign('index.php?routes=home&theme=dark');
        console.log('changing to dark');
    }
    if (document.getElementById("theme").value === 'dark') {
        location.assign('index.php?routes=home&theme=light');
        console.log('changing to light');
    }
} )