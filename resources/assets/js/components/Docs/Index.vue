<template>
    <div id="acc" class="accordion toggle bottom-border">
        <div class="panel" v-for="data in datas">
            <h5 class="acc-head">
                <a :href="'#' + data.id" data-toggle="collapse" data-parent="#acc" class="collapsed">
                    <i :class="'main-color fa fa-' + data.icon"></i>{{data.categoryName}}</a>
            </h5>
            <div class="acc-body collapse" :id="data.id">
                <div class="acc-content">
                    <ul class="tools">
                        <li v-for="tool in data.tools"><a :href="'/docs/tool/' + tool.tool">{{tool.toolName}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['datas'],

        data(){
            return {

            }
        }
    }
</script>