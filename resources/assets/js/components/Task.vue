<template>
    <div class="card">
        <i class="ion-ios-paw"></i>
        <p class="description" @click="onViewTask()">{{ task.description }}</p>
        <span class="date">{{ task.date }}</span>
        <i class="remove-task ion-ios-close-empty" @click="onDelete()"></i>
    </div>
</template>
<style lang="css">
    .card {
        display: flex;
        align-items: center;
        box-shadow: 0 0 4px #aaa;
        border-radius: 0 2px 2px 0;
        margin-bottom: 15px;
        padding: 15px 10px;
        border-left: 3px solid #42bea7;
        position: relative;
    }
    .card i {
        font-size: 2em;
        padding-right: 15px;
    }
    .card p {
        font-size: 12px;
        font-weight: bold;
        cursor: pointer;
    }
    .card .description:hover {
        text-decoration: underline;

    }
    .remove-task {
        position: absolute;
        top: 15px;
        right: 15px;
        z-index: 999;
        cursor: pointer;
        transform: scale(0);
        transform-origin: center;
        transition: .4s;
    }
    .card:hover > .remove-task{
        transform: scale(1);
    }
</style>
<script>

    export default{
        props: ['task'],
        methods: {
            onViewTask: function() {
                alert('hola mundo');
            },
            onDelete: function() {
                alert('mucha suerte');
            }
        }
    }
</script>
