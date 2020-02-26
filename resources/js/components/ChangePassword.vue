<template>
    <div class="container-fluid">
        <form class="form-group">
            <div class="card">
                <div class="card-header">
                    <h3>
                        <p class="text-right">
                            تغيير كلمة المرور
                        </p>
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row form-group">
                        <div class="col-md-3">
                            كلمة المرور الحالية
                        </div>
                        <div class="col-md-9">
                            <input class="form-control" type="password">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            كلمة المرور الجديدة
                        </div>
                        <div class="col-md-9">
                            <input class="form-control" type="password">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            إعادة كتابة كلمة المرور
                        </div>
                        <div class="col-md-9">
                            <input class="form-control" type="password">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-success " type="submit">
                        <h4>
                            حفظ التغييرات
                        </h4>
                    </button>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        name: "ChangePassword"
    }
</script>

<style scoped>

</style>
