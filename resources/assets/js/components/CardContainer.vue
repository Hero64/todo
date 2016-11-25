<template>
    <div class="card-container" :class="custom_class">
        <div class="card-container-title">
            <h4 class="title">{{ title }}</h4>
        </div>
        <div class="search-container">
            <i class="ion-android-search"></i>
            <input type="text" placeholder="Buscar...">
        </div>
        <div class="task-container">
            <div v-dragula="dragula-text"
                bag="first-bag">
                <div v-for="task in tasks">
                    <task :task="task"></task>
                </div>
            </div>
        </div>
    </div>
</template>
<style lang="css">
    .card-container {
        display: inline-block;
        width: 300px;
        margin-left: 20px;
        border-radius: 0 0 2px 2px;
        vertical-align: top;
    }
    .card-container-title {
        border-bottom: 3px solid rgb(66, 190, 167);
    }
    .title {
        text-transform: uppercase;
    }
    .search-container {
        position: relative;
    }
    .search-container i {
        font-size: 1.5em;
        position: absolute;
        top: 12px;
        right: 33px;
        color: #ddd;
    }
    .search-container input {
        height: 35px;
        font-size: 1.2em;
        margin-top: 10px;
        outline: 0;
        position: absolute;
        width: calc(100% - 30px);
        left: 15px;
        background: transparent;
        padding-left: 25px;
        border: 1px solid #ddd;
        border-radius: 25px;
    }
    .task-container > div{
        padding: 15px;
        margin-top: 40px;
        min-height: 150px;
        padding-bottom: 50px;
    }
    .gu-mirror {
        position: fixed !important;
        margin: 0 !important;
        z-index: 9999 !important;
        opacity: 0.8;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
        filter: alpha(opacity=80);
    }
    .gu-hide {
        display: none !important;
    }
    .gu-unselectable {
        -webkit-user-select: none !important;
        -moz-user-select: none !important;
        -ms-user-select: none !important;
        user-select: none !important;
    }
    .gu-transit {
        opacity: 0.2;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=20)";
        filter: alpha(opacity=20);
    }
</style>
<script>
    export default {
        components: {
            'task': require('./Task.vue')
        },
        data: function() {
            return {
                tasks: [
                    {
                        id: 1,
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
                    },
                    {
                        id: 2,
                        description: 'Esta e una pequeña tarea :)'
                    }
                ]
            }
        },
        props: ['title', 'custom_class', 'dragula-text']
    }
</script>
