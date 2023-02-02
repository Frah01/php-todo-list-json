<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.0/axios.min.js" integrity="sha512-A6BG70odTHAJYENyMrDN6Rq+Zezdk+dFiFFN6jH1sB+uJT3SYMV4zDSVR+7VawJzvq7/IrT/2K3YWVKRqOyN0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <div id="app">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12">
                    <div class=" mt-5 d-flex justify-content-center ">
                        <ul class="list-group list-group-flush w-50">
                            <li class="list-group-item p-2" v-for="(todo,index) in todoList">
                                <div class="d-flex justify-content-between">
                                    {{todo.language}} <button class="btn btn-danger" @click="delete(index)"><i class="fa-solid fa-trash"></i></button>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <div class="d-flex justify-content-center mt-3">
                            <input class="form-control w-25" type="text" v-model="language" placeholder="Inserici un nuovo linguaggio">
                            <button class="btn btn-dark mx-3" @click="addLanguage">Inserisci</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript" src="./script.js"></script>

</html>