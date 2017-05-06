<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Account</div>

                    <div class="panel-body">
                        <button class="btn btn-danger" v-on:click(deleteAccount)>Delete my Account</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['user'],

        mounted() {
            console.log('Component mounted.')
        },

        methods: {
            deleteAccount() {
                axios.delete('/account/delete/' + this.user.id).then(response => {
                    console.log(response.data);
                    window.location = "/";
                });
            }
        }
    }
</script>
