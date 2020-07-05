<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                       <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                           <tbody>
                               <tr v-for"category, index in categories">
                                   <td>{{ category.id }}</td>
                                   <td>{{ category.name }}</td>
                               </tr>
                           </tbody>
                       </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                categories: []
            }
        },

        mounted() {

            var app = this;
            axios.get('/api/apicategories')
            .then(function (resp) {
                app.categories = resp.data;
            })
            .catch(function (resp) {
                console.log(resp);
                alert("Could not load Category Index");
            })
            
        }
    }
</script>
