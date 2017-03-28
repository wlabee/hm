<template>
    <el-table :data="tableData" border style="width: 100%">
        <el-table-column prop="name" label="权限规则"></el-table-column>
        <el-table-column prop="display_name" label="权限名称"></el-table-column>
        <el-table-column prop="description" label="权限概述"></el-table-column>
        <el-table-column prop="created_at" label="权限创建日期"></el-table-column>
        <el-table-column prop="updated_at" label="权限修改日期"></el-table-column>
        <el-table-column prop="operate" label="操作"></el-table-column>
    </el-table>
</template>
<script>
export default {
    data() {
    return {
        tableData: [{
        name: '王小ss虎',
        display_name: 'dsdsd',
        description: 'dsdwdwewgerger',
        created_at: '2016-05-02',
        updated_at: '2016-05-02',
        operate: '操作'
        },
        {
        name: '王小虎',
        display_name: 'dsdsd',
        description: 'dsdwdwewgerger',
        created_at: '2016-05-02',
        updated_at: '2016-05-02',
        operate: '操作'
        }]
    };
    }
}
</script>