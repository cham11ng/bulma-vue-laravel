<template>
    <div class="modal is-active">
        <div class="modal-background"></div>
        <div :class="modalContentClass">
            <div class="box">
                <slot></slot>
            </div>
        </div>
        <button class="modal-close" @click="closeModal"></button>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                show: true
            };
        },

        methods: {
            closeModal() {
                this.$emit('close');
                this.show = false;
            }
        },

        computed: {
            modalContentClass: function () {
                let show = this.show;
                return {
                    'animated bounceIn modal-content': show === true,
                    'animated bounceOut modal-content': show === false,
                };
            }
        }
    }
</script>

