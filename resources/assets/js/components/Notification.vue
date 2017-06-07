<template>
    <div :class="notificationClasses" v-show="show">
        <i class="fa fa-close pull-right" @click="show = false"></i>
        <slot></slot>
    </div>
</template>

<script>
    export default {
        props: ['type'],

        data: function() {
            return {
                show: true
            };
        },

        computed: {
            notificationClasses: function() {
                let type = this.type;
                return {
                    'notification': true,
                    'is-success': type === 'success',
                    'is-danger': type === 'danger',
                    'is-info': type === 'info'
                };
            }
        }
    }
</script>

