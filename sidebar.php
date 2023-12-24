<div class="MobileNav" data-mobile-nav>
  <div class="MobileNav-overlay" data-mobile-nav-overlay></div>
  <div class="MobileNav-inner">
    <div class="MobileNav-trigger" data-mobile-nav-trigger>
      <div class="MobileNav-trigger-inner"></div>
    </div>
    <ul class="MobileNav-nav" data-mobile-nav-list>
      <li class="MobileNav-item" data-mobile-nav-item="1">
        <div class="MobileNav-item-title">
          <a href="#">About</a>
        </div>
      </li>
      <li class="MobileNav-item" data-mobile-nav-item="2">
        <div class="MobileNav-item-title">
          <a href="#">Products</a>
        </div>
      </li>
      <li class="MobileNav-item" data-mobile-nav-item="3">
        <div class="MobileNav-item-title">
          <a href="#">Services</a>
        </div>
      </li>
      <li class="MobileNav-item" data-mobile-nav-item="4">
        <div class="MobileNav-item-title">
          <a href="#">Work</a>
        </div>
      </li>
      <li class="MobileNav-item" data-mobile-nav-item="5">
        <div class="MobileNav-item-title">
          <a href="#">Contact</a>
        </div>
      </li>
    </ul>
  </div>
</div>

<header class="Header" data-header>
  <div class="Header-inner" data-header-nav>
    <div class="logo">
      <img src="https://i.imgur.com/F0k8l7N.png" alt="">
    </div>
    <nav class="Header-nav" data-nav>
      <div class="Header-nav-item" data-nav-item="1">
        <a href="#">About</a>
      </div>
      <div class="Header-nav-item" data-nav-item="2">
        <a href="#">Products</a>
      </div>
      <div class="Header-nav-item" data-nav-item="3">
        <a href="#">Services</a>
      </div>
      <div class="Header-nav-item" data-nav-item="4">
        <a href="#">Work</a>
      </div>
      <div class="Header-nav-item" data-nav-item="5">
        <a href="#">Contact</a>
      </div>
    </nav>
    <button class="MobileNav-trigger" data-mobile-nav-trigger>
      <div class="MobileNav-trigger-inner"></div>
    </button>
  </div>
</header>

<div class="container">
  <div class="card" style="background-image: url(https://source.unsplash.com/random?1);"></div>
  <div class="card" style="background-image: url(https://source.unsplash.com/random?2);"></div>
  <div class="card" style="background-image: url(https://source.unsplash.com/random?3);"></div>
  <div class="card" style="background-image: url(https://source.unsplash.com/random?4);"></div>
  <div class="card" style="background-image: url(https://source.unsplash.com/random?5);"></div>
  <div class="card" style="background-image: url(https://source.unsplash.com/random?6);"></div>
  <div class="card" style="background-image: url(https://source.unsplash.com/random?7);"></div>
  <div class="card" style="background-image: url(https://source.unsplash.com/random?8);"></div>
  <div class="card" style="background-image: url(https://source.unsplash.com/random?9);"></div>
</div>
<script>
    function isOverflown({ clientWidth, clientHeight, scrollWidth, scrollHeight }) {
  return scrollHeight > clientHeight || scrollWidth > clientWidth;
}

function isVisible(parent, child) {
  return !(
    (child.offsetLeft - parent.offsetLeft >= parent.offsetWidth)
    || (child.offsetTop - parent.offsetTop >= parent.offsetHeight)
  );
}

function init() {
  const page = document.querySelector('[data-main-page]');
  const header = document.querySelector('[data-header]');
  const topbar = document.querySelector('[data-topbar]');
  const nav = header.querySelector('[data-nav]');
  const navItems = nav.querySelectorAll('[data-nav-item]');
  const mobileNavList = document.querySelector('[data-mobile-nav-list]');
  const mobileNavItems = document.querySelectorAll('[data-mobile-nav-item]');
  const mobileNavTriggers = document.querySelectorAll('[data-mobile-nav-trigger]');
  const mobileNavOverlay = document.querySelector('[data-mobile-nav-overlay]');

  // Resize Observer checking whether to show mobile nav button based on if a nav element is overflowing
  const showMobileNavButton = () => {
    const navHidden = getComputedStyle(nav, null).display === 'none';
    if (navHidden) {
      mobileNavItems.forEach((item) => {
        item.classList.add('is-visible');
      });
    }

    const resizeObserver = new window.ResizeObserver((entries) => {
      for (const entry of entries) {
        header.classList.toggle('has-mobile-button', isOverflown(nav));
        navItems.forEach((item) => {
          const navItems = Array.from(mobileNavItems);
          const matchingNavItem = navItems.find(el => el.dataset.mobileNavItem === item.dataset.navItem);

          matchingNavItem.classList.toggle('is-visible', !isVisible(nav, item));
        });
      }
    });

    resizeObserver.observe(nav);
  };

  // Mobile nav button open/close
  mobileNavTriggers.forEach((trigger) => {
    trigger.addEventListener('click', () => {
      mobileNavTriggers.forEach((trigger) => trigger.classList.toggle('is-active'));
      document.body.classList.toggle('is-mobilenav-open');
    });
  });

  // Mobile nav overlay close
  mobileNavOverlay.addEventListener('click', () => {
    mobileNavTriggers.forEach((trigger) => {
      trigger.classList.remove('is-active');
    });
    document.body.classList.remove('is-mobilenav-open');
  });

  showMobileNavButton();
}

init();
</script>