<template>
    <header>
        <!-- Top menu -->
        <div>
            <b-navbar toggleable="lg" type="light" variant="light">
                <b-navbar-brand href="/">
                    <img class="" src="/images/Logo-Imkers-Leiden.png" alt="Logo">
                </b-navbar-brand>
                <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

                <b-collapse id="nav-collapse" is-nav>
                    <b-navbar-nav>
                        <b-nav-item class="h5" href="/about">
                            About
                        </b-nav-item>
                        <b-nav-item class="h5" href="/cursus">
                            Cursussen
                        </b-nav-item>
                        <b-nav-item class="h5" href="/contact">
                            Contact
                        </b-nav-item>
                        <b-nav-item class="h5" href="/activiteiten">
                            Activiteiten
                        </b-nav-item>
                    </b-navbar-nav>

                    <!-- Right aligned nav items -->
                    <b-navbar-nav class="ml-auto">
                        <b-navbar-nav right>
                            <b-nav-item v-if="!isLoggedIn" href="login">
                                login
                            </b-nav-item>
                        </b-navbar-nav>
                        <b-navbar-nav right v-if="isLoggedIn">
                            <b-nav-item class="h5" href="/register">
                                Register
                            </b-nav-item>
                            <b-nav-item class="h5" href="/users">
                                Users
                            </b-nav-item>
                            <b-nav-item class="h5" href="/adminpanel">
                                Admin-panel
                            </b-nav-item>
                            <b-nav-text class="h5 navbar-text">
                                {{user.username}}
                            </b-nav-text>
                            <b-button variant="danger"  size="" @click="isLoggedIn = false" role="button" href="/logout">
                                Logout
                            </b-button>
                        </b-navbar-nav>
                    </b-navbar-nav>
                </b-collapse>
            </b-navbar>
        </div>
    </header>
</template>
<script>
    export default {
        props: {
            user:{
                type: Object,
                default: null
            }
        },
        mounted() {
            console.log('navigation mounted.');
            console.log('user: ',this.user);
            if (this.user !== {}){
                if (this.user.username.length > 0){
                    this.isLoggedIn = true;
                }
            }else if(this.user.username == null || this.user.username == "" || this.user.username == undefined){
                this.isLoggedIn = false;
            }else{
                this.isLoggedIn = false;
            }
        },
        data: function () {
            return{
                isLoggedIn: false,
            }
        }
    }
</script>

<style scoped>
    .navbar-text{
        font-size: 1.3rem;
    }
</style>
