<template>
    <li class="flex justify-between">
        <a href="#" :class="picked()" v-text="player.name"></a>
        <span class="team-dot" :style="{backgroundColor: player.color}"></span>
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
            picked() {
                return this.player.team_id ? 'picked' : ''
            }
        }
    }
</script>
