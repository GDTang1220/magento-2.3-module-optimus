var config = {
    paths: {
        selectqty: '2023HK_Optimus/js/selectqty',
        accountmenutoggle: '2023HK_Optimus/js/accountmenutoggle',
    },
    config: {
        mixins: {
            'Magento_Checkout/js/view/minicart': {
                '2023HK_Optimus/js/mixins/cart-open': true
            }
        }
    }
};
