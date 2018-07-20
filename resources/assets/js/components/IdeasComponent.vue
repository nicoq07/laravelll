<template>
    <div class="col-md-12"> 
                <div class="card">
                    <div class="card-header">Escrito el {{idea.created_at}} </div>
                    <div class="card-body">
                        <div class="form-group">

                                <input class="form-control" v-model="idea.description"  v-if="editMode" type="text">
                                <p  v-else>
                                    {{idea.description}}
                                </p>
                                
                        </div>
                        <button v-if="editMode" type="submit" class="btn btn-warning" v-on:click="onClickActualizar()">Guardar</button>
                        <button  v-else type="submit" class="btn btn-warning" v-on:click="onClickEditar()">Editar</button>
                        <button type="submit" class="btn btn-danger" v-on:click="onClickBorrar()">Borrar</button>
                    </div>
                </div>
    </div>
</template>

<script>
    export default {
        props: ['idea'],
        data () {
            
            return {         
                    editMode : false
            };
        },
        methods:
        {
            onClickBorrar()
            {
                this.$emit('borrar');
            },
             onClickEditar()
            {
                this.editMode = true;
                this.$emit('editar');
            },
            onClickActualizar()
            {
                this.editMode = false;
                this.$emit('actualizar',this.idea);
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
