<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-body d-flex align-items-center justify-content-between">

                <!-- Left side -->
                <div class="d-flex align-items-center">
                    <img src="/images/avatars/{{ Auth::user()->avatar }}"
                         style="width:100px; height:100px; border-radius:50%; margin-right:20px;"
                         alt="{{ Auth::user()->name }}">

                    <div style="display:flex; flex-direction:column; justify-content:center;">
                        <h4 style="margin:0;">Heyito Abaya,</h4>
                        <h2 style="margin:0;">{!! Auth::user()->name !!}!</h2>
                    </div>
                </div>

                <!-- Right side -->
                <div class="d-flex align-items-center">
                    <div style="text-align:center; margin-left:30px;">
                        <img src="{{ asset('images/account.png') }}"
                            alt="Account"
                            style="width:48px; height:48px; margin-bottom:8px;">

                        <div class="dropdown">
                            <h5 class="dropdown-toggle no-caret" data-toggle="dropdown" style="cursor:pointer; margin:0;">
                                Account
                            </h5>
                            <div class="dropdown-menu dropdown-menu-right user-menu">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <a href="{{ Auth::user()->url }}">Profile</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ url('trades/open') }}">Trades</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ url('account/settings') }}">Settings</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div style="text-align:center; margin-left:30px;">
                        <img src="{{ asset('images/characters.png') }}"
                            alt="Characters"
                            style="width:48px; height:48px; margin-bottom:8px;">

                        <div class="dropdown">
                            <h5 class="dropdown-toggle no-caret" data-toggle="dropdown" style="cursor:pointer; margin:0;">
                                Characters
                            </h5>
                            <div class="dropdown-menu dropdown-menu-right user-menu">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <a href="{{ url('characters') }}">Characters</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ url('characters/myos') }}">MYO Slots</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ url('characters/transfers/incoming') }}">Transfers</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div style="text-align:center; margin-left:30px;">
                        <img src="{{ asset('images/inventory.png') }}"
                            alt="Inventory"
                            style="width:48px; height:48px; margin-bottom:8px;">

                        <div class="dropdown">
                            <h5 class="dropdown-toggle no-caret" data-toggle="dropdown" style="cursor:pointer; margin:0;">
                                Inventory
                            </h5>
                            <div class="dropdown-menu dropdown-menu-right user-menu">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <a href="{{ url('inventory') }}">My Inventory</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ Auth::user()->url . '/item-logs' }}">Item Logs</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div style="text-align:center; margin-left:30px;">
                        <img src="{{ asset('images/currency.png') }}"
                            alt="Bank"
                            style="width:48px; height:48px; margin-bottom:8px;">

                        <div class="dropdown">
                            <h5 class="dropdown-toggle no-caret" data-toggle="dropdown" style="cursor:pointer; margin:0;">
                                Bank
                            </h5>
                            <div class="dropdown-menu dropdown-menu-right user-menu">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <a href="{{ url('bank') }}">Bank</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ Auth::user()->url . '/currency-logs' }}">Currency Logs</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        @include('widgets._carousel')
    </div>
</div>

@include('widgets._recent_gallery_submissions', ['gallerySubmissions' => $gallerySubmissions])
