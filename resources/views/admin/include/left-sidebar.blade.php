<!--start sidebar -->
<aside class="sidebar-wrapper">
    <div class="iconmenu">
        <div class="nav-toggle-box">
            <div class="nav-toggle-icon"><i class="bi bi-list"></i></div>
        </div>
        <ul class="nav nav-pills flex-column">
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboards">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-dashboards" type="button"><i class="bi bi-house-door-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Blog">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#blog" type="button"><i class="bi bi-book"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Blog-Details">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#blog-details" type="button"><i class="bi bi-person-square"></i></button>
            </li>
        </ul>
    </div>
    <div class="textmenu">
        <div class="brand-logo">
            <img src="{{ asset('adminAsset') }}/assets/images/brand-logo-2.png" width="140" alt=""/>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="pills-dashboards">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Dashboards</h5>
                        </div>
                    </div>
                    <a href="{{ route('slider') }}" class="list-group-item"><i class="bi bi-cart-plus"></i>Add Slider</a>
                    <a href="{{ route('job-category') }}" class="list-group-item"><i class="bi bi-cart-plus"></i>Add Job Category</a>
                    <a href="{{ route('job-details2') }}" class="list-group-item"><i class="bi bi-cart-plus"></i>Add Job Details</a>

                </div>
            </div>
            <div class="tab-pane fade" id="blog">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Blog</h5>
                        </div>
                    </div>
                    <a href="index.html" class="list-group-item"><i class="bi bi-cart-plus"></i>Add Blog</a>

                </div>
            </div>
            <div class="tab-pane fade" id="blog-details">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Blog Details</h5>
                        </div>
                    </div>
                    <a href="index.html" class="list-group-item"><i class="bi bi-cart-plus"></i>Blog Details</a>

                </div>
            </div>

        </div>
    </div>
</aside>
<!--end sidebar -->
