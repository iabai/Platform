<div id="quickview" class="quickview-wrapper" data-pages="quickview">
    <!-- Nav tabs  -->
    <ul class="nav nav-tabs bg-black">
        <li class="active">
            <a href="#quickview-alerts" data-toggle="tab">Alerts</a>
        </li>
    </ul>
    <a class="btn-link quickview-toggle click" data-toggle="open" data-target="#quickview"><i
                class="fa fa-times"></i></a>
    <!-- Tab panes  -->
    <div class="tab-content">
        <!-- BEGIN Alerts !-->
        <div class="tab-pane fade no-padding  active in" id="quickview-alerts">
            <div class="view-port clearfix" id="alerts">
                <!-- BEGIN Alerts View !-->
                <div class="view bg-white">
                    <!-- BEGIN View Header !-->
                    <div class="wrapper">
                        <div class="hbox">
                            <!-- BEGIN Header Controler !-->

                            <div class="col text-left">
                                <a href="javascript:" class="inline action p-l-10 link text-master" data-navigate="view"
                                   data-view-port="#chat">
                                    <i class="fa fa-ellipsis-h"></i>
                                </a>
                            </div>
                            <!-- END Header Controler !-->
                            <div class="col text-center">
                                Notications
                            </div>

                            <div class="col text-right">
                                <a href="#" class="inline action p-r-10 pull-right link text-master">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                    <!-- END View Header !-->
                    <!-- BEGIN Alert List !-->
                    <div class="list-view-wrapper list-view b-t">


                         <div class="list-group list-group-lg list-group-sp">
                         @forelse (Auth::user()->notifications->where('type',\Orchid\Notifications\DashboardNotification::class) as $notification)

                            <a herf="#" class="list-group-item clearfix m-b-none b">

                              <i class="fa fa-circle text-danger pull-left m-t-sm text-sm"></i>
                                <span class="clear m-l-md">
                                    @if($notification->read())
                                        <span>{{$notification->data['title']}}</span>
                                    @else
                                        <b>{{$notification->data['title']}}</b>
                                    @endif
                                    <small class="text-muted clear text-ellipsis">{{$notification->data['message']}}</small>
                              </span>
                            </a>
                        @empty

                                 <div class="v-center" style="height: 80vh;">
                                     <h5 class="text-center w-full">No notifications</h5>
                                 </div>

                        @endforelse
 </div>






                    </div>
                    <!-- END Alert List !-->
                </div>
                <!-- EEND Alerts View !-->
            </div>
        </div>
        <!-- END Alerts !-->
    </div>
</div>
