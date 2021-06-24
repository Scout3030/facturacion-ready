<template>
    <div>
        <div class="page-header pr-0">
            <h2><a href="#"><i class="fas fa-cogs"></i></a></h2>
            <ol class="breadcrumbs">
                <li class="active"><span>Configuración</span> </li>
                <li><span class="text-muted">Woocommerce</span></li>
            </ol>
        </div>
        <div class="card">
            <div class="card-header bg-info">
                <h3 class="my-0">Configuraciones</h3>
            </div>
            <div class="card-body pt-0 pb-5">
                <form autocomplete="off">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="separator-title">Woocommerce</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group" :class="{'has-danger': errors.url}">
                                    <label class="control-label">Url <span class="text-danger">*</span></label>
                                    <el-input v-model="form.url" @change="submit"></el-input>
                                    <small class="form-control-feedback" v-if="errors.url" v-text="errors.url[0]"></small>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group" :class="{'has-danger': errors.consumer_key}">
                                    <label class="control-label">Consumer key <span class="text-danger">*</span></label>
                                    <el-input v-model="form.consumer_key" @change="submit"></el-input>
                                    <small class="form-control-feedback" v-if="errors.consumer_key" v-text="errors.consumer_key[0]"></small>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group" :class="{'has-danger': errors.consumer_secret}">
                                    <label class="control-label">Secret key <span class="text-danger">*</span></label>
                                    <el-input v-model="form.consumer_secret" @change="submit"></el-input>
                                    <small class="form-control-feedback" v-if="errors.consumer_secret" v-text="errors.consumer_secret[0]"></small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="separator-title">Modulos</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="control-label">Sincronizar productos</label>
                                <div class="form-group" :class="{'has-danger': errors.sync_products}">
                                    <el-switch v-model="form.sync_products" active-text="Si" inactive-text="No" @change="submit"></el-switch>
                                    <small class="form-control-feedback" v-if="errors.sync_products" v-text="errors.sync_products[0]"></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">Crontab <small>Sincronizar categorias</small></label>
                                <div class="form-group" :class="{'has-danger': errors.sync_categories}">
                                    <el-switch v-model="form.sync_categories" active-text="Si" inactive-text="No" @change="submit"></el-switch>
                                    <small class="form-control-feedback" v-if="errors.sync_categories" v-text="errors.sync_categories[0]"></small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mt-4">
                                <label class="control-label">Sincronizar clientes</label>
                                <div class="form-group" :class="{'has-danger': errors.sync_customers}">
                                    <el-switch v-model="form.sync_customers" active-text="Si" inactive-text="No" @change="submit"></el-switch>
                                    <small class="form-control-feedback" v-if="errors.sync_customers" v-text="errors.sync_customers[0]"></small>
                                </div>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label class="control-label">Sincronizar ventas</label>
                                <div class="form-group" :class="{'has-danger': errors.sync_orders}">
                                    <el-switch v-model="form.sync_orders" active-text="Si" inactive-text="No" @change="submit"></el-switch>
                                    <small class="form-control-feedback" v-if="errors.sync_orders" v-text="errors.sync_orders[0]"></small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-4">
                                <label class="control-label">Sincronizar tags</label>
                                <div class="form-group" :class="{'has-danger': errors.sync_tags}">
                                    <el-switch v-model="form.sync_tags" active-text="Si" inactive-text="No" @change="submit"></el-switch>
                                    <small class="form-control-feedback" v-if="errors.sync_tags" v-text="errors.sync_tags[0]"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                loading_submit: false,
                resource: 'woocommerce',
                errors: {},
                form: {},
            }
        },
        async created() {
            await this.initForm();
            await this.$http.get(`/${this.resource}/record`) .then(response => {
                if (response.data !== ''){
                    this.form = response.data.data;
                }
            });
            await this.events()
        },
        methods: {
            events(){
                this.$eventHub.$on('submitFormConfigurations', (form) => {
                    this.form = form
                    this.submit()
                })
            },
            successUpload(response, file, fileList) {
                if (response.success) {
                    this.$message.success(response.message)
                    this.getRecord()
                    this.form[response.type] = response.name
                } else {
                    this.$message({message:'Error al subir el archivo', type: 'error'})
                }
            },
            async getRecord(){
                await this.$http.get(`/${this.resource}/record`) .then(response => {
                    if (response.data !== ''){
                        this.form = response.data.data;
                    }
                });
            },
            initForm() {
                this.errors = {};
                this.form = {
                    id: null,
                    url: '',
                    consumer_key: '',
                    consumer_secret: '',
                    options: false,
                    sync_products: true,
                    sync_categories:false,
                    sync_tags: false,
                    sync_orders: false,
                    sync_customers: false,
                };
            },
            submit() {
                this.loading_submit = true;

                this.$http.put(`/${this.resource}`, this.form).then(response => {
                    if (response.data.success) {
                        this.$message.success(response.data.message);
                    }
                    else {
                        this.$message.error(response.data.message);
                    }
                }).catch(error => {
                    if (error.response.status === 422) {
                        this.errors = error.response.data.errors;
                    }
                    else {
                        console.log(error);
                    }
                }).then(() => {
                    this.loading_submit = false;
                });
            },
        }
    }
</script>
