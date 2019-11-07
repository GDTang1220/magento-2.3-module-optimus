var config = {
    paths: {
        selectqty: 'IT2023HK_Optimus/js/selectqty',
        accountmenutoggle: 'IT2023HK_Optimus/js/accountmenutoggle',
    },
    config: {
        mixins: {
            'Magento_Checkout/js/view/minicart': {
                'IT2023HK_Optimus/js/mixins/cart-open': true
            }
        }
    }
};
