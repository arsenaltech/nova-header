<template>
    <div class="flex border-b border-40" style="padding-bottom: 5px">
        <h2>{{field.name}}</h2>
    </div>
</template>

<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova'

export default {
    mixins: [FormField, HandlesValidationErrors],

    props: ['resourceName', 'resourceId', 'field'],

    methods: {
        /*
         * Set the initial, internal value for the field.
         */
        setInitialValue() {
        },

        /**
         * Fill the given FormData object with the field's internal value.
         */
        fill(formData) {
        },

        /**
         * Update the field's internal value.
         */
        handleChange(value) {
        }
    }
}
</script>
