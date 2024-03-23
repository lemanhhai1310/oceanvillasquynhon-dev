console.log(
  "%c" + "W E L C O M E   T O   T I M E U N I V E R S A L . V N",
  "font-family:Montserrat ; font-size:14px; background: #C11C23; border-radius: 2px; padding: 6px 12px; margin: 5px 10px 7px 0px; color: #ffffff;"
);

document.addEventListener('uikit:init', () => {
    // do something
    console.log("uikit:init");
})

const x = document.querySelector.bind(document);
const xx = document.querySelectorAll.bind(document);

const app = {
    render: function () {
        // Lazy load image
        const imageElements = xx(".lazy");
        const videoElements = xx(".lazy-video");
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting){
                    entry.target.src = entry.target.dataset.src;
                    observer.unobserve(entry.target);
                }
            });
        });
        imageElements.forEach((image) => {
            // observer.observe(image);
            UIkit.img(image, {
                loading: 'lazy',
            });
        });
        videoElements.forEach((image) => {
            observer.observe(image);
        });
    },
    start: function () {
        this.render();
    }
}

window.addEventListener("load", ()=>{
    console.log("page is fully loaded");
    app.start();
})

UIkit.mixin({
    i18n: {slideLabel: '%s/%s'}
}, 'slideshow');