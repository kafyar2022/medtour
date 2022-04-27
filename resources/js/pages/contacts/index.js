const contactsPage = document.querySelector('[data-id="contacts-page"]');
if (contactsPage) {
   const submitBtn = contactsPage.querySelector('[data-id="submit-btn"]');
   
   submitBtn.addEventListener('click', () => {
      submitBtn.classList.remove('hidden');
   });
}