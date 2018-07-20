<template>
    <div class="row justify-content-center">
        
                <form-component  @new="addIdea"></form-component>

                <idea-component v-for="(idea, index) in ideas" :key="idea.id" :idea="idea"
                 @borrar="borrarIdea(index, ...arguments)"
                 @actualizar="actualizarIdea(idea)"
                 >

                </idea-component>
            
        
    </div>
</template>

<script>
    export default {
        data(){
            return {
                ideas : []
            };
        },

        mounted() {
            console.log('Component mounted.')
        },

        methods : {
            addIdea(idea)
            {
                this.ideas.push(idea);
            },

            borrarIdea(index)
            {
                this.ideas.splice(index,1);
            },
            actualizarIdea(index,ideaNueva)
            {
                this.ideas[index] = ideaNueva;
            }
        }

    }
</script>
