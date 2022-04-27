const header = document.querySelector('.header');
if (header) {
   const searchBtn = header.querySelector('.search__button'),
      search = header.querySelector('.search')
      hamburger = header.querySelector('.hamburger')
      mobileNavigation = header.querySelector('.mobile-navigation'),
      mobNavItems = header.querySelectorAll('.mobile-navigation__item');

   searchBtn.onclick = () => {
      search.classList.toggle('hidden');
   }

   hamburger.onclick = () => {
      mobileNavigation.classList.toggle('hidden');
   }

   mobNavItems.forEach(item => {
      item.addEventListener('click', () => {
         const linksBlock = item.querySelector('.mobile-dropdown-links');
         if (linksBlock) {
            linksBlock.classList.toggle('hidden');
         }
      })
   });
}