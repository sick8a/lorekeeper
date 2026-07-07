<div class="container">
    <div class="row"></div>
    <br>
    <div class="row">
        <!-- Main Content Column -->
        <div class="col-md-8">
            <!-- Welcome Section -->
            <div class="card card-custom border" style="padding-top: 20px;">
                <div class="chat-balloon-container" style="max-width: 100%; position: relative;">
                    <div class="chat-balloon left" style="transform: translateX(30px);">@include('widgets._balloon')</div>
                </div>

                <div class="card-body" style="display: flex; align-items: flex-start;">
                    <img src="{{ asset('images/account.png') }}"
                        alt="Temp"
                        style="max-width: 150px; margin-right: 30px; margin-top: 25px;">

                    <div>{!! $about->parsed_text !!}</div>
                </div>
            </div>
            <br>
            <!-- Carousel Section -->
            @include('widgets._carousel')
        </div>

        <!-- Right Column -->
        <div class="col-md-4 text-center">
            <!-- News Widget -->
            <div class="card card-custom">
                <h5 class="card-header card-custom-header">Recent News</h5>
                <div class="card-body">
                    <div class="text-center">
                        <div class="text-center">
                            <h5 class="text-muted">Nothing to see here!</h5>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- Featured Members Section -->
            <div class="card card-custom">
                <h5 class="card-header card-custom-header">Member of the Week</h5>
                <div class="card-body">
                    <div class="text-center">
                        <div class="text-center">
                            <div>
                                <a href="">
                                    <img src="{{ asset('images/account.png') }}" 
                                    class="img-thumbnail" style="width: 150px; height: auto; margin-bottom: 5px;" />
                                </a>
                            </div>
                            <div class="mt-1">
                                <a href="" class="h5 mb-0">Member Name</a>
                            </div>
                            <!-- <h5 class="text-muted">Nothing to see here!</h5> -->
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- Featured Characters Section -->
            <div class="card card-custom text-center">
                <h5 class="card-header card-custom-header">Wehota  of the Week</h5>
                <div class="card-body">
                    <div class="text-center">
                        <div>
                            <a href="">
                                <img src="{{ asset('images/account.png') }}" 
                                class="img-thumbnail" style="width: 150px; height: auto; margin-bottom: 5px;" />
                            </a>
                        </div>
                        <div class="mt-1">
                            <a href="" class="h5 mb-0">Wehota Name</a>
                        </div>
                        <!-- <h5 class="text-muted">Nothing to see here!</h5> -->
                    </div>
                </div>
            </div>
            <br>
            <!-- Featured Shop Section -->
            <div class="card card-custom">
                <h5 class="card-header card-custom-header text-center">Vendor of the Week</h5>
                <div class="card-body">
                    <div class="text-center">
                        <div>
                            <a href="">
                                <img src="{{ asset('images/account.png') }}" 
                                class="img-thumbnail" style="width: 150px; height: auto; margin-bottom: 5px;" />
                            </a>
                        </div>
                        <div class="mt-1">
                            <a href="" class="h5 mb-0">Shop Name</a>
                        </div>
                        <!-- <h5 class="text-muted">Nothing to see here!</h5> -->
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
        <!-- Affiliates Section -->
        <div class="card card-custom mb-4">
            <div class="card-body d-flex justify-content-center">
                <div>[Advertisements Here]</div>
            </div>
        </div>     
</div>
