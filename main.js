var tl = new TimelineMax({ repeat: 0 });

TweenMax.set(".shopping_cart", { xPercent: 50, ease: Power1.easeOut });

tl.to(".shopping_cart", 2, { xPercent: 0 });

// prettier-ignore

window.onload = () => {
    const tab_switchers = document.querySelectorAll('[data-switcher]');
  
    for (let i = 0; i < tab_switchers.length; i++) {
      const tab_switcher = tab_switchers[i];
      const page_id = tab_switcher.dataset.tab;
  
      tab_switcher.addEventListener('click', () => {
        document
          .querySelector('.tabs .tab.is-active')
          .classList.remove('is-active');
        tab_switcher.parentNode.classList.add('is-active');
  
        SwitchPage(page_id);
      });
    }
  };
// prettier-ignore
function SwitchPage(page_id) {
      console.log(page_id);
    const current_page = document.querySelector('.pages .page.is-active');
    current_page.classList.remove('is-active');
  
    const next_page = document.querySelector(
      `.pages .page[data-page="${page_id}"]`
    );
    next_page.classList.add('is-active');
  }
