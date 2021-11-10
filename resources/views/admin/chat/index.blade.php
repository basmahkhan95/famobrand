@extends('admin.layouts.auth', ['Title' => 'Chat'])

@section('js')
    <script uid="'{{ 'admin-'.Auth::user()->id }}'"
            src="https://dev28.onlinetestingserver.com/soachatcentralizedWeb/js/ocs.js"></script>
    <script type="text/javascript">
        $(function () {
            ocs.init({
                appid: '3e509ed778094424bebf8fc540f6e72a',
                appkey: '4ab363f7be5a528f68c36e7b75e2996f',
                domain: 'famobrand.com',
                global: '1',
                id: '{{'admin-'.Auth::id()}}',
                element: '.famo-chat-window',
                colorScheme: '0b2469',
                leftPanelBgColor: '#123456',
                leftPanelUsersColor: '#123456',
                chatWindowBgColor: '#0b2469',
                senderBubble: '#123456',
                recieverBubble: '#123456',
            })
        });
    </script>
@endsection

@section('content')
    <div class="app-content content view user">
        <div class="content-wrapper">
            <div class="content-body">
                <section id="configuration" class="search view-cause">
                    <div class="row">
                        <div class="col-12">
                            <div class="card rounded pad-20">
                                <div class="card-content collapse show">
                                    <div class="card-body table-responsive card-dashboard">
                                        <div class="row">
                                            <div class="col-12 d-block d-sm-flex justify-content-between">
                                                <div class="left">
                                                    <h1 class="pull-left">Chat</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="famo-chat-window"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
