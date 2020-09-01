define([], function () {
    'use strict';

    return function (storageManager) {
        return storageManager.extend({
            prepareStoragesConfig: function () {
                if (typeof this.storagesConfiguration === 'object') {
                    delete this.storagesConfiguration.recently_viewed_product;
                }
                return this._super();
            }
        });
    };
});
