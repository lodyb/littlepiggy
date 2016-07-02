       <div class="sidebar">
            <header>
                <div class="logo image"><span>img</span></div>
                <div class="info">
                    <a href="#" class="title"><i class="material-icons small">domain</i>My project</a>
                    <a href="#" class="version"><i class="material-icons small">public</i>v0.0.1a</a>
                </div>
            </header>
            <nav class="nano">
                <div class="nano-content">
                  {{--  <a href="#"><i class="material-icons">dashboard</i>Dashboard</a>
                    <a href="#" class="active"><i class="material-icons">people</i>Users</a>
                    <a href="#"><i class="material-icons">assignment ind</i>Todo list</a>
                    <a href="#"><i class="material-icons">code</i>Code Editor</a>
                    <a href="#"><i class="material-icons">extension</i>Plugins</a>
                    <a href="#"><i class="material-icons">store</i>Marketplace</a>
                    <a href="#"><i class="material-icons">album</i>Music</a>
                    <a href="#"><i class="material-icons">cast</i>Streaming</a>
                    <a href="#"><i class="material-icons">security</i>Permissions</a>
                    <a href="#"><i class="material-icons">build</i>Settings</a> --}}

                    @foreach (config('navigation') as $k)
                    <a href="{{$k['href']}}" class="@if ($k['href'] == \Request::route()->getName()) active @endif"
                    title="{{$k['title']}}">
                        <i class="material-icons">{{$k['icon']}}</i>
                        {{$k['name']}}
                     </a>
                    @endforeach
                </div>
            </nav>
            <div class="profile">
                <div class="avatar image" style="background-image:url('{{Auth::user()->avatar}}')"></div>
                <div class="links">
                    <a href="#" class="profile"><i class="material-icons small">person</i>My Profile</a>
                    <a href="#" class="settings"><i class="material-icons small">build</i>Settings</a>
                </div>
            </div>
        </div>