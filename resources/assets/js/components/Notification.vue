<template>
    <div :class="notificationClasses" v-show="show">
        <button class="delete" @click="show = false"></button>
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
                var type = this.type;
                return {
                    'notification': true,
                    'is-success': type == 'success',
                    'is-danger': type == 'danger',
                    'is-info': type == 'info'
                };
            }
        }
    }
</script>

