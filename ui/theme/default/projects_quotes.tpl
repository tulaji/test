{extends file="project_base.tpl"}

{block name="project_content"}
    <div class="row mb-3">
        <div class="col">
            <h2>{$_L['Quotes']}</h2>
        </div>

      <!--   <div class="col text-right">
            <a href="{$_url}quotes/new/1/0/{$project->id}" class="btn btn-primary">New Quote</a>
        </div> -->



    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-hover" id="clx_datatable">
                <thead>
                <tr>
                            <th>#</th>
                            <th>{$_L['Account']}</th>
                            <th width="30%">{$_L['Subject']}</th>
                            <th>{$_L['Amount']}</th>
                            <th>{$_L['Date Created']}</th>
                            <th>{$_L['Expiry Date']}</th>
                            <th>{$_L['Stage']}</th>

                            <th class="text-right">{$_L['Manage']}</th>
                        </tr>
                </thead>
                <tbody>

                       

                        {foreach $quotes as $ds}
                            <tr>
                                <td data-value="{$ds['id']}" data-order="{$ds@iteration}"><a href="{$_url}quotes/view/{$ds['id']}/">{$ds['invoicenum']}{if $ds['cn'] neq ''} {$ds['cn']} {else} {$ds['id']} {/if}</a> </td>
                                <td><a href="{$_url}contacts/view/{$ds['userid']}/">{$ds['account']}</a> </td>
                                <td><a href="{$_url}quotes/view/{$ds['id']}/"><strong>{$ds['subject']}</strong></a> </td>
                                <td class="amount">{$ds['total']}</td>
                                <td>{date( $config['df'], strtotime($ds['datecreated']))}</td>
                                <td>{date( $config['df'], strtotime($ds['validuntil']))}</td>
                                <td>
                                    {if $ds['stage'] eq 'Dead'}
                                        <span class="badge badge-danger">{$_L['Dead']}</span>
                                    {elseif $ds['stage'] eq 'Lost'}
                                        <span class="badge badge-warning">{$_L['Lost']}</span>
                                    {elseif $ds['stage'] eq 'Accepted'}
                                        <span class="badge badge-success">{$_L['Accepted']}</span>
                                    {elseif $ds['stage'] eq 'Draft'}
                                        <span class="badge badge-primary">{$_L['Draft']}</span>
                                    {elseif $ds['stage'] eq 'Delivered'}
                                        <span class="label label-info">{$_L['Delivered']}</span>
                                    {else}
                                        <span class="label label-info">{$ds['stage']}</span>
                                    {/if}

                                </td>

                                <td class="text-right">
                                    <div class="btn-group">
                                        <a href="{$_url}quotes/view/{$ds['id']}/" class="btn btn-primary btn-icon waves-effect waves-themed has-tooltip" data-title="{$_L['View']}" data-placement="top"><i class="fal fa-file"></i> </a>

                                       <!--  <a href="{$_url}quotes/listhistory/{$ds['id']}/" class="btn btn-success btn-icon waves-effect waves-themed has-tooltip" data-title="History" data-placement="top"><i class="fal fa-eye"></i> </a> -->

                                       <!--  <a href="{$_url}quotes/edit/{$ds['id']}/" class="btn btn-warning btn-icon waves-effect waves-themed has-tooltip" data-title="{$_L['Edit']}" data-placement="top"><i class="fal fa-pencil"></i> </a> -->
                                      <!--   <a href="#" id="iid{$ds['id']}" class="btn btn-danger btn-icon waves-effect waves-themed has-tooltip cdelete" data-title="{$_L['Delete']}" data-placement="top"><i class="fal fa-trash"></i> </a> -->




                                    </div>

                                </td>
                            </tr>
                        {/foreach}
                </tbody>



            </table>
        </div>
    </div>



{/block}

{block name="script"}
    <script>
        $(function () {
            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    "language": {
                        "emptyTable": "{$_L['No Data Available']}",
                    },
                }
            );
        });
    </script>
{/block}
