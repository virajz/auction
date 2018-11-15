<template>
    <li class="flex justify-between" @click="selectPlayer">
        <a href="#" :class="picked" v-text="player.name"></a>
        <span class="team-dot" :style="{backgroundColor: bgColor}"></span>
    </li>
</template>

<script>
    export default {
        props: ['obj'],

        data() {
            return {
                player: this.obj,
            }
        },

        methods: {
            selectPlayer() {
                window.events.$emit('player-selected', this.player);
            }
        },

        computed: {
            picked() {
                return this.player.team_id ? 'picked' : ''
            },

            bgColor() {
                return this.player.color;
            }
        },

        created () {
            window.events.$on('player-updated', player => {
                if (player.id == this.player.id) {
                    axios.get('players/' + this.player.id)
                        .then(response => (this.player = response.data) );
                }
            });
        }
    }
</script>
