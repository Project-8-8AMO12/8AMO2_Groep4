<template>
    <header>
        <!-- Top menu -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link scroll-link" href="/"><img class="" src="images/Logo-Imkers-Leiden.png" alt="Logo"></a>
                    </li>
                    <li class="nav-item my-auto">
                        <a class="nav-link scroll-link" href="about">About</a>
                    </li>
                    <li class="nav-item my-auto">
                        <a class="nav-link scroll-link" href="cursus">Cursussen</a>
                    </li>
                    <li class="nav-item my-auto">
                        <a class="nav-link scroll-link" href="contact">Contact</a>
                    </li>
                </ul>



                    <!-- if you'r logged in -->
                <ul v-if="isLoggedIn == false" class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="login">login</a>
                    </li>
                </ul>
                <!-- if you'r logged in -->
                <ul v-if="isLoggedIn == true" class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="register">register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="users">users</a>
                    </li>

                    <!--                    end if-->
                    <li class="nav-item">
                        <a class="nav-link" href="adminpanel"></a>
                    </li>
                    <li class="nav-item my-auto">
                        <a class="nav-item btn btn-danger" v-on:click="isLoggedIn = false" href="logout">
                            logout
                        </a>
                    </li>
                    <h1 class="text-center my-auto ml-2 text-white">{{user.username}}</h1>

                </ul>
            </div>
        </nav>
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
