const observerOptions = {
    root: null,
    threshold: 0,
    rootMargin: '0px 100px -50px 0px'
};

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.replace('right' , 'in-view');
            entry.target.classList.replace('right-text' , 'in-view');
            // observer.unobserve(entry.target);
        }else{
            entry.target.classList.replace('in-view' , 'right');
            entry.target.classList.replace('in-view' , 'right-text');
        }

    });
}, observerOptions);

window.addEventListener('DOMContentLoaded', (event) => {

    const sections = Array.from(document.querySelectorAll('.wf-right'));
    const sections_left = Array.from(document.querySelectorAll('.wf-left'));

    for (let section of sections) {
        observer.observe(section);
    }
    for (let section of sections_left) {
        observer.observe(section);
    }
});