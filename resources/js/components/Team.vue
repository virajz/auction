<template>
    <div class="team flex-col flex-1" :style="{backgroundColor: team.color}">
        <h3>{{ team.name }}</h3>
        <div class="flex">
            <div class="flex-1">
                <p>Points</p>
                <h4 v-text="pointsRemaining()"></h4>
            </div>
            <div class="flex-1">
                <p>Players Taken</p>
                <h4>{{ team.players_count }}</h4>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['obj'],

        data() {
            return {
                team: this.obj,
            }
        },

        methods: {
            pointsRemaining() {
                return this.team.points - this.team.spent;
            }
        }
    }
</script>
