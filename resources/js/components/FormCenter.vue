<template>
    <div class="flex flex-1 center">
        <div class="form">
            <div>
                <label for="player">Selected Player</label>
                <input type="text" id="player" :value="player.name" disabled>
            </div>
            <div>
                <label :key="index" v-for="(team,index) in teams">
                    <input type="radio" name="team_id" :value="team.id" :checked="team.id == player.team_id" v-model="team_id">
                    <span>{{ team.name }}</span>
                </label>
            </div>
            <div>
                <label for="points">Points</label>
                <input type="text" id="points" v-model="points">
            </div>
            <button @click="update">Update Player</button>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['teamobj'],

        data() {
            return {
                teams: this.teamobj,
                player: {},
                points: 0,
                team_id: 0
            }
        },

        computed: {
            endpoint() {
                return '/players/' + this.player.id;
            }
        },

        methods: {

            update() {
                axios.patch(this.endpoint, {
                    points: this.points,
                    team_id: this.team_id
                });
                this.player.team_id = this.team_id;
                this.player.points = this.points;
                window.events.$emit('player-updated', this.player);
            }
        },

        created () {
            window.events.$on('player-selected', player => {
                this.player = player;
                this.points = player.points;
                this.team_id = player.team_id;
            });
        },
    }
</script>
