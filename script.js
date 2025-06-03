// Animasi Tab Project Showcase
document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.tab');
    const contents = document.querySelectorAll('.tab-content');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            // 
            tabs.forEach(t => t.classList.remove('active'));
            contents.forEach(c => c.classList.remove('active'));

            // 
            tab.classList.add('active');
            document.getElementById(`${tab.dataset.tab}-content`).classList.add('active');
        });
    });
});

// splash screen
document.addEventListener('DOMContentLoaded', () => {
    setTimeout(() => {
        document.body.style.overflow = 'visible';
    }, 5000);
});
