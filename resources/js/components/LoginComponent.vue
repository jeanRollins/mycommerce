<template >
    <div class="card effect-shadow mt-2">
        <div class="card-body">
            <form method="POST" v-on:submit.prevent="authenticate">

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <div class="formInputControl">
                        <input type="email" class="form-control" v-model="email" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <small id="emailHelp" class="form-text text-muted"> Ejemplo : juan@myproject.cl.</small>
                    <p class="message-false-d" id="messageFalseEmail">Email requerido.</p>

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <div class="formInputControl">
                        <input type="password" class="form-control" v-model="password" name="password" id="exampleInputPassword1">
                    </div>
                    <p class="message-false-d" id="messageFalsePassword">Contraseña requerida.</p>
                    <p class="message-false" id="messageFalse">Usuario o contraseña inválida.</p>
                </div>

                
                <button class="btn btn-primary btn-block" v-if="btnLoading" type="button" disabled>
                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                    Cargando...
                </button>

                <button  type="submit"  class="btn btn-primary btn-block" v-if="btnSigIn">Ingresar</button>
                <br>
                <p> ¿Olvidaste tu contraseña? presiona <a href="#"> aquí </a> </p>
            </form>
        </div>
    </div>
</template>

<script>

    export default {
        
        data(){

            return {
                email       : ''   , 
                password    : ''   ,
                btnSigIn    : true , 
                btnLoading  : false
            }
        },

        props: ['csrf', 'user'],

        methods : {

            showHideElement( id , selector ) {

                let element = document.querySelector('#' + id )
                let selectorFocus = document.querySelector('#' + selector )

                selectorFocus.focus()
                element.style.display = 'block'
                
                setTimeout(() => {
                    element.style.display = 'none' 
                }, 4000);

            },   

            authenticate(){

                if( this.email == '' ){
                    this.showHideElement( 'messageFalseEmail', 'exampleInputEmail1')
                    return false 
                }
                
                if( this.password == '' ){
                    this.showHideElement( 'messageFalsePassword', 'exampleInputPassword1')
                    return false 
                }

                this.btnSigIn = false 
                this.btnLoading  = true 

                axios.post('/login', {
                    email     : this.email ,
                    password  : this.password
                })
                .then( (response) => {
                    let data = response.data
                    if( !data.status ) {

                        this.btnSigIn = true 
                        this.btnLoading  = false  

                        let element = document.querySelector('#messageFalse'  )
                        element.style.visibility = 'visible' 

                        setTimeout(() => {
                            element.style.visibility = 'hidden' 
                        }, 4000);
                        return
                    }
                    document.location.href = '/dashboard'
                })
                .catch( function (error) {
                    console.log(error.message);
                });
            },
           
        },
        mounted() {
            
        }
    }
</script>

<style scoped>

/* Extra Small Devices, Phones */ 
@media only screen and (max-width: 480px) {

    .card {
        border : 0px none ;
    }
    .effect-shadow {
        box-shadow: none;
    }
}

</style>