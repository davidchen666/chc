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
                        <select class="form-control _roleid">
                            <!-- BEGIN list -->
                            <option value="{tr_id}">{role_name}</option>
                            <!-- END list -->
                        </select>

                    </div>
                    <div class="form-group">

                        <input type="search" class="form-control _search"  placeholder="Search"  >
                    </div>

                </div>

            </div>
            <div class="col-md-4 col-md-offset-2">
                <div class="form-inline text-right">

                        <button type="button" class="btn btn-default" onclick=" ">角色管理</button>

                        <button type="button" class="btn btn-success" id="_ceshi">新增角色</button>

                </div>

            </div>
        </div>


    <div class="row tab-content" >
        <div class="col-md-12 tab-pane icon-demo active" id="tab1" >
            <table id="my_table"></table>
        </div>


    </div>


</div>


<script src="{WEBSITE_SOURCE_URL}/pagurian.js"></script>
<script type="text/javascript">
    pagurian.call("modules/role/app", function (app) {
        app.page.dataTable();
    });
</script>
<!-- INCLUDE ../footern.tpl -->