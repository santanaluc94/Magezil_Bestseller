define([
    'jquery',
    'jquery-ui-modules/widget',
    'mage/translate',
    'Magento_Customer/js/customer-data'
], function ($, customerData) {
    'use strict';

    // Reload cart
    window.load = function () {
        let sections = ['cart'];

        customerData.invalidate(sections);
        customerData.reload(sections, true);
    };

    // Select all products
    let selectAllLink = document.getElementById('select_all_bestseller'),
        button = false;

    selectAllLink.onclick = function () {
        if (button) {
            button = false;

            Array.from(document.getElementsByClassName('checkbox-bestseller')).forEach(function (element, index) {
                element.checked = false;
            });

            document.getElementById('bestseller_product_ids').value = [];
            document.getElementById('select_all_bestseller').innerHTML = $.mage.__("select all");
        } else {
            button = true;

            let meuArray = [];

            Array.from(document.getElementsByClassName('checkbox-bestseller')).forEach(function (element, index) {
                element.checked = true;

                if (!!!meuArray.length) {
                    meuArray = element.value;
                } else {
                    meuArray = meuArray + ',' + element.value;
                }
            });

            document.getElementById('select_all_bestseller').innerHTML = $.mage.__("unselect all");
            document.getElementById('bestseller_product_ids').value = meuArray;
        }
    }

    // Insert product ids in input to add to cart
    document.body.addEventListener('click', function (e) {
        let productIds = document.getElementById('bestseller_product_ids').value;

        if (productIds) {
            productIds = productIds.split(',');
        } else {
            productIds = [];
        }

        if (!e.target.classList.contains('checkbox-bestseller')) return;

        let productId = e.target.value;

        if (productIds.includes(productId)) {
            productIds.splice(productIds.indexOf(productId), 1);
        } else {
            productIds.push(productId);
        }

        document.getElementById('bestseller_product_ids').value = productIds;
    });
});
