<div class="sb2-13">
    <ul class="collapsible" data-collapsible="accordion">

        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-umbrella" aria-hidden="true"></i> Tour
                Packages</a>
            <div class="collapsible-body left-sub-menu">
                <ul>
                    <li><a href="package-all.html">All Packages</a>
                    </li>
                    <li><a href="{{ route('add_new_tour') }}">Add New Tour</a>
                    </li>
                    <li><a href="package-cat-all.html">All Package Categories</a>
                    </li>
                    <li><a href="package-cat-add.html">Add Package Categories</a>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <form action="{{ route('logout') }}" method="POST">@csrf<button type="submit"><i class="fa fa-sign-in"
                        aria-hidden="true"></i>Logout</button>
            </form>
        </li>
    </ul>
</div>
