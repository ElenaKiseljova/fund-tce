'use strict';

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

      const formLiqPayHTML = await sendForm(dataForm);

      form.insertAdjacentHTML('afterend', formLiqPayHTML || '');

      const formLiqPay = document.querySelector('#formLiqPay');

      if (formLiqPay) {
        formLiqPay.submit();
      }
    });
  }
});

