'use strict';

const checkRecaptcha = async (callback) => {
  let noBot = 0;

  const siteKey = wpcf7_recaptcha?.sitekey ?? false;

  if (siteKey) {
    await grecaptcha.ready(function () {
      grecaptcha.execute(siteKey, { action: 'submit' }).then(function (token) {
        console.log('grecaptcha is OK');

        noBot = 1;

        if (typeof callback === 'function') {
          callback(noBot);
        }
      });
    });
  } else {
    noBot = 1;

    if (typeof callback === 'function') {
      callback(noBot);
    }
  }
};

const sendForm = async (data) => {
  try {
    const url = fundtce_ajax.url;

    const response = await fetch(url, {
      method: 'POST',
      credentials: 'same-origin',
      body: data,
    });

    if (response) {
      const { success, data } = await response.json();

      if (success) {
        const { message, form } = data;

        console.log('Успех:', message);

        return form;
      } else {
        throw new Error(data.message);
      }
    }
  } catch (error) {
    console.log(error);
  }
};

document.addEventListener('DOMContentLoaded', () => {
  const form = document.querySelector('.fund__form');

  if (form) {
    form.addEventListener('submit', async (evt) => {
      evt.preventDefault();

      const dataForm = new FormData(form);

      dataForm.append('action', 'fundtce_ajax_liqpay');
      dataForm.append('security', fundtce_ajax.nonce);

      // recaptcha
      await checkRecaptcha(async (noBot) => {
        dataForm.append('antibot', noBot);

        const formLiqPayHTML = await sendForm(dataForm);

        form.insertAdjacentHTML('afterend', formLiqPayHTML || '');

        const formLiqPay = document.querySelector('#formLiqPay');

        if (formLiqPay) {
          formLiqPay.submit();
        }
      });
    });
  }
});

// document.addEventListener('wpcf7grecaptchaexecuted', () => {
//   console.log('wpcf7grecaptchaexecuted', wpcf7_recaptcha);
// });

