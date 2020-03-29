<template >
    <nav class="navbar navbar-expand-lg navbar-light bg-light effect-shadow">

        <a class="navbar-brand logoHref" style="width: 4% ; " href="#">
            <img src="/storage/documentop_logo.png" class="d-inline-block align-top w-100"  alt="">
        </a>

        <form method="POST" action="/logout" v-on:submit.prevent="logout">
            <button class="btn btn-danger btn-block d-xs-none d-sm-none ">Cerrar sesión</button>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>

        </div>

    </nav>
</template>

<script >
    export default {
        mounted() {
            console.log('Component Header!')
        },
        methods : {

            logout(){
                axios.post('/logout')
                .then( function (response) {
                    console.log(response)
                    document.location.href = '/'    
                })
                .catch( function (error) {
                    console.log(error.message)
                });
            }
        }
    }
</script>

<style scoped>

/* Extra Small Devices, Phones */ 
@media only screen and (max-width: 480px) {

    nav .logoHref {
        width : 17% !important ;
    }
}

</style>