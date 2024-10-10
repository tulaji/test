{extends file="$layouts_admin"}


{block name="head"}


    <style>
        .btn-default {
            color: #333;
            background-color: #fff;
            border-color: #ccc;
        }

        .btn-default:hover,
        .btn-default:focus,
        .btn-default:active,
        .btn-default.active {
            color: #333;
            background-color: #fff;
            border-color: #ccc;
        }


    </style>
{/block}


{block name="content"}

    <form id="invform" method="post">
        <div class="row" id="ibox_form">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-hdr">
                        <h2>
                            User Clinic Details </h2>
                        <div class="panel-toolbar">
                            <div class="btn-group">
                                <button class="btn btn-sm btn-info" id="save_n_close"> {$_L['Save n Close']}</button>
                            </div>
                        </div>
                    </div>
                    <div class="panel-container">
                        <div class="panel-content">
                            <form id="">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class='row'>
                                            <div class='col-sm-6'>
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" id="name" name="user_name" value="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="cn">Location</label>
                                                    <input type="text" class="form-control" id="location" name="location" value="" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="cn">Google Profile</label>
                                                    <input type="text" class="form-control" id="g_profile" name="g_profile" value="" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="cn">Website</label>
                                                    <input type="text" class="form-control" id="website" name="website" value="" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="cn">Phoen Number</label>
                                                    <input type="text" class="form-control" id="number" name="number" value="" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="cn">Price</label>
                                                    <input type="text" class="form-control" id="price" name="price" value="" />
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="cn">Address</label>
                                                    <textarea type="text" class="form-control" id="adderss" name="adderss"
                                                        value=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
{/block}
{block name="script"}
    <script>
        $("#save_n_close").click(function(e) {
            e.preventDefault();
            $('#ibox_form').block({ message: null });
            var _url = $("#_url").val();
            $.post(_url + 'user_clinic/add-post/', $('#invform').serialize(), function(data) {
                var _url = $("#_url").val();
                window.location = _url + 'user_clinic/view';
            });
        });
    </script>
{/block}