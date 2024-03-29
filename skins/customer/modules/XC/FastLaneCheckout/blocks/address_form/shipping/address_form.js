/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * address_form.js
 *
 * Copyright (c) 2001-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */
Checkout.define('Checkout.ShippingAddressForm', ['Checkout.AddressForm', 'Checkout.AddressSection'], function(){
  Checkout.ShippingAddressForm = Checkout.AddressForm.extend({
    name: 'shipping-address-form',

    vuex: {
      actions: {
        updateShippingAddress: function(state, data) {
          state.dispatch('UPDATE_SHIPPING_ADDRESS', data);
        },
        disablePaymentStep: function(state) {
          state.dispatch('TOGGLE_SECTION', 'payment', false);
        }
      },
    },

    created: function() {
      this.shortType = 's';
      this.shippingCalculationInProgress = false;
      this.blockers = [];
    },

    ready: function() {
      this.updateShippingAddress(this.toDataObject());
    },

    events: {
      sectionPersist: function(data) {
        if (this.shippingCalculationInProgress && this.blockers.length > 0) {
          _.times(this.blockers.length, function() {
            this.$root.$broadcast('reloadingUnblock', 1);
          }, this);

          this.blockers = [];
          this.shippingCalculationInProgress = false;
        }
      },
    },

    watch: {
      'fields.zipcode': function() {
        this.waitForShippingRecalculate();
      },

      'fields.state_id': function() {
        this.waitForShippingRecalculate();
      },

      'fields.country_code': function() {
        this.waitForShippingRecalculate();
      },
    },

    methods: {
      waitForShippingRecalculate: function() {
        if (this.isValid && !this.nonPersistMode) {
          this.shippingCalculationInProgress = true;
          this.disablePaymentStep();
          this.blockers.push('blocker');
          this.$root.$broadcast('reloadingBlock', 1);
        }
      },

      triggerUpdate: function(options) {
        this.updateShippingAddress(this.toDataObject());
        Checkout.ShippingAddressForm.super.options.methods.triggerUpdate.apply(this, arguments);
      },
    },
  });

  Checkout.AddressSection = Checkout.AddressSection.extend({
    components: _.extend(Checkout.AddressSection.options.components, {
      ShippingAddressForm: Checkout.ShippingAddressForm,
    })
  });
});
