<template>
    <form>
        <md-card>
            <md-card-header :data-background-color="dataBackgroundColor">
                <h4 class="title">Edit Profile</h4>
                <p class="category">Complete your profile</p>
            </md-card-header>

            <md-card-content>
                <div class="md-layout">
                    <div class="md-layout-item md-small-size-100 md-size-33">
                        <md-field>
                            <label>Company (disabled)</label>
                            <md-input v-model="user.disabled" disabled></md-input>
                        </md-field>
                    </div>
                    <div class="md-layout-item md-small-size-100 md-size-33">
                        <md-field>
                            <label>User Name</label>
                            <md-input v-model="user.name" type="text"></md-input>
                        </md-field>
                    </div>
                    <div class="md-layout-item md-small-size-100 md-size-33">
                        <md-field>
                            <label>Email Address</label>
                            <md-input v-model="user.email" type="email"></md-input>
                        </md-field>
                    </div>
                    <div class="md-layout-item md-small-size-100 md-size-50">
                        <md-field>
                            <label>First Name</label>
                            <md-input v-model="user.firstname" type="text"></md-input>
                        </md-field>
                    </div>
                    <div class="md-layout-item md-small-size-100 md-size-50">
                        <md-field>
                            <label>Last Name</label>
                            <md-input v-model="user.lastname" type="text"></md-input>
                        </md-field>
                    </div>
                    <div class="md-layout-item md-small-size-100 md-size-100">
                        <md-field>
                            <label>Adress</label>
                            <md-input v-model="user.address" type="text"></md-input>
                        </md-field>
                    </div>
                    <div class="md-layout-item md-small-size-100 md-size-33">
                        <md-field>
                            <label>City</label>
                            <md-input v-model="user.city" type="text"></md-input>
                        </md-field>
                    </div>
                    <div class="md-layout-item md-small-size-100 md-size-33">
                        <md-field>
                            <label>Country</label>
                            <md-input v-model="user.country" type="text"></md-input>
                        </md-field>
                    </div>
                    <div class="md-layout-item md-small-size-100 md-size-33">
                        <md-field>
                            <label>Postal Code</label>
                            <md-input v-model="user.code" type="number"></md-input>
                        </md-field>
                    </div>
                    <div class="md-layout-item md-size-100">
                        <md-field maxlength="5">
                            <label>About Me</label>
                            <md-textarea v-model="user.aboutme"></md-textarea>
                        </md-field>
                    </div>
                    <div class="md-layout-item md-size-100 text-right">
                        <md-button class="md-raised md-success">Update Profile</md-button>
                    </div>
                </div>

            </md-card-content>
        </md-card>
    </form>
</template>
<script>
    export default {
        name: 'edit-profile-form',
        props: {
            dataBackgroundColor: {
                type: String,
                default: ''
            }
        },
        data() {
            return {
                user: {
                    name: '',
                    email: '',
                    address: '',
                }
            }
        },
        methods: {
            getAuthDetails() {
                axios.get(this.$baseURL + 'user', {
                        headers: {'Authorization': 'Bearer ' + localStorage.getItem('token')}
                })
                    .then((response) => {
                        this.user.name = response.data.name;
                        this.user.address = response.data.address;
                        console.log(response.data.name);
                    })
                    .catch((error) => {

                    });
            }

        },
        mounted: function () {
            this.getAuthDetails();
            console.log(localStorage.getItem('token'));
        }

    }

</script>
<style>

</style>
