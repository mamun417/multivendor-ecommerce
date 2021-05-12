@push('style')
    <style>
        .list-group-item.active {
            background-color: rgba(0, 42, 92, 0.2);
            border-color: rgba(0, 42, 92, 0.2);
        }
    </style>
@endpush

<div class="card shadow mb-3 mt-3 topBorder">
    <div class="card-body">
        <table>
            <tr>
                <td class="pr-3">
                    <img src="https://cdn1.iconfinder.com/data/icons/avatar-97/32/avatar-02-512.png"
                         {{--                        src="{{ isset(auth()->user()->image) && auth()->user()->image->url ? auth()->user()->image->url : asset('frontend/assets/images/user.svg') }}"--}}
                         class="rounded-circle" alt="Cinque Terre" width="64" height="64"
                    >
                </td>
                <td>
                    <p class="lead mb-0 font-weight-bold">{{ @$user->name }}User Name</p>
                </td>
            </tr>
        </table>
    </div>
</div>

<ul class="list-group shadow mb-3">
    <li class="list-group-item py-3 {{ getActiveClassByController('UserProfileController') }}">
        <a class="text-black-50"
           href="#">My Profile</a></li>
    <li class="list-group-item py-3 {{ getActiveClassByController('UserOrderController') }}"><a class="text-black-50"
                                                                                                href="#">My Orders</a>
    </li>
    <li class="list-group-item py-3 {{ getActiveClassByController('UserOfferController') }}"><a class="text-black-50"
                                                                                                href="#">My Offers</a>
    </li>
    <li class="list-group-item py-3"><a href="#" class="text-black-50">My Cart</a></li>
    <li class="list-group-item py-3">
        <a class="text-black-50" href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <span>LOGOUT</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </li>
</ul>
