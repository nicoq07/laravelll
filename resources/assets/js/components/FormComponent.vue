<template>
    <div class="col-md-12">
            <div class="card">
                <div class="card-header">Ideas</div>
                    <div class="card-body">
                        Carga tu nueva idea:
                        <form action="" v-on:submit.prevent="newIdea()">
                            <div class="form-group" >
                                <label for="txtNuevaIdea">Tu idea:</label>
                                    <input name="txtNuevaIdea" class="form-control" type="text" v-model="description" >                                
                            </div>
                            <button type="submit" class="btn btn-primary">Cargar</button>
                        </form>
                    </div>
             </div>
        
    </div>
</template>

<script>
    export default {
        data() {
            return {
                description: '' 
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:
        {   
            newIdea()
            {
                const params = {
                    description: this.description
                };

                   this.description = '';


                axios.post('/ideas',params).then((response) => 
                {
                    const idea = response.data;
                    this.$emit('new',idea);
                });
                
                
                //alert(this.description);
            }
        }
    }

</script>
