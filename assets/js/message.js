'use strict';

const MODES = ['error'];
const TIMEOUT_ANIMATE_ITEM = 300;
const TIMEOUT_FOR_REMOVE_ITEM = 4700;

let message;

const initMessage = () => {
  message = document.createElement('div');
  message.classList.add('message');

  document.body.appendChild(message);
};

const createMessageElement = (text, mode) => {
  if (message) {
    let timeoutAnimation;
    let timeoutRemove;

    const newMessageItem = document.createElement('span');

    const classes = ['message__item'];

    if (mode && MODES.includes(mode)) classes.push(`message__item--${mode}`);

    newMessageItem.classList.add(...classes);

    newMessageItem.textContent = text;

    message.appendChild(newMessageItem);

    timeoutAnimation = setTimeout(() => {
      newMessageItem.classList.add('active');

      clearTimeout(timeoutAnimation);
    }, TIMEOUT_ANIMATE_ITEM);

    timeoutRemove = setTimeout(() => {
      newMessageItem.classList.remove('active');

      timeoutAnimation = setTimeout(() => {
        newMessageItem.remove();
        clearTimeout(timeoutAnimation);
      }, TIMEOUT_ANIMATE_ITEM);

      clearTimeout(timeoutRemove);
    }, TIMEOUT_FOR_REMOVE_ITEM);
  }
};

// Copy text to clipboard

/**
 * Copies the text passed as param to the system clipboard
 * Check if using HTTPS and navigator.clipboard is available
 * Then uses standard clipboard API, otherwise uses fallback
 */
const copyToClipboard = (content) => {
  if (window.isSecureContext && navigator.clipboard) {
    navigator.clipboard.writeText(content);

    createMessageElement(
      window.MESSAGES_COPY_TO_CLIPBOARD?.success || 'Copied to clipboard'
    );
  } else {
    console.log(content);
    createMessageElement(
      window.MESSAGES_COPY_TO_CLIPBOARD?.error ||
        'The connection is not secure. Requires HTTPS protocol',
      'error'
    );
  }
};

document.addEventListener('DOMContentLoaded', () => {
  // Init message
  initMessage();

  const copyLinks = document.querySelectorAll(
    '.requisites__column a[href="#"]'
  );

  if (copyLinks.length > 0) {
    copyLinks.forEach((copyLink) => {
      copyLink.addEventListener('click', (evt) => {
        evt.preventDefault();

        copyToClipboard(copyLink.textContent);
      });
    });
  }
});

