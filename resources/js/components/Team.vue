<template>
    <div class="team flex-col flex-1" :style="{backgroundColor: team.color}">
        <h3><a :href="href" target="_blank">{{ team.name }}</a></h3>
        <div class="flex">
            <div class="flex-1">
                <p>Points</p>
                <h4 v-text="pointsRemaining()"></h4>
            </div>
            <div class="flex-1">
                <p>Players Taken</p>
                <h4 v-text="team.players_count"></h4>
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
        },

        computed: {
            href() {
                return '/teams/' + this.team.id;
            }
        },

        created () {
            window.events.$on('player-updated', () => {
                axios.get('teams/' + this.team.id)
                    .then(response => (this.team = response.data) );
            });
        }
    }
</script>
