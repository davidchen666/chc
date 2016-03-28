<!-- INCLUDE ../headn.tpl -->
<div class="bs-docs-section">
    <h1 id="forms" class="page-header">
        <a class="anchorjs-link " data-anchorjs-icon="" aria-label="Anchor link for: forms" href="#forms" style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>
        角色管理
    </h1>
        <div class="row">
            <div class="col-md-6">
                <div class="form-inline">
                    <div class="form-group">
                        <label>所选父角色</label>
                        <select class="form-control">
                            <!-- BEGIN list -->
                            <option value="">{role_name}</option>
                            <!-- END list -->
                        </select>
                        <label>所选子角色</label>
                            <select class="form-control _roleid">
                            <!-- BEGIN listp -->
                            <option value="{tr_id}">{role_name}</option>
                            <!-- END listp -->
                        </select>
                    </div>
                    <div class="form-group">

                        <input type="search" class="form-control _searchRoleUser"  placeholder="Search"  >
                    </div>

                </div>

            </div>
            <div class="col-md-4 col-md-offset-2">
                <div class="form-inline text-right">

                        <button type="button" class="btn btn-default">父角色管理</button>

                        <button type="button" class="btn btn-success">新增角色</button>

                </div>

            </div>
        </div>


    <p></p>
    <div class="row">
        <div class="col-md-12">
        <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a data-toggle="tab" href="#tab1">包含角色</a></li>
            <li role="presentation"><a data-toggle="tab" href="#tab2">包含组</a></li>
            <li role="presentation"><a data-toggle="tab" href="#tab3">包含权限</a></li>
            <li role="presentation"><a id="edit_btn">修改</a></li>
        </ul>
        </div>
    </div>

    <div class="row tab-content" >
        <div class="col-md-12 tab-pane icon-demo active" id="tab1" >
            <table id="my_table"></table>
        </div>
        <div class="col-md-12 tab-pane  fontawesome-demo" id="tab2" >
            <table id="my_group"></table>
        </div>
        <div class="col-md-12 tab-pane  fontawesome-demo" id="tab3" >
            <table id="my_right"></table>
        </div>

    </div>


</div>
<script id="user_selest" type="text/tpl">
    <div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="portlet-body">
            <form action="">
                <div class="form-group">
                    <table id="select_user"></table>
                </div>
            </form>
        </div>
    </div>
</div>


</script>

<script src="{WEBSITE_SOURCE_URL}/pagurian.js"></script>
<script type="text/javascript">
    pagurian.call("modules/role/app", function (app) {
        app.page.dataTable();
        app.page.selectuser();
        app.page.dataGroup();
        app.page.dataRight();
        app.page.dialogs();
    });
</script>
<!-- INCLUDE ../footern.tpl -->