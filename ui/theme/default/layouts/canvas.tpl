{extends file="layouts/base.tpl"}
{block name="head_extras_from_layout"}

    <style>
        .pristine-error.text-help {
            color: red;
        }
        @media (min-width: 992px){
            .nav-function-fixed:not(.nav-function-top):not(.nav-function-hidden):not(.nav-function-minify) .page-content-wrapper {
                padding-left: 0;
            }
        }
    </style>
{/block}


{block name="content_body"}

    {block name="content"}

    {/block}

{/block}


{block name="script"}
    <script>
        $(function () {



        });
    </script>
{/block}
