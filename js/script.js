//nav bar day/night mode start


const body = document.querySelector("body"),
      nav = document.querySelector("nav"),
      modeToggle = document.querySelector(".dark-light"),
      searchToggle = document.querySelector(".searchToggle"),
      sidebarOpen = document.querySelector(".sidebarOpen"),
      siderbarClose = document.querySelector(".siderbarClose");

      let getMode = localStorage.getItem("mode");
          if(getMode && getMode === "dark-mode"){
            body.classList.add("dark");
          }

// js code to toggle dark and light mode
      modeToggle.addEventListener("click" , () =>{
        modeToggle.classList.toggle("active");
        body.classList.toggle("dark");

        // js code to keep user selected mode even page refresh or file reopen
        if(!body.classList.contains("dark")){
            localStorage.setItem("mode" , "light-mode");
        }else{
            localStorage.setItem("mode" , "dark-mode");
        }
      });

// js code to toggle search box
        searchToggle.addEventListener("click" , () =>{
        searchToggle.classList.toggle("active");
      });
 
      
//   js code to toggle sidebar
sidebarOpen.addEventListener("click" , () =>{
    nav.classList.add("active");
});

body.addEventListener("click" , e =>{
    let clickedElm = e.target;

    if(!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")){
        nav.classList.remove("active");
    }
});

//nav bar day/night mode end


// category-2

const wrap = document.querySelector(".wrap");
const caro = document.querySelector(".caro");
const firstCardWidth = caro.querySelector(".card-2").offsetWidth;
const arrowBtns = document.querySelectorAll(".wrap i");
const caroChildrens = [...caro.children];

let isDragging = false, isAutoPlay = true, startX, startScrollLeft, timeoutId;

// Get the number of cards that can fit in the carousel at once
let cardPerView = Math.round(caro.offsetWidth / firstCardWidth);

// Insert copies of the last few cards to beginning of carousel for infinite scrolling
caroChildrens.slice(-cardPerView).reverse().forEach(card => {
    caro.insertAdjacentHTML("afterbegin", card.outerHTML);
});

// Insert copies of the first few cards to end of carousel for infinite scrolling
caroChildrens.slice(0, cardPerView).forEach(card => {
    caro.insertAdjacentHTML("beforeend", card.outerHTML);
});

// Scroll the carousel at appropriate postition to hide first few duplicate cards on Firefox
caro.classList.add("no-transition");
caro.scrollLeft = caro.offsetWidth;
caro.classList.remove("no-transition");

// Add event listeners for the arrow buttons to scroll the carousel left and right
arrowBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        caro.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
    });
});

const dragStart = (e) => {
    isDragging = true;
    caro.classList.add("dragging");
    // Records the initial cursor and scroll position of the carousel
    startX = e.pageX;
    startScrollLeft = caro.scrollLeft;
}

const dragging = (e) => {
    if(!isDragging) return; // if isDragging is false return from here
    // Updates the scroll position of the carousel based on the cursor movement
    caro.scrollLeft = startScrollLeft - (e.pageX - startX);
}

const dragStop = () => {
    isDragging = false;
    caro.classList.remove("dragging");
}

const infiniteScroll = () => {
    // If the carousel is at the beginning, scroll to the end
    if(caro.scrollLeft === 0) {
        caro.classList.add("no-transition");
        caro.scrollLeft = caro.scrollWidth - (2 * caro.offsetWidth);
        caro.classList.remove("no-transition");
    }
    // If the carousel is at the end, scroll to the beginning
    else if(Math.ceil(caro.scrollLeft) === caro.scrollWidth - caro.offsetWidth) {
        caro.classList.add("no-transition");
        caro.scrollLeft = caro.offsetWidth;
        caro.classList.remove("no-transition");
    }

    // Clear existing timeout & start autoplay if mouse is not hovering over carousel
    clearTimeout(timeoutId);
    if(!wrap.matches(":hover")) autoPlay();
}

const autoPlay = () => {
    if(window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
    // Autoplay the carousel after every 2500 ms
    timeoutId = setTimeout(() => caro.scrollLeft += firstCardWidth, 2500);
}
autoPlay();

caro.addEventListener("mousedown", dragStart);
caro.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
caro.addEventListener("scroll", infiniteScroll);
wrap.addEventListener("mouseenter", () => clearTimeout(timeoutId));
wrap.addEventListener("mouseleave", autoPlay);
// category-end

// Back to Top start

window.addEventListener('scroll', () => {
    if (window.scrollY >= 200) {
      document.querySelector('.rnd').style.opacity = '1';
    } else {
      document.querySelector('.rnd').style.opacity = '0';
    }
  });

// Back to Top end