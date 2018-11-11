/**
 * This will change the post preview text in case it's too long
 * The limit is 68 characters. If the preview text is longer than that
 * the text will be cut to 65 characters and then a " ..." will be added
 * at the end.
 */

const postPreviews = Array.from(document.querySelectorAll('.post-preview'));
console.log({ postPreviews });

const newPostPreview = postPreviews.map(postPreview => {
  if(postPreview.innerText.length > 68) {
    const bigText = postPreview.innerText;
    const newText = bigText.slice(0, 65).concat(' ...');
    postPreview.innerText = newText;
    return newText;
  } else {
    return postPreview.innerText;
  }
});
console.log({ newPostPreview });

const menuButton = document.querySelector('#menu-button');
const menu = document.querySelector('.menu-navigation');

const showMenu = () => {
  /* this will show or hide the menu on mobile */
  menu.classList.toggle('menu-active');
}

menuButton.addEventListener('click', showMenu);

