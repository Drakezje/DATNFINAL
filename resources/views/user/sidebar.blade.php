<div class="card">
    <div class="card-header">Xin chào , {{ Auth::user()->name }}</div>
    <div class="card-body">
         <img class="card-img-top" src="https://thumbs.dreamstime.com/b/businessman-icon-vector-male-avatar-profile-image-profile-businessman-icon-vector-male-avatar-profile-image-182095609.jpg">
         <ul class="list-group list-group-flush">
            <a href="{{ route('home') }}" class="text-muted"> <li class="list-group-item"><i class="fas fa-home"></i> Dashboard</li></a>
            <a href="{{ route('wishlist') }}" class="text-muted"> <li class="list-group-item"> <i class="far fa-heart"></i> Yêu thích</li></a>
            <a href="{{ route('my.order') }}" class="text-muted"> <li class="list-group-item"> <i class="fas fa-file-alt"></i>  Đơn hàng</li></a>

            <a href="{{ route('customer.setting') }}" class="text-muted"> <li class="list-group-item"><i class="fas fa-edit"></i> Cài đặt</li> </a>
            <a href="{{ route('open.ticket') }}" class="text-muted"> <li class="list-group-item"> <i class="fab fa-telegram-plane"></i> Phiếu</li> </a>
            <a href="{{ route('customer.logout') }}" class="text-muted"> <li class="list-group-item"> <i class="fas fa-sign-out-alt"></i> Đăng xuất</li> </a>
           </ul>

    </div>
</div>
