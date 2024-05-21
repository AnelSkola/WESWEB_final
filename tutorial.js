const header = document.querySelector("header");

window.addEventListener("scroll", function() {
header.classList.toggle("sticky", this.window.scrollY > 60)    
});



const sr = ScrollReveal({ 
    origin: 'top',
    distance: '85px', 
    duration: 2000, 
    reset: true
})


sr.reveal ('.steg', {delay: 300});
sr.reveal ('.steg1', {delay: 200}); 
sr.reveal ('.step1', {delay: 300});
sr.reveal ('.step', {delay: 300});

sr.reveal ('.image', {});
sr.reveal ('.image', {delay: 300});

sr.reveal ('.image', {});
sr.reveal ('.row-btn, .shop-content', {delay: 300});
sr.reveal ('.review-content, .shop-content', {delay: 300});
sr.reveal ('.details', {delay: 200});

 
   function saveCheckboxState() {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            localStorage.setItem(checkbox.id, checkbox.checked);
            updateProgress();
        });
        
        var savedState = localStorage.getItem(checkbox.id);
        if (savedState) {
            checkbox.checked = JSON.parse(savedState);
            updateProgress();
        }
    });
}


function updateProgress() {
    var completedCount = document.querySelectorAll('input[type="checkbox"]:checked').length;
    document.getElementById('header').innerHTML = '<h1>Tutorial Progress</h1><p>Steps Completed: ' + completedCount + '</p>';
}


saveCheckboxState();