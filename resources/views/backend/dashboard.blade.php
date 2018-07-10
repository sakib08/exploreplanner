@extends('backend.layouts.app')

@section('content')    
    <header class="section-header">
        <div class="tbl">
            <div class="tbl-row">
                <div class="tbl-cell">
                    <h3>Dashboard</h3>
                    <ol class="breadcrumb breadcrumb-simple">
                        <li><a href="#">StartUI</a></li>
                        <li><a href="#">Forms</a></li>
                        <li class="active">Datepicker</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>    
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-sm-6">
                        <article class="statistic-box red">
                            <div>
                                <div class="number">26</div>
                                <div class="caption"><div>Open tickets</div></div>
                                <div class="percent">
                                    <div class="arrow up"></div>
                                    <p>15%</p>
                                </div>
                            </div>
                        </article>
                    </div><!--.col-->
                    <div class="col-sm-6">
                        <article class="statistic-box purple">
                            <div>
                                <div class="number">12</div>
                                <div class="caption"><div>Closes tickets</div></div>
                                <div class="percent">
                                    <div class="arrow down"></div>
                                    <p>11%</p>
                                </div>
                            </div>
                        </article>
                    </div><!--.col-->
                    <div class="col-sm-6">
                        <article class="statistic-box yellow">
                            <div>
                                <div class="number">104</div>
                                <div class="caption"><div>New clients</div></div>
                                <div class="percent">
                                    <div class="arrow down"></div>
                                    <p>5%</p>
                                </div>
                            </div>
                        </article>
                    </div><!--.col-->
                    <div class="col-sm-6">
                        <article class="statistic-box green">
                            <div>
                                <div class="number">29</div>
                                <div class="caption"><div>Here is an example of a long name</div></div>
                                <div class="percent">
                                    <div class="arrow up"></div>
                                    <p>84%</p>
                                </div>
                            </div>
                        </article>
                    </div><!--.col-->
                </div><!--.row-->
            </div><!--.col-->
        </div><!--.row-->

        <div class="row">
            <div class="col-xl-6 dahsboard-column">
                <section class="box-typical box-typical-dashboard panel panel-default scrollable">
                    <header class="box-typical-header panel-heading">
                        <h3 class="panel-title">Recent orders</h3>
                    </header>
                    <div class="box-typical-body panel-body">
                        <table class="tbl-typical">
                            <tr>
                                <th><div>Status</div></th>
                                <th><div>Clients</div></th>
                                <th align="center"><div>Orders#</div></th>
                                <th align="center"><div>Date</div></th>
                            </tr>
                            <tr>
                                <td>
                                    <span class="label label-primary">Paid</span>
                                    <span class="label label-success">Active</span>
                                </td>
                                <td>John Doe</td>
                                <td align="center">3435362</td>
                                <td class="color-blue-grey" nowrap align="center"><span class="semibold">Today</span> 8:30</td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="label label-primary">Paid</span>
                                    <span class="label label-success">Active</span>
                                </td>
                                <td>Thomas Bayer</td>
                                <td align="center">3435362</td>
                                <td class="color-blue-grey" nowrap align="center"><span class="semibold">Today</span> 16:30</td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="label label-primary">Paid</span>
                                    <span class="label label-default">Inactive</span>
                                </td>
                                <td>Nicolas Karabat</td>
                                <td align="center">3435362</td>
                                <td class="color-blue-grey" nowrap align="center"><span class="semibold">Yesterday</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="label label-default">Unpaid</span>
                                    <span class="label label-default">Inactive</span>
                                </td>
                                <td>Alexandre Pome</td>
                                <td align="center">3435362</td>
                                <td class="color-blue-grey" nowrap align="center">23th May</td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="label label-primary">Paid</span>
                                    <span class="label label-success">Active</span>
                                </td>
                                <td>John Doe</td>
                                <td align="center">3435362</td>
                                <td class="color-blue-grey" nowrap align="center"><span class="semibold">Today</span> 8:30</td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="label label-primary">Paid</span>
                                    <span class="label label-success">Active</span>
                                </td>
                                <td>Thomas Bayer</td>
                                <td align="center">3435362</td>
                                <td class="color-blue-grey" nowrap align="center"><span class="semibold">Today</span> 16:30</td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="label label-primary">Paid</span>
                                    <span class="label label-default">Inactive</span>
                                </td>
                                <td>Nicolas Karabat</td>
                                <td align="center">3435362</td>
                                <td class="color-blue-grey" nowrap align="center"><span class="semibold">Yesterday</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="label label-default">Unpaid</span>
                                    <span class="label label-default">Inactive</span>
                                </td>
                                <td>Alexandre Pome</td>
                                <td align="center">3435362</td>
                                <td class="color-blue-grey" nowrap align="center">23th May</td>
                            </tr>
                        </table>
                    </div><!--.box-typical-body-->
                </section><!--.box-typical-dashboard-->
                
            </div><!--.col-->
            <div class="col-xl-6 dahsboard-column">
                <section class="box-typical box-typical-dashboard panel panel-default scrollable">
                    <header class="box-typical-header panel-heading">
                        <h3 class="panel-title">Recent tickets</h3>
                    </header>
                    <div class="box-typical-body panel-body">
                        <table class="tbl-typical">
                            <tr>
                                <th><div>Status</div></th>
                                <th><div>Subject</div></th>
                                <th align="center"><div>Department</div></th>
                                <th align="center"><div>Date</div></th>
                            </tr>
                            <tr>
                                <td>
                                    <span class="label label-success">Open</span>
                                </td>
                                <td>Website down for one week</td>
                                <td align="center">Support</td>
                                <td nowrap align="center"><span class="semibold">Today</span> 8:30</td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="label label-success">Open</span>
                                </td>
                                <td>Restoring default settings</td>
                                <td align="center">Support</td>
                                <td nowrap align="center"><span class="semibold">Today</span> 16:30</td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="label label-warning">Progress</span>
                                </td>
                                <td>Loosing control on server</td>
                                <td align="center">Support</td>
                                <td nowrap align="center"><span class="semibold">Yesterday</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="label label-danger">Closed</span>
                                </td>
                                <td>Authorizations keys</td>
                                <td align="center">Support</td>
                                <td nowrap align="center">23th May</td>
                            </tr>
                        </table>
                    </div><!--.box-typical-body-->
                </section><!--.box-typical-dashboard-->                
            </div><!--.col-->
        </div>


    
@endsection