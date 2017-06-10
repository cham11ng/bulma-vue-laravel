class Errors {
    /*
     * Create new Errors instance.
     */
    constructor() {
        this.errors = {};
    }

    /*
     * Determine if field has errors.
     *
     * @param {string} field
     */
    has(field) {
        return this.errors.hasOwnProperty(field);
    }

    /*
     * Retrieve error from this field.
     *
     * @param {string} field
     */
    get(field) {
        if (this.errors[field]) {
            return this.errors[field][0];
        }
    }

    /*
     * Record new errors.
     *
     * @param {object} field
     */
    record(errors) {
        this.errors = errors;
    }

    /*
     * Determine if any errors.
     */
    any() {
        return Object.keys(this.errors).length > 0;
    }

    /*
     * Clear specific field or all.
     *
     * @param {string|null} field
     */
    clear(field) {
        if (field) {
            delete this.errors[field];

            return;
        }
        this.errors = {}
    }
}

class Form {
    /*
     * Create new Form instance.
     */
    constructor(data) {
        this.originalData = data;

        for (let field in data) {
            this[field] = data[field];
        }

        this.errors = new Errors();
    }

    /*
     * Reset form fields.
     */
    reset() {
        for (let field in this.originalData) {
            this[field] = '';
        }
    }

    /*
     * Fetch all relevant data for the form
     *
     */
    data() {
        let data = {};

        for (let property in this.originalData) {
            data[property] = this[property];
        }

        return data;
    }

    /*
     * Submit form
     *
     * @param {string} requestType
     * @param {string} url
     */
    submit(requestType, url) {
        return new Promise((resolve, reject) => {
            axios[requestType](url, this.data())
                .then(response => {
                    this.onSuccess();
                    resolve(response.data);
                })
                .catch(error => {
                    this.onFail(error.response.data);
                    reject(error.response.data);
                });
        });
    }

    /*
     * Handle successful form submission.
     *
     * @param {object} data
     */
    onSuccess() {
        this.reset();
    }

    /*
     * Handle failed form submission.
     *
     */
    onFail(errors) {
        this.errors.record(errors);
    }
}