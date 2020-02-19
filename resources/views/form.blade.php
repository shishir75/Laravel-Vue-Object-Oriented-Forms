<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel-Vue: Object Oriented Forms</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


    </head>
    <body>

        <div id="app" class="container mt-5 p-4 bg-secondary rounded">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center my-3">Laravel-Vue: Object Oriented Forms</h3>

                    <form method="post" action="{{ route('form.store') }}" @submit.prevent="onsubmit" @keydown="errors.clear($event.target.name)">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" v-model="name" placeholder="Enter Name">
                            <span class="text-danger small" v-if="errors.has('name')" v-text="errors.get('name')"></span>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description" name="description" v-model="description" placeholder="Enter Description">
                            <span class="text-danger small" v-if="errors.has('description')" v-text="errors.get('description')"></span>
                        </div>

                        <button type="submit" class="btn btn-primary" :disabled="errors.any()">Submit</button>

                    </form>
                </div>
            </div>
        </div>



        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

        <!-- development version, includes helpful console warnings -->
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="/js/app.js"></script>


    </body>
</html>
